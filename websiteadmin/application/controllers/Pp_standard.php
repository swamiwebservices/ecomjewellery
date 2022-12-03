<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Pp_standard extends CI_Controller {
	  public $activaation_id = "120";
	  public $sub_activaation_id = "120_2";
	  public $title = "Patment PayPal Payments Standard";
	  public $tablename = "setting";
	  public $controller = "pp_standard";
		  
	private $error = array();
	public function __construct(){

			parent::__construct();
			$this->load->library('session');
			$this->load->model('common');
			$this->load->model('categorymodal');
			$this->load->helper('security');
			$this->load->library('email');
			$this->load->helper('url_helper');

			if($this->session->userdata('admin_user_id')==""){   

					redirect("login","refresh");

			}

			

		}
	public function index() {
		 
	 
	 $data['activaation_id'] = $this->activaation_id;
	 $data['sub_activaation_id'] =  $this->sub_activaation_id;
	 $data['controller'] =  $this->controller;
           	 
	  if(isset($_POST['mode']) && $_POST['mode']=='edit_content'){
		$code = $this->controller;
					 $this->db->query("DELETE FROM `setting` WHERE store_id = '0' AND `group` = '" . $this->common->getDbValue($code) . "'");
 				foreach ($_POST as $key => $value) {
						if (substr($key, 0, strlen($code)) == $code) {
							if (!is_array($value)) {
								$this->db->query("INSERT INTO `setting` SET store_id = '0', `group` = '" . $this->common->getDbValue($code) . "', `key` = '" . $this->common->getDbValue($key) . "', `value` = '" . $this->common->getDbValue($value) . "'");
							} else {
								$this->db->query("INSERT INTO `settin`g SET store_id = '0', `group` = '" . $this->common->getDbValue($code) . "', `key` = '" . $this->common->getDbValue($key) . "', `value` = '" . $this->common->getDbValue(json_encode($value, true)) . "', serialized = '1'");
							}
						}
					}
 
				 $newdata = array('success'  => 'Success: You have modified payments!' );
			 $this->session->set_userdata($newdata);
			 redirect('payment');
				} 

		 
		 
		 
		 
		$where_cond = " WHERE del_status=0  ORDER BY name asc ";
		$data['order_statuses'] = $order_statuses = $this->common->getAllRow( 'order_status' , $where_cond);

		$where_cond = " ORDER BY name asc ";
		$data['geo_zones'] = $order_statuses = $this->common->getAllRow( 'geo_zone' , $where_cond);
 
 		 

		$where_cond = "where `group`='".$this->controller."'";
 		$records = $this->common->getAllRow('setting',$where_cond);
		$data['records'] = array();
		//print_r($records);
	 	foreach($records as $key => $value){
			
			$data['records'][$value['key']] = $value['value'];
		}
		//print_r($data['records']);
		$data['sub_heading'] = 'Edit PayPal Payments Standard'; 
		$this->load->view('payment_'.$this->controller.'_view',$data);
		$this->session->unset_userdata('success');
	}

	public function deleteSetting($code, $store_id = 0) {
		$this->db->query("DELETE FROM `setting` WHERE store_id = '0' AND `group` = '" . $this->common->getDbValue($code) . "'");
	}
	
	public function getSettingValue($key, $store_id = 0) {
		$query = $this->db->query("SELECT `value` FROM setting WHERE store_id = '0' AND `key` = '" . $this->common->getDbValue($key) . "'");

		if ($query->num_rows) {
			return $query->row['value'];
		} else {
			return null;	
		}
	}
	
	public function editSettingValue($code = '', $key = '', $value = '', $store_id = 0) {
		 
		
		if (!is_array($value)) {
			$this->db->query("UPDATE setting SET `value` = '" . $this->common->getDbValue($value) . "', serialized = '0'  WHERE `code` = '" . $this->common->getDbValue($code) . "' AND `key` = '" . $this->common->getDbValue($key) . "' AND store_id = '0'");
		} else {
			$this->db->query("UPDATE setting SET `value` = '" . $this->common->getDbValue(json_encode($value)) . "', serialized = '1' WHERE `code` = '" . $this->common->getDbValue($code) . "' AND `key` = '" . $this->common->getDbValue($key) . "' AND store_id = '0'");
		}
	}
}