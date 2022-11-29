<?php
defined('BASEPATH') or exit('No direct script access allowed');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Pages extends CI_Controller
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
    public $controller = "pages";
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
        //if session not exist
        $data['config_maintenance'] = $config_maintenance = (int) $this->common->get('config_maintenance');

        if ($config_maintenance) {
            redirect("maintenance");
            exit;
        }

    
 
        if (empty($this->session->userdata('domain_id'))) {
            $this->session->set_userdata('domain_id', '1');

        }

        if (empty($this->session->userdata('domain_id'))) {
            $this->session->set_userdata('domain_id', '1');

        }
        $this->domain_id = $this->services->getDomainId();

        $ar_session_data['last_page_visited'] = site_url("account");
        $this->session->set_userdata($ar_session_data);
    }
    public function index()
    {
        redirect("home");
    }
    public function aboutus()
    {
        $param_page = $this->uri->segment(1); // n=1 for controller, n=2 for method, etc

        if ($param_page == "") {
            $param_page = "home";
        }
        $data['canonical'] = site_url($param_page);

        $param_page = $this->uri->segment(1); // n=1 for controller, n=2 for method, etc
        //    $param_page2 = $this->uri->segment(2); // n=1 for controller, n=2 for method, etc
        if ($param_page == "") {
            $param_page = "home";
        }
        
        $section = 'aboutus';

        $data['wti_cms_pages_images'] = array();

        

       
         
        $resultdata = array();
        $data['records'] = array();
        $data['resultdata'] = array();
        $sql = "select *  from  `wti_cms_pages` where `section`='" . $section . "'";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $resultdata = $query->row_array();
            $data['resultdata'] = $resultdata;
            $data['records'][$resultdata['section']] = $resultdata['details'];
        }

        /* foreach ($resultdata as $key => $value) {
            $data['records'][$value['section']] = $value['details'];

        } */
        $this->load->view('about-us', $data);
    }
    public function termscondition()
    {
        $param_page = $this->uri->segment(1); // n=1 for controller, n=2 for method, etc

        if ($param_page == "") {
            $param_page = "home";
        }
        $data['canonical'] = site_url($param_page);

        $param_page = $this->uri->segment(1); // n=1 for controller, n=2 for method, etc
        //    $param_page2 = $this->uri->segment(2); // n=1 for controller, n=2 for method, etc
        if ($param_page == "") {
            $param_page = "home";
        }
        $section = 'termscondition';

        
        $resultdata = array();
        $data['records'] = array();
        $data['resultdata'] = array();
        $sql = "select *  from  `wti_cms_pages` where `section`='" . $section . "'";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $resultdata = $query->row_array();
            $data['resultdata'] = $resultdata;
            $data['records'][$resultdata['section']] = $resultdata['details'];
        }
        $this->load->view('termscondition', $data);
    }
 
    public function contact()
    {
        $param_page = $this->uri->segment(1); // n=1 for controller, n=2 for method, etc

        if ($param_page == "") {
            $param_page = "home";
        }
        $data['canonical'] = site_url($param_page);

        $param_page = $this->uri->segment(1); // n=1 for controller, n=2 for method, etc
        //    $param_page2 = $this->uri->segment(2); // n=1 for controller, n=2 for method, etc
        if ($param_page == "") {
            $param_page = "home";
        }

        $error_msg = "";
        $admin_mail_id = "swamiwebservices@gmail.com";
        $config_site_mail = array();

        $error_msg = "";
 
        if (isset($_POST['mode']) && $_POST['mode'] == "formsubmit") {
            

            $contact_fname = (isset($_POST['contact_fname'])) ? $this->common->mysql_safe_string($_POST['contact_fname']) : '';
            $contact_subject = (isset($_POST['contact_subject'])) ? $this->common->mysql_safe_string($_POST['contact_subject']) : '';
            $contact_email = (isset($_POST['contact_email'])) ? $this->common->mysql_safe_string($_POST['contact_email']) : '';
            
            $contact_message = (isset($_POST['contact_message'])) ? $this->common->mysql_safe_string($_POST['contact_message']) : '';

            $contact_fname = (isset($_POST['contact_fname'])) ? $this->common->mysql_safe_string($_POST['contact_fname']) : '';
   
            if ($contact_fname == "") {
                $error_msg .= "<li>Please enter full name </li>";
            }
            
            if ($contact_email == "") {
                $error_msg .= "<li>Please enter email </li>";
            }
            if ($contact_subject == "") {
                $error_msg .= "<li>Please enter purpose of email </li>";
            }

            if ($contact_message == "") {
                $error_msg .= "<li>Please enter message </li>";
            }

            if ($error_msg == "") {
                $dateadded = date('Y-m-d H:i:s');

                $add_in['contact_fname'] = $contact_fname;
             //   $add_in['contact_lname'] = $contact_lname;
                $add_in['contact_email'] = $contact_email;
               // $add_in['contact_phone'] = $contact_phone;
                $add_in['contact_message'] = $contact_message;
                $add_in['contact_subject'] = $contact_subject;
                $add_in['add_date'] = $dateadded;
                $add_in['domainname'] = $_SERVER['SERVER_NAME'];
                $this->db->insert('wti_t_contactus', $add_in);

                $getDomainAddress = $this->services->getDomainAddress();
                $sql = "select * from  `wti_m_setting` where `group_name`='config_site_mail' and store_id='{$getDomainAddress['DOMAIN_ID']}'";
                $query = $this->db->query($sql);
                if ($query->num_rows() > 0) {
                    $m_setting = $query->result_array();

                    foreach ($m_setting as $key => $val) {
                        $config_site_mail[$val['key_name']] = $val['value'];
                    }

                    $subject = "Contact us form filled by   " . $contact_email;

                    $fileg = file_get_contents("htmlemails/mail_contactus.html");

                   
                    
                    $pattern = array('/{DOMAINNAME}/','/{HTTP_DOMAIN_URL}/','/{LOGO_URL}/','/{CONTACTUS_URL}/','/{DOMAIN_ADDRESS_FOOTER}/','/{SUBJECT}/', '/{fname}/',  '/{email}/', '/{contact_subject}/','/{message}/', '/{DATE}/');
                    $replacement = array($getDomainAddress['DOMAINNAME'],$getDomainAddress['HTTP_DOMAIN_URL'],$getDomainAddress['LOGO_URL'],$getDomainAddress['CONTACTUS_URL'],$getDomainAddress['DOMAIN_ADDRESS_FOOTER'],$subject,$contact_fname, $contact_email,$contact_subject, $contact_message, $dateadded);
                    $mess_body = preg_replace($pattern, $replacement, $fileg);
                    
                    $contact_name = $contact_fname;
                  
                    try {
                        //Server settings

                        $mail = new PHPMailer(true);

                        $mail->SMTPDebug = 0; // Enable verbose debug output
                        /*
                        $mail->isSMTP();                                            // Send using SMTP

                        $mail->Host       = $config_site_mail['config_smtp_host'];                    // Set the SMTP server to send through
                        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                        $mail->Username   = $config_site_mail['config_smtp_username'];                      // SMTP username
                        $mail->Password   = $config_site_mail['config_smtp_password'];                               // SMTP password
                        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                        $mail->Port       = $config_site_mail['config_smtp_port']; // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
                         */
                        //Recipients
                        $admin_mail_id = $config_site_mail['config_site_mail'];

                        $mail->setFrom($admin_mail_id, $config_site_mail['config_site_from_name']);
                        $mail->addAddress($admin_mail_id, $config_site_mail['config_site_from_name']); // Add a recipient
                        $mail->addReplyTo($contact_email, $contact_name);
                        /*
                        $config_alert_emails = $config_site_mail['config_alert_emails'];
                        $config_alert_emails_exp = explode(",",$config_alert_emails);
                        foreach($config_alert_emails_exp as $key => $alertemails){
                        $mail->addCC($alertemails);
                        }
                         */
                        // Attachments

                        // Content
                        $mail->isHTML(true); // Set email format to HTML
                        $mail->Subject = $subject;
                        $mail->Body = $mess_body;
                        //  $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                        $mail->send();
                        // echo 'Message has been sent';
                    } catch (Exception $e) {
                        //  $error_msg = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

                    }

                }

                $arr = array('status' => true, 'retcomment' => 'Thank you for your enquiry / request. We will contact you soon to know more on this. ');
                echo json_encode($arr);
                die();
            } else {
                $arr = array('status' => false, 'retcomment' => $error_msg);
                echo json_encode($arr);
                die();
            }

        }
        $data['wti_m_address'] = $this->common->getSingleInfoBy('wti_m_address', 'id', 1, '*');
        //print_r($data['wti_m_address']);
        $this->load->view('contact', $data);
    }

    public function privacypolicy()
    {
        $param_page = $this->uri->segment(1); // n=1 for controller, n=2 for method, etc

        if ($param_page == "") {
            $param_page = "home";
        }
        $data['canonical'] = site_url($param_page);

        $param_page = $this->uri->segment(1); // n=1 for controller, n=2 for method, etc
        //    $param_page2 = $this->uri->segment(2); // n=1 for controller, n=2 for method, etc
        if ($param_page == "") {
            $param_page = "home";
        }
        $resultdata = array();
        $section = 'privacy';
        
        $data['section'] = $section;
        $domains = $this->services->getDomainId();
        $resultdata = array();
        $data['records'] = array();
        $data['resultdata'] = array();
        $sql = "select *  from  `wti_cms_pages` where `section`='" . $section . "' and domains='{$domains}'";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $resultdata = $query->row_array();
            $data['resultdata'] = $resultdata;
            $data['records'] = $resultdata['details'];
        }
        $this->load->view('privacy-policy', $data);
    }
    public function refund()
    {
        $param_page = $this->uri->segment(1); // n=1 for controller, n=2 for method, etc

        if ($param_page == "") {
            $param_page = "home";
        }
        $data['canonical'] = site_url($param_page);

        $param_page = $this->uri->segment(1); // n=1 for controller, n=2 for method, etc
        //    $param_page2 = $this->uri->segment(2); // n=1 for controller, n=2 for method, etc
        if ($param_page == "") {
            $param_page = "home";
        }
        $resultdata = array();
        $section = 'privacy';
        
        $data['section'] = $section;
        $domains = $this->services->getDomainId();
        $resultdata = array();
        $data['records'] = array();
        $data['resultdata'] = array();
        $sql = "select *  from  `wti_cms_pages` where `section`='" . $section . "' and domains='{$domains}'";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $resultdata = $query->row_array();
            $data['resultdata'] = $resultdata;
            $data['records'] = $resultdata['details'];
        }
        $this->load->view('refund', $data);
    }
    public function shippingpolicy()
    {
        $param_page = $this->uri->segment(1); // n=1 for controller, n=2 for method, etc

        if ($param_page == "") {
            $param_page = "home";
        }
        $data['canonical'] = site_url($param_page);

        $param_page = $this->uri->segment(1); // n=1 for controller, n=2 for method, etc
        //    $param_page2 = $this->uri->segment(2); // n=1 for controller, n=2 for method, etc
        if ($param_page == "") {
            $param_page = "home";
        }
        $resultdata = array();
        $section = 'shippingpolicy';
        
        $data['section'] = $section;
        $domains = $this->services->getDomainId();
        $resultdata = array();
        $data['records'] = array();
        $data['resultdata'] = array();
        $sql = "select *  from  `wti_cms_pages` where `section`='" . $section . "' and domains='{$domains}'";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $resultdata = $query->row_array();
            $data['resultdata'] = $resultdata;
            $data['records'] = $resultdata['details'];
        }
        $this->load->view('shippingpolicy', $data);
    }
    public function termsconditions()
    {
        $param_page = $this->uri->segment(1); // n=1 for controller, n=2 for method, etc

        if ($param_page == "") {
            $param_page = "home";
        }
        $data['canonical'] = site_url($param_page);

        $param_page = $this->uri->segment(1); // n=1 for controller, n=2 for method, etc
        //    $param_page2 = $this->uri->segment(2); // n=1 for controller, n=2 for method, etc
        if ($param_page == "") {
            $param_page = "home";
        }

        $resultdata = array();
        $section = 'termscondtion';
        $data['section'] = $section;
        $domains = $this->services->getDomainId();
        $resultdata = array();
        $data['records'] = array();
        $data['resultdata'] = array();
        $sql = "select *  from  `wti_cms_pages` where `section`='" . $section . "' and domains='{$domains}'";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $resultdata = $query->row_array();
            $data['resultdata'] = $resultdata;
            $data['records'] = $resultdata['details'];
        }

        $this->load->view('termsconditions', $data);
    }
    public function disclaimer()
    {
        $param_page = $this->uri->segment(1); // n=1 for controller, n=2 for method, etc

        if ($param_page == "") {
            $param_page = "home";
        }
        $data['canonical'] = site_url($param_page);

        $param_page = $this->uri->segment(1); // n=1 for controller, n=2 for method, etc
        //    $param_page2 = $this->uri->segment(2); // n=1 for controller, n=2 for method, etc
        if ($param_page == "") {
            $param_page = "home";
        }

        $resultdata = array();
        $section = 'disclaimer';
        $data['section'] = $section;
        $domains = $this->services->getDomainId();
        $resultdata = array();
        $data['records'] = array();
        $data['resultdata'] = array();
        $sql = "select *  from  `wti_cms_pages` where `section`='" . $section . "' and domains='{$domains}'";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $resultdata = $query->row_array();
            $data['resultdata'] = $resultdata;
            $data['records'] = $resultdata['details'];
        }

        $this->load->view('disclaimer', $data);
    }
    
    
    
}
