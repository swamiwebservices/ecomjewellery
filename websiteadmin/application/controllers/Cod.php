<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Cod extends CI_Controller {
	  public $activaation_id = "120";
	  public $sub_activaation_id = "120_2";
	  public $title = "Patment Cash On Delivery";
	  public $tablename = "setting";
	  public $controller = "cod";
		  
	private $error = array();
	public function __construct(){

			parent::__construct();
			$this->load->library('session');
			$this->load->model('common');
 			$this->load->helper('security');
			$this->load->library('email');
			$this->load->helper('url_helper');
			$this->common->check_user_session();

			

		}
	public function index() {
		 
	 
		$data['activaation_id'] = 1101;
        $data['sub_activaation_id'] = '1101_5';
	 $data['controller'] =  $this->controller;
	 $data['back_link'] = 'payment';


	  if(isset($_POST['mode']) && $_POST['mode']=='edit_content'){
		
		$code = $this->controller;
					 $this->db->query("DELETE FROM `setting` WHERE store_id = '0' AND `group` = '" . $this->common->getDbValue($code) . "'");
 				foreach ($_POST as $key => $value) {
						if (substr($key, 0, strlen($code)) == $code) {
							if (!is_array($value)) {
								$this->db->query("INSERT INTO setting SET store_id = '0', `group` = '" . $this->common->getDbValue($code) . "', `key` = '" . $this->common->getDbValue($key) . "', `value` = '" . $this->common->getDbValue($value) . "'");
							} else {
								$this->db->query("INSERT INTO setting SET store_id = '0', `group` = '" . $this->common->getDbValue($code) . "', `key` = '" . $this->common->getDbValue($key) . "', `value` = '" . $this->common->getDbValue(json_encode($value, true)) . "', serialized = '1'");
							}
						}
					}
 
				 $newdata = array('success'  => 'Success: You have modified payments!' );
			 $this->session->set_userdata($newdata);
			 redirect('payment');
				} 

		 
		 
		 
		 
 		 

		$where_cond = "where `group`='".$this->controller."'";
 		$records = $this->common->getAllRow('setting',$where_cond);
		$data['records'] = array();
		//print_r($records);
	 	foreach($records as $key => $value){
			
			$data['records'][$value['key']] = $value['value'];
		}
		//print_r($data['records']);
		$data['sub_heading'] = 'Edit Cash On Delivery'; 
		$this->load->view('payment_'.$this->controller.'_view',$data);
		$this->session->unset_userdata('success');
	}

	public function deleteSetting($code, $store_id = 0) {
		$this->db->query("DELETE FROM setting WHERE store_id = '0' AND `group` = '" . $this->common->getDbValue($code) . "'");
	}
	
	public function getSettingValue($key, $store_id = 0) {
		$query = $this->db->query("SELECT value FROM setting WHERE store_id = '0' AND `key` = '" . $this->common->getDbValue($key) . "'");

		if ($query->num_rows) {
			return $query->row['value'];
		} else {
			return null;	
		}
	}
	
	public function editSettingValue($code = '', $key = '', $value = '', $store_id = 0) {
		 
		
		if (!is_array($value)) {
			$this->db->query("UPDATE setting SET `value` = '" . $this->common->getDbValue($value) . "', serialized = '0'  WHERE `group` = '" . $this->common->getDbValue($code) . "' AND `key` = '" . $this->common->getDbValue($key) . "' AND store_id = '0'");
		} else {
			$this->db->query("UPDATE setting SET `value` = '" . $this->common->getDbValue(json_encode($value)) . "', serialized = '1' WHERE `group` = '" . $this->common->getDbValue($code) . "' AND `key` = '" . $this->common->getDbValue($key) . "' AND store_id = '0'");
		}
	}
	
	public function zipcodes($start=0){

		$data['activaation_id'] = $this->activaation_id;
		$data['sub_activaation_id'] =  $this->sub_activaation_id;		
		$data['TITLE'] = $this->title;	
	    $data['start'] = $start;
		$data['maxm'] = $maxm = 100;
		$data['sell_keyword'] = '';
			$data['sub_heading'] = 'Zipcode List for Cash On Delivery'; 
		$limit_qry = "LIMIT ".$start.",".$maxm;
		
		$other_para = "";
		 
///////////////
		
		$search_qry = 'WHERE id!=0 ';
		if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']!=''){
		
			 $keyword =	 filter_var($_REQUEST['keyword'], FILTER_SANITIZE_STRING);
			 $other_para = "?keyword=".$keyword;	
			 $data['sell_keyword'] = $keyword;	 
			 
			 
			$search_qry.= " AND (zipcode LIKE  '".$keyword."%'   )";
		}
		 
		$data['other_para'] = $other_para;  

		$where_cond = " $search_qry ORDER BY country_id asc,state_id asc, zipcode asc $limit_qry";
		$data['results'] = $cat_date = $this->common->getAllRow( 'zipcode_shipping',$where_cond);

		$where_cond = "  $search_qry ORDER BY country_id asc,state_id asc, zipcode asc";
		$data['num_row'] = $num_row = $this->common->numRow('zipcode_shipping',$where_cond);
////////////////
		$fun_name = $this->controller.'/zipcodes';
		$data['fun_name'] = $fun_name;
		$data['controller'] = $this->controller;

		$this->load->view($this->controller.'_zipcodes_view',$data);

	}
	
	
	public function addzipcodedata(){

     

		$data['activaation_id'] = $this->activaation_id;

		$data['sub_activaation_id'] =  $this->sub_activaation_id;		

	 

		 if(isset($_POST['mode']) && $_POST['mode']=='edit_content'){

					$sql_data_array['zipcode'] = $zipcode = $this->common->mysql_safe_string($_POST['zipcode']);
					$sql_data_array['minimum_order'] = $minimum_order = $this->common->mysql_safe_string($_POST['minimum_order']);
					$sql_data_array['maximum_order'] = $maximum_order = $this->common->mysql_safe_string($_POST['maximum_order']);
					$sql_data_array['status'] = $status = $this->common->mysql_safe_string($_POST['status']);
					//$sql_data_array['defaultflag'] = $defaultflag = $this->common->mysql_safe_string($_POST['defaultflag']);
					$error_msg = "";
					 
					if($zipcode=="") {	$error_msg.="<li>Please enter zipcodee</li>";	}
					 
 

						$where_cat = " WHERE zipcode='".$zipcode."'";

						$cat_count = $this->common->numRow('zipcode_shipping',$where_cat);

						if ($cat_count!=0) { 

							$error_msg.="Country name already exist. Please enter another zipcode<br>";
							 $newdata = array('warning'  =>$error_msg);
							$this->session->set_userdata($newdata);
						}

	

					if ($error_msg=='') {

						  $this->common->insertRecord('zipcode_shipping',$sql_data_array);

						  $newdata = array('success'  => 'Infomation added successfully! ' );

						

						$this->session->set_userdata($newdata);

						redirect($this->controller."/zipcodes");

					} else {

						$data['error_msg'] = $error_msg;

						//$data['postdata'] = $sql_data_array;

					}	

					

				} 

		  

		

		$data['activaation_id'] = $this->activaation_id;

		$data['sub_activaation_id'] = $this->sub_activaation_id;		

		$data['TITLE'] = $this->title;

		$data['sub_heading'] = 'Add Zipcode';

		$data['controller'] = $this->controller;	

			

		if (( $this->input->post('zipcode'))) {
			$data['zipcode'] = $this->input->post('zipcode');
		} else {
			$data['zipcode'] = '';
		}

		if (( $this->input->post('minimum_order'))) {
			$data['minimum_order'] = $this->input->post('minimum_order');
		} else {
			$data['minimum_order'] = '';
		}


		if (( $this->input->post('maximum_order'))) {
			$data['maximum_order'] = $this->input->post('maximum_order');
		} else {
			$data['maximum_order'] = '';
		}
		
		
		 

		$this->load->view('cod_zipcode_add_view',$data);

		$this->session->unset_userdata('success');
		$this->session->unset_userdata('warning');

	}
	public function editzipcodedata($s_id=0){

     
     $s_id = filter_var($s_id, FILTER_SANITIZE_NUMBER_INT);

	 $data['s_id'] = $s_id;

	 $data['activaation_id'] = $this->activaation_id;

	 $data['sub_activaation_id'] =  $this->sub_activaation_id;

	 
  if(isset($_POST['mode']) && $_POST['mode']=='edit_content'){

					 

						$sql_data_array['zipcode'] = $zipcode = $this->common->mysql_safe_string($_POST['zipcode']);
					$sql_data_array['minimum_order'] = $minimum_order = $this->common->mysql_safe_string($_POST['minimum_order']);
					$sql_data_array['maximum_order'] = $maximum_order = $this->common->mysql_safe_string($_POST['maximum_order']);
					$sql_data_array['status'] = $status = $this->common->mysql_safe_string($_POST['status']);
					//$sql_data_array['defaultflag'] = $defaultflag = $this->common->mysql_safe_string($_POST['defaultflag']);
					$error_msg = "";

					if($zipcode=="") {	$error_msg.="<li>Please enter zipcode</li>";	}
					 
					 $oldzipcode = $this->common->mysql_safe_string($_POST['oldzipcode']);
				 
					 

					 if($oldzipcode!=$zipcode){
					 	$where_cat = " WHERE zipcode='".$zipcode."'";
						$cat_count = $this->common->numRow('zipcode_shipping',$where_cat);
						if ($cat_count!=0) { 
							$error_msg.="zipcode already exist in our database. Please enter another<br>";
							
						}
					}
	

					if ($error_msg=='') {
							
							 
						
							$where = "id = $s_id";	

							$update_status=$this->common->updateRecord('zipcode_shipping',$sql_data_array,$where);	



							 $newdata = array(

								'success'  => 'Infomation updated successfully! ' 							 

								);

						$this->session->set_userdata($newdata);

						redirect($this->controller."/zipcodes");

					} else {

						$data['error_msg'] = $error_msg;

						 $newdata = array(

								'warning'  => $error_msg							 

								);

						$this->session->set_userdata($newdata);

					}	

					

				} 

		 
 

		

		$data['activaation_id'] = $this->activaation_id;

		$data['sub_activaation_id'] = "116_2";		

		$data['TITLE'] = $this->title;

		$data['controller'] = $this->controller;	

			

		 

		 if($s_id>0){
		 	$where_cond = "where id='".(int)$s_id."'";
			$data['staff_info'] = $staff_info = $this->common->getOneRow('zipcode_shipping',$where_cond);
		 }


  
		$data['zipcode'] = $staff_info['zipcode'];

		$data['minimum_order'] = $staff_info['minimum_order'];


		$data['maximum_order'] = $staff_info['maximum_order'];
		
		$data['status'] = $staff_info['status'];
		
		$data['country_id'] = $staff_info['country_id'];
		$data['sub_heading'] = 'Edit Zipcode'; 
		$this->load->view('cod_zipcode_edit_view',$data);
		$this->session->unset_userdata('success');
		$this->session->unset_userdata('warning');

	}
	
   public function deletezipcodedata($id=0){
	   
		$id =	 filter_var($id, FILTER_SANITIZE_NUMBER_INT);
		$where = "id ='".$id."'   ";
			$update_status = $this->common->deleteRecord('zipcode_shipping',$where);
			$newdata = array('success'  => 'Deleted successfully!' );
			$this->session->set_userdata($newdata);
			redirect($this->controller."/zipcodes/");
		
	   
   }

}