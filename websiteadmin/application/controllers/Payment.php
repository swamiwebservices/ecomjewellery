<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Payment extends CI_Controller {
public $db;
public $ctrl_name = 'payment';
public $controller = 'payment';
public $pg_title = 'Payments';
public $m_act = 7;


		public function __construct(){
			parent::__construct();
			$this->load->library('session');
			$this->load->model('common');
			$this->load->model('configmodal');

			$this->load->helper('security');
			$this->load->library('email');
			$this->load->helper('url_helper');
			$this->db = $this->load->database('default',TRUE);
			$this->common->check_user_session();
		}
		
 
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['activaation_id'] = 1101;
        $data['sub_activaation_id'] = '1101_5';
        $data['title'] = 'Payments';
	 	$this->listall(0);
		// 
		$this->session->unset_userdata('success');
	}
	public function listall($start=0){
		$current_dir =  (__DIR__) ;
		
	$data['activaation_id'] = 1101;
        $data['sub_activaation_id'] = '1101_5';
        $data['title'] = 'Payments';
		$data['sub_heading'] = 'Payments Methods';
		$data['extensions'] = array();
  
		$data['controller'] = $this->controller;
		 
		 $payment_list_name = array("cod"=>"Cash On Delivery","bank_transfer"=>"Bank Transfer","pp_standard"=>"Paypal Standard","payu"=>"Payu-Money","razorpay"=>"Razorpay");
		 
		 $extensions = $this->getInstalled('payment');
		// $data['extensions'] = $extensions;
		foreach ($extensions as $key => $value) {
			if (!is_file($current_dir.'/payment/' . $value . '.php') && !is_file('payment/' . $value . '.php')) {
				//$this->uninstall('payment', $value);

				unset($extensions[$key]);
			}
		}

		//	print_r($extensions);

		// Compatibility code for old extension folders
		
		$files= glob( $current_dir."/payment/*.php");
		
		if ($files) {
			foreach ($files as $file) {
				$extension = basename($file, '.php');
  
				$link = '';

				$data['extensions'][] = array(
					'name'       => $payment_list_name[$extension],
					'link'       => $link,
					'status'     =>  $this->configmodal->get($extension . '_status') ? 'enabled' : 'disabled',
					'sort_order' => $this->configmodal->get($extension . '_sort_order'),
					 
					'edit'      => site_url(''.$extension)
				);
			}
		}
 
		
		//$files = glob(DIR_APPLICATION . 'controller/extension/extension/*.php', GLOB_BRACE);
		

		
		$this->load->view('payment_view',$data);
	}
	 
	public function getInstalled($type) {
		$extension_data = array();
	 
		$query = $this->db->query("SELECT * FROM extension WHERE `type` = '" . $this->common->getDbValue($type) . "' ORDER BY code");

		foreach ($query->result_array() as $result) {
			$extension_data[] = $result['code'];
		}

		return $extension_data;
	}

	public function install($type, $code) {
		$extensions = $this->getInstalled($type);

		if (!in_array($code, $extensions)) {
			$this->db->query("INSERT INTO extension SET `type` = '" . $this->common->getDbValue($type) . "', `code` = '" . $this->common->getDbValue($code) . "'");
		}
		
		 $newdata = array('success'  => 'Success: You have modified payments!' );
		 $this->session->set_userdata($newdata);
		 redirect('payment');
	}

	public function uninstall($type='payment', $code) {
	 
		$this->db->query("DELETE FROM extension WHERE `type` = '" . $this->common->getDbValue($type) . "' AND `code` = '" . $this->common->getDbValue($code) . "'");
		$this->db->query("DELETE FROM setting WHERE `group` = '" . $this->common->getDbValue($code) . "'");
		
		 $newdata = array('success'  => 'Success: You have modified payments!' );
		 $this->session->set_userdata($newdata);
		redirect('payment');
	}

	
	 
}
