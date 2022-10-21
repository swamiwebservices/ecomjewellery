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
        //print_r($session_user_data);
        if (!isset($session_user_data['user_id'])) {
            redirect("login");
        }
        $cartinfo = $this->services->getCartinfo();
        $cartSubtotal = $this->services->getCartSubtotal();
        //print_r($cartinfo);
        $data['record']['items'] = $cartinfo;
        $data['record']['shipping_carges'] = 100;
        $data['record']['subtotal'] = $cartSubtotal;
        $ar_session_data['last_page_visited'] = site_url("checkout");
        $this->session->set_userdata($ar_session_data);
        $this->load->view("checkout", $data);

    }
   
    
}