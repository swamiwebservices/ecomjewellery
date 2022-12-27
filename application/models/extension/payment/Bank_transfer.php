<?php
	class Bank_transfer extends CI_Model {
	public function getMethod($address, $total) {
	 
		$method_data = array(
			'code'       => 'bank_transfer',
			'title'      => 'Bank Transfer',
			'terms'      => '',
			'sort_order' =>$this->services->getold('bank_transfer_sort_order')
		);
		
		return $method_data;
	}
}