<?php
defined('BASEPATH') or exit('No direct script access allowed');
use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Nopage extends CI_Controller
{

    public $controller = "nopage";

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('common');
        $this->load->model('services');

        $this->load->helper('security');
        $this->load->library('email');
        $this->load->helper('url_helper');
        //if session not exist
        $data['config_maintenance'] = $config_maintenance = (int)$this->common->get('config_maintenance');
	
        if($config_maintenance){
             redirect("maintenance");
              exit;
        }
    
 
       
        $this->domain_id = $this->services->getDomainId();

        $ar_session_data['last_page_visited'] = site_url("account");
        $this->session->set_userdata($ar_session_data);
    }

    public function index($start = 0, $otherparam = "")
    {

        $param_page = $this->uri->segment(1); // n=1 for controller, n=2 for method, etc
       
        if ($param_page == "") {
            $param_page = "home";
        }
        $data['canonical'] = site_url($param_page);

        $param_page = $this->uri->segment(1); // n=1 for controller, n=2 for method, etc
        $param_page2 = $this->uri->segment(2); // n=1 for controller, n=2 for method, etc
       if($param_page=="" ){
           $param_page = "home";
       }
      
       $data['canonical'] = site_url($param_page);
     
      
       
       $config_site_mail = array();
       $error_msg = "";
      
       

       ///

       $admin_mail_id = "swamiwebservices@gmail.com";
       $config_site_mail = array();
       $error_msg = "";
       
  
       
       if (!file_exists(APPPATH.'views/'.$param_page.'.php')){
        $param_page = "nopage";
       }   
       
       $this->load->view($param_page, $data);

    }
}
