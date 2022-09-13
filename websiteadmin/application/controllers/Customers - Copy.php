<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customers extends CI_Controller {
public $db;
public $ctrl_name = 'customers';
public $tbl_name = 'customer_master';
public $tbl_name_one = 'assets_master';
public $pg_title = 'Customers';
public $m_act = 1;


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
		

	public function list_all(){
		$data['msg'] = '';
		$error = '';
		$data['l_s_act'] = 1;
		$data['sub_heading'] = 'Customers List';
		
		$where_cond = " WHERE ".dev_where." ORDER BY user_id";
		$data['results'] = $results = $this->common->getAllRow($this->tbl_name,$where_cond);
			 
		$this->load->view('customers_list',$data);	
        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');			
	}	
	
	public function add_type(){
		$data['msg'] = '';
		$error = '';
		$data['l_s_act'] = 1;
		$data['sub_heading'] = 'Add Assets Type';
		$error = '';

		
		 if (isset($_POST['mode']) && $_POST['mode'] == "submitform") {	 

					$add_in['name_title'] = $name_title =  (isset($_POST['name_title'])) ? $this->common->mysql_safe_string($_POST['name_title']):'';
					$add_in['status'] = $status = (isset($_POST['status']))?$this->common->mysql_safe_string($_POST['status']):'';
					$add_in['date_added'] = date('Y-m-d');
			 
					$chkUserInfo = $this->common->getSingleInfoBy($this->tbl_name,'name_title',$name_title);
						if(sizeof($chkUserInfo)>0){
							$error = $name_title ."   is already added";
						}	


					if ($error=='') {		
						$this->common->insertRecord($this->tbl_name,$add_in);
						$this->session->set_flashdata('success', 'Information added succssfully!');
						redirect($this->ctrl_name.'/types_list/');
					} else {
						$this->session->set_flashdata('error', $error);
					}
		}		

		 
		$this->load->view('add_assets_type',$data);	
	}	

	public function add_assets($type_id=0){
		$data['msg'] = '';
		$error = '';
		$data['l_s_act'] = 2;
		$data['type_id'] = $type_id;		
		$data['sub_heading'] = 'Add Assets';
		$error = '';

		
		 if (isset($_POST['mode']) && $_POST['mode'] == "submitform") {	 

					$add_in['type_id'] = $type_id;
					$add_in['name_title'] = $name_title =  (isset($_POST['name_title'])) ? $this->common->mysql_safe_string($_POST['name_title']):'';
					$add_in['emailadd'] = $emailadd =  (isset($_POST['emailadd'])) ? $this->common->mysql_safe_string($_POST['emailadd']):'';
					$add_in['celphone'] = $celphone =  (isset($_POST['celphone'])) ? $this->common->mysql_safe_string($_POST['celphone']):'';
					$add_in['address'] = $address =  (isset($_POST['address'])) ? $this->common->mysql_safe_string($_POST['address']):'';
					$add_in['city'] = $city =  (isset($_POST['city'])) ? $this->common->mysql_safe_string($_POST['city']):'';
					$add_in['state'] = $state =  (isset($_POST['state'])) ? $this->common->mysql_safe_string($_POST['state']):'';
					$add_in['pincode'] = $pincode =  (isset($_POST['pincode'])) ? $this->common->mysql_safe_string($_POST['pincode']):'';
					$add_in['details'] = $details =  (isset($_POST['details'])) ? $this->common->mysql_safe_string($_POST['details']):'';
					$add_in['latitude'] = $latitude =  (isset($_POST['latitude'])) ? $this->common->mysql_safe_string($_POST['latitude']):'';
					$add_in['longitude'] = $longitude =  (isset($_POST['longitude'])) ? $this->common->mysql_safe_string($_POST['longitude']):'';
					$add_in['status'] = $status = (isset($_POST['status']))?$this->common->mysql_safe_string($_POST['status']):'';
					$add_in['date_added'] = date('Y-m-d');
			 
					$chkUserInfo = $this->common->getSingleInfoBy($this->tbl_name_one,'name_title',$name_title);
						if(sizeof($chkUserInfo)>0){
							$error = $name_title ."   is already added";
						}	


					if ($error=='') {		
						$this->common->insertRecord($this->tbl_name_one,$add_in);
						$this->session->set_flashdata('success', 'Information added succssfully!');
						redirect($this->ctrl_name.'/assets_list/'.$type_id);
					} else {
						$this->session->set_flashdata('error', $error);
					}
		}		


			$where_cond = "where auto_id=".$type_id;
			$data['type_rs'] = $type_rs = $this->common->getOneRow($this->tbl_name,$where_cond);
		 
			$this->load->view('add_assets',$data);	
	}	
		
	function delete_assets($id=0,$type_id){
			$where_edt = "auto_id = $id";
			$add_in['delete_status'] = 1;
			$update_status=$this->common->updateRecord($this->tbl_name_one,$add_in,$where_edt);
		 	redirect($this->ctrl_name.'/assets_list/'.$type_id);
	}
	

	function view_customer($id=1){
		$data['msg'] = '';
		$data['id'] = $id;
		$data['l_s_act'] = 2;
		$data['sub_heading'] = 'Edit Project';
		$error = '';
		
		$where_edt = "auto_id = $id";
		$where_fetch = "WHERE auto_id=".$id;

		  if (isset($_POST['mode']) && $_POST['mode'] == "submitform") {	 

					$add_in['name_title'] = $name_title =  (isset($_POST['name_title'])) ? $this->common->mysql_safe_string($_POST['name_title']):'';					
					$add_in['emailadd'] = $emailadd =  (isset($_POST['emailadd'])) ? $this->common->mysql_safe_string($_POST['emailadd']):'';
					$add_in['celphone'] = $celphone =  (isset($_POST['celphone'])) ? $this->common->mysql_safe_string($_POST['celphone']):'';
					$add_in['address'] = $address =  (isset($_POST['address'])) ? $this->common->mysql_safe_string($_POST['address']):'';
					$add_in['city'] = $city =  (isset($_POST['city'])) ? $this->common->mysql_safe_string($_POST['city']):'';
					$add_in['state'] = $state =  (isset($_POST['state'])) ? $this->common->mysql_safe_string($_POST['state']):'';
					$add_in['pincode'] = $pincode =  (isset($_POST['pincode'])) ? $this->common->mysql_safe_string($_POST['pincode']):'';
					$add_in['details'] = $details =  (isset($_POST['details'])) ? $this->common->mysql_safe_string($_POST['details']):'';
					$add_in['latitude'] = $latitude =  (isset($_POST['latitude'])) ? $this->common->mysql_safe_string($_POST['latitude']):'';
					$add_in['longitude'] = $longitude =  (isset($_POST['longitude'])) ? $this->common->mysql_safe_string($_POST['longitude']):'';
					$add_in['status'] = $status = (isset($_POST['status']))?$this->common->mysql_safe_string($_POST['status']):'';
					
			 
					if ($error=='') {		
						$update_status=$this->common->updateRecord($this->tbl_name_one,$add_in,$where_edt);
						$this->session->set_flashdata('success', 'Information updated succssfully!');
						$data['msg'] = 'success';
						redirect($this->ctrl_name.'/assets_list/'.$type_id);
						$this->session->set_flashdata('error', $error);
					} else {
						$data['msg'] = $error;
					}
		}

			$where_cond = "where auto_id=".$id;
			$data['records'] = $records = $this->common->getOneRow($this->tbl_name_one,$where_cond);

			/*$where_cond = "where auto_id=".$type_id;
			$data['type_rs'] = $type_rs = $this->common->getOneRow($this->tbl_name,$where_cond);*/

			$this->load->view('edit_project',$data);
			$this->session->unset_userdata('success');
			$this->session->unset_userdata('warning');
			$this->session->unset_userdata('error');
			
	}	
}

