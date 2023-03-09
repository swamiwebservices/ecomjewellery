<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Payments extends CI_Controller {
public $db;
public $ctrl_name = 'payments';
public $tbl_name = 'mst_clubs';
public $tbl_name_one = 'mst_user_type';
public $pg_title = 'Payments';
public $m_act = 7;


		public function __construct(){
			parent::__construct();
			$this->load->library('session');
			$this->load->model('common');
			$this->load->helper('security');
			$this->load->library('email');
			$this->load->helper('url_helper');
			$this->db = $this->load->database('default',TRUE);
			$this->common->check_user_session();
		}
		
    public function index(){
        $this->listall();
    }
	
	public function listall(){
		$data['msg'] = '';
		$error = '';
		$data['l_s_act'] = 1;
		$data['sub_heading'] = 'Payments Methods';
		
		$this->load->view('payments_list',$data);	
        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');			
	}	
}

