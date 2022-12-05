<?php
class Standard_cost extends CI_Model
{
    public function getQuote($cart_subtotal, $address)
    {
        //    print_r($address);
		$cost = 0;
        $geo_zone_query = $this->db->query("SELECT * FROM  m_geo_zone_shipping limit 0,1 ");
        $geo_zone_query_row = array();
        if ($geo_zone_query->num_rows($geo_zone_query) > 0) {
            $geo_zone_query_row = $geo_zone_query->row_array();
            

            if ($cart_subtotal < $geo_zone_query_row['free_shipping']) {
                $cost = $geo_zone_query_row['shipping_charge'];
            }

        }

		$method_data = array(
			'code'       => 'shipping_method',
			'title'      => 'Shipment Charges',
			'cost'         => $cost,
			'text'         => $cost,
		);
		return $method_data;
    }
}
