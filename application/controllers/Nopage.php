<?php
defined('BASEPATH') or exit('No direct script access allowed');
use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Nopage extends CI_Controller
{

    public $controller = "nopage";

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('common');
        $this->load->helper('security');
        $this->load->library('email');
        $this->load->helper('url_helper');
        //if session not exist

        $data['config_maintenance'] = $config_maintenance = (int)$this->common->get('config_maintenance');
	
        if($config_maintenance){
             redirect("maintenance");
              exit;
        }
    }

    public function index($start = 0, $otherparam = "")
    {

        $param_page = $this->uri->segment(1); // n=1 for controller, n=2 for method, etc
       
        if ($param_page == "") {
            $param_page = "home";
        }
        $data['canonical'] = site_url($param_page);

        $param_page = $this->uri->segment(1); // n=1 for controller, n=2 for method, etc
        $param_page2 = $this->uri->segment(2); // n=1 for controller, n=2 for method, etc
       if($param_page=="" ){
           $param_page = "home";
       }
      
       $data['canonical'] = site_url($param_page);
     
      
       $admin_mail_id = "swamiwebservices@gmail.com";
       $config_site_mail = array();
       $error_msg = "";
      
       
       if(!empty($_POST['mode']) && $_POST['mode']=="admission-enquiry" && $param_page=="admission-enquiry"){
       // $dd = json_encode($_POST);
   //   print_r($_POST);
           $full_name = (isset($_POST['full_name'])) ? $this->common->mysql_safe_string($_POST['full_name']) : '';
           $contact_number = (isset($_POST['contact_number'])) ? $this->common->mysql_safe_string($_POST['contact_number']) : '';
           $email_addrress = (isset($_POST['email_addrress'])) ? $this->common->mysql_safe_string($_POST['email_addrress']) : '';
           
           $city = (isset($_POST['city'])) ? $this->common->mysql_safe_string($_POST['city']) : '';
           $message = (isset($_POST['message'])) ? $this->common->mysql_safe_string($_POST['message']) : '';
           $program = (isset($_POST['program'])) ? $this->common->mysql_safe_string($_POST['program']) : '';
           
           if ($full_name == "") {
               $error_msg .= "<li>Please enter full name </li>";
           }
           
           if ($email_addrress == "") {
               $error_msg .= "<li>Please enter email </li>";
           }
           if ($contact_number == "") {
               $error_msg .= "<li>Please enter purpose of email </li>";
           }

           

           if ($error_msg == "") {
               $dateadded = date('Y-m-d h:i:s');

               $add_in['full_name'] = $full_name;
               $add_in['email_addrress'] = $email_addrress;
               $add_in['contact_number'] = $contact_number;
               $add_in['city'] = $city;
               $add_in['message'] = $message;
               $add_in['program'] = $program;
               $add_in['add_date'] = $dateadded;


               $this->db->insert('wti_t_admission_enquiry', $add_in);

               $sql = "select * from  `wti_m_setting` where `group_name`='config_site_mail'";
               $query = $this->db->query($sql);
               if ($query->num_rows() > 0) {
                   $m_setting = $query->result_array();

                   foreach ($m_setting as $key => $val) {
                       $config_site_mail[$val['key_name']] = $val['value'];
                   }

                   $subject = "Admission enquiry form filled by   " . $email_addrress;

                   $fileg = file_get_contents("htmlemails/mail_contactus.html");

                   $pattern = array('/{fname}/',  '/{email}/', '/{message}/', '/{DATE}/');
                   $replacement = array( $full_name, $email_addrress, $message, $dateadded);
                   $mess_body = preg_replace($pattern, $replacement, $fileg);
                   $contact_name = $full_name;

                   try {
                       

                     //  $mail = new PHPMailer(true);

                   //    $mail->SMTPDebug = 0; // Enable verbose debug output
                       
                     
                      // $admin_mail_id = $config_site_mail['config_site_mail'];

                    //   $mail->setFrom($admin_mail_id, $config_site_mail['config_site_from_name']);
                   //    $mail->addAddress($admin_mail_id, $config_site_mail['config_site_from_name']); // Add a recipient
                     //  $mail->addReplyTo($email_addrress, $contact_name);
                        
                       // Attachments

                       // Content
                     //  $mail->isHTML(true); // Set email format to HTML
                    //   $mail->Subject = $subject;
                   //    $mail->Body = $mess_body;
                       //  $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                     //  $mail->send();
                       // echo 'Message has been sent';
                   } catch (Exception $e) {
                       //  $error_msg = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

                   }

               }

               $arr = array('status' => true, 'retcomment' => 'Thank you for your enquiry / request.');
               echo json_encode($arr);
               die();
           } else {
               $arr = array('status' => false, 'retcomment' => $error_msg);
               echo json_encode($arr);
               die();
           }

       }


       ///

       $admin_mail_id = "swamiwebservices@gmail.com";
       $config_site_mail = array();
       $error_msg = "";
      
       
       if(!empty($_POST['mode']) && $_POST['mode']=="contact-us" && $param_page=="contact-us"){
       // $dd = json_encode($_POST);
      //  print_r($dd);exit;
           $full_name = (isset($_POST['full_name'])) ? $this->common->mysql_safe_string($_POST['full_name']) : '';
           $contact_phone = (isset($_POST['contact_phone'])) ? $this->common->mysql_safe_string($_POST['contact_phone']) : '';
           $contact_email = (isset($_POST['contact_email'])) ? $this->common->mysql_safe_string($_POST['contact_email']) : '';
           
           $city = (isset($_POST['city'])) ? $this->common->mysql_safe_string($_POST['city']) : '';
           $contact_message = (isset($_POST['contact_message'])) ? $this->common->mysql_safe_string($_POST['contact_message']) : '';
           $contact_subject = (isset($_POST['contact_subject'])) ? $this->common->mysql_safe_string($_POST['contact_subject']) : '';
           
           if ($full_name == "") {
               $error_msg .= "<li>Please enter full name </li>";
           }
           
           if ($contact_email == "") {
               $error_msg .= "<li>Please enter email </li>";
           }
           if ($contact_phone == "") {
               $error_msg .= "<li>Please enter purpose of email </li>";
           }

           

           if ($error_msg == "") {
               $dateadded = date('Y-m-d h:i:s');

               $add_in['contact_fname'] = $full_name;
               $add_in['contact_email'] = $contact_email;
               $add_in['contact_phone'] = $contact_phone;
               $add_in['contact_message'] = $contact_message;
               $add_in['contact_subject'] = $contact_subject;
               $add_in['add_date'] = $dateadded;


               $this->db->insert('wti_t_contactus', $add_in);

               $sql = "select * from  `wti_m_setting` where `group_name`='config_site_mail'";
               $query = $this->db->query($sql);
               if ($query->num_rows() > 0) {
                   $m_setting = $query->result_array();

                   foreach ($m_setting as $key => $val) {
                       $config_site_mail[$val['key_name']] = $val['value'];
                   }

                   $subject = "Admission enquiry form filled by   " . $contact_email;

                   $fileg = file_get_contents("htmlemails/mail_contactus.html");

                   $pattern = array('/{fname}/',  '/{email}/', '/{message}/', '/{DATE}/');
                   $replacement = array( $full_name, $contact_email, $contact_message, $dateadded);
                   $mess_body = preg_replace($pattern, $replacement, $fileg);
                   $contact_name = $full_name;

                   try {
                       

                     //  $mail = new PHPMailer(true);

                   //    $mail->SMTPDebug = 0; // Enable verbose debug output
                       
                     
                      // $admin_mail_id = $config_site_mail['config_site_mail'];

                    //   $mail->setFrom($admin_mail_id, $config_site_mail['config_site_from_name']);
                   //    $mail->addAddress($admin_mail_id, $config_site_mail['config_site_from_name']); // Add a recipient
                     //  $mail->addReplyTo($contact_email, $contact_name);
                        
                       // Attachments

                       // Content
                     //  $mail->isHTML(true); // Set email format to HTML
                    //   $mail->Subject = $subject;
                   //    $mail->Body = $mess_body;
                       //  $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                     //  $mail->send();
                       // echo 'Message has been sent';
                   } catch (Exception $e) {
                       //  $error_msg = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

                   }

               }

               $arr = array('status' => true, 'retcomment' => 'Thank you for your enquiry / request.');
               echo json_encode($arr);
               die();
           } else {
               $arr = array('status' => false, 'retcomment' => $error_msg);
               echo json_encode($arr);
               die();
           }

       }

  
       
       if (!file_exists(APPPATH.'views/'.$param_page.'.php')){
        $param_page = "nopage";
       }   
       
       $this->load->view($param_page, $data);

    }
}
