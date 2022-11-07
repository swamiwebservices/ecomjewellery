<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Customers extends CI_Controller
{
    public $db;
    public $ctrl_name = 'customers';
    public $tbl_name = 'm_customer';
    public $pg_title = 'Customers';
    public $m_act = 1;

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('common');
        $this->load->helper('security');
        $this->load->library('email');
        $this->load->helper('url_helper');
        $this->load->model('currencymodal');
        $this->load->model('ecommercemodal');
        $this->load->model('services');

        $this->db = $this->load->database('default', true);
        $this->common->check_user_session();
    }

    public function index()
    {
        $this->listall(0, '');
    }

    public function listall($start = 0, $otherparam = "")
    {

        $data['activaation_id'] = 21;
        $data['sub_activaation_id'] = '21_2';

        $data['title'] = 'Customers List';
        $data['start'] = $start;
        $data['maxm'] = $maxm = 50;
        $data['sub_heading'] = 'Category List';
        $fun_name = $this->ctrl_name . '/listall';
        $data['fun_name'] = $fun_name;
        $data['controller'] = $this->ctrl_name;

        $limit_qry = " LIMIT " . $start . "," . $maxm;

        $data['other_para'] = "";

        $data['msg'] = '';
        $error = '';
        $sub_sql = "";

        $search_qry = " WHERE cm.status_flag in ('Active','Inactive')       ";
// inner join user_master_front um on o.customer_id = cm.user_id
        $sSql = "SELECT cm.*,dl.name as domain_name, a.address_1,a.address_2, a.postcode ,mc.name as country_name, mz.name as state_name  FROM `m_customer` cm
        inner join domianslist dl on cm.store_id = dl.id
        inner join customer_address a on cm.customer_id  = a.customer_id " . $sub_sql . "
         left join m_country mc on a.country_id = mc.country_id
		 left join m_zone mz on a.zone_id = mz.zone_id
         WHERE cm.status_flag in ('Active','Inactive') and `default`=1
         ORDER BY cm.customer_id DESC";
        $query = $sSql . " " . $limit_qry;
        $query = $this->db->query($query);
        $data['results'] = $query->result_array();

        $sql = "select count('')  as numrows  from
        `m_customer` cm
        inner join customer_address a on cm.customer_id  = a.customer_id " . $sub_sql . "
        left join m_country mc on a.country_id = mc.country_id
        left join m_zone mz on a.zone_id = mz.zone_id
        WHERE cm.status_flag in ('Active','Inactive') and `default`=1       ORDER BY cm.customer_id DESC";
        $query = $this->db->query($sql);
        $resultdata = $query->row_array();
        $data['num_row'] = $resultdata['numrows']; //= $this->common->numRow($this->tablename,$where_cond);

        $this->load->view('customers_list', $data);
        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');
    }

    public function view_customer($uuid = '')
    {
        if ($uuid == "") {
            $newdata = array('warning' => 'Please select customer');
            $this->session->set_userdata($newdata);
            redirect($this->ctrl_name);
        }

        $sSql = "SELECT cm.*,a.address_id,a.country_id, a.zone_id, a.city,a.company,  a.address_1,a.address_2, a.postcode ,mc.name as country_name, mz.name as state_name  FROM `m_customer` cm
        inner join customer_address a on cm.customer_id  = a.customer_id
         left join m_country mc on a.country_id = mc.country_id
		 left join m_zone mz on a.zone_id = mz.zone_id
         WHERE cm.status_flag in ('Active','Inactive') and `default`=1 and  cm.uuid='" . $uuid . "' ";
        $query = $this->db->query($sSql);
        if($query->num_rows()>0){
            $data['records'] = $query->row_array();
        } else {
            $newdata = array('warning' => 'Oh! No such customer exist in our system');
            $this->session->set_userdata($newdata);
            redirect($this->ctrl_name);
        }
       


        $data['msg'] = '';
        $data['id'] = $uuid = (isset($uuid)) ? $this->common->mysql_safe_string($uuid) : '';
        $data['activaation_id'] = 21;
        $data['sub_activaation_id'] = '21_2';

        
        $data['sub_heading'] = 'View Customer';
        $data['controller'] = $this->ctrl_name;
        $data['back_link'] = $this->ctrl_name;
        $data['fun_name'] = 'view_customer/' . $uuid;

        $error = '';
        $data['tab'] = (isset($_GET['tab'])) ? filter_var($_GET['tab'], FILTER_SANITIZE_STRING) : 1;
        $where_edt = "uuid = '" . $uuid . "'";

        $data['back_link'] = $this->ctrl_name . '/listall';

        if (isset($_POST['mode']) && $_POST['mode'] == "submitform") {
            $error_msg = "";
            $add_in['status'] = $status = (isset($_POST['status'])) ? $this->common->mysql_safe_string($_POST['status']) : 'Active';

            $sql_data_array['firstname'] = $firstname = $this->common->mysql_safe_string($_POST['firstname']);
            $sql_data_array['lastname'] = $lastname = $this->common->mysql_safe_string($_POST['lastname']);
            $sql_data_array['email'] = $email = $this->common->mysql_safe_string($_POST['email']);
            $sql_data_array['telephone'] = $telephone = $this->common->mysql_safe_string($_POST['telephone']);

            $sql_data_array['status_flag'] = $status_flag = $this->common->mysql_safe_string($_POST['status_flag']);

            $sql_data_array_add['firstname'] = $firstname;
            $sql_data_array_add['lastname'] = $lastname;
            $sql_data_array_add['company'] = $company = $this->common->mysql_safe_string($_POST['company']);
            $sql_data_array_add['address_1'] = $address_1 = $this->common->mysql_safe_string($_POST['address_1']);
            $sql_data_array_add['address_2'] = $address_2 = $this->common->mysql_safe_string($_POST['address_2']);

            $sql_data_array_add['postcode'] = $postcode = $this->common->mysql_safe_string($_POST['postcode']);
            $sql_data_array_add['city'] = $city = $this->common->mysql_safe_string($_POST['city']);
            $sql_data_array_add['country_id'] = $country_id = $this->common->mysql_safe_string($_POST['country_id']);
            $sql_data_array_add['zone_id'] = $zone_id = $this->common->mysql_safe_string($_POST['zone_id']);

            $oldemail = $this->common->mysql_safe_string($_POST['oldemail']);

            if ($firstname == "") {$error_msg .= "<li>Please enter first   name</li>";}
            if ($lastname == "") {$error_msg .= "<li>Please enter  last name</li>";}
            if ($email == "") {$error_msg .= "<li>Please enter email</li>";}

            if ($address_1 == "") {$error_msg .= "<li>Please enter address 1</li>";}
            if ($postcode == "") {$error_msg .= "<li>Please enter postal code</li>";}
            if ($city == "") {$error_msg .= "<li>Please enter city</li>";}
            //if($country=="") {    $error_msg.="<li>Please enter country</li>";}

            if ($oldemail != $email) {
                $where_cat = "WHERE email='" . $email . "'";
                $cat_count = $this->common->numRow('m_customer', $where_cat);
                if ($cat_count != 0) {
                    $error_msg .= "User/Email name already exist in our database. Please enter another<br>";
                }
            }

            if ($error_msg == '') {

                $where = "uuid = '" . $uuid . "'";
                $update_status = $this->common->updateRecord('m_customer', $sql_data_array, $where);

                $where = "customer_id = '" . $data['records']['customer_id'] . "'  ";
                $update_status = $this->common->updateRecord('customer_address', $sql_data_array_add, $where);

                $this->session->set_flashdata('success', 'Information updated successfully.');

                redirect($this->ctrl_name);
            } else {
                $this->session->set_flashdata('error', $error_msg);
                //$data['postdata'] = $sql_data_array;
            }

        }
        if (isset($_POST['mode']) && $_POST['mode'] == "edit_content_password") {
            $error_msg = "";
            $password = $this->common->mysql_safe_string($_POST['password']);
            $confirm = $this->common->mysql_safe_string($_POST['confirm']);
            if ($password == '') {$error .= "Please enter password<br>";}
            if ($confirm == '') {$error .= "Please enter confirm password<br>";}
            if ($password != "") {
                if ($password != $confirm) {$error .= "<li>Password and confirm does not match!</li>";}
              
            }

          
            if ($error == '') {
                
                $array['password'] = $password;
                $where_edt = "uuid = '" . $uuid . "'";
                $update_status = $this->common->updateRecord('m_customer', $array, $where_edt);

                $this->session->set_flashdata('success', 'Information updated succssfully..');

                redirect($this->ctrl_name . '/view_customer/' . $uuid . "?tab=1");
            }
        }

     
        // inner join user_master_front um on o.customer_id = cm.user_id

        // $data['start'] = 0;
        // $data['maxm'] = $maxm = 50;

        // if ( isset( $_GET['page'] ) && $_GET['page'] != '' ) {
        //     $page = filter_var( $_GET['page'], FILTER_SANITIZE_STRING );

        //     $data['page'] = $page;

        // } //isset( $_GET['page'] ) && $_GET['page'] != ''
        // else {
        //     $page         = 0;
        //     $data['page'] = 0;

        // }
        // $start_temp = ( ( $page == 0 ) ? 0 : $page - 1 );
        // $start      = $start_temp * $maxm;

        // if ( $start < 0 )
        //     $start = 0;

        // $data['start'] = $page;

        // $limit_qry = "LIMIT " . $start . "," . $maxm;
        // $sSql = "SELECT o.payment_method, o.order_id, o.oorder_uid,o.invoice_no,o.customer_id,o.total,o.date_added,o.date_modified ,o.shipping_firstname,o.shipping_lastname,o.telephone ,cm.user_id,cm.first_name, cm.last_name, cm.mobile, cm.parent_id   FROM `order_master` o
        // inner join master_order_status os on o.order_status_id = os.order_status_id
        // inner join user_master_front um  on o.customer_id = cm.user_id
        //  where customer_id in ($child_user_id_exp)    and o.order_status_id in (4)
        // ORDER BY o.order_id DESC ".$limit_qry;

        // $query = $this->db->query($sSql);
        // $data['order_completed'] =  $query->result_array();

        // $sSql = "SELECT  count('') as order_completed_total  FROM `order_master` o
        // inner join master_order_status os on o.order_status_id = os.order_status_id
        // inner join user_master_front um  on o.customer_id = cm.user_id
        //  where customer_id in ($child_user_id_exp)    and o.order_status_id in (4)
        // ORDER BY o.order_id DESC ";

        // $query = $this->db->query($sSql);
        // $order_completed_total =  $query->row_array();
        // $data['order_completed_total'] = $order_completed_total['order_completed_total'];

        // $fun_name = $this->ctrl_name ."/view_customer/".$id;
        // $data['other_para'] = "tab=3";

        // $data['fun_name'] = $fun_name . "?" . $data['other_para'];

        // $sSql = "SELECT o.payment_method, o.order_id, o.oorder_uid,o.invoice_no,o.customer_id,o.total,o.date_added,o.date_modified ,o.shipping_firstname,o.shipping_lastname,o.telephone ,cm.user_id,cm.first_name, cm.last_name, cm.mobile, cm.parent_id   FROM `order_master` o
        // inner join master_order_status os on o.order_status_id = os.order_status_id
        // inner join user_master_front um  on o.customer_id = cm.user_id
        //  where customer_id in ($child_user_id_exp)    and o.order_status_id in (1,2,3)
        // ORDER BY o.order_id DESC ";

        // $query = $this->db->query($sSql);
        // $data['order_inprocess'] =  $query->result_array();

        $this->load->view('view_customer', $data);
        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');

    }
    public function getZonesByCountryId($country_id = 99)
    {

        $json = array(

            'zone' => $this->common->getZonesByCountryId($country_id),

        );

        echo json_encode($json);
    }
    public function deletedata($id=0) {

		$id =	 filter_var($id, FILTER_SANITIZE_STRING);
		
        $sql_data_array['status_flag'] = 'Deleted';
        $add_in['updated_at'] =  date("Y-m-d H:i:s");
		$where_edt = "uuid = '{$id}'";
		$update_status=$this->common->updateRecord('m_customer',$sql_data_array,$where_edt);	
    
        $newdata = array( 'success'  => 'Deleted Successfully: ! ');
		$this->session->set_flashdata($newdata);
	    redirect($this->ctrl_name);
		  
	}	
    public function sendEmail($s_id=0,$activetab=1)
	{
        $s_id =	 filter_var($s_id, FILTER_SANITIZE_NUMBER_INT);
	   	$data['activaation_id'] = $this->activaation_id;
		$data['sub_activaation_id'] = "102_1";		
		$data['TITLE'] = $this->title;
		$data['controller'] = $this->controller;	
 		$data['s_id'] 		 		= $s_id;
		$data['sub_heading'] = 'Edit Customer';  	
		if(isset($_POST['mode']) && $_POST['mode']=='edit_content_sendmail'){
					 
				
				 	$sql_data_array['subject'] = $subject = $this->common->mysql_safe_string($_POST['subject']);
					$sql_data_array['message'] = $message = $this->common->mysql_safe_string($_POST['message']);
					 
					$error_msg = "";
					 
					if($subject=="") {	$error_msg.="<li>Please enter subject</li>";	} 
					if($message=="") {	$error_msg.="<li>Please enter message</li>";	}
					 
					 
					
					 
					if ($error_msg=='') {
						 
						  $sql_data_array['customer_id'] = $s_id;
						  $sql_data_array['message'] = $message;
						  $sql_data_array['date_added'] = date("Y-m-d h:i:s");
						 
							 
							 $this->common->insertRecord('customer_history',$sql_data_array);
							 $newdata = array(
								'success'  => 'Message sent successfully! ' 
							 
								);
						 
						 
						
						$this->session->set_userdata($newdata);
						redirect($this->controller);
					} else {
						 $newdata = array(
								'warning'  => $error_msg 
							 
								);
						$this->session->set_userdata($newdata);
					}	
					
				} 
		 
		 $address_data_info = array();
	 	 $data_info = array();
	 	
		 
		 if($s_id>0){
		 	$where_cond = "where customer_id='".(int)$s_id."'";
			$data_info = $this->common->getOneRow($this->tablename,$where_cond);
			if(!sizeof($data_info)){
				$newdata = array('warning'  => 'Please select customer' );
				$this->session->set_userdata($newdata);
				redirect($this->controller);
				  
			 }
			 
			 $where_cond = "where customer_id='".(int)$s_id."' and address_id = '".$data_info['address_id']."' ";
			$address_data_info = $this->common->getOneRow('address',$where_cond);
		 }

		 
		$data['records'] = $data_info;
		$data['records_address'] = $address_data_info;  
		$data['customer_id'] = $data_info['customer_id'];
		$data['sub_heading'] = 'Edit Customer';  
		 
		$this->load->view('customer_sendmail_view',$data);
 		
		  

 			 
		$this->session->unset_userdata('success');
		$this->session->unset_userdata('warning');
	}	
}
