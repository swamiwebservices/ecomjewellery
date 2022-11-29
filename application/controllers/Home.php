<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Home extends CI_Controller
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
    public $controller = "home";
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
            $this->domain_id = $this->services->getDomainId();


    }
    public function index()
    {
        
      
        // $sourceUrl = parse_url('http://127.0.0.1:8074/ecomjewellery/');

        // print_r($sourceUrl);
        // $sourceUrl = $sourceUrl['host'];

        $data['page_header'] = "home";
         $param_page = $this->uri->segment(1); // n=1 for controller, n=2 for method, etc
       
        if($param_page=="" ){
            $param_page = "home";
        }
        $data['classhome'] = 'active';
        $data['wti_banners'] = json_decode(file_get_contents('uploads/jsondata/wti_banners.json'), true);

        //print_r($data['wti_banners']);
        
       // $data['home'] = json_decode(file_get_contents('uploads/jsondata/homejosn.json'), true);

      //  print_r($data['home']);
        $params['type'] = "latestProduct";
      
        $data['latestProduct'] =  $latestProduct = $this->services->getProductList($params);
      //  print_r($latestProduct);
        $this->load->view("home", $data);

    }

     
}