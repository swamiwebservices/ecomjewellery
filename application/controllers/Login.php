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
        $this->load->model('configmodal');

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
            $add_in['email'] = $email = (isset($_POST['email'])) ? $this->input->post('email') : '';
            $add_in['firstname'] = $firstname = (isset($_POST['firstname'])) ? $this->input->post('firstname') : '';
            $add_in['lastname'] = $lastname = (isset($_POST['lastname'])) ? $this->input->post('lastname') : '';
            $add_in['password'] = $password = (isset($_POST['password'])) ? $this->input->post('password') : '';
            $confirm_password = (isset($_POST['confirm_password'])) ? $this->input->post('confirm_password') : '';
            $add_in['address_1'] = $address_1 = (isset($_POST['address_1'])) ? $this->input->post('address_1') : '';
            $add_in['address_2'] = $address_2 = (isset($_POST['address_2'])) ? $this->input->post('address_2') : '';
            $add_in['city'] = $city = (isset($_POST['city'])) ? $this->input->post('city') : '';
            $add_in['postcode'] = $postcode = (isset($_POST['postcode'])) ? $this->input->post('postcode') : '';
            $add_in['country_id'] = $country_id = (isset($_POST['country_id'])) ? $this->input->post('country_id') : '';
            $add_in['zone_id'] = $zone_id = (isset($_POST['zone_id'])) ? $this->input->post('zone_id') : '';
            $add_in['default'] = $default = 1; //$this->input->post($_POST['default']);
            
            $add_in['newsletter'] = (isset($_POST['newsletter'])) ? $this->input->post('newsletter') : '0';
           
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

        if(sizeof($_POST)>0) {
            $data_info = $_POST;
            //print_r($_POST);
           
            $data['records'] = $data_info;
			
		} else {
	 
			$data['records']['country_id'] = $country_id = '221';
			 
		}

       

        $where_cond = "  ORDER BY name";
		$data['country_rs'] = $country_rs = $this->common->getAllRow('m_country',$where_cond);

        $where_cond = "  WHERE country_id='".$country_id."' ORDER BY name";
		$data['state_rs'] = $state_rs = $this->common->getAllRow('m_zone',$where_cond);

        $this->load->view("register", $data);
        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');
    }
    public function forgotten(){
		//mail("swamiwebservices@gmail.com","test","test");
		 $data['cat_slug'] = 0;
		 
		  if(isset($_POST['mode']) && $_POST['mode']=='forgotten'){
			 
			  $sql_data_array['email'] 	= $email = $this->common->mysql_safe_string($_POST['email']);
			  $sql = "select * from m_customer WHERE LOWER(email) = '" . $email . "' ";
			  $query = $this->db->query($sql);
				if($query->num_rows()>0) {
				$customer_info = $query->row_array(); 
					
				$config_site_from_name 	 =  $this->configmodal->get('config_site_from_name');
				$config_name =    $_SERVER['HTTP_HOST'];;		
                $password = substr(sha1(uniqid(mt_rand(), true)), 0, 10);
                $salt = $this->common->token(9);
               $add_in['salt'] = $salt;
               $new_pass = $salt;// sha1($salt . sha1($salt . sha1($password)));
               
               $this->db->query("UPDATE m_customer SET salt = '" . $salt . "', password = '" . $new_pass . "' WHERE LOWER(email) = '" . $email . "'");

               //mail code
               $subject = sprintf('%s - New Password', $config_site_from_name);

               $message  = sprintf('A new password was requested from %s.',$config_name) . "\n\n";
               $message .= 'Your new password to is:' . "\n\n";
               $message .= $password;
                
               
               //$myFile = './html_emails/account_create.html';
           //	$from_email = FROM_EMAIL;
               
                    $content = $message;
                   $this->email->from($this->configmodal->get('config_site_mail'));
                   $this->email->to($email);
                   $this->email->subject($subject);
                   $this->email->message($content);
                   $this->email->send();
                   
                    /*
                   $mail = new Mail();
                   $mail->protocol = $this->configmodal->get('config_mail_protocol');
                   $mail->parameter = $this->configmodal->get('config_mail_parameter');
                   $mail->hostname = $this->configmodal->get('config_smtp_host');
                   $mail->username = $this->configmodal->get('config_smtp_username');
                   $mail->password = $this->configmodal->get('config_smtp_password');
                   $mail->port = $this->configmodal->get('config_smtp_port');
                   $mail->timeout = $this->configmodal->get('config_smtp_timeout');				
                   $mail->setTo($email);
                   $mail->setFrom($this->configmodal->get('config_email'));
                   $mail->setSender($this->configmodal->get('config_name'));
                   $mail->setSubject(html_entity_decode($subject, ENT_QUOTES, 'UTF-8'));
                   $mail->setText(html_entity_decode($message, ENT_QUOTES, 'UTF-8'));
                   $mail->send();
                    */
               //end of mail code
                
               
               $newdata = array('success'  => ' Success: A new password has been sent to your e-mail address.!');
               $this->session->set_flashdata($newdata);
             //  $this->session->set_userdata($newdata);
                redirect("login");
				 
				} else {
				 $newdata = array('error'  => ' Warning: The E-Mail Address was not found in our records, please try again!');
                 $this->session->set_flashdata($newdata);
 				// $this->session->set_userdata($newdata);
                 redirect("login/forgotten");
				}
			   
		  } else {
			 //  $newdata = array('warning'  => ' Warning: Please enter E-Mail Address!');
						  
 			 // $this->session->set_userdata($newdata);
		  }
		$this->load->view('forgotten',$data);
		$this->session->unset_userdata('success');
		$this->session->unset_userdata('warning');
	}
}
