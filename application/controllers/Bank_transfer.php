<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bank_transfer extends CI_Controller {
 
		public function __construct(){
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


	public function information(){

		$data['text_instruction'] = "Bank Transfer Instructions";
		$data['text_description'] = "Please transfer the total amount to the following bank account.";
		$data['text_payment'] = "Your order will not ship until we receive payment.";
	 
		 
		$data['bank'] = $this->configmodal->getold('bank_transfer_bank');
		
		
        $this->db->query("UPDATE `m_order` SET  payment_method = 'Bank Transfer', payment_code = 'bank_transfer'  WHERE order_id = '" . (int)$this->session->userdata('order_id_ki') . "'");
			
			
		
		 
		return $this->load->view('payment/bank_transfer', $data);
	}

	public function confirm() {
		
		
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
        
        

        $order_data['payment_method'] = 'Bank Transfer';
        $order_data['payment_code'] = 'bank_transfer';
       
        $where_cart = "order_id = '" . $order_id . "' ";
        $this->common->updateRecord('m_order', $order_data, $where_cart);
        
  
		$comment  = 'Bank Transfer Instructions' . "\n\n";
		$comment .= $this->configmodal->get('bank_transfer_bank' . $this->configmodal->get('config_language_id')) . "\n\n";
		$comment .= 'Your order will not ship until we receive payment.';

        $this->services->addOrderHistory($this->session->userdata('order_id_ki'), 1,$comment,1,false);
		$return_result['status'] =1;
        $return_result['msg'] = "";
        $return_result['uuid'] = $order_info['uuid'];
        echo json_encode($return_result);
        die();
			 
	}
}