<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\LabelAlignment;
use Endroid\QrCode\QrCode;
use Kreait\Firebase;
use Kreait\Firebase\Exception\MessagingException;
use Kreait\Firebase\Messaging\CloudMessage;
use Kreait\Firebase\Util\JSON;
/**
 * Drivers
 *
 * @package Getlised.in
 * @subpackage Manage Drivers
 * @category Drivers
 * @version    1.0
 * @updated    21/04/2020
 */
//use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;
//use Ramsey\Uuid\Uuid;

class Drivers extends CI_Controller
{
    public $db;
    public $ctrl_name = 'drivers';
    public $tbl_name = 'user_master_front';
    public $pg_title = 'Drivers';
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

    public function listall(){

        $data['title'] = 'Drivers';
        $data['l_s_act'] = 1;
        $data['sub_heading'] = 'Drivers List';

        
        $sSql = "SELECT um.*,mp.name as state_name, mp.name_en as state_name_en, md.name as district_name , md.name_en as district_name_en  
         FROM `user_master_front` um
        left join master_province mp on um.state_id = mp.id
        left join master_district md on um.district_id = md.id
        WHERE um.status in ('Active','Inactive')  and user_type='DRI' order by added_date desc         ";
        $query = $this->db->query($sSql);
        $data['results'] = $query->result_array();

        $data['controller'] = $this->ctrl_name;

        $this->load->view('drivers_listall', $data);
        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');
    }
	
    public function adddata(){

        $session_user_data = $this->session->userdata('user_data');

        $data['l_s_act'] = 1;

        $data['title'] = 'Drivers';
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
            $add_in['state_id'] = (int)$state_id = (isset($_POST['state_id'])) ? $this->common->mysql_safe_string($_POST['state_id']) : '0';
            $add_in['district_id'] =  (int) $district_id = (isset($_POST['district_id'])) ? $this->common->mysql_safe_string($_POST['district_id']) : '0';
            $add_in['gender'] = $gender = (isset($_POST['gender'])) ? $this->common->mysql_safe_string($_POST['gender']) : NULL;
            $add_in['age'] = $age = (isset($_POST['age'])) ? $this->common->mysql_safe_string($_POST['age']) : '0';
            $add_in['status'] = $status = (isset($_POST['status'])) ? $this->common->mysql_safe_string($_POST['status']) : 'Active';
            $add_in['bo_ice_id'] = $bo_ice_id = (isset($_POST['bo_ice_id'])) ? $this->common->mysql_safe_string($_POST['bo_ice_id']) : '';

        //  $add_in['mobile_device_id'] = $mobile_device_id = (isset($_POST['mobile_device_id'])) ? $this->common->mysql_safe_string($_POST['mobile_device_id']) : '0';

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

        $add_in['passphrase'] =    $password = (isset($_POST['password'])) ? $this->common->mysql_safe_string($_POST['password']) : '';
            if ($first_name == '') {
                $error .= "Please enter first name<br>";
            }
            if ($middle_name == '') {
                $add_in['middle_name']=NULL;
            }
            if ($last_name == '') {
                $error .= "Please enter first name<br>";
            }
            if ($email == '') {
             //   $error .= "Please enter email addressme<br>";
            }
        if ($state_id == '0') {
                $error .= "Please enter state<br>";
            }
            if ($district_id == '0') {
                $error .= "Please enter district<br>";
            }  
            if ($password == '') {
                $error .= "Please enter password<br>";
            }
            if ($status == '') {
                $error .= "Please select status<br>";
            }

              $chkUserInfo = $this->common->getSingleInfoBy($this->tbl_name,'email',$email);
           // $chkUserInfo = $this->common->getSingleInfoBy('login_credentials_front', 'username', $email);
            if (sizeof($chkUserInfo) > 0) {
                $error = "$email  is already registered";
            }

            if ($error == '') {
             
                $add_in['user_type'] = 'DRI';
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
        $this->load->view('drivers_adddata', $data);

        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');
    }
    public function editdata($uuid = 0)
    {

        $session_user_data = $this->session->userdata('user_data');
        $uuid = filter_var($uuid, FILTER_SANITIZE_STRING);
        $data['l_s_act'] = 1;

        $data['title'] = 'Drivers';
        $data['sub_heading'] = 'Edit';
        $data['controller'] = $this->ctrl_name;
        $data['uuid'] = $uuid;
        $error = '';
        if (isset($_POST['mode']) && $_POST['mode'] == "edit_content_password") {
            $login_password = $this->common->mysql_safe_string($_POST['login_password']);
            $email = $this->common->mysql_safe_string($_POST['email']);
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
            $add_in['state_id'] = (int)$state_id = (isset($_POST['state_id'])) ? $this->common->mysql_safe_string($_POST['state_id']) : '0';
            $add_in['district_id'] =  (int) $district_id = (isset($_POST['district_id'])) ? $this->common->mysql_safe_string($_POST['district_id']) : '0';
            $add_in['status'] = $status = (isset($_POST['status'])) ? $this->common->mysql_safe_string($_POST['status']) : 'Active';
            $add_in['gender'] = $gender = (isset($_POST['gender'])) ? $this->common->mysql_safe_string($_POST['gender']) : NULL;
            $add_in['age'] = $age = (isset($_POST['age'])) ? $this->common->mysql_safe_string($_POST['age']) : '0';
            $add_in['bo_ice_id'] = $bo_ice_id = (isset($_POST['bo_ice_id'])) ? $this->common->mysql_safe_string($_POST['bo_ice_id']) : '';
            
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

            $email_old = (isset($_POST['email_old'])) ? $this->common->mysql_safe_string($_POST['email_old']) : '';

            if ($first_name == '') {
                $error .= "Please enter first name<br>";
            }
            if ($middle_name == '') {
                $add_in['middle_name']=NULL;
            }
            if ($last_name == '') {
                $error .= "Please enter first name<br>";
            }
             if ($email == '') {
                $error .= "Please enter email addressme<br>";
            }  
            if ($state_id == '0') {
                $error .= "Please enter state<br>";
            }
            if ($district_id == '0') {
                $error .= "Please enter district <br>";
            }  
            if ($status == '') {
                $error .= "Please select status<br>";
            }
            if ($email_old != $email) {
                $chkUserInfo = $this->common->getSingleInfoBy($this->tbl_name,'email',$email);
               // $chkUserInfo = $this->common->getSingleInfoBy('login_credentials_front', 'username', $email);
                if (sizeof($chkUserInfo) > 0) {
                    $error = "$email Email address is already registered";
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
        $this->load->view('drivers_editdata', $data);

        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');
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

	public function driver_generate_code($uuid=0){
           $qrData['uuid'] = $uuid;
           /*$qrData['customer_id'] = $order_info['customer_id'];
            $qrData['driver_id'] = $order_info['driver_id'];
            $qrData['total'] = $order_info['total'];*/
            $qrcode_info = $this->generateQRCode($qrData);
            $add_in['qr_code'] = $qrcode_info;
            $this->db->where('user_id', $uuid);
            $this->db->update($this->tbl_name, $add_in);
            $this->session->set_flashdata('success', 'QR Code generated succssfully!');
            redirect($this->ctrl_name . '/listall');
	}
	
    public function generateQRCode($qrData = array()){

        // Create a basic QR code
        //'Life is too short to be generating QR codes'
        //    $qrCode = new QrCode();
       
        if (sizeof($qrData) > 0) {
            $qrCode = new QrCode();
            $content['uuid'] = $qrcodeid = $qrData['uuid'];
            //$content['driver_id'] = $driver_id;
            //$content['user_id'] = $qrData['customer_id'];

            $qrCode->setText(json_encode($content));

            //   $qrCode->setSize(300);

            // Set advanced options
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
            $qrCode->writeFile('../uploads/driver/' . $qrcodeid . '.png');
			return $qrcodeid.'.png';
            // Generate a data URI to include image data inline (i.e. inside an <img> tag)
        //    $dataUri = $qrCode->writeDataUri();
            // echo "<img src=''>";
            //sendNotification
        }

    }
    //end qr	
    public function driverlocation($driver_id=0){

        $data['title'] = 'Drivers';
        $data['l_s_act'] = 111;
        $data['sub_heading'] = 'Drivers Location ';


        $todaydate = date("Ymd");
        $serviceAccount = Firebase\ServiceAccount::fromJsonFile('firebase/bo-ice-2f1ce71da14c.json');

        $firebase = (new Firebase\Factory())
            ->withServiceAccount($serviceAccount)
            ->withDatabaseUri('https://bo-ice.firebaseio.com/driverlocation')
            ->create();
        $database = $firebase->getDatabase();
        $reference = $database->getReference('driverlocation');
        $fire_user_ids = $reference->getChildKeys();
        $snapshot = $reference->getSnapshot();
        $fireBaseValue = $reference->getValue(); 
        
        if(sizeof($fire_user_ids) > 0 ){
            $resut_temp =[];

            $fire_user_ids_imp = implode(",",$fire_user_ids) ;
           
             $sql = "select * from user_master_front where status in ('Active')  and user_type='DRI' and user_id in ($fire_user_ids_imp)  order by added_date desc" ;
           $query = $this->db->query($sql);
            $results = $query->result_array();

            foreach($results as $key => $dbValue){
                $dbValue['lat'] = (isset($fireBaseValue[$dbValue['user_id']]['lat'])) ? $fireBaseValue[$dbValue['user_id']]['lat'] : '' ;
                $dbValue['long'] = (isset($fireBaseValue[$dbValue['user_id']]['long'])) ? $fireBaseValue[$dbValue['user_id']]['long'] : '' ;
                $dbValue['device_id'] =(isset($fireBaseValue[$dbValue['user_id']]['device_id'])) ? $fireBaseValue[$dbValue['user_id']]['device_id'] : '' ;
                $resut_temp[]  = $dbValue;
            }
            
            $data['result'] = $resut_temp;
        } else {
            $data['result'] =  [];
        }

        $data['controller'] = $this->ctrl_name;

        $this->load->view('drivers_location', $data);
        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');
    }
}
