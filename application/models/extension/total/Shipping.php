<?php
	class Shipping extends CI_Model{
	public function getTotal($total) {
		
		/*
		
		if ( $this->session->userdata['shipping_method']!="") {
			$total['totals'][] = array(
				'code'       => 'shipping',
				'title'      => $this->session->userdata['shipping_method']['title'],
				'value'      => $this->session->userdata['shipping_method']['cost'],
				'sort_order' => $this->configmodal->get('shipping_sort_order')
			);

			if ($this->session->userdata['shipping_method']['tax_class_id']) {
				$tax_rates = $this->tax->getRates($this->session->userdata['shipping_method']['cost'], $this->session->userdata['shipping_method']['tax_class_id']);

				foreach ($tax_rates as $tax_rate) {
					if (!isset($total['taxes'][$tax_rate['tax_rate_id']])) {
						$total['taxes'][$tax_rate['tax_rate_id']] = $tax_rate['amount'];
					} else {
						$total['taxes'][$tax_rate['tax_rate_id']] += $tax_rate['amount'];
					}
				}
			}

			$total['total'] += $this->session->userdata['shipping_method']['cost'];
		}
	*/
	
	}
}