<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Product extends CI_Controller
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
    public $controller = "product";
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
        
        $data['latestProduct'] =  [];
       
        $product_name =   $this->uri->segment('2');
        if($product_name==""){
            redirect('home');
            die();
        }
        $params_prd['slug_name'] = $product_name;
        $data['productdetail'] =  $productdetail = $this->services->getProductDetails($params_prd);
        
        if(sizeof($productdetail)<=0){
            redirect('home');
            die();
        }

        $params['type'] = "latestProduct";
        $params['limit'] = 10;
        $data['latestProduct'] =  $latestProduct = $this->services->getProductList($params);
       // $data['categoryProduct'] = $latestProduct;
       // print_r($categoryProduct);
        $data['product_name'] = $product_name;
        $this->load->view("product-details", $data);

    }

}