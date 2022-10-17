<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Category extends CI_Controller
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
    public $controller = "category";
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
         $funname =        $this->uri->segment('1');
        $categoryname =   $this->uri->segment('2');
        if($categoryname==""){
            redirect('home');
            die();
        }
        $categoryids =   $this->uri->segment('3');


        $params['type'] = "category";

        if($categoryids==""){
            $categoryids_arra = $this->services->getCategoryId($categoryname);
            $params['parent_id'] = $categoryids_arra['parent_id'];
            $params['category_id'] = $categoryids_arra['category_id'];
        } else {
            $categoryids_exp = explode("-",$categoryids) ;
            $params['parent_id'] = $categoryids_exp[0];
            $params['category_id'] = $categoryids_exp[1];
        }
        $data['categoryProduct_total'] =  $categoryProduct_total = $this->services->getProductList($params);

        
        $data['controller'] = $this->controller;
        $data['maxm'] = $maxm = 9;
        $fun_name = $funname.'/'.$categoryname.'/'.$categoryids;
         $data['start'] = 0;
 
        if (isset($_GET['page']) && $_GET['page'] != '') {
            $page = filter_var($_GET['page'], FILTER_SANITIZE_STRING);

            $data['page'] = $page;

        } //isset( $_GET['page'] ) && $_GET['page'] != ''
        else {
            $page = 0;
            $data['page'] = 0;

        }
        $start_temp = (($page == 0) ? 0 : $page - 1);
        $start = $start_temp * $maxm;

        if ($start < 0) {
            $start = 0;
        }

        $sort = (isset($_GET['sort'])) ? $this->common->mysql_safe_string($_GET['sort']) : 'sort_order';
        $order = (isset($_GET['order'])) ? $this->common->mysql_safe_string($_GET['order']) : 'asc';
       
        $params['sort'] = $sort;
        $params['order'] = $order;

        $data['start'] = $page;
        $params['start'] = $start;
        $params['limit'] = $maxm;
        $data['other_para'] = "sort=".$sort."&order=".$order;

        $data['fun_name'] = $fun_name . "?" . $data['other_para'];

        $data['categoryProduct'] =  $categoryProduct = $this->services->getProductList($params);
        $data['num_row'] = sizeof($categoryProduct_total);
        

        $params['type'] = "latestProduct";
        $params['limit'] = 5;
        $data['latestProduct'] =  $latestProduct = $this->services->getProductList($params);
       // $data['categoryProduct'] = $latestProduct;
       // print_r($categoryProduct);
        $data['categoryname'] = $categoryname;

        $data['sort'] = $sort;
        $data['order'] = $order;


        $this->load->view("product_list", $data);

    }

}