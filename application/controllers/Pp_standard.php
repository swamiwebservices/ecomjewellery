<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pp_standard extends CI_Controller
{
	public $controller = "pp_standard";
    public $domain_id = 1;
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('common');
		$this->load->model('services');
        $this->load->helper('security');
        $this->load->library('email');
        $this->load->helper('url_helper');

		if (empty($this->session->userdata('domain_id'))) {
			$this->session->set_userdata('domain_id', '1');
		}
		if (empty($this->session->userdata('domain_id'))) {
			$this->session->set_userdata('domain_id', '1');
		}
		$this->domain_id = $this->services->getDomainId();
		 
    }

    public function information()
    {
        $session_user_data = $this->session->userdata('front_user_detail');

        $this->load->model('services');
        $data['text_testmode'] = 'Warning: The payment gateway is in \'Sandbox Mode\'. Your account will not be charged.';

        $data['testmode'] = $this->services->getold('pp_standard_test');
        if (!$this->services->getold('pp_standard_test')) {
            $data['action'] = 'https://www.paypal.com/cgi-bin/webscr';
        } else {
            $data['action'] = 'https://www.sandbox.paypal.com/cgi-bin/webscr';
        }

        $order_id = (int) $this->session->userdata('order_id_ki');

        $this->db->query("UPDATE `m_order` SET  currency_code = 'USD'   WHERE order_id = '" . $order_id . "'");
        
        $order_info = $this->services->getOrder($this->session->userdata('order_id_ki'));

        if ($order_info) {
            $data['business'] = $this->services->getold('pp_standard_email');
            $data['item_name'] = html_entity_decode($this->services->getold('config_name'), ENT_QUOTES, 'UTF-8');

            $data['products'] = array();
            $products = $this->services->getOrderProducts($order_id);
       //print_r($products);
                foreach ($products as $product) {
                    $option_data = array();

                
                    $data['products'][] = array(
                        'order_product_id' => $product['order_product_id'],
                        'id' => $product['product_id'],
                        'name' => $product['name'],
                        'weight_gms' => $product['weight_gms'],
                        'weight' => $product['weight_gms'],
                        'quantity' => $product['quantity'],
                        'price' => $product['price'],
                        'total' => $product['total'],
                         
                    );
                }
            $data['discount_amount_cart'] = 0;

            $total = $order_info['total'] - $this->services->getCartSubtotal();

            if ($total > 0) {
                $data['products'][] = array(
                    'name' => 'Shipping, Handling, Discounts & Taxes',
                    'model' => '',
                    'price' => $total,
                    'quantity' => 1,
                    'option' => array(),
                    'weight' => 0,
                    'weight_gms' => 0,
                );
            } else {
                $data['discount_amount_cart'] -= $total;
            }

            $data['currency_code'] = $order_info['currency_code'];
            $data['first_name'] = html_entity_decode($order_info['payment_firstname'], ENT_QUOTES, 'UTF-8');
            $data['last_name'] = html_entity_decode($order_info['payment_lastname'], ENT_QUOTES, 'UTF-8');
            $data['address1'] = html_entity_decode($order_info['payment_address_1'], ENT_QUOTES, 'UTF-8');
            $data['address2'] = html_entity_decode($order_info['payment_address_2'], ENT_QUOTES, 'UTF-8');
            $data['city'] = html_entity_decode($order_info['payment_city'], ENT_QUOTES, 'UTF-8');
            $data['zip'] = html_entity_decode($order_info['payment_postcode'], ENT_QUOTES, 'UTF-8');
            $data['country'] = $order_info['payment_iso_code_2'];
            $data['email'] = $order_info['email'];
            $data['invoice'] = html_entity_decode($order_info['invoice_no'], ENT_QUOTES, 'UTF-8');
            $data['lc'] = "en";
            $data['return'] = site_url('checkout/success?uuid='.$session_user_data['uuid']);
            $data['notify_url'] = site_url('paypal_callback');
            $data['cancel_return'] = site_url('checkout');

            if (!$this->services->getold('pp_standard_transaction')) {
                $data['paymentaction'] = 'authorization';
            } else {
                $data['paymentaction'] = 'sale';
            }

            $data['custom'] = $order_info['uuid'];

            //$this->render();
            $method_data = array(
                'code' => 'pp_standard',
                'title' => 'PayPal',
                'terms' => '',
                'sort_order' => $this->services->getold('pp_standard_sort_order'),
            );
            $this->session->set_userdata('payment_method', $method_data);
            //$this->session->set_userdata('payment_method')  = $this->session->userdata['payment_methods']['bank_transfer'];
            //echo "UPDATE `order` SET  payment_method = '" . $this->common->getDbValue($this->session->userdata['payment_method']['title']) . "', payment_code = '" . $this->common->getDbValue($this->session->userdata['payment_method']['code']) . "'  WHERE order_id = '" . (int)$this->session->userdata('order_id_ki') . "'";
            $this->db->query("UPDATE `m_order` SET  payment_method = 'PayPal', payment_code = 'pp_standard'  WHERE order_id = '" . $order_id . "'");

            return $this->load->view('payment/pp_standard', $data);
        }

    }
    public function confirm()
    {
 
       // $comment_temp = $this->common->mysql_safe_string($_POST['comment']);

        $order_id = (int) $this->session->userdata('order_id_ki');
        $order_info = $this->services->getOrder($order_id);
        $order_data['shipping_firstname'] = $this->input->post('shipping_firstname');
        $order_data['shipping_lastname'] = $this->input->post('shipping_lastname');
        $order_data['shipping_company'] = $this->input->post('shipping_company');
        $order_data['shipping_address_1'] = $this->input->post('shipping_address_1');
        $order_data['shipping_address_2'] = $this->input->post('shipping_address_2');
        $order_data['shipping_country_id'] = $this->input->post('shipping_country_id');
        $order_data['shipping_zone_id'] = $this->input->post('shipping_zone_id');
        $order_data['shipping_city'] = $this->input->post('shipping_city');
        $order_data['shipping_postcode'] = $this->input->post('shipping_postcode');
        $order_data['shipping_mobile'] = $this->input->post('shipping_mobile');
        
        $order_data['comment'] = $this->input->post('comment');
        
        

        $order_data['payment_method'] = 'PayPal';
        $order_data['payment_code'] = 'pp_standard';
       
        $where_cart = "order_id = '" . $order_id . "' ";
        $this->common->updateRecord('m_order', $order_data, $where_cart);
        
       
        $return_result['status'] =1;
        $return_result['msg'] = "";
        $return_result['uuid'] = $order_info['uuid'];
        echo json_encode($return_result);
        die();
    }

}
