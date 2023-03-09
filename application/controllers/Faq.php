<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Faq extends CI_Controller
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
    public $controller = "about_us";
    public function __construct()
    {
        parent::__construct();
          
        $this->load->library('session');
        
        $this->load->model('common');
        $this->load->model('services');
      
        $this->load->helper('security');
        $this->load->library('email');
        $this->load->helper('url_helper');
     
         $data['config_maintenance'] = $config_maintenance = (int)$this->common->get('config_maintenance');

         if($config_maintenance){
              redirect("maintenance");
               exit;
         }
        // if(empty($this->session->userdata('domain_id'))){
        //     $this->session->set_userdata('domain_id', '1');

        // }
        $this->domain_id = $this->services->getDomainId();


    }
	
    public function index(){        
        $data['page_header'] = "home";
		$data['act_id'] = 2;
		
		$cookie_name = 'site_lang';
		if(!isset($_COOKIE[$cookie_name])) {
		  $lang = 'english';
		} else {
		  $lang = $_COOKIE[$cookie_name];
		}
		
		$data['lang'] = $lang;		
		
		$where_cond = " WHERE  status!='Delete' ORDER BY id ";
		$data['faq_rs'] = $faq_rs = $this->common->getAllRow('cms_faq',$where_cond);
		
        $this->load->view("faq", $data);
    }
    
}