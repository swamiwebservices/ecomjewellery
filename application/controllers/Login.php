<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Login extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *         http://example.com/index.php/welcome
     *    - or -
     *         http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public $controller = "login";
    public $domain_id = 1;
    public function __construct()
    {
        parent::__construct();

        $this->load->library('session');

        $this->load->model('common');
        $this->load->model('services');

        $this->load->helper('security');
        $this->load->library('email');
        $this->load->helper('url_helper');

        // $data['config_maintenance'] = $config_maintenance = (int)$this->common->get('config_maintenance');

        // if($config_maintenance){
        //      redirect("maintenance");
        //       exit;
        // }
        if (empty($this->session->userdata('domain_id'))) {
            $this->session->set_userdata('domain_id', '1');

        }

        if (empty($this->session->userdata('domain_id'))) {
            $this->session->set_userdata('domain_id', '1');

        }
        $this->domain_id = $this->services->getDomainId();

    }
    public function index()
    {

        if (isset($_POST['mode']) && $_POST['mode'] == "login") {
            $log_em_id = $this->input->post('email');
            $log_pass = $this->input->post('password');

            $customer_query = $this->db->query("SELECT * FROM m_customer WHERE LOWER(email) = '" . $log_em_id . "' AND password = '" . $log_pass . "' AND status_flag = 'Active' ");

            if ($customer_query->num_rows() > 0) {
                $result = $customer_query->row_array();
                $this->session->sess_regenerate(true);
                $result['password'] = '';
                $result['user_id'] = $result['customer_id'];
                //   $this->session->set_userdata(array('front_user_detail' => array()));
                $ar_session_data['front_user_detail'] = $result;
                $ar_session_data['front_user_detail']['logged_in'] = true;
                $ar_session_data['front_user_detail']['password'] = "";
                $this->session->set_userdata($ar_session_data);

                redirect(site_url("account"), 'refresh');
                exit();
            } else {
                $error = array('error' => ' Warning: No match for E-Mail Address and/or Password. ');
                $this->session->set_flashdata($error);
            }
        }

        $data['test'] = 0;
        $this->load->view("login", $data);

    }
    public function register()
    {

        if (isset($_POST['frm_mode']) == "get_register") {
            $error = "";
            $add_in['telephone'] = $telephone = (isset($_POST['telephone'])) ? $this->input->post('telephone') : '';
            $add_in['email'] = $email = $this->input->post('email');

            $add_in['firstname'] = $firstname = $this->input->post('firstname');
            $add_in['lastname'] = $lastname = $this->input->post('lastname');

            $add_in['newsletter'] = $newsletter = '0'; //$this->input->post($_POST['newsletter']);
            $add_in['password'] = $password = $this->input->post('password');
            $confirm = $this->input->post('confirm_password');
            if ($password != $confirm) {
                $error = "Confirm Password does not match";
            }
            $add_in['date_added'] = date("Y-m-d h:i:s");
            $add_in['status_flag'] = 'Active';

            $where_reg_user = "where email='" . $email . "' ";
            //    $row_reg_user = $this->common->numRow('customer',$where_reg_user);
            $sql = "select * from m_customer where email='" . $email . "' ";
            $rs_cust = $this->db->query($sql);
            if ($rs_cust->num_rows() > 0) {
                $error = "Email address is alreday register with us, Please use Forgotten Password";
            }
            $sql = "select * from m_customer where telephone='" . $telephone . "' ";
            $rs_cust = $this->db->query($sql);
            if ($rs_cust->num_rows() > 0) {
                $error = "Telephone/Mobile is alreday register with us, Please use Forgotten Password";
            }
            if ($error == "") {

                $customer_info = $this->services->addCustomer($add_in);
                $customer_info['password'] = '';
                // Login if requires approval
                $ar_session_data['front_user_detail'] = $customer_info;
                $ar_session_data['front_user_detail']['logged_in'] = true;
                $ar_session_data['front_user_detail']['password'] = "";
                $this->session->set_userdata($ar_session_data);

                if($this->session->userdata('last_page_visited')==""){
                redirect(site_url("account"), 'refresh');
                exit();
                } else {
                    $last_page_visited = $this->session->userdata('last_page_visited');
                    $this->session->unset_userdata('last_page_visited');
                    redirect($last_page_visited, 'refresh');
                    exit();
                }
            } else {
                $error_arra = array('error' => $error);
                $this->session->set_flashdata($error_arra);
            }
        }
        $data_info = $_POST;
        //print_r($_POST);
        $data['records'] = $data_info;
        $this->load->view("register", $data);
        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');
    }

}
