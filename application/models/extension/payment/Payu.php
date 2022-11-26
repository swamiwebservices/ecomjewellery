<?php
 
class Payu extends CI_Model {
	public function getMethod($address, $total) {
		 
		$method_data = array(
			'code'       => 'payu',
			'title'      => 'Payu',
			'terms'      => '',
			'sort_order' => 3
		);
		return $method_data;
	}
		
}
