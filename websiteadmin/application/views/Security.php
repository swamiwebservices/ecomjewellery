<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/**
 * Security
 *
 * @package Getlised.in
 * @subpackage Manage Security
 * @category Security boy
 * @version    1.0
 * @updated    21/04/2020
 */
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\LabelAlignment;
use Endroid\QrCode\QrCode;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;
use Ramsey\Uuid\Uuid;

class Security extends CI_Controller
{
    public $db;
    public $ctrl_name = 'security';
    public $tbl_name = 'user_master_front';

    public $pg_title = ' Security boy';
    public $m_act = 4;

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('common');
        $this->load->helper('security');
        $this->load->library('email');
        $this->load->helper('url_helper');
        $this->db = $this->load->database('default', true);
        $this->common->check_user_session();
    }

    public function index()
    {
        $this->listall();
    }

    public function listall()
    {

        $data['title'] = 'Security';
        $data['l_s_act'] = 3;
        $data['sub_heading'] = 'Security List';

        $search_qry = " WHERE status in ('Active','Inactive')  and user_type='SEC'  order by added_date desc  ";

        $data['results'] = $this->common->getRecordsLimit($this->tbl_name, $search_qry, 0, 0);

        $data['controller'] = $this->ctrl_name;

        $this->load->view('security_listall', $data);
        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');
    }

    public function inventory(){

        $data['title'] = 'Inventory';
        $data['l_s_act'] = 4;
        $data['sub_heading'] = 'Inventory List';

        $search_qry = " WHERE status in ('Active','Inactive') AND check_out_secu=0  order by inv_id desc  ";

        $data['results'] = $this->common->getRecordsLimit('inventory_master', $search_qry, 0, 0);

        $data['controller'] = $this->ctrl_name;

        $this->load->view('inventory_listall', $data);
        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');
    }
	
	
	
    public function checkout_in(){

        $data['title'] = 'Security';
        $data['l_s_act'] = 6;
        $data['sub_heading'] = 'Security Check Out';

        $search_qry = " WHERE status in ('Active','Inactive') AND check_out_secu!=0 order by inv_id desc  ";

        $data['results'] = $this->common->getRecordsLimit('inventory_master', $search_qry, 0, 0);

        $data['controller'] = $this->ctrl_name;

        $this->load->view('checkout_listall', $data);
        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');
    }	
	
    public function checkin(){

        $data['title'] = 'Security';
        $data['l_s_act'] = 7;
        $data['sub_heading'] = 'Security Check In';

        $search_qry = " WHERE status in ('Active','Inactive') AND check_in_secu!=0  order by added_date desc  ";

        $data['results'] = $this->common->getRecordsLimit('inventory_master', $search_qry, 0, 0);

        $data['controller'] = $this->ctrl_name;

        $this->load->view('inventory_listall', $data);
        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');
    }
		
    public function coolbox(){

        $data['title'] = 'Cool Boxes';
        $data['l_s_act'] = 5;
        $data['sub_heading'] = 'Cool Boxes List';

        $search_qry = " WHERE status in ('Active','Inactive')  order by id desc  ";

        $data['results'] = $this->common->getRecordsLimit('coolbox_master', $search_qry, 0, 0);

        $data['controller'] = $this->ctrl_name;

        $this->load->view('coolbox_listall', $data);
        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');
    }	
		
    public function adddata()
    {

        $session_user_data = $this->session->userdata('user_data');

        $data['l_s_act'] = 3;

        $data['title'] = 'Security';
        $data['sub_heading'] = 'Add New';
        $data['controller'] = $this->ctrl_name;
        $data['fun'] = "adddata";
        $error = '';

        if (isset($_POST['mode']) && $_POST['mode'] == "submitform") {

           
            $add_in = array();
            $add_in['first_name'] = $first_name = (isset($_POST['first_name'])) ? $this->common->mysql_safe_string($_POST['first_name']) : '';
            $add_in['last_name'] = $last_name = (isset($_POST['last_name'])) ? $this->common->mysql_safe_string($_POST['last_name']) : '';
			$add_in['middle_name'] = $middle_name = (isset($_POST['middle_name'])) ? $this->common->mysql_safe_string($_POST['middle_name']) : NULL;
            $add_in['email'] = $email = (isset($_POST['email'])) ? $this->common->mysql_safe_string($_POST['email']) : '';
            $add_in['mobile'] = $mobile = (isset($_POST['mobile'])) ? $this->common->mysql_safe_string($_POST['mobile']) : NULL;
            $add_in['gender'] = $gender = (isset($_POST['gender'])) ? $this->common->mysql_safe_string($_POST['gender']) : NULL;
            $add_in['age'] = $age = (isset($_POST['age'])) ? $this->common->mysql_safe_string($_POST['age']) : '0';
            $add_in['status'] = $status = (isset($_POST['status'])) ? $this->common->mysql_safe_string($_POST['status']) : 'Active';
			
            if (isset($_FILES['profile_pic'])) {
                if ($_FILES['profile_pic']['name'] != "") {
                    $pusti = $this->common->gen_key(10);
                    $extension = strstr($_FILES['profile_pic']['name'], ".");
                    $thumbpath = $_FILES['profile_pic']['name'];
                    $thumbpath = preg_replace("/[^a-zA-Z0-9.]/", "", $thumbpath);
                    copy($_FILES['profile_pic']['tmp_name'], "../uploads/profile_pics/" . $pusti . $thumbpath);
                    $add_in['profile_pic'] = $pusti . $thumbpath;
                }
            }  			

        //  $add_in['mobile_device_id'] = $mobile_device_id = (isset($_POST['mobile_device_id'])) ? $this->common->mysql_safe_string($_POST['mobile_device_id']) : '0';
            

        $add_in['passphrase'] =    $password = $this->common->mysql_safe_string($_POST['password']);
            if ($first_name == '') {
                $error .= "Please enter first name<br>";
            }
            if ($middle_name == '') {
                $add_in['middle_name']=NULL;
            }
            if ($last_name == '') {
                $error .= "Please enter first name<br>";
            }
			
            if ($mobile == '') {
                $error .= "Please enter mobile<br>";
            }
           
            if ($password == '') {
                $error .= "Please enter password<br>";
            }
            if ($status == '') {
                $error .= "Please select status<br>";
            }

              $chkUserInfo = $this->common->getSingleInfoBy($this->tbl_name,'mobile',$mobile);
           // $chkUserInfo = $this->common->getSingleInfoBy('login_credentials_front', 'username', $email);
            if (sizeof($chkUserInfo) > 0) {
                $error = "$mobile  is already registered";
            }

            if ($error == '') {
             
                $add_in['user_type'] = 'SEC';
                $add_in['added_date'] = date("Y-m-d h:i:s");
                $add_in['edit_date'] =date("Y-m-d h:i:s");
             //   $add_in['added_by_userid'] = $session_user_data['user_id'];
             //   $add_in['edit_by_userid'] = $session_user_data['user_id'];

                $this->db->insert($this->tbl_name, $add_in);
                	////////////end of code
                //$chkUserInfo = $this->common->getSingleInfoBy($this->tbl_name, 'email', $email);
               
				
				
				 
					 
              
               /*  if((int)$mobile_device_id>0){
                    
                    $array = array(
                        'driver_security_id' => $chkUserInfo['id'],
                    );
                   
                    $this->db->where('id', $mobile_device_id);
                    $this->db->update('master_mobile_phones', $array);
    
                } */

                $this->session->set_flashdata('success', 'Information added succssfully!');
                redirect($this->ctrl_name . '/listall');
            } else {
                $this->session->set_flashdata('error', $error);
            }
        }

        $data_info = (isset($_POST)) ? $_POST : '';
        $data['records'] = $data_info;
        $this->load->view('security_adddata', $data);

        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');
    }
	
    public function cust_box_assign($uuid = 0){

        $session_user_data = $this->session->userdata('user_data');
        $uuid = filter_var($uuid, FILTER_SANITIZE_STRING);

        $data['uuid'] = $uuid;
		$data['l_s_act'] = 5;

        $data['title'] = 'Cool Boxes';
        $data['sub_heading'] = 'Assign to customer';
        $data['controller'] = $this->ctrl_name;
        $data['fun'] = "adddata";
        $error = '';
        $error = '';
		
        if (isset($_POST['mode']) && $_POST['mode'] == "submitform") {

            $add_in = array();
            $add_in['cust_id'] = $cust_id = (isset($_POST['cust_id'])) ? $this->common->mysql_safe_string($_POST['cust_id']) : '';
            $add_in['qty'] = $qty = (isset($_POST['qty'])) ? $this->common->mysql_safe_string($_POST['qty']) : '';
            $add_in['box_id'] = $uuid;
			
			$qrData['uuid'] = $uuid;
			$qrData['cust_id'] = $cust_id;			
            $qrcode_info = $this->generateQRCode($qrData);
            $add_in['qr_code'] = $qrcode_info;
			
            //$add_in['qr_code'] = $qr_code;


            if ($cust_id == '') {
                $error .= "Please select customer<br>";
            }

            if ($qty == '') {
                $error .= "Please enter quantity<br>";
            }


            if ($error == '') {
                $add_in['added_date'] =date("Y-m-d h:i:s");
                $this->db->insert('coolbox_cust_master', $add_in);
                $this->session->set_flashdata('success', 'Cool box succssfully assigned!');
                redirect($this->ctrl_name . '/cust_box_assign/'.$uuid);
            } else {
                $this->session->set_flashdata('error', $error);
            }

            $data_info = $_POST;
        } else {

            $data_info = $this->common->getSingleInfoBy('coolbox_master', 'id', $uuid, '*');
        }

        //print_r($data_info);
        if (sizeof($data_info) == 0) {
            $newdata = array('warning' => 'Please select data!');
            $this->session->set_flashdata($newdata);
            redirect($this->ctrl_name.'/coolbox');
        }
        $data['records'] = $data_info;
		

        $cust_sql = " SELECT user_id,first_name, middle_name, last_name, mobile, email FROM user_master_front WHERE user_type='CUST' AND business_type='Enterprise' AND status in ('Active','Inactive')  order by first_name  ";
        $query_result = $this->db->query($cust_sql);
        $data['customers'] = $customers = $query_result->result_array();

        $cust_sql = " SELECT * FROM coolbox_cust_master WHERE status in ('Active','Inactive') AND box_id=".$uuid." order by id desc  ";
        $query_result = $this->db->query($cust_sql);
        $data['box_assigned'] = $box_assigned = $query_result->result_array();
		
        $this->load->view('cust_box_assign', $data);

        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');
    }
	

    public function addcoolbox() {

        $session_user_data = $this->session->userdata('user_data');

        $data['l_s_act'] = 5;

        $data['title'] = 'Cool Boxes';
        $data['sub_heading'] = 'Add New';
        $data['controller'] = $this->ctrl_name;
        $data['fun'] = "adddata";
        $error = '';

        if (isset($_POST['mode']) && $_POST['mode'] == "submitform") {

           
            $add_in = array();
            $add_in['box_name'] = $box_name = (isset($_POST['box_name'])) ? $this->common->mysql_safe_string($_POST['box_name']) : '';
			$add_in['box_name_en'] = $box_name_en = (isset($_POST['box_name_en'])) ? $this->common->mysql_safe_string($_POST['box_name_en']) : '';
            $add_in['box_size'] = $box_size = (isset($_POST['box_size'])) ? $this->common->mysql_safe_string($_POST['box_size']) : '';
            $add_in['status'] = $status = (isset($_POST['status'])) ? $this->common->mysql_safe_string($_POST['status']) : 'Active';

            if ($box_name == '') {
                $error .= "Please enter box name<br>";
            }

            if ($box_size == '') {
                $error .= "Please enter box size<br>";
            }
			
            /*$chkUserInfo = $this->common->getSingleInfoBy('coolbox_master','box_name',$box_name);
            if (sizeof($chkUserInfo) > 0) {
                $error = "$box_name  is already registered";
            }*/

            if ($error == '') {
                $this->db->insert('coolbox_master', $add_in);
                $this->session->set_flashdata('success', 'Information added succssfully!');
                redirect($this->ctrl_name . '/coolbox');
            } else {
                $this->session->set_flashdata('error', $error);
            }
        }

        $data_info = (isset($_POST)) ? $_POST : '';
        $data['records'] = $data_info;
        $this->load->view('coolbox_adddata', $data);

        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');
    }	
	
    public function addinv()
    {

        $session_user_data = $this->session->userdata('user_data');

        $data['l_s_act'] = 4;

        $data['title'] = 'Inventory';
        $data['sub_heading'] = 'Add New';
        $data['controller'] = $this->ctrl_name;
        $data['fun'] = "adddata";
        $error = '';

        if (isset($_POST['mode']) && $_POST['mode'] == "submitform") {

           
            $add_in = array();
			
			if(isset($_POST['inv_date']) && $_POST['inv_date']!='') {
				$inv_date = explode("/",$_POST['inv_date']);				
				$inv_date = $inv_date[2].'-'.$inv_date[0].'-'.$inv_date[1];
				$add_in['inv_date'] = $inv_date;				
			}
			
			$driver_id = explode("##",$this->common->mysql_safe_string($_POST['driver_id']));
			$add_in['driver_id'] = $driver_id[0];
			$add_in['inv_qr_code'] = $driver_id[1];
			$add_in['vehicle_id'] = $vehicle_id = (isset($_POST['vehicle_id'])) ? $this->common->mysql_safe_string($_POST['vehicle_id']) : '';
            $add_in['status'] = $status = (isset($_POST['status'])) ? $this->common->mysql_safe_string($_POST['status']) : 'Active';

            if ($driver_id == '') {
                $error .= "Please select driver<br>";
            }
			
            if ($vehicle_id == '') {
                $error .= "Please select vehicle<br>";
            }
			
            if ($status == '') {
                $error .= "Please select status<br>";
            }
			
			$chk_sql = "SELECT * FROM  inventory_master    where  driver_id = '" . $driver_id[0] . "' AND inv_date='".$inv_date."' ";
			
            $query = $this->db->query($chk_sql);
            if ($query->num_rows() > 0) {
				$error .= "Selected driver inventry is already created.<br>";
            }
			
            if ($error == '') {
             
                $add_in['added_date'] = date("Y-m-d h:i:s");
                $add_in['edit_date'] = date("Y-m-d h:i:s");				
				
                $this->db->insert('inventory_master', $add_in);
             	////////////end of code
                $this->session->set_flashdata('success', 'Inventory has been created successfully!');
                redirect($this->ctrl_name . '/inventory');
            } else {
                $this->session->set_flashdata('error', $error);
            }
        }

        $data_info = (isset($_POST)) ? $_POST : '';
        $data['records'] = $data_info;

        $where_cond = " WHERE  status!='Delete'  order by added_date desc";
        $data['vehicle'] = $vehicle = $this->common->getAllRow('master_vehicles', $where_cond);

        $sql = "select user_id,first_name,middle_name,last_name,qr_code, user_type, status,concat(first_name,' ',middle_name,' ',last_name) as name from  user_master_front where user_type in ('DRI') and  status!='Delete' AND qr_code!='' order by user_type , name asc   ";
        $query_result = $this->db->query($sql);
        $data['drivers'] = $drivers = $query_result->result_array();
				
        $this->load->view('security_add_inv', $data);

        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');
    }	

    public function editdata($uuid = 0)
    {

        $session_user_data = $this->session->userdata('user_data');
        $uuid = filter_var($uuid, FILTER_SANITIZE_STRING);
        $data['l_s_act'] = 3;

        $data['title'] = 'Security';
        $data['sub_heading'] = 'Edit';
        $data['controller'] = $this->ctrl_name;
        $data['uuid'] = $uuid;
        $error = '';
        $data['sub_heading'] = 'Edit';
        $data['controller'] = $this->ctrl_name;
        $data['uuid'] = $uuid;
        $error = '';
        if (isset($_POST['mode']) && $_POST['mode'] == "edit_content_password") {
            $login_password = $this->common->mysql_safe_string($_POST['login_password']);
            $mobile = $this->common->mysql_safe_string($_POST['mobile']);
            if ($login_password == '') {$error .= "Please enter password<br>";}
            if ($error == '') {
                $passphrase = $login_password;
                $array = array(
                    'passphrase' => $passphrase,
                );
                 $this->db->where('user_id', $uuid);
                 $this->db->update($this->tbl_name, $array);
                $this->session->set_flashdata('success', 'Information updated succssfully..');
                redirect($this->ctrl_name . '/listall');
            }
        }
        if (isset($_POST['mode']) && $_POST['mode'] == "submitform") {

            $add_in = array();
            $add_in['first_name'] = $first_name = (isset($_POST['first_name'])) ? $this->common->mysql_safe_string($_POST['first_name']) : '';
            $add_in['last_name'] = $last_name = (isset($_POST['last_name'])) ? $this->common->mysql_safe_string($_POST['last_name']) : '';
            $add_in['middle_name'] = $middle_name = (isset($_POST['middle_name'])) ? $this->common->mysql_safe_string($_POST['middle_name']) : NULL;
            $add_in['email'] = $email = (isset($_POST['email'])) ? $this->common->mysql_safe_string($_POST['email']) : '';
            $add_in['mobile'] = $mobile = (isset($_POST['mobile'])) ? $this->common->mysql_safe_string($_POST['mobile']) : NULL;
            $add_in['gender'] = $gender = (isset($_POST['gender'])) ? $this->common->mysql_safe_string($_POST['gender']) : NULL;
            $add_in['age'] = $age = (isset($_POST['age'])) ? $this->common->mysql_safe_string($_POST['age']) : '0';           
            //$add_in['city_id'] = (int)$city_id = (isset($_POST['city_id'])) ? $this->common->mysql_safe_string($_POST['city_id']) : '0';
            //$add_in['zone_id'] =  (int) $zone_id = (isset($_POST['zone_id'])) ? $this->common->mysql_safe_string($_POST['zone_id']) : '0';
            $add_in['status'] = $status = (isset($_POST['status'])) ? $this->common->mysql_safe_string($_POST['status']) : 'Active';
			
            if (isset($_FILES['profile_pic'])) {
                if ($_FILES['profile_pic']['name'] != "") {
                    $pusti = $this->common->gen_key(10);
                    $extension = strstr($_FILES['profile_pic']['name'], ".");
                    $thumbpath = $_FILES['profile_pic']['name'];
                    $thumbpath = preg_replace("/[^a-zA-Z0-9.]/", "", $thumbpath);
                    copy($_FILES['profile_pic']['tmp_name'], "../uploads/profile_pics/" . $pusti . $thumbpath);
                    $add_in['profile_pic'] = $pusti . $thumbpath;
                }
            } 			

          //  $add_in['mobile_device_id'] = $mobile_device_id = (isset($_POST['mobile_device_id'])) ? $this->common->mysql_safe_string($_POST['mobile_device_id']) : '0';

            $mobile_old = (isset($_POST['mobile_old'])) ? $this->common->mysql_safe_string($_POST['mobile_old']) : '';

            if ($first_name == '') {
                $error .= "Please enter first name<br>";
            }
            if ($middle_name == '') {
                $add_in['middle_name']=NULL;
            }
            if ($last_name == '') {
                $error .= "Please enter first name<br>";
            }

            
            if ($mobile == '') {
                $error .= "Please enter mobile<br>";
            }
			
            if ($status == '') {
                $error .= "Please select status<br>";
            }
            if ($mobile_old != $mobile) {
                //$chkUserInfo = $this->common->getSingleInfoBy($this->tbl_name,'email',$email);
                $chkUserInfo = $this->common->getSingleInfoBy('login_credentials_front', 'mobile', $mobile);
                if (sizeof($chkinfo) > 0) {
                    $error = "$mobile Mobile address is already registered";
                }
            }

            if ($error == '') {
             //   $data_info = $this->common->getSingleInfoBy($this->tbl_name, 'uuid', $uuid, '*');
                $add_in['edit_date'] =date("Y-m-d h:i:s");

              //  $add_in['edit_by_userid'] = $session_user_data['user_id'];

                $this->db->where('user_id', $uuid);
                $this->db->update($this->tbl_name, $add_in);

               
               
                

             /*    if ((int) $mobile_device_id > 0) {

                    $array = array(
                        'driver_security_id' => $data_info['id']
                    );

                    $this->db->where('id', $mobile_device_id);
                    $this->db->update('master_mobile_phones', $array);

                } else {
                    $array = array(
                        'driver_security_id' => 0
                    );

                    $this->db->where('id', $data_info['mobile_device_id']);
                    $this->db->update('master_mobile_phones', $array);
                } */

                $this->session->set_flashdata('success', 'Information updated succssfully!');
                redirect($this->ctrl_name . '/listall');
            } else {
                $this->session->set_flashdata('error', $error);
            }

            $data_info = $_POST;
        } else {

            $data_info = $this->common->getSingleInfoBy($this->tbl_name, 'user_id', $uuid, '*');
        }

        //print_r($data_info);
        if (sizeof($data_info) == 0) {
            $newdata = array('warning' => 'Please select data!');
            $this->session->set_flashdata($newdata);
            redirect($this->ctrl_name);
        }
        $data['records'] = $data_info;
        $this->load->view('security_editdata', $data);

        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');
    }
	
	
    public function editcoolbox($uuid = 0){

        $session_user_data = $this->session->userdata('user_data');
        $uuid = filter_var($uuid, FILTER_SANITIZE_STRING);
        $data['l_s_act'] = 5;

        $data['title'] = 'Cool Boxes';
        $data['sub_heading'] = 'Edit';
        $data['controller'] = $this->ctrl_name;
        $data['uuid'] = $uuid;
        $error = '';
        $data['sub_heading'] = 'Edit';
        $data['controller'] = $this->ctrl_name;
        $data['uuid'] = $uuid;
        $error = '';

        if (isset($_POST['mode']) && $_POST['mode'] == "submitform") {

            $add_in = array();
            $add_in['box_name'] = $box_name = (isset($_POST['box_name'])) ? $this->common->mysql_safe_string($_POST['box_name']) : '';
			$add_in['box_name_en'] = $box_name_en = (isset($_POST['box_name_en'])) ? $this->common->mysql_safe_string($_POST['box_name_en']) : '';
            $add_in['box_size'] = $box_size = (isset($_POST['box_size'])) ? $this->common->mysql_safe_string($_POST['box_size']) : '';
            $add_in['status'] = $status = (isset($_POST['status'])) ? $this->common->mysql_safe_string($_POST['status']) : 'Active';

            if ($box_name == '') {
                $error .= "Please enter box name<br>";
            }

            if ($box_size == '') {
                $error .= "Please enter box size<br>";
            }
			
            if ($error == '') {
                $this->db->where('id', $uuid);
                $this->db->update('coolbox_master', $add_in);
                $this->session->set_flashdata('success', 'Information updated succssfully!');
                redirect($this->ctrl_name . '/coolbox');
            } else {
                $this->session->set_flashdata('error', $error);
            }

            $data_info = $_POST;
        } else {

            $data_info = $this->common->getSingleInfoBy('coolbox_master', 'id', $uuid, '*');
        }

        //print_r($data_info);
        if (sizeof($data_info) == 0) {
            $newdata = array('warning' => 'Please select data!');
            $this->session->set_flashdata($newdata);
            redirect($this->ctrl_name);
        }
        $data['records'] = $data_info;
        $this->load->view('coolbox_editdata', $data);

        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');
    }	
	
	
    public function editinv($uuid = 0){

        $session_user_data = $this->session->userdata('user_data');
        $uuid = filter_var($uuid, FILTER_SANITIZE_STRING);
        $data['l_s_act'] = 4;

        $data['title'] = 'Inventory';
        $data['sub_heading'] = 'Edit';
        $data['controller'] = $this->ctrl_name;
        $data['uuid'] = $uuid;
        $error = '';
        $data['sub_heading'] = 'Edit';
        $data['controller'] = $this->ctrl_name;
        $data['uuid'] = $uuid;
        $error = '';

        if (isset($_POST['mode']) && $_POST['mode'] == "submitform") {

			if(isset($_POST['inv_date']) && $_POST['inv_date']!='') {
				$inv_date = explode("/",$_POST['inv_date']);				
				$inv_date = $inv_date[2].'-'.$inv_date[0].'-'.$inv_date[1];
				$add_in['inv_date'] = $inv_date;				
			}
			
			$driver_id = explode("##",$this->common->mysql_safe_string($_POST['driver_id']));
			$add_in['driver_id'] = $driver_id[0];
			$add_in['inv_qr_code'] = $driver_id[1];
			$add_in['vehicle_id'] = $vehicle_id = (isset($_POST['vehicle_id'])) ? $this->common->mysql_safe_string($_POST['vehicle_id']) : '';
            $add_in['status'] = $status = (isset($_POST['status'])) ? $this->common->mysql_safe_string($_POST['status']) : 'Active';

            if ($driver_id == '') {
                $error .= "Please select driver<br>";
            }
			
            if ($vehicle_id == '') {
                $error .= "Please select vehicle<br>";
            }
			
            if ($status == '') {
                $error .= "Please select status<br>";
            }

            if ($error == '') {
                $add_in['edit_date'] = date("Y-m-d h:i:s");				

                $this->db->where('inv_id', $uuid);
                $this->db->update('inventory_master', $add_in);

                $this->session->set_flashdata('success', 'Inventory has been updated successfully!');
                redirect($this->ctrl_name . '/inventory');
            } else {
                $this->session->set_flashdata('error', $error);
            }

            $data_info = $_POST;
        } else {

            $data_info = $this->common->getSingleInfoBy('inventory_master', 'inv_id', $uuid, '*');
        }

        //print_r($data_info);
        if (sizeof($data_info) == 0) {
            $newdata = array('warning' => 'Please select data!');
            $this->session->set_flashdata($newdata);
            redirect($this->ctrl_name);
        }
        $data['records'] = $data_info;
		
        $where_cond = " WHERE  status!='Delete'  order by added_date desc";
        $data['vehicle'] = $vehicle = $this->common->getAllRow('master_vehicles', $where_cond);

        $sql = "select user_id,first_name,middle_name,last_name,qr_code, user_type, status,concat(first_name,' ',middle_name,' ',last_name) as name from 	user_master_front where user_type in ('DRI') and  status!='Delete' order by user_type , name asc   ";
        $query_result = $this->db->query($sql);
        $data['drivers'] = $drivers = $query_result->result_array();
		
        $this->load->view('security_edit_inv', $data);

        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');
    }	
	
	
    public function inv_items($uuid = 0){

        $session_user_data = $this->session->userdata('user_data');
        $uuid = filter_var($uuid, FILTER_SANITIZE_STRING);
        $data['l_s_act'] = 4;

        $data['title'] = 'Inventory';
        $data['sub_heading'] = 'Edit';
        $data['controller'] = $this->ctrl_name;
        $data['uuid'] = $uuid;
        $error = '';
        $data['sub_heading'] = 'Manage Items';
        $data['controller'] = $this->ctrl_name;
        $data['uuid'] = $uuid;
        $error = '';

        if (isset($_POST['mode']) && $_POST['mode'] == "submitform") {
            $add_in = array();
            $add_in['inv_id'] = $uuid;
			
			$item_type = (isset($_POST['item_type'])) ? $this->common->mysql_safe_string($_POST['item_type']) : 'PRO';
			
			if($item_type=='PRO') {
				$product_id = explode("##",$this->common->mysql_safe_string($_POST['product_id']));
				$add_in['prod_id'] = $product_id[0];
				$add_in['prod_name'] = $product_id[1];
				$add_in['prod_name_en'] = $product_id[2];
				$add_in['prod_chk_out_qty'] = $prod_chk_in_qty = (isset($_POST['prod_chk_out_qty'])) ? $this->common->mysql_safe_string($_POST['prod_chk_out_qty']) : '0';
			} else { 
				$product_id = explode("##",$this->common->mysql_safe_string($_POST['coolbox_id']));
				$add_in['prod_id'] = $product_id[0];
				$add_in['prod_name'] = $product_id[1];
				$add_in['prod_name_en'] = $product_id[2];
				//$add_in['prod_chk_out_qty'] = $coolbox_chk_in_qty = (isset($_POST['coolbox_chk_in_qty'])) ? $this->common->mysql_safe_string($_POST['coolbox_chk_in_qty']) : '0';
				$add_in['prod_chk_out_qty'] = $product_id[3];
			}
			$add_in['item_type'] = $item_type = (isset($_POST['item_type'])) ? $this->common->mysql_safe_string($_POST['item_type']) : 'PRO';

            if ($product_id == '') {
                $error .= "Please select product<br>";
            }
			
			
            if ($error == '') {
                $this->db->insert('inventory_receipt', $add_in);
                $this->session->set_flashdata('success', 'Success! Inventory item has been added successfully!');
                redirect($this->ctrl_name . '/inv_items/'.$uuid);
            } else {
                $this->session->set_flashdata('error', $error);
            }

            $data_info = $_POST;
        } else {
            $data_info = $this->common->getSingleInfoBy('inventory_master', 'inv_id', $uuid, '*');
        }

        //print_r($data_info);
        if (sizeof($data_info) == 0) {
            $newdata = array('warning' => 'Please select data!');
            $this->session->set_flashdata($newdata);
            redirect($this->ctrl_name);
        }
        
		$data['records'] = $data_info;
		$data['drv_records'] = $drv_records = $this->common->getSingleInfoBy('user_master_front', 'user_id', $data_info['driver_id'], '*');
		$data['veh_records'] = $veh_records = $this->common->getSingleInfoBy('master_vehicles', 'id', $data_info['vehicle_id'], '*');		

        $where_cond = " WHERE  status='Active' ORDER BY product_id";
        $data['products'] = $products = $this->common->getAllRow('product_master', $where_cond);

        $where_cond = " WHERE  status='Active' ORDER BY id";
		$todays_date = date('Y-m-d');
		$cust_sql = "SELECT * FROM coolbox_master cb, coolbox_cust_master cust WHERE cb.id=cust.box_id AND cust.added_date='".$todays_date."' AND cust.status='Active' ";				
        $query_result = $this->db->query($cust_sql);
        $data['cl_box'] = $cl_box = $query_result->result_array();		
        //$data['cl_box'] = $cl_box = $this->common->getAllRow('coolbox_master', $where_cond);
		

        $where_cond = " WHERE  inv_id=".$uuid." ORDER BY rec_id";
        $data['results'] = $results = $this->common->getAllRow('inventory_receipt', $where_cond);
		
        $this->load->view('inv_items', $data);
        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');
    }		

    public function delete_assigned_box($uuid = 0,$id = 0){
		$where_edt = "id = $id";
        $add_in['status'] = 'Deleted';
        $update_status = $this->common->updateRecord('coolbox_cust_master', $add_in, $where_edt);
        $this->session->set_flashdata('success', 'Cool Box assigned entry deleted succssfully!');
        redirect($this->ctrl_name . "/cust_box_assign/".$uuid);
    }
	
    public function delete_recept($uuid = 0,$id = 0){
        $where_edt = "category_id = $id";
        $add_in['status'] = 'Delete';
		
		$this->common->deleteRecord('inventory_receipt',"inv_id ='".$uuid."' AND rec_id=".$id."");
        redirect($this->ctrl_name . "/inv_items/".$uuid);
    }	
	
    public function delete_data($uuid = 0)
    {
        $session_user_data = $this->session->userdata('user_data');

        $uuid = filter_var($uuid, FILTER_SANITIZE_STRING);

        $chkUserInfo = $this->common->getSingleInfoBy($this->tbl_name, 'user_id', $uuid);

        if (sizeof($chkUserInfo) > 0) {

            $add_in['edit_date'] = date("Y-m-d h:i:s");
            $add_in['status'] = 'Delete';
            $this->db->where('user_id', $uuid);
            $this->db->update($this->tbl_name, $add_in);

            $this->session->set_flashdata('success', 'Deleted succssfully..');
        } else {
            $this->session->set_flashdata('warning', 'You don\'t have persmission to delete this');
        }

        redirect($this->ctrl_name . '/listall', 'refresh');
    }
	
    public function delete_box($id = 0){
        $where_edt = "id = $id";
        $add_in['status'] = 'Delete';
        $update_status = $this->common->updateRecord('coolbox_master', $add_in, $where_edt);
        $this->session->set_flashdata('success', 'Cool Box deleted succssfully!');
        redirect($this->ctrl_name . "/coolbox");
    }	
	
    public function generateQRCode($qrData = array()){

        // Create a basic QR code
        //'Life is too short to be generating QR codes'
        //    $qrCode = new QrCode();
       
        if (sizeof($qrData) > 0) {
            $qrCode = new QrCode();
            $content['cust_id'] = $cust_id = $qrData['cust_id'];
			$content['uuid'] = $uuid = $qrData['uuid'];
            $qrCode->setText(json_encode($content));
			
			$qrcodeid = time().'-'.$cust_id.'-'.$uuid;

            $qrCode->setWriterByName('png');
            $qrCode->setEncoding('UTF-8');
            $qrCode->setErrorCorrectionLevel(ErrorCorrectionLevel::HIGH());
            $qrCode->setForegroundColor(['r' => 0, 'g' => 0, 'b' => 0, 'a' => 0]);
            $qrCode->setBackgroundColor(['r' => 255, 'g' => 255, 'b' => 255, 'a' => 0]);
            $qrCode->setLabel('Scan the code', 16, 'noto_sans.otf', LabelAlignment::CENTER());
            //$qrCode->setLogoPath('logoicon.png');
            $qrCode->setLogoSize(150, 200);
            $qrCode->setValidateResult(false);

            // Apply a margin and round block sizes to improve readability
            // Please note that rounding block sizes can result in additional margin
            $qrCode->setRoundBlockSize(true);
            $qrCode->setMargin(10);

            // Set additional writer options (SvgWriter example)
            $qrCode->setWriterOptions(['exclude_xml_declaration' => true]);

            // Directly output the QR code
	        //  header('Content-Type: ' . $qrCode->getContentType());
            // echo $qrCode->writeString();
            // Save it to a file
            $qrCode->writeFile('../uploads/box_qr/' . $qrcodeid . '.png');
			return $qrcodeid.'.png';
            // Generate a data URI to include image data inline (i.e. inside an <img> tag)
        //    $dataUri = $qrCode->writeDataUri();
            // echo "<img src=''>";
            //sendNotification
        }

    }
    //end qr
}
