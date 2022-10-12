<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/**
 * Coupon
 *
 * @package
 * @subpackage Manage Coupon
 * @category Coupon
 * @version    1.0
 * @updated    21/04/2020
 */
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;
use Ramsey\Uuid\Uuid;

class Coupon extends CI_Controller
{

    public $db;
    public $ctrl_name = 'coupon';
    public $tbl_name = 'coupon';
    public $pg_title = 'Promo Code';

    private $error = array();
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('common');
        $this->load->model('couponmodal');
        $this->load->helper('security');
        $this->load->library('email');
        $this->load->helper('url_helper');
        $this->db = $this->load->database('default', true);
        $this->common->check_user_session();
    }

    public function index()
    {

        $this->listall(0);

    }

    public function listall()
    {
        $data['activaation_id'] = 1011;
        $data['sub_activaation_id'] = '1011_3';
        $data['title'] = 'Promo Code';
        $data['sub_heading'] = 'Promo Code List';

        $search_qry = " WHERE  status in ('Active','Inactive')   order by added_date desc  ";

        $data['results'] = $this->common->getRecordsLimit($this->tbl_name, $search_qry, 0, 0);
        //$data['total_result'] = $this->common->getRecordsCount($this->tbl_name, $search_qry);

        $data['controller'] = $this->ctrl_name;

        $this->load->view('coupon_listall', $data);
        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');

    }
    public function adddcoupondata()
    {
        $data['title'] = 'Promo Code';
        $data['activaation_id'] = 1011;
        $data['sub_activaation_id'] = '1011_3';
        $data['sub_heading'] = 'Add Promo Code';
        $data['back_link'] = $this->ctrl_name . '/listall';
        $data['controller'] = $this->ctrl_name;
        $session_user_data = $this->session->userdata('admin_user_data');
        $error = '';

        if (isset($_POST['mode']) && $_POST['mode'] == 'edit_content_add' && $this->validateForm(0)) {
            $add_in = array();

            $add_in['domains'] = $domains = (isset($_POST['domains'])) ? implode(",",$_POST['domains']) : ""; 



            $add_in['name'] = $name = (isset($_POST['name'])) ? $this->common->mysql_safe_string($_POST['name']) : '';
            $add_in['code'] = $code = (isset($_POST['code'])) ? $this->common->mysql_safe_string($_POST['code']) : '';
            $add_in['type'] = $type = (isset($_POST['type'])) ? $this->common->mysql_safe_string($_POST['type']) : 'F';
            $add_in['discount'] = $discount = (isset($_POST['discount'])) ? $this->common->mysql_safe_string($_POST['discount']) : '0';
            $add_in['total'] = $total = (isset($_POST['total'])) ? $this->common->mysql_safe_string($_POST['total']) : '0';
            $add_in['date_start'] = $date_start = (isset($_POST['date_start'])) ? $this->common->mysql_safe_string($_POST['date_start']) : '';
            $add_in['date_end'] = $date_end = (isset($_POST['date_end'])) ? $this->common->mysql_safe_string($_POST['date_end']) : '';
            $add_in['uses_total'] = $uses_total = (isset($_POST['uses_total'])) ? $this->common->mysql_safe_string($_POST['uses_total']) : '0';
            $add_in['uses_customer'] = $uses_customer = (isset($_POST['uses_customer'])) ? $this->common->mysql_safe_string($_POST['uses_customer']) : '0';

            $add_in['status'] = $status = (isset($_POST['status'])) ? $this->common->mysql_safe_string($_POST['status']) : 'Active';
            $chkInfo = $this->common->getSingleInfoBy($this->tbl_name, 'code', $code);
			//echo sizeof($chkInfo);

            if (sizeof($chkInfo) > 0) {
                 $error = "$code  is already registered";
            }
			//die();
			
            $uuid = "";
            try {

                // Generate a version 4 (random) UUID object
                $uuid4 = Uuid::uuid4();
                $uuid = $uuid4->toString();

            } catch (UnsatisfiedDependencyException $e) {
                //  echo 'Caught exception: ' . $e->getMessage() . "\n";
            }

            $data = $_POST;
            $data['uuid'] = $uuid;

            $add_in['uuid'] = $uuid;

            $add_in['added_date'] = date("Y-m-d H:i:s");
            $add_in['edit_date'] = NULL;
            $add_in['added_by_userid'] = $session_user_data['user_id'];
            $add_in['edit_by_userid'] = $session_user_data['user_id'];
			
			if ($error == '') {
				
				$this->db->insert($this->tbl_name, $add_in);
				$coupon_id = $this->db->insert_id();
				$error_msg = "";
				if ($coupon_id > 0) {
					$this->session->set_flashdata('success', 'Information added succssfully!');
					redirect($this->ctrl_name . '/listall');
				}
            } else {
				$data['controller'] = $this->ctrl_name;
                $this->session->set_flashdata('error', $error);
            }

        }

        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
        }

       /* if (isset($_POST['name'])) {
            $data['name'] = $_POST['name'];
        } else {
            $data['name'] = '';
        }

        if (isset($_POST['code'])) {
            $data['code'] = $_POST['code'];
        } else {
            $data['code'] = '';
        }

        if (isset($_POST['type'])) {
            $data['type'] = $_POST['type'];
        } else {
            $data['type'] = '';
        }

        if (isset($_POST['discount'])) {
            $data['discount'] = $_POST['discount'];
        } else {
            $data['discount'] = '';
        }

        if (isset($_POST['date_start'])) {
            $data['date_start'] = $_POST['date_start'];
        } else {
            $data['date_start'] = date('Y-m-d', time());
        }

        if (isset($_POST['date_end'])) {
            $data['date_end'] = $_POST['date_end'];
        } else {
            $data['date_end'] = date('Y-m-d', strtotime('+1 month'));
        }

        if (isset($_POST['uses_total'])) {
            $data['uses_total'] = $_POST['uses_total'];
        } else {
            $data['uses_total'] = 1;
        }

        if (isset($_POST['uses_customer'])) {
            $data['uses_customer'] = $_POST['uses_customer'];
        } else {
            $data['uses_customer'] = 1;
        }

        if (isset($_POST['status'])) {
            $data['status'] = $_POST['status'];
        } else {
            $data['status'] = true;
        }
        //print_r($data);*/
		
        $data['title'] = 'Promo Code';
        
        $data['sub_heading'] = 'Add Promo Code';		

        $this->load->view('coupon_adddcoupondata', $data);

        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
    }
    public function editcoupondata($uuid = 0)
    {
        $data['sub_heading'] = 'Edit  Promo Code';
        $data['title'] = 'Promo Code';
        $data['activaation_id'] = 1011;
        $data['sub_activaation_id'] = '1011_3';
        $data['back_link'] = $this->ctrl_name . '/listall';
        $data['sub_heading'] = 'Edit Promo Code';

        $data['controller'] = $this->ctrl_name;
        $session_user_data = $this->session->userdata('admin_user_data');
        $uuid = filter_var($uuid, FILTER_SANITIZE_STRING);
        $data['uuid'] = $uuid;
        $error = "";
        if (isset($_POST['mode']) && $_POST['mode'] == 'edit_content_add' && $this->validateForm($uuid)) {
            
         
            
            $add_in = array();
            $add_in['domains'] = $domains = (isset($_POST['domains'])) ? implode(",",$_POST['domains']) : ""; 



            $add_in['name'] = $name = (isset($_POST['name'])) ? $this->common->mysql_safe_string($_POST['name']) : '';
            $add_in['code'] = $code = (isset($_POST['code'])) ? $this->common->mysql_safe_string($_POST['code']) : '';
            $add_in['type'] = $type = (isset($_POST['type'])) ? $this->common->mysql_safe_string($_POST['type']) : 'F';
            $add_in['discount'] = $discount = (isset($_POST['discount'])) ? $this->common->mysql_safe_string($_POST['discount']) : '0';
            $add_in['total'] = $total = (isset($_POST['total'])) ? $this->common->mysql_safe_string($_POST['total']) : '0';
            $add_in['date_start'] = $date_start = (isset($_POST['date_start'])) ? $this->common->mysql_safe_string($_POST['date_start']) : '';
            $add_in['date_end'] = $date_end = (isset($_POST['date_end'])) ? $this->common->mysql_safe_string($_POST['date_end']) : '';
            $add_in['uses_total'] = $uses_total = (isset($_POST['uses_total'])) ? $this->common->mysql_safe_string($_POST['uses_total']) : '0';
            $add_in['uses_customer'] = $uses_customer = (isset($_POST['uses_customer'])) ? $this->common->mysql_safe_string($_POST['uses_customer']) : '0';

            $add_in['status'] = $status = (isset($_POST['status'])) ? $this->common->mysql_safe_string($_POST['status']) : 'Active';
             $code_old = (isset($_POST['code_old'])) ? $this->common->mysql_safe_string($_POST['code_old']) : '';
            if ($code_old != $code) {
                
                $chkInfo = $this->common->getSingleInfoBy($this->tbl_name, 'code', $code);
                if (sizeof($chkInfo) > 0) {
                    $error = "$code  is already registered";
                }
            }
            if ($error == '') {
                
                $add_in['edit_date'] =  date("Y-m-d H:i:s");
                $add_in['edit_by_userid'] = $session_user_data['user_id'];
              
                $this->db->where('uuid', $uuid);
                $this->db->update($this->tbl_name, $add_in); 
              

                $this->session->set_flashdata('success', 'Information updated succssfully!');
                redirect($this->ctrl_name . '/listall');
            } else {
                $this->session->set_flashdata('error', $error);
            }
            
            $coupon_info = $_POST;
        } else {
			
            $coupon_info = $this->common->getSingleInfoBy($this->tbl_name, 'uuid', $uuid, '*');
        }

        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
        }

        
        
        $data['records'] = $coupon_info;
        $this->load->view('coupon_editcoupondata', $data);

        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
    }

    public function delete_data($uuid = 0)
    {

        $session_user_data = $this->session->userdata('admin_user_data');

        $uuid = filter_var($uuid, FILTER_SANITIZE_STRING);

        $chkUserInfo = $this->common->getSingleInfoBy($this->tbl_name, 'uuid', $uuid);

        if (sizeof($chkUserInfo) > 0) {

            $add_in['edit_date'] = date("Y-m-d h:i:s");
            $add_in['edit_by_userid'] = $session_user_data['user_id'];
            $add_in['status'] = 'Deleted';
            $this->db->where('uuid', $uuid);
            $this->db->update($this->tbl_name, $add_in);

            $this->session->set_flashdata('success', 'Deleted succssfully..');
        } else {
            $this->session->set_flashdata('warning', 'You don\'t have persmission to delete this');
        }

        redirect($this->ctrl_name . '/listall', 'refresh');

    }
    public function validateForm($coupon_id = 0)
    {

        $name = (isset($_POST['name'])) ? $this->common->mysql_safe_string($_POST['name']) : '';
        $code = (isset($_POST['code'])) ? $this->common->mysql_safe_string($_POST['code']) : '';

        if ((strlen($name) < 3) || (strlen($name) > 128)) {
            $this->error['name'] = 'Coupon Name must be between 3 and 128 characters!';
        }

        if ((strlen($code) < 3) || (strlen($code) > 10)) {
            $this->error['code'] = 'Code must be between 3 and 10 characters!';
        }

        
       

        return !$this->error;
    }

}
