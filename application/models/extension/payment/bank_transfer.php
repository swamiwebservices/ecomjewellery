<?php
	class Bank_transfer extends CI_Model {
	public function getMethod($address, $total) {
	 
	 
		$method_data = array(
			'code'       => 'bank_transfer',
			'title'      => 'Bank Transfer',
			'terms'      => '',
			'sort_order' =>2
		);
		
		return $method_data;
	}
}