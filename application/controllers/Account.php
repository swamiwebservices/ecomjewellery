<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Account extends CI_Controller
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
    public $controller = "account";
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

            $ar_session_data['last_page_visited'] = site_url("account");
            $this->session->set_userdata($ar_session_data);

    }
    public function index()
    {
        $session_user_data = $this->session->userdata('front_user_detail');

        if (!isset($session_user_data['customer_id'])) {
            $redirect = array('redirect'  => site_url('my_dashboard/my_account'));
            $this->session->set_userdata($redirect);
           
            redirect("login");
        }  

        
 		$data['start'] = $start = 0;
		$data['maxm'] = $maxm = 100;	
		
		$search_qry = " WHERE o.order_id!=0  and customer_id = '".$session_user_data['customer_id']."'   and ( cancel_order_req='0' ||  cancel_order_req is NULL) ";
 		$limit_qry = "LIMIT ".$start.",".$maxm; 
		
	 	$sSql = "SELECT o.*, os.name FROM `m_order` o inner join m_order_status os on o.order_status_id = os.order_status_id 
		$search_qry 
		ORDER BY o.order_id DESC";
	  	$query =  $sSql . " " . $limit_qry;
	
		$query = $this->db->query($query);
		$row = $query->result_array(); 
		$data['results'] = $row;

		$query_num = $this->db->query($sSql);
		$numrow = $query_num->num_rows();
		 
        $data['test'] = 0; 
        $this->load->view("account", $data);

    }
    public function orderdetail($order_uuid="")
    {
        $data['lf_act'] = 6;
	 
		
		$order_info = $this->services->getOrderUUID($order_uuid);
        $order_id = $order_info['order_id'];
			
		if(!$order_info ){
				$newdata = array('warning'  => 'Please select order' );
				$this->session->set_userdata($newdata);
				//redirect('account');
		}
		
		/////
		$data['order_info'] = $order_info;
		
			 
			$data['order_id'] = $order_id;

			$data['store_id'] = $order_info['store_id'];
			$data['store_name'] = $order_info['store_name'];
			
			 

			if ($order_info['invoice_no']) {
				$data['invoice_no'] = $order_info['invoice_prefix'] . $order_info['invoice_no'];
			} else {
				$data['invoice_no'] = '';
			}

			$data['date_added'] = $this->common->getDateFormat($order_info['date_added'],'d M, Y');

			$data['firstname'] = ucfirst($order_info['firstname']);
			$data['lastname'] = ucfirst($order_info['lastname']);

			if ($order_info['customer_id']) {
				$data['customer'] = $order_info['customer_id'];
			} else {
				$data['customer'] = '';
			}
			
			$data['email'] = $order_info['email'];
			$data['telephone'] = $order_info['telephone'];

			$data['shipping_method'] = $order_info['shipping_method'];
			$data['payment_method'] = $order_info['payment_method'];

			// Payment Address
			if ($order_info['payment_address_format']) {
				$format = $order_info['payment_address_format'];
			} else {
				$format = '{firstname} {lastname}' . "\n" . '{company}' . "\n" . '{address_1}' . "\n" . '{address_2}' . "\n" . '{city} {postcode}' . "\n" . '{zone}' . "\n" . '{country}';
			}

			$find = array(
				'{firstname}',
				'{lastname}',
				'{company}',
				'{address_1}',
				'{address_2}',
				'{city}',
				'{postcode}',
				'{zone}',
				'{zone_code}',
				'{country}',
			 
			);

			$replace = array(
				'firstname' => "<strong>".ucfirst($order_info['payment_firstname']),
				'lastname'  => ucfirst($order_info['payment_lastname'])."</strong>",
				'company'   => ucfirst($order_info['payment_company']),
				'address_1' => ucfirst($order_info['payment_address_1']),
				'address_2' => ucfirst($order_info['payment_address_2']),
				'city'      => ucfirst($order_info['payment_city']),
				'postcode'  => $order_info['payment_postcode'],
				'zone'      => ucfirst($order_info['payment_zone']),
				'zone_code' => $order_info['payment_zone_code'],
				'country'   => ucfirst($order_info['payment_country']),
				 
			);

			$data['payment_address'] = str_replace(array("\r\n", "\r", "\n"), '<br />', preg_replace(array("/\s\s+/", "/\r\r+/", "/\n\n+/"), '<br />', trim(str_replace($find, $replace, $format))));

			// Shipping Address
			if ($order_info['shipping_address_format']) {
				$format = $order_info['shipping_address_format'];
			} else {
				$format = '{firstname} {lastname}' . "\n" . '{company}' . "\n" . '{address_1}' . "\n" . '{address_2}' . "\n" . '{city} {postcode}' . "\n" . '{zone}' . "\n" . '{country}';
			}

			$find = array(
				'{firstname}',
				'{lastname}',
				'{company}',
				'{address_1}',
				'{address_2}',
				'{city}',
				'{postcode}',
				'{zone}',
				'{zone_code}',
				'{country}'
			 
			);

			$replace = array(
				'firstname' => "<strong>".ucfirst($order_info['shipping_firstname']),
				'lastname'  => ucfirst($order_info['shipping_lastname'])."</strong>",
				'company'   => ucfirst($order_info['shipping_company']),
				'address_1' => ucfirst($order_info['shipping_address_1']),
				'address_2' => ucfirst($order_info['shipping_address_2']),
				'city'      => ucfirst($order_info['shipping_city']),
				'postcode'  => $order_info['shipping_postcode'],
				'zone'      => ucfirst($order_info['shipping_zone']),
				'zone_code' => $order_info['shipping_zone_code'],
				'country'   => ucfirst($order_info['shipping_country'])
				
			);

			$data['shipping_address'] = str_replace(array("\r\n", "\r", "\n"), '<br />', preg_replace(array("/\s\s+/", "/\r\r+/", "/\n\n+/"), '<br />', trim(str_replace($find, $replace, $format))));
			
			
			$products = $this->services->getOrderProducts($order_id);
			//print_r($products);
 			foreach ($products as $product) {
				$option_data = array();

				 
				$product_info = '';//$this->model_catalog_product->getProduct($product['product_id']);

				if ($product_info) {
					$reorder = '';
				} else {
					$reorder = '';
				}
				$data['products'][] = array(
					'order_product_id' => $product['order_product_id'],
					'product_id'       => $product['product_id'],
					'name'    	 	   => $product['name'],
					'image'    	 	   => $product['main_image'],
					'model'    		   => $product['model'],
					'option'   		   => $option_data,
					'quantity'		   => $product['quantity'],
					'price'    		   =>0,
					'total'    		   => 0,
					'href'     		   => ''
				);
			}

			 

			$data['totals'] = array();

			$totals = $this->services->getOrderTotals($order_id);

			foreach ($totals as $total) {
				$data['totals'][] = array(
					'title' => $total['title'],
					'text'  => 0
				);
			}

			$data['comment'] = nl2br($order_info['comment']);
 

			$order_status_info = $this->services->getOrderStatus($order_info['order_status_id']);

			if ($order_status_info) {
				$data['order_status'] = $order_status_info['name'];
			} else {
				$data['order_status'] = '';
			}

			//$data['order_statuses'] = $this->services->getOrderStatuses();

			$data['order_status_id'] = $order_info['order_status_id'];
 

			 
			
			$results = $this->services->getOrderHistories($order_id, 0, 1000);

			foreach ($results as $result) {
				$data['histories'][] = array(
					
					'status'     => $result['status'],
					'comment'    =>$result['notify'] ? nl2br($result['comment']) : '',
					'date_added' => $this->common->getDateFormat($result['date_added'])
				);
			}
		/////
        $this->load->view("orderdetail", $data);
    }
    public function logout()
    {
        
      
       

		$array_items = array('front_user_detail'=>'');

		$this->session->unset_userdata($array_items);
        $this->session->sess_destroy();
		redirect('home');

        
    }
}