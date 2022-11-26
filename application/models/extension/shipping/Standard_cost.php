<?php
class Standard_cost extends CI_Model {
	public function getQuote($address) {
	//	print_r($address);
	 $checkout_type = 	$this->session->userdata('checkout_type');
		if($checkout_type == "custom"){
			$cart_subtotal = 0;
		} else {
			$cart_subtotal = $this->customercartordermodal->getTotal();
		}
	 
	 $method_data = array();
		$geo_zone_query = $this->db->query("SELECT * FROM  geo_zone where geo_zone_id='".$address['geo_zone_id']."' ORDER BY name");
		$geo_zone_query_row = array();
	if($geo_zone_query->num_rows($geo_zone_query)> 0){
		$geo_zone_query_row = $geo_zone_query->row_array(); 
		$cost = 0;
		
		
		if($cart_subtotal < $geo_zone_query_row['free_shipping']){
			$cost = $geo_zone_query_row['shipping_charge'];
		}
			if ((string)$cost != '') { 

      					$quote_data['standard_cost_' . $geo_zone_query_row['geo_zone_id']] = array(
        					'code'           => 'standard_cost_' . $geo_zone_query_row['geo_zone_id'],
        					'title'        => '   Shipping Charges   ',
        					'cost'         => $cost,
							'tax_class_id' => $this->configmodal->get('weight_tax_class_id'),
        					'text'         => $this->currencymodal->format($cost,$this->session->userdata('currency'))
      					);	
					}
					
		$method_data = array(
				'code'       => 'standard_cost',
				'title'      => 'Shipment Options',
				'quote'      => $quote_data,
				'sort_order' => $this->configmodal->get('weight_sort_order')
			);
			
			//$this->session->userdata['shipping_method'] = $quote_data['standard_cost_' . $geo_zone_query_row['geo_zone_id']];
			$this->session->set_userdata('shipping_method',$quote_data['standard_cost_' . $geo_zone_query_row['geo_zone_id']]);
			return $quote_data['standard_cost_' . $geo_zone_query_row['geo_zone_id']];
	}
	$method_data = array(
				'code'           => 'standard_cost_0',
        					'title'        => '   Shipping Charges   ',
        					'cost'         => 0,
							'tax_class_id' => $this->configmodal->get('weight_tax_class_id'),
        					'text'         => $this->currencymodal->format(0,$this->session->userdata('currency'))
			);
			//$this->session->userdata['shipping_method'] = $method_data;  
			$this->session->set_userdata('shipping_method',$method_data);
 return $geo_zone_query_row;

		
	}
}
