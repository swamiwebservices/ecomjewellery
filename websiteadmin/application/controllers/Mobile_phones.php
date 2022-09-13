<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/**
 * Manage_Mobile_phones
 *
 * @package Getlised.in
 * @subpackage Manage Mobile_phones
 * @category Administrator
 * @version    1.0
 * @updated    21/04/2020
 */
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;
use Ramsey\Uuid\Uuid;

class Mobile_phones extends CI_Controller
{
    public $db;
    public $ctrl_name = 'mobile_phones';
    public $tbl_name = 'master_mobile_phones';
    public $pg_title = 'Mobile Phones';
    public $m_act = 3;

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
        $data['activaation_id'] = 101;
        $data['sub_activaation_id'] = '101_2';
        $data['title'] = 'Mobile Phones';
        $data['l_s_act'] = 3;
        $data['sub_heading'] = 'Mobile Phones List';

        $search_qry = " WHERE   status!='Delete'   order by added_date desc  ";

        $data['results'] = $this->common->getRecordsLimit($this->tbl_name, $search_qry, 0, 0);

        $data['controller'] = $this->ctrl_name;

        $this->load->view('mobile_phones_listall', $data);
        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');
    }

    public function editdata($mpuid = 0)
    {

        $session_user_data = $this->session->userdata('user_data');
        $mpuid = filter_var($mpuid, FILTER_SANITIZE_STRING);
        $data['l_s_act'] = 3;
        
        $data['title'] = 'Mobile Phones';
        $data['sub_heading'] = 'Edit';
        $data['controller'] = $this->ctrl_name;
        $data['uuid'] = $mpuid;
        $error = '';

        if (isset($_POST['mode']) && $_POST['mode'] == "submitform") {

            $add_in = array();
            $add_in['name'] = $name = (isset($_POST['name'])) ? $this->common->mysql_safe_string($_POST['name']) : '';
            $add_in['imei1'] = $imei1 = (isset($_POST['imei1'])) ? $this->common->mysql_safe_string($_POST['imei1']) : '';
            $add_in['imei2'] = $imei2 = (isset($_POST['imei2'])) ? $this->common->mysql_safe_string($_POST['imei2']) : '';
            $add_in['mobile_number1'] = $mobile_number1 = (isset($_POST['mobile_number1'])) ? $this->common->mysql_safe_string($_POST['mobile_number1']) : '';
            $add_in['mobile_number2'] = $mobile_number2 = (isset($_POST['mobile_number2'])) ? $this->common->mysql_safe_string($_POST['mobile_number2']) : '';
            $add_in['company'] = $company = (isset($_POST['company'])) ? $this->common->mysql_safe_string($_POST['company']) : '';
            $add_in['serial_number'] = $serial_number = (isset($_POST['serial_number'])) ? $this->common->mysql_safe_string($_POST['serial_number']) : '';
            $add_in['driver_security_id'] = $driver_security_id = (isset($_POST['driver_security_id'])) ? $this->common->mysql_safe_string($_POST['driver_security_id']) : '0';
            $add_in['status'] = $status = (isset($_POST['status'])) ? $this->common->mysql_safe_string($_POST['status']) : '';

            if ($name == '') {
                $error .= "Please enter mobile name and model<br>";
            }
            if ($mobile_number1 == '') {
                $error .= "Please mobile number<br>";
            }

            if ($status == '') {
                $error .= "Please select status<br>";
            }

            if ($error == '') {

                $add_in['edit_date'] = date("Y-m-d");

                $add_in['edit_by_userid'] = $session_user_data['user_id'];

                $this->db->where('mpuid', $mpuid);
                $this->db->update($this->tbl_name, $add_in);

                $this->session->set_flashdata('success', 'Information updated succssfully!');
                redirect($this->ctrl_name . '/listall');
            } else {
                $this->session->set_flashdata('error', $error);
            }

            $data_info = $_POST;
        } else {

            $data_info = $this->common->getSingleInfoBy($this->tbl_name, 'mpuid', $mpuid, '*');
        }

        //print_r($data_info);
        if (sizeof($data_info) == 0) {
            $newdata = array('warning' => 'Please select mobile device!');
            $this->session->set_flashdata($newdata);
            redirect($this->ctrl_name);
        }
        $data['records'] = $data_info;
        $this->load->view('mobile_phones_editdata', $data);

        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');
    }

    public function adddata()
    {

        $session_user_data = $this->session->userdata('user_data');

        $data['l_s_act'] = 3;
         
        $data['title'] = 'Mobile Phones';
        $data['sub_heading'] = 'Add New';
        $data['controller'] = $this->ctrl_name;
        $data['fun'] = "adddata";
        $error = '';

        if (isset($_POST['mode']) && $_POST['mode'] == "submitform") {

            $add_in = array();
            $add_in['name'] = $name = (isset($_POST['name'])) ? $this->common->mysql_safe_string($_POST['name']) : '';
            $add_in['imei1'] = $imei1 = (isset($_POST['imei1'])) ? $this->common->mysql_safe_string($_POST['imei1']) : '';
            $add_in['imei2'] = $imei2 = (isset($_POST['imei2'])) ? $this->common->mysql_safe_string($_POST['imei2']) : '';
            $add_in['mobile_number1'] = $mobile_number1 = (isset($_POST['mobile_number1'])) ? $this->common->mysql_safe_string($_POST['mobile_number1']) : '';
            $add_in['mobile_number2'] = $mobile_number2 = (isset($_POST['mobile_number2'])) ? $this->common->mysql_safe_string($_POST['mobile_number2']) : '';
            $add_in['company'] = $company = (isset($_POST['company'])) ? $this->common->mysql_safe_string($_POST['company']) : '';
            $add_in['serial_number'] = $serial_number = (isset($_POST['serial_number'])) ? $this->common->mysql_safe_string($_POST['serial_number']) : '';
            $add_in['driver_security_id'] = $driver_security_id = (isset($_POST['driver_security_id'])) ? $this->common->mysql_safe_string($_POST['driver_security_id']) : '0';
            $add_in['status'] = $status = (isset($_POST['status'])) ? $this->common->mysql_safe_string($_POST['status']) : '';

            if ($name == '') {
                $error .= "Please enter mobile name and model<br>";
            }
            if ($mobile_number1 == '') {
                $error .= "Please mobile number<br>";
            }

            if ($status == '') {
                $error .= "Please select status<br>";
            }

            /*  $chkUserInfo = $this->common->getSingleInfoBy("master_mobile_phones",'mobile_number1',$mobile_number1);
            if(sizeof($chkUserInfo)>0){
            $error = "$mobile_number1  is already registered";
            }     */

            if ($error == '') {
                $uuid = "";
                try {

                    // Generate a version 4 (random) UUID object
                    $uuid4 = Uuid::uuid4();
                    $mpuid = $uuid4->toString();

                } catch (UnsatisfiedDependencyException $e) {
                    //  echo 'Caught exception: ' . $e->getMessage() . "\n";
                }

                $add_in['mpuid'] = $mpuid;

                $add_in['added_date'] = date("Y-m-d");
                $add_in['edit_date'] = date("Y-m-d");
                $add_in['added_by_userid'] = $session_user_data['user_id'];
                $add_in['edit_by_userid'] = $session_user_data['user_id'];

                $this->db->insert($this->tbl_name, $add_in);

                $this->session->set_flashdata('success', 'Information added succssfully!');
                redirect($this->ctrl_name . '/listall');
            } else {
                $this->session->set_flashdata('error', $error);
            }
        }

        $data_info = (isset($_POST)) ? $_POST : '';
        $data['records'] = $data_info;
        $this->load->view('mobile_phones_adddata', $data);

        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');
    }

    public function delete_data($uuid = 0)
    {
        $session_user_data = $this->session->userdata('user_data');

        $uuid = filter_var($uuid, FILTER_SANITIZE_STRING);

        $chkUserInfo = $this->common->getSingleInfoBy($this->tbl_name, 'mpuid', $uuid);

        if (sizeof($chkUserInfo) > 0) {

            $add_in['edit_date'] = date("Y-m-d h:i:s");
            $add_in['edit_by_userid'] = $session_user_data['user_id'];
            $add_in['status'] = 'Delete';
            $this->db->where('mpuid', $uuid);
            $this->db->update($this->tbl_name, $add_in);

            $this->session->set_flashdata('success', 'Deleted succssfully..');
        } else {
            $this->session->set_flashdata('warning', 'You don\'t have persmission to delete this');
        }

        redirect($this->ctrl_name . '/listall', 'refresh');
    }

}
