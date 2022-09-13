<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/**
 * Carry_boy
 *
 * @package Getlised.in
 * @subpackage Manage Carry_boy
 * @category Carry boy
 * @version    1.0
 * @updated    21/04/2020
 */
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;
use Ramsey\Uuid\Uuid;

class Carry_boy extends CI_Controller
{
    public $db;
    public $ctrl_name = 'carry_boy';
    public $tbl_name = 'user_master_front';

    public $pg_title = ' Carry Boy';
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

        $data['title'] = 'Carry boy';
        $data['l_s_act'] = 2;
        $data['sub_heading'] = 'Carry boy List';

        $search_qry = " WHERE status in ('Active','Inactive')  and user_type='CMAN'  order by added_date desc  ";

        $data['results'] = $this->common->getRecordsLimit($this->tbl_name, $search_qry, 0, 0);

        $data['controller'] = $this->ctrl_name;

        $this->load->view('carry_boy_listall', $data);
        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');
    }
    public function adddata()
    {

        $session_user_data = $this->session->userdata('user_data');

        $data['l_s_act'] = 2;

        $data['title'] = 'Carry boy';
        $data['sub_heading'] = 'Add New';
        $data['controller'] = $this->ctrl_name;
        $data['fun'] = "adddata";
        $error = '';

        if (isset($_POST['mode']) && $_POST['mode'] == "submitform") {

            $add_in = array();
            $add_in['first_name'] = $first_name = (isset($_POST['first_name'])) ? $this->common->mysql_safe_string($_POST['first_name']) : '';
            $add_in['last_name'] = $last_name = (isset($_POST['last_name'])) ? $this->common->mysql_safe_string($_POST['last_name']) : '';
			$add_in['mobile'] = $mobile = (isset($_POST['mobile'])) ? $this->common->mysql_safe_string($_POST['mobile']) : '';
            $add_in['email'] = $email = (isset($_POST['email'])) ? $this->common->mysql_safe_string($_POST['email']) : '';
            
            $add_in['status'] = $status = (isset($_POST['status'])) ? $this->common->mysql_safe_string($_POST['status']) : 'Active';
           // $password = $this->common->mysql_safe_string($_POST['password']);
            if ($first_name == '') {
                $error .= "Please enter first name<br>";
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

            $chkinfo = $this->common->getSingleInfoBy($this->tbl_name,'mobile',$mobile);
            if (sizeof($chkinfo) > 0) {
                $error = "$mobile  is already registered";
            }

            if ($error == '') {
                $uuid = "";
                try {

                    // Generate a version 4 (random) UUID object
                    $uuid4 = Uuid::uuid4();
                    $uuid = $uuid4->toString();

                } catch (UnsatisfiedDependencyException $e) {
                    //  echo 'Caught exception: ' . $e->getMessage() . "\n";
                }
				
				
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

                $add_in['uuid'] = $uuid;
                $add_in['user_type'] = 'CMAN';
                $add_in['added_date'] = date("Y-m-d");
                $add_in['edit_date'] = date("Y-m-d");
               

                $this->db->insert($this->tbl_name, $add_in);

                $this->session->set_flashdata('success', 'Information added succssfully!');
                redirect($this->ctrl_name . '/listall');
            } else {
                $this->session->set_flashdata('error', $error);
            }
        }

        $data_info = (isset($_POST)) ? $_POST : '';
        $data['records'] = $data_info;
        $this->load->view('carry_boy_adddata', $data);

        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');
    }

    public function editdata($cbuid = 0)
    {

        $session_user_data = $this->session->userdata('user_data');
        $cbuid = filter_var($cbuid, FILTER_SANITIZE_STRING);
        $data['l_s_act'] = 2;

        $data['title'] = 'Carry boy';
        $data['sub_heading'] = 'Edit';
        $data['controller'] = $this->ctrl_name;
        $data['uuid'] = $cbuid;
        $error = '';

        if (isset($_POST['mode']) && $_POST['mode'] == "submitform") {

            $add_in = array();
            $add_in['first_name'] = $first_name = (isset($_POST['first_name'])) ? $this->common->mysql_safe_string($_POST['first_name']) : '';
            $add_in['last_name'] = $last_name = (isset($_POST['last_name'])) ? $this->common->mysql_safe_string($_POST['last_name']) : '';
            $add_in['email'] = $email = (isset($_POST['email'])) ? $this->common->mysql_safe_string($_POST['email']) : '';
			$add_in['mobile'] = $mobile = (isset($_POST['mobile'])) ? $this->common->mysql_safe_string($_POST['mobile']) : '';
           
            $add_in['status'] = $status = (isset($_POST['status'])) ? $this->common->mysql_safe_string($_POST['status']) : 'Active';
            $mobile_old = (isset($_POST['mobile_old'])) ? $this->common->mysql_safe_string($_POST['mobile_old']) : '';

            if ($first_name == '') {
                $error .= "Please enter first name<br>";
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
                $chkinfo = $this->common->getSingleInfoBy($this->tbl_name,'mobile',$mobile);
                if (sizeof($chkinfo) > 0) {
                    $error = "$mobile Mobile address is already registered";
                }
            }

            if ($error == '') {

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
				
                $add_in['edit_date'] = date("Y-m-d");

               

                $this->db->where('user_id', $cbuid);
                $this->db->update($this->tbl_name, $add_in);

                $this->session->set_flashdata('success', 'Information updated succssfully!');
                redirect($this->ctrl_name . '/listall');
            } else {
                $this->session->set_flashdata('error', $error);
            }

            $data_info = $_POST;
        } else {

            $data_info = $this->common->getSingleInfoBy($this->tbl_name, 'user_id', $cbuid, '*');
        }

        //print_r($data_info);
        if (sizeof($data_info) == 0) {
            $newdata = array('warning' => 'Please select driver!');
            $this->session->set_flashdata($newdata);
            redirect($this->ctrl_name);
        }
        $data['records'] = $data_info;
        $this->load->view('carry_boy_editdata', $data);

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
