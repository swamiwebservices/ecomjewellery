<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Cod extends CI_Controller
{
    public $controller = "cod";
    public $domain_id = 1;
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');

        $this->load->model('common');
        $this->load->model('services');

        $this->load->helper('security');
        $this->load->library('email');
        $this->load->helper('url_helper');

         // $data['config_maintenance'] = $config_maintenance = (int)$this->common->get('config_maintenance');
        // if($config_maintenance){
        //      redirect("maintenance");
        //       exit;
        // }
        if (empty($this->session->userdata('domain_id'))) {
            $this->session->set_userdata('domain_id', '1');
        }
        if (empty($this->session->userdata('domain_id'))) {
            $this->session->set_userdata('domain_id', '1');
        }
        $this->domain_id = $this->services->getDomainId();
    }
    public function information()
    {
        $data['text_instruction'] = "Cash on delivery";
        $data['text_description'] = "";
        $data['text_payment'] = "";

        // $method_data = array(
        //     'code' => 'cod',
        //     'title' => 'Cash On Delivery ',
        //     'terms' => '',
        //     'sort_order' => 1,
        // );
        // $this->session->set_userdata('payment_method', $method_data);
       
        $this->db->query("UPDATE `m_order` SET  payment_method = 'Cash On Delivery', payment_code = 'cod'  WHERE order_id = '" . (int) $this->session->userdata('order_id_ki') . "'");

            

        return $this->load->view('payment/cod', $data);
    }
    public function confirm()
    {
        
      
        
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
        
        

        $order_data['payment_method'] = 'Cash On Delivery';
        $order_data['payment_code'] = 'cod';
       
        $where_cart = "order_id = '" . $order_id . "' ";
        $this->common->updateRecord('m_order', $order_data, $where_cart);
        
      
        $this->services->addOrderHistory($this->session->userdata('order_id_ki'), 1,'',1,false);
      
        $return_result['status'] =1;
        $return_result['msg'] = "";
        $return_result['uuid'] = $order_info['uuid'];
        echo json_encode($return_result);
        die();

    }
}
