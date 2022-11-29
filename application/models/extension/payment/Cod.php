<?php
class Cod extends CI_Model {

	public function getMethod($address, $total) {
		 
		$method_data = array(
			'code'       => 'cod',
			'title'      => 'Cash on delivery',
			'terms'      => '',
			'sort_order' => 1,
			'status' => 1
		);
		return $method_data;
	}
}
