<?php
 
class Pp_standard extends CI_Model {
	public function getMethod($address, $total) {
		 
		  $status = true;
		  
	 

		$currencies = array(
			'AUD',
			'CAD',
			'EUR',
			'GBP',
			'JPY',
			'USD',
			'NZD',
			'CHF',
			'HKD',
			'SGD',
			'SEK',
			'DKK',
			'PLN',
			'NOK',
			'HUF',
			'CZK',
			'ILS',
			'MXN',
			'MYR',
			'BRL',
			'PHP',
			'TWD',
			'THB',
			'TRY',
			'aaa'
			
		);

		if (!in_array(strtoupper('AED'), $currencies)) {
			 $status = false;
		}

		$method_data = array();

		if ($status) {
			$method_data = array(
				'code'       => 'pp_standard',
				'title'      => 'PayPal',
				'terms'      => '',
				'sort_order' => $this->services->getold('pp_standard_sort_order')
			);
		}

		return $method_data;
	}
}
