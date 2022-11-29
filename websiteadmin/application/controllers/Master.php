<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Master extends CI_Controller {
public $db;
public $ctrl_name = 'master';
public $tbl_name = 'mst_clubs';
public $tbl_name_one = 'mst_user_type';
public $pg_title = 'Masters';
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
		

	public function club_list(){
		$data['msg'] = '';
		$error = '';
		$data['l_s_act'] = 1;
		$data['sub_heading'] = 'Club List';
		
		$where_cond = " WHERE ".dev_where." ORDER BY auto_id";
		$data['results'] = $results = $this->common->getAllRow($this->tbl_name,$where_cond);
			 
		$this->load->view('club_list',$data);	
        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');			
	}	
	
	public function cust_types_list(){
		$data['msg'] = '';
		$error = '';
		$data['l_s_act'] = 2;
		$data['sub_heading'] = 'User Type List';
		$where_cond = " WHERE ".dev_where." ORDER BY auto_id";
		$data['results'] = $results = $this->common->getAllRow($this->tbl_name_one,$where_cond);
			 
		$this->load->view('user_type_list',$data);	
        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');			
	}				
	
	
	public function add_club(){
		$data['msg'] = '';
		$error = '';
		$data['l_s_act'] = 1;
		$data['sub_heading'] = 'Add Club';
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
						redirect($this->ctrl_name.'/club_list/');
					} else {
						$this->session->set_flashdata('error', $error);
					}
		}		

		 
		$this->load->view('add_club',$data);	
	}	

	public function add_user_type(){
		$data['msg'] = '';
		$error = '';
		$data['l_s_act'] = 2;
		$data['sub_heading'] = 'Add User Type';
		$error = '';

		
		 if (isset($_POST['mode']) && $_POST['mode'] == "submitform") {	 

					$add_in['name_title'] = $name_title =  (isset($_POST['name_title'])) ? $this->common->mysql_safe_string($_POST['name_title']):'';
					$add_in['status'] = $status = (isset($_POST['status']))?$this->common->mysql_safe_string($_POST['status']):'';
					$add_in['date_added'] = date('Y-m-d');
			 
					$chkUserInfo = $this->common->getSingleInfoBy($this->tbl_name_one,'name_title',$name_title);
						if(sizeof($chkUserInfo)>0){
							$error = $name_title ."   is already added";
						}	


					if ($error=='') {		
						$this->common->insertRecord($this->tbl_name_one,$add_in);
						$this->session->set_flashdata('success', 'Information added succssfully!');
						redirect($this->ctrl_name.'/cust_types_list/');
					} else {
						$this->session->set_flashdata('error', $error);
					}
		}		

		 
		$this->load->view('add_user_type',$data);	
	}	
		
	function delete_club($id=0){
			/*$where_edt = "id = $id";
			$add_in['del_status'] = 1;
			$update_status=$this->common->updateRecord($tbl_name,$add_in,$where_edt);
		 	redirect($this->ctrl_name.'/list_all');*/
	}
	

	function edit_club($id=1){
		$data['msg'] = '';
		$data['id'] = $id;
		$data['l_s_act'] = 1;
		$data['sub_heading'] = 'Edit Club';
		$error = '';
		
		$where_edt = "auto_id = $id";
		$where_fetch = "WHERE auto_id=".$id;

		  if (isset($_POST['mode']) && $_POST['mode'] == "submitform") {	 

					$add_in['name_title'] = $name_title =  (isset($_POST['name_title'])) ? $this->common->mysql_safe_string($_POST['name_title']):'';
					$add_in['status'] = $status = (isset($_POST['status']))?$this->common->mysql_safe_string($_POST['status']):'';
					$name_title_old =  (isset($_POST['name_title_old'])) ?$this->common->mysql_safe_string($_POST['name_title_old']):'';

					if($name_title_old!=$name_title){
						$chkUserInfo = $this->common->getSingleInfoBy($this->tbl_name,'name_title',$name_title);
						if(sizeof($chkUserInfo)>0){
							$error = $name_title ."   is already added";
						}	
		
					}
			 
					if ($error=='') {		
						$update_status=$this->common->updateRecord($this->tbl_name,$add_in,$where_edt);
						$this->session->set_flashdata('success', 'Information updated succssfully!');
						$data['msg'] = 'success';
						redirect($this->ctrl_name.'/club_list');
						$this->session->set_flashdata('error', $error);
					} else {
						$data['msg'] = $error;
					}
		}

			$where_cond = "where auto_id=".$id;
			$data['records'] = $records = $this->common->getOneRow($this->tbl_name,$where_cond);

			$this->load->view('edit_club',$data);
			$this->session->unset_userdata('success');
			$this->session->unset_userdata('warning');
			$this->session->unset_userdata('error');
			
	}

	function edit_user_type($id=1){
		$data['msg'] = '';
		$data['id'] = $id;
		$data['l_s_act'] = 2;
		$data['sub_heading'] = 'Edit User Type';
		$error = '';
		
		$where_edt = "auto_id = $id";
		$where_fetch = "WHERE auto_id=".$id;

		  if (isset($_POST['mode']) && $_POST['mode'] == "submitform") {	 

					$add_in['name_title'] = $name_title =  (isset($_POST['name_title'])) ? $this->common->mysql_safe_string($_POST['name_title']):'';
					$add_in['status'] = $status = (isset($_POST['status']))?$this->common->mysql_safe_string($_POST['status']):'';
					$name_title_old =  (isset($_POST['name_title_old'])) ?$this->common->mysql_safe_string($_POST['name_title_old']):'';

					if($name_title_old!=$name_title){
						$chkUserInfo = $this->common->getSingleInfoBy($this->tbl_name_one,'name_title',$name_title);
						if(sizeof($chkUserInfo)>0){
							$error = $name_title ."   is already added";
						}	
		
					}
			 
					if ($error=='') {		
						$update_status=$this->common->updateRecord($this->tbl_name_one,$add_in,$where_edt);
						$this->session->set_flashdata('success', 'Information updated succssfully!');
						$data['msg'] = 'success';
						redirect($this->ctrl_name.'/cust_types_list');
						$this->session->set_flashdata('error', $error);
					} else {
						$data['msg'] = $error;
					}
		}

			$where_cond = "where auto_id=".$id;
			$data['records'] = $records = $this->common->getOneRow($this->tbl_name_one,$where_cond);

			$this->load->view('edit_user_type',$data);
			$this->session->unset_userdata('success');
			$this->session->unset_userdata('warning');
			$this->session->unset_userdata('error');
			
	}	
}

