<?php
class Coupon extends CI_Model{
	public function getCoupon($code) { 
		$status = true;
	$code = $this->common->mysql_safe_string($code);	
	 
		$coupon_query = $this->db->query("SELECT * FROM `coupon` WHERE code = '" . $code . "' AND ((date_start = '0000-00-00' OR date_start < NOW()) AND (date_end = '0000-00-00' OR date_end > NOW())) AND status = '1'");

		if ($coupon_query->num_rows) {
			$coupon_query_row = $coupon_query->row_array();
			$sub_total = $this->customercartordermodal->getSubTotal();
			if ($coupon_query_row['total'] >= $sub_total) {
				$status = false;
			}

			$coupon_history_query = $this->db->query("SELECT COUNT(*) AS total FROM `coupon_history` ch WHERE ch.coupon_id = '" . (int)$coupon_query_row['coupon_id'] . "'");
			$coupon_history_query_row = $coupon_history_query->row_array();	
			if ($coupon_query_row['uses_total'] > 0 && ($coupon_history_query_row['total'] >= $coupon_query_row['uses_total'])) {
				$status = false;
			}

			if ($coupon_query_row['logged'] && $this->session->userdata('lux_user_id')=="") {
				$status = false;
			}

			if ($this->session->userdata('lux_user_id')!="") {
				$coupon_history_query = $this->db->query("SELECT COUNT(*) AS total FROM `coupon_history` ch WHERE ch.coupon_id = '" . (int)$coupon_query_row['coupon_id'] . "' AND ch.customer_id = '" . (int)$this->session->userdata('lux_user_id') . "'");

				if ($coupon_query_row['uses_customer'] > 0 && ($coupon_history_query_row['total'] >= $coupon_query_row['uses_customer'])) {
					$status = false;
				}
			}

			// Products
			$coupon_product_data = array();

			$coupon_product_query = $this->db->query("SELECT * FROM `coupon_product` WHERE coupon_id = '" . (int)$coupon_query_row['coupon_id'] . "'");
			$coupon_product_query_rows = $coupon_product_query->result_array();
			foreach ($coupon_product_query_rows as $product) {
				$coupon_product_data[] = $product['product_id'];
			}

			// Categories
			$coupon_category_data = array();

			$coupon_category_query = $this->db->query("SELECT * FROM `coupon_category` cc  where 1=2");
			$coupon_category_query_rows = $coupon_category_query->result_array();
			foreach ($coupon_category_query_rows as $category) {
				$coupon_category_data[] = $category['category_id'];
			}			
			
			$product_data = array();
			
			if ($coupon_product_data || $coupon_category_data) {
				foreach ($this->customercartordermodal->getProducts() as $product) {
					if (in_array($product['product_id'], $coupon_product_data)) {
						$product_data[] = $product['product_id'];

						continue;
					}

					foreach ($coupon_category_data as $category_id) {
						$coupon_category_query = $this->db->query("SELECT COUNT(*) AS total FROM `product_to_category` WHERE `product_id` = '" . (int)$product['product_id'] . "' AND category_id = '" . (int)$category_id . "'");
						$coupon_category_query_row = $coupon_category_query->row_array();
						if ($coupon_category_query_row['total']) {
							$product_data[] = $product['product_id'];

							continue;
						}						
					}
				}	

				if (!$product_data) {
					$status = false;
				}
			}
		} else {
			$status = false;
		}

		if ($status) {
			return array(
				'coupon_id'     => $coupon_query_row['coupon_id'],
				'code'          => $coupon_query_row['code'],
				'name'          => $coupon_query_row['name'],
				'type'          => $coupon_query_row['type'],
				'discount'      => $coupon_query_row['discount'],
				'shipping'      => $coupon_query_row['shipping'],
				'total'         => $coupon_query_row['total'],
				'product'       => $product_data,
				'date_start'    => $coupon_query_row['date_start'],
				'date_end'      => $coupon_query_row['date_end'],
				'uses_total'    => $coupon_query_row['uses_total'],
				'uses_customer' => $coupon_query_row['uses_customer'],
				'status'        => $coupon_query_row['status'],
				'date_added'    => $coupon_query_row['date_added']
			);
		}
	}

	public function getTotal($total) { 
	}

	public function confirm($order_info, $order_total) { 
	$code = '';
 
		$start = strpos($order_total['title'], '(') + 1;
		$end = strrpos($order_total['title'], ')');

		if ($start && $end) {
			$code = substr($order_total['title'], $start, $end - $start);
		}
 
		if ($code) {
			$coupon_info = $this->getCoupon($code);

			if ($coupon_info) {
				$this->db->query("INSERT INTO `coupon_history` SET coupon_id = '" . (int)$coupon_info['coupon_id'] . "', order_id = '" . (int)$order_info['order_id'] . "', customer_id = '" . (int)$order_info['customer_id'] . "', amount = '" . (float)$order_total['value'] . "', date_added = NOW()");
			} else {
				return $this->configmodal->get('config_fraud_status_id');
			}
		}
	}

	public function unconfirm($order_id) {
	$this->db->query("DELETE FROM `coupon_history` WHERE order_id = '" . (int)$order_id . "'");
	}
	public function redeem($coupon_id, $order_id, $customer_id, $amount) {
		$this->db->query("INSERT INTO `coupon_history` SET coupon_id = '" . (int)$coupon_id . "', order_id = '" . (int)$order_id . "', customer_id = '" . (int)$customer_id . "', amount = '" . (float)$amount . "', date_added = NOW()");
	}
}
