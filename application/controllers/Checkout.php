<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Checkout extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *         http://example.com/index.php/welcome
     *    - or -
     *         http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public $controller = "checkout";
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
			// 	 redirect("maintenance");
			// 	  exit;
			// }
            if(empty($this->session->userdata('domain_id'))){
                $this->session->set_userdata('domain_id', '1');

            }
           
            if(empty($this->session->userdata('domain_id'))){
                $this->session->set_userdata('domain_id', '1');

            }
            $this->domain_id = $this->services->getDomainId();

    }
    public function index()
    {
        $session_user_data = $this->session->userdata('front_user_detail');
        //print_r($session_user_data);die();
        if (!isset($session_user_data['customer_id'])) {
            $ar_session_data['last_page_visited'] = site_url("checkout");
            $this->session->set_userdata($ar_session_data);
    
            redirect("login");
            die();
        }

        $where_cond = "  ORDER BY name";
		$data['country_rs'] =  $this->common->getAllRow('m_country',$where_cond);
       // print_r($data['country_rs']);

      
        $customer_info = $this->services->getCustomerInfo();
        $cartinfo = $this->services->getCartinfo();
        $cartSubtotal = $this->services->getCartSubtotal();
        $data['record']['items'] = $cartinfo;
        $data['record']['shipping_carges'] = 100;
        $data['record']['subtotal'] = $cartSubtotal;
        
       // print_r($customer_info);
      
        $payment_address =         [
            'address_id'     => $customer_info['address_id'],
            'firstname'      => $customer_info['firstname'],
            'lastname'       => $customer_info['lastname'],
            'telephone'      => $customer_info['telephone'],
            'company'        => $customer_info['company'],
            'address_1'      => $customer_info['address_1'],
            'address_2'      => $customer_info['address_2'],
            'city'           => $customer_info['city'],
            'postcode'       => $customer_info['postcode'],
            'zone_id'        => $customer_info['zone_id'],
            'zone'           => $customer_info['zone'],
            'zone_code'      => $customer_info['zone_code'],
            'country_id'     => $customer_info['country_id'],
            'country'        => $customer_info['country'],
            'iso_code_2'     => $customer_info['iso_code_2'],
            'iso_code_3'     => $customer_info['iso_code_3']
            
        ];
        
        $data['shipping_address']['shipping_firstname'] = $payment_address['firstname'];
        $data['shipping_address']['shipping_lastname'] = $payment_address['lastname'];
        $data['shipping_address']['shipping_company'] = $payment_address['company'];
        $data['shipping_address']['shipping_address_1'] = $payment_address['address_1'];
        $data['shipping_address']['shipping_address_2'] = $payment_address['address_2'];
        $data['shipping_address']['shipping_country_id'] = $payment_address['country_id'];
        $data['shipping_address']['shipping_zone_id'] = $payment_address['zone_id'];
        $data['shipping_address']['shipping_city'] = $payment_address['city'];
        $data['shipping_address']['shipping_postcode'] = $payment_address['postcode'];

        // add order 
        
           
        $customer_info = $this->services->getCustomerInfo();
        $cartinfo = $this->services->getCartinfo();
        $cartSubtotal = $this->services->getCartSubtotal();

        $payment_address =         [
            'address_id'     => $customer_info['address_id'],
            'firstname'      => $customer_info['firstname'],
            'lastname'       => $customer_info['lastname'],
            'telephone'      => $customer_info['telephone'],
            'company'        => $customer_info['company'],
            'address_1'      => $customer_info['address_1'],
            'address_2'      => $customer_info['address_2'],
            'city'           => $customer_info['city'],
            'postcode'       => $customer_info['postcode'],
            'zone_id'        => $customer_info['zone_id'],
            'zone'           => $customer_info['zone'],
            'zone_code'      => $customer_info['zone_code'],
            'country_id'     => $customer_info['country_id'],
            'country'        => $customer_info['country'],
            'iso_code_2'     => $customer_info['iso_code_2'],
            'iso_code_3'     => $customer_info['iso_code_3']
            
        ];
        

        $error = "";
        $order_data = array();
        
        $order_data['company'] = $company = (isset($_POST['company'])) ? $this->input->post('company') : '';

        $order_data['shipping_firstname'] = $shipping_firstname = (isset($_POST['shipping_firstname'])) ? $this->input->post('shipping_firstname') : '';
        $order_data['shipping_lastname'] = $shipping_lastname = (isset($_POST['shipping_lastname'])) ? $this->input->post('shipping_lastname') : '';
        $order_data['shipping_company'] = $shipping_company = (isset($_POST['shipping_company'])) ? $this->input->post('shipping_company') : '';
        $order_data['shipping_address_1'] = $shipping_address_1 = (isset($_POST['shipping_address_1'])) ? $this->input->post('shipping_address_1') : '';
        $order_data['shipping_address_2'] = $shipping_address_2 = (isset($_POST['shipping_address_2'])) ? $this->input->post('shipping_address_2') : '';$order_data['shipping_country_id'] = $shipping_country_id = (isset($_POST['shipping_country_id'])) ? $this->input->post('shipping_country_id') : '';
        $order_data['shipping_zone_id'] = $shipping_zone_id = (isset($_POST['shipping_zone_id'])) ? $this->input->post('shipping_zone_id') : '';
        $order_data['shipping_city'] = $shipping_city = (isset($_POST['shipping_city'])) ? $this->input->post('shipping_city') : '';
        $order_data['shipping_postcode'] = $shipping_postcode = (isset($_POST['shipping_postcode'])) ? $this->input->post('shipping_postcode') : '';
        $order_data['comment'] = $comment = (isset($_POST['comment'])) ? $this->input->post('comment') : '';
        

        // if($shipping_firstname==""){
        //     $error = "Please enter first name";
        // }
        // if($shipping_lastname==""){
        //     $error = "Please enter last name";
        // }
        // if($shipping_firstname==""){
        //     $error = "Please enter first name";
        // }
        // if($shipping_address_1==""){
        //     $error = "Please enter address";
        // }
        // if($shipping_country_id==""){
        //     $error = "Please select country";
        // }
        // if($shipping_zone_id==""){
        //     $error = "Please select zone";
        // }
        // if($shipping_city==""){
        //     $error = "Please enter city";
        // }
        // if($shipping_postcode==""){
        //     $error = "Please select pin code";
        // }
            //$error==""
        if(1){
           
            
            $order_data['store_id'] = $this->services->getDomainId();
            $order_data['store_name'] =  $_SERVER['HTTP_HOST'];
            $order_data['customer_id'] =  $customer_info['customer_id'];
            $order_data['firstname'] =  $customer_info['firstname'];
            $order_data['lastname'] =  $customer_info['lastname'];
            $order_data['email'] =  $customer_info['email'];
            $order_data['telephone'] =  $customer_info['telephone'];
            $order_data['customer_id'] =  $customer_info['customer_id'];
            $order_data['payment_method'] = 'COD';
            
            $order_data['payment_firstname'] = $payment_address['firstname'];
            $order_data['payment_lastname'] = $payment_address['lastname'];
            $order_data['payment_company'] = $payment_address['company'];
            $order_data['payment_address_1'] = $payment_address['address_1'];
            $order_data['payment_address_2'] = $payment_address['address_2'];
            $order_data['payment_country_id'] = $payment_address['country_id'];
            $order_data['payment_zone_id'] = $payment_address['zone_id'];
            $order_data['payment_city'] = $payment_address['city'];
            $order_data['payment_postcode'] = $payment_address['postcode'];

          
         
           // $order_data['total'] = $total = (isset($_POST['total'])) ? $this->input->post('total') : '';

            $config_order_status_id = $this->config->item("config_order_status_id");

            $order_data['order_status_id'] = $config_order_status_id;
            $order_data['total'] = 0;
            $currentCurrency = $this->services->getCurrency();
            $order_data['currency_id'] = $this->services->getDomainId();
            $order_data['currency_code'] = $currentCurrency['code'];
            
            $order_data['ip'] = $this->input->ip_address();
            $order_data['user_agent'] = $this->input->user_agent();
            $order_data['user_agent'] = $this->input->user_agent();
            //print_r($order_data);exit;
            $order_id = $this->services->addOrder($order_data);
            $order_id_sess = array('order_id_ki'=>$order_id);
            $this->session->set_userdata($order_id_sess);

        }  
        
    
        //end of add order
     

        $format = '{firstname} {lastname}' . "\n" . '{company}' . "\n" . '{address_1}' . "\n" . '{address_2}' . "\n" . '{city} {postcode}' . "\n" . '{zone}' . "\n" . '{country}'. "\n" . '{mobile}';

			$find = array(
				'{firstname}',
				'{lastname}',
				'{company}',
				'{address_1}',
				'{address_2}',
				'{city}',
				'{postcode}',
				'{zone}',
				'{country}',
				'{mobile}'
			);

			$replace = array(
				'firstname' => "<strong>".$payment_address['firstname'],
				'lastname'  => $payment_address['lastname']."</strong>",
				'company'   => $payment_address['company'],
				'address_1' => $payment_address['address_1'],
				'address_2' => $payment_address['address_2'],
				'city'      => $payment_address['city'],
				'postcode'  => $payment_address['postcode'],
				'zone'      => $payment_address['zone'],
				'country'   => $payment_address['country'],
				'mobile'   => $payment_address['telephone']
			);

			$data['payment_address'] = str_replace(array("\r\n", "\r", "\n"), '<br />', preg_replace(array("/\s\s+/", "/\r\r+/", "/\n\n+/"), '<br />', trim(str_replace($find, $replace, $format))));

        
        $this->load->view("checkout", $data);

    }
 
 public function success(){
    $data['acti_id'] = 0;
		 

		if ($this->session->userdata('order_id_ki')!="") {
			
			
			$this->services->clear();
			//die("aaaaaaaaaa");
		 
			
			 /*
			$this->session->unset_userdata('shipping_method');
			$this->session->unset_userdata('shipping_methods');
			$this->session->unset_userdata('payment_method');
			$this->session->unset_userdata('payment_methods');
			$this->session->unset_userdata('guest');
			$this->session->unset_userdata('comment');
			$this->session->unset_userdata('order_id_ki');
			$this->session->unset_userdata('coupon');
			$this->session->unset_userdata('reward');
			$this->session->unset_userdata('voucher');
			$this->session->unset_userdata('vouchers');
			$this->session->unset_userdata('totals');
  			*/
              $this->session->unset_userdata('order_id_ki');

			// $array_items = array('shipping_method'=>'','shipping_methods'=>'','payment_method'=>'','payment_methods'=>'','guest'=>'','comment'=>'','order_id'=>'','shipping_methods'=>'','coupon'=>'','reward'=>'','voucher'=>'','vouchers'=>'','totals'=>'','shipping_address'=>'','payment_address'=>'','order_id_ki'=>'','oldisgold'=>'','oldisgoldqty'=>'','warning'=>'','shipping_address'=>'','payment_address'=>'','same_payment_shipping_address'=>'','order_id_custom'=>'');
			//  	$this->session->unset_userdata($array_items);
		
		}
 

		$this->load->view('checkout_success',$data);
		 
 }   
}