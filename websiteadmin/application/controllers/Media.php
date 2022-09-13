<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Media extends CI_Controller {
public $db;
public $ctrl_name = 'media';
public $tbl_name = 'media_master';
public $tbl_name_one = 'mst_user_type';
public $pg_title = 'Media';
public $m_act = 9;


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
		$data['sub_heading'] = 'Media List';
		
		$where_cond = " WHERE   status in ('Active','Inactive') ORDER BY id";
		$data['results'] = $results = $this->common->getAllRow($this->tbl_name,$where_cond);
		
		
		$this->load->view('media_list',$data);	
        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');			
	}	
	
	public function add_banner(){
		$data['msg'] = '';
		$error = '';
		$data['l_s_act'] = 1;
		$data['sub_heading'] = 'Add Banner';
		$error = '';

		
		 if (isset($_POST['mode']) && $_POST['mode'] == "submitform") {	 

					$add_in['title'] = $title =  (isset($_POST['title'])) ? $this->common->mysql_safe_string($_POST['title']):'';
					$add_in['description'] = $description = (isset($_POST['description']))?$this->common->mysql_safe_string($_POST['description']):'';
					$add_in['status'] = $status = (isset($_POST['status']))?$this->common->mysql_safe_string($_POST['status']):'';
					$add_in['date_added'] = date('Y-m-d');
					
					//die();
					if(isset($_FILES['banner_image'])){
						if ($_FILES['banner_image']['name']!=""){
								$pusti = $this->common->gen_key(10);
								$extension=strstr($_FILES['banner_image']['name'],".");
								$thumbpath = $_FILES['banner_images']['name'];
								$thumbpath = preg_replace("/[^a-zA-Z0-9.]/", "", $thumbpath);
								copy($_FILES['banner_image']['tmp_name'],"./uploads/banner_images/".$pusti.$thumbpath);
								$add_in['banner_image'] = $pusti.$thumbpath;
						}
					}					
			 
					$chkUserInfo = $this->common->getSingleInfoBy($this->tbl_name,'title',$name_title);
						if(sizeof($chkUserInfo)>0){
							$error = $name_title ."   is already added";
						}	


					if ($error=='') {		
						$this->common->insertRecord($this->tbl_name,$add_in);
						$this->session->set_flashdata('success', 'Information added succssfully!');
						redirect($this->ctrl_name);
					} else {
						$this->session->set_flashdata('error', $error);
					}
		}		
		 
					$this->load->view('add_banner',$data);	
					$this->session->unset_userdata('success');
					$this->session->unset_userdata('warning');
					$this->session->unset_userdata('error');
		
	}	

	
	function delete_banner($id=0){
		$error = "";
			$where_edt = "id = $id";
			$add_in['status'] = 'Delete';
			$update_status=$this->common->updateRecord($this->tbl_name,$add_in,$where_edt);
			
			$this->session->set_flashdata('success', 'Banner deleted succssfully!');
			$this->session->set_flashdata('error', $error);
		 	redirect($this->ctrl_name);
	}
	

	function edit_banner($id=1){
		$data['msg'] = '';
		$data['id'] = $id;
		$data['l_s_act'] = 2;
		$data['sub_heading'] = 'Edit Banner';
		$error = '';
		
		$where_edt = "id = $id";
		$where_fetch = "WHERE id=".$id;

		  if (isset($_POST['mode']) && $_POST['mode'] == "submitform") {	 

					$add_in['title'] = $title =  (isset($_POST['title'])) ? $this->common->mysql_safe_string($_POST['title']):'';
					$add_in['description'] = $description = (isset($_POST['description']))?$this->common->mysql_safe_string($_POST['description']):'';
					$add_in['status'] = $status = (isset($_POST['status']))?$this->common->mysql_safe_string($_POST['status']):'';
					$add_in['date_added'] = date('Y-m-d');
					
					//die();
					if(isset($_FILES['banner_image'])){
						if ($_FILES['banner_image']['name']!=""){
								$pusti = $this->common->gen_key(10);
								$extension=strstr($_FILES['banner_image']['name'],".");
								$thumbpath = $_FILES['banner_images']['name'];
								$thumbpath = preg_replace("/[^a-zA-Z0-9.]/", "", $thumbpath);
								copy($_FILES['banner_image']['tmp_name'],"./uploads/banner_images/".$pusti.$thumbpath);
								$add_in['banner_image'] = $pusti.$thumbpath;
						}
					}
			 
					if ($error=='') {		
						$update_status=$this->common->updateRecord($this->tbl_name,$add_in,$where_edt);
						$this->session->set_flashdata('success', 'Banner updated succssfully!');
						$data['msg'] = 'success';
						redirect($this->ctrl_name);
						$this->session->set_flashdata('error', $error);
					} else {
						$data['msg'] = $error;
					}
		}

			$where_cond = "where id=".$id;
			$data['records'] = $records = $this->common->getOneRow($this->tbl_name,$where_cond);

			/*$where_cond = "where id=".$type_id;
			$data['type_rs'] = $type_rs = $this->common->getOneRow($this->tbl_name,$where_cond);*/

			$this->load->view('edit_banner',$data);
			$this->session->unset_userdata('success');
			$this->session->unset_userdata('warning');
			$this->session->unset_userdata('error');
			
	}		
}

