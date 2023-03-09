<?php
 
class Dponetwork extends CI_Model {
	public function getMethod($address, $total) {
		 
	//echo  ""SELECT * FROM " . DB_PREFIX . "zone_to_geo_zone WHERE geo_zone_id = '" . (int)$this->config->get('payu_geo_zone_id') . "' AND country_id = '" . (int)$address['country_id'] . "' AND (zone_id = '" . (int)$address['zone_id'] . "' OR zone_id = '0')"";
	
	$status = true;

		  

		$method_data = array();

		if ($status) {
			$method_data = array(
				'code'       => 'dponetwork',
				'title'      => 'DPO Pay',
				'terms'      => '',
				'sort_order' => 1
			);
		}

		return $method_data;
	}
}
