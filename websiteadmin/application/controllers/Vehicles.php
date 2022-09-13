<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/**
 * Vehicles
 *
 * @package Getlised.in
 * @subpackage Manage Vehicles
 * @category Vehicles
 * @version    1.0
 * @updated    21/04/2020
 */
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;
use Ramsey\Uuid\Uuid;

class Vehicles extends CI_Controller
{
    public $db;
    public $ctrl_name = 'vehicles';
    public $tbl_name = 'master_vehicles';
    public $tbl_name_one = '';
    public $pg_title = 'Vehicles';
    public $m_act = 5;

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

        $data['title'] = 'Vehicles';
        $data['l_s_act'] = 2;
        $data['sub_heading'] = 'Vehicles List';

        $search_qry = " WHERE    status!='Delete'  order by added_date desc  ";

        $data['results'] = $this->common->getRecordsLimit($this->tbl_name, $search_qry, 0, 0);

        $data['controller'] = $this->ctrl_name;

        $this->load->view('vehicles_listall', $data);
        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');
    }
    public function adddata()
    {

        $session_user_data = $this->session->userdata('user_data');

        $data['l_s_act'] = 2;

        $data['title'] = 'Vehicles';
        $data['sub_heading'] = 'Add New';
        $data['controller'] = $this->ctrl_name;
        $data['fun'] = "adddata";
        $error = '';

        if (isset($_POST['mode']) && $_POST['mode'] == "submitform") {

            $add_in = array();
            $add_in['name'] = $name = (isset($_POST['name'])) ? $this->common->mysql_safe_string($_POST['name']) : '';
            $add_in['model'] = $model = (isset($_POST['model'])) ? $this->common->mysql_safe_string($_POST['model']) : '';
            $add_in['size_capacity'] = $size_capacity = (isset($_POST['size_capacity'])) ? $this->common->mysql_safe_string($_POST['size_capacity']) : '';
            $add_in['number_plate'] = $number_plate = (isset($_POST['number_plate'])) ? $this->common->mysql_safe_string($_POST['number_plate']) : '';
            $add_in['company_made'] = $company_made = (isset($_POST['company_made'])) ? $this->common->mysql_safe_string($_POST['company_made']) : '';

            $add_in['status'] = $status = (isset($_POST['status'])) ? $this->common->mysql_safe_string($_POST['status']) : 'Active';
          //  $password =  (isset($_POST['password'])) ? $this->common->mysql_safe_string($_POST['password']) : '';
            //$password = $this->common->mysql_safe_string($_POST['password']);
            if ($name == '') {
                $error .= "Please enter  name<br>";
            }
            if ($model == '') {
                $error .= "Please enter model<br>";
            }
            if ($size_capacity == '') {
                $error .= "Please enter size capacity<br>";
            }

            if ($number_plate == '') {
                $error .= "Please enter number plate<br>";
            }
            if ($company_made == '') {
                $error .= "Please enter company made<br>";
            }
            if ($status == '') {
                $error .= "Please select status<br>";
            }

            $chkinfo = $this->common->getSingleInfoBy($this->tbl_name, 'number_plate', $number_plate);
            if (sizeof($chkinfo) > 0) {
                $error = "$number_plate  is already registered";
            }

            if ($error == '') {
                $vuid = "";
                try {

                    // Generate a version 4 (random) UUID object
                    $uuid4 = Uuid::uuid4();
                    $vuid = $uuid4->toString();

                } catch (UnsatisfiedDependencyException $e) {
                    //  echo 'Caught exception: ' . $e->getMessage() . "\n";
                }

                $add_in['vuid'] = $vuid;

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
        $this->load->view('vehicles_adddata', $data);

        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');
    }

    public function editdata($vuid = 0)
    {

        $session_user_data = $this->session->userdata('user_data');
        $vuid = filter_var($vuid, FILTER_SANITIZE_STRING);
        $data['l_s_act'] = 2;

        $data['title'] = 'Vehicles';
        $data['sub_heading'] = 'Edit';
        $data['controller'] = $this->ctrl_name;
        $data['uuid'] = $vuid;
        $error = '';

        if (isset($_POST['mode']) && $_POST['mode'] == "submitform") {

            $add_in = array();
            $add_in['name'] = $name = (isset($_POST['name'])) ? $this->common->mysql_safe_string($_POST['name']) : '';
            $add_in['model'] = $model = (isset($_POST['model'])) ? $this->common->mysql_safe_string($_POST['model']) : '';
            $add_in['size_capacity'] = $size_capacity = (isset($_POST['size_capacity'])) ? $this->common->mysql_safe_string($_POST['size_capacity']) : '';
            $add_in['number_plate'] = $number_plate = (isset($_POST['number_plate'])) ? $this->common->mysql_safe_string($_POST['number_plate']) : '';
            $add_in['company_made'] = $company_made = (isset($_POST['company_made'])) ? $this->common->mysql_safe_string($_POST['company_made']) : '';

            $add_in['status'] = $status = (isset($_POST['status'])) ? $this->common->mysql_safe_string($_POST['status']) : 'Active';
			$number_plate_old = (isset($_POST['number_plate_old'])) ? $this->common->mysql_safe_string($_POST['number_plate_old']) : '';

            if ($name == '') {
                $error .= "Please enter  name<br>";
            }
            if ($model == '') {
                $error .= "Please enter model<br>";
            }
            if ($size_capacity == '') {
                $error .= "Please enter size capacity<br>";
            }

            if ($number_plate == '') {
                $error .= "Please enter number plate<br>";
            }
            if ($company_made == '') {
                $error .= "Please enter company made<br>";
            }
            if ($status == '') {
                $error .= "Please select status<br>";
            }
            if ($number_plate_old != $number_plate) {
                $chkInfo = $this->common->getSingleInfoBy($this->tbl_name, 'number_plate', $number_plate);
                if (sizeof($chkInfo) > 0) {
                    $error = "$number_plate  is already registered";
                }
            }

            if ($error == '') {

                $add_in['edit_date'] = date("Y-m-d");

                $add_in['edit_by_userid'] = $session_user_data['user_id'];

                $this->db->where('vuid', $vuid);
                $this->db->update($this->tbl_name, $add_in);

                $this->session->set_flashdata('success', 'Information updated succssfully!');
                redirect($this->ctrl_name . '/listall');
            } else {
                $this->session->set_flashdata('error', $error);
            }

            $data_info = $_POST;
        } else {

            $data_info = $this->common->getSingleInfoBy($this->tbl_name, 'vuid', $vuid, '*');
        }

        //print_r($data_info);
        if (sizeof($data_info) == 0) {
            $newdata = array('warning' => 'Please select driver!');
            $this->session->set_flashdata($newdata);
            redirect($this->ctrl_name);
        }
        $data['records'] = $data_info;
        $this->load->view('vehicles_editdata', $data);

        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');
    }

    public function delete_data($vuid = 0)
    {
        $session_user_data = $this->session->userdata('user_data');

        $vuid = filter_var($vuid, FILTER_SANITIZE_STRING);

        $chkInfo = $this->common->getSingleInfoBy($this->tbl_name, 'vuid', $vuid);

        if (sizeof($chkInfo) > 0) {

            $add_in['edit_date'] = date("Y-m-d h:i:s");
            $add_in['edit_by_userid'] = $session_user_data['user_id'];
            $add_in['status'] = 'Delete';
            $this->db->where('vuid', $vuid);
            $this->db->update($this->tbl_name, $add_in);

            $this->session->set_flashdata('success', 'Deleted succssfully..');
        } else {
            $this->session->set_flashdata('warning', 'You don\'t have persmission to delete this');
        }

        redirect($this->ctrl_name . '/listall', 'refresh');
    }

}
