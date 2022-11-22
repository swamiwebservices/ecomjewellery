<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Privacypolicy extends CI_Controller {
		public function __construct(){
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


	public function index(){
		$data['cat_slug'] = 0;
		$this->load->view('privacypolicy',$data);
	}
}