<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Order_status extends CI_Controller
{

    public $db;
    public $ctrl_name = 'order_status';
    public $tbl_name = 'master_order_status';
    public $tbl_name_one = 'mst_user_type';
    public $pg_title = 'Orders';
    public $m_act = 6;

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

        $this->listall(0);

    }

    public function listall()
    {
        $data['activaation_id'] = 101;
        $data['sub_activaation_id'] = '101_2';
        $data['title'] = 'Order Status';
        $data['l_s_act'] = 3;
        $data['sub_heading'] = 'Order Status List';

        $search_qry = "     order by order_status_id asc  ";

        $data['results'] = $this->common->getRecordsLimit($this->tbl_name, $search_qry, 0, 0);

        $data['controller'] = $this->ctrl_name;

        $this->load->view('order_status_listall', $data);
        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');
    }

    public function editdata($order_status_id = 0)
    {

        $session_user_data = $this->session->userdata('admin_user_data');
        $order_status_id = filter_var($order_status_id, FILTER_SANITIZE_STRING);
        $data['l_s_act'] = 3;

        $data['title'] = 'Order Status';
        $data['sub_heading'] = 'Edit';
        $data['controller'] = $this->ctrl_name;
        $data['uuid'] = $order_status_id;
        $error = '';

        if (isset($_POST['mode']) && $_POST['mode'] == "submitform") {

            $add_in = array();
            $add_in['name'] = $name = (isset($_POST['name'])) ? $this->common->mysql_safe_string($_POST['name']) : '';

            
            $name_old = (isset($_POST['name_old'])) ? $this->common->mysql_safe_string($_POST['name_old']) : '';
            if ($name == '') {
                $error .= "Please enter   name <br>";
            }

           
            if ($name_old != $name) {
                $chkInfo = $this->common->getSingleInfoBy($this->tbl_name, 'name', $name);
                if (sizeof($chkInfo) > 0) {
                    $error = "$name  is already added";
                }
            }
            if ($error == '') {

               
                $this->db->where('order_status_id', $order_status_id);
                $this->db->update($this->tbl_name, $add_in);

                $this->session->set_flashdata('success', 'Information updated succssfully!');
                redirect($this->ctrl_name . '/listall');
            } else {
                $this->session->set_flashdata('error', $error);
            }

            $data_info = $_POST;
        } else {

            $data_info = $this->common->getSingleInfoBy($this->tbl_name, 'order_status_id', $order_status_id, '*');
        }

        //print_r($data_info);
        if (sizeof($data_info) == 0) {
            $newdata = array('warning' => 'Please select data!');
            $this->session->set_flashdata($newdata);
            redirect($this->ctrl_name);
        }
        $data['records'] = $data_info;
        $this->load->view('order_status_editdata', $data);

        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');
    }

    
}
