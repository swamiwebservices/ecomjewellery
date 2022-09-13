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
        
          
            $add_in['status'] = $status = (isset($_POST['status'])) ? $this->common->mysql_safe_string($_POST['status']) : 'Active';

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
            if ($email == '') {
                $error .= "Please enter email addressme<br>";
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
          
            $add_in['city_id'] = (int)$city_id = (isset($_POST['city_id'])) ? $this->common->mysql_safe_string($_POST['city_id']) : '0';
            $add_in['zone_id'] =  (int) $zone_id = (isset($_POST['zone_id'])) ? $this->common->mysql_safe_string($_POST['zone_id']) : '0';
           
          
            $add_in['status'] = $status = (isset($_POST['status'])) ? $this->common->mysql_safe_string($_POST['status']) : 'Active';

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
           
            if ($status == '') {
                $error .= "Please select status<br>";
            }
            if ($email_old != $email) {
                //$chkUserInfo = $this->common->getSingleInfoBy($this->tbl_name,'email',$email);
                $chkUserInfo = $this->common->getSingleInfoBy('login_credentials_front', 'username', $email);
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
        $this->load->view('security_editdata', $data);

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

}
