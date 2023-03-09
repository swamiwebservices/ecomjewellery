<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;

use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;
use Ramsey\Uuid\Uuid;
class Orders extends CI_Controller
{
    public $db;
    public $ctrl_name = 'orders';
    public $tbl_name = 'order_master';
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
        $this->new_orders();
    }

    public function new_orders()
    {
        $data['msg'] = '';
        $error = '';
        $data['activaation_id'] = 22;
        $data['sub_activaation_id'] = '22_1';

        $data['title'] = 'Order';
        $data['sub_heading'] = 'New Orders';
        $data['controller'] = $this->ctrl_name;

        $data['start'] = 0;
        $data['maxm'] = $maxm = 100;

        if (isset($_GET['page']) && $_GET['page'] != '') {
            $page = $this->input->post('page');

            $data['page'] = $page;

        } //isset( $_GET['page'] ) && $_GET['page'] != ''
        else {
            $page = 0;
            $data['page'] = 0;

        }
        $start_temp = (($page == 0) ? 0 : $page - 1);
        $start = $start_temp * $maxm;

        if ($start < 0) {
            $start = 0;
        }

        $data['start'] = $page;

        $data['maxm'] = $maxm;
        // $limit_qry = " LIMIT ".$start.",".$maxm;
        $sql = "";
        if (isset($_GET['getdate']) && $_GET['getdate'] != '') {
            $getdate = $this->input->post('getdate') ;
            $sql .= "    and o.date_added like '" . $getdate . "%' ";
        }

        if (isset($_GET['mod']) && $_GET['mod'] != '') {
            $mod = $this->input->post('mod');
            $sql .= "    and o.payment_method like '" . $mod . "%' ";
        }
        $data['oderlist'] = $this->ecommercemodal->getOderlist_custom(1, $start, $maxm, 'rows', $sql);
        $data['num_row'] = $this->ecommercemodal->getOderlist_custom(1, 0, 0, 'numrows', $sql);

        $fun_name = $this->ctrl_name . "/new_orders";
        $data['other_para'] = "";

        $data['fun_name'] = $fun_name . "?" . $data['other_para'];

        $this->load->view('orders_list', $data);
        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');
    }

    public function confirmed_orders()
    {
        $data['msg'] = '';
        $error = '';
        $data['activaation_id'] = 22;
        $data['sub_activaation_id'] = '22_2';

        $data['title'] = 'Order';
        $data['sub_heading'] = 'Accepted Orders';
        $data['controller'] = $this->ctrl_name;

        $data['start'] = 0;
        $data['maxm'] = $maxm = 100;

        if (isset($_GET['page']) && $_GET['page'] != '') {
            $page = $this->input->post('page');

            $data['page'] = $page;

        } //isset( $_GET['page'] ) && $_GET['page'] != ''
        else {
            $page = 0;
            $data['page'] = 0;

        }
        $start_temp = (($page == 0) ? 0 : $page - 1);
        $start = $start_temp * $maxm;

        if ($start < 0) {
            $start = 0;
        }

        $data['start'] = $page;

        $data['maxm'] = $maxm;
        // $limit_qry = " LIMIT ".$start.",".$maxm;
        $sql = "";
        if (isset($_GET['getdate']) && $_GET['getdate'] != '') {
            $getdate = $this->input->post('getdate');
            $sql .= "    and o.date_added like '" . $getdate . "%' ";
        }

        if (isset($_GET['mod']) && $_GET['mod'] != '') {
            $mod =  $this->input->post('mod');
            $sql .= "    and o.payment_method like '" . $mod . "%' ";
        }
        $data['oderlist'] = $this->ecommercemodal->getOderlist_custom('2,3', $start, $maxm, 'rows', $sql);
        $data['num_row'] = $this->ecommercemodal->getOderlist_custom('2,3', 0, 0, 'numrows', $sql);

        $fun_name = $this->ctrl_name . "/confirmed_orders";
        $data['other_para'] = "";

        $data['fun_name'] = $fun_name . "?" . $data['other_para'];

        $this->load->view('orders_list', $data);
        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');
    }

    public function delivered()
    {
        $data['msg'] = '';
        $error = '';
        $data['activaation_id'] = 22;
        $data['sub_activaation_id'] = '22_3';

        $data['title'] = 'Order';
        $data['sub_heading'] = 'Delivered Orders';
        $data['controller'] = $this->ctrl_name;

        $data['start'] = 0;
        $data['maxm'] = $maxm = 100;

        if (isset($_GET['page']) && $_GET['page'] != '') {
            $page = $this->input->post('page');

            $data['page'] = $page;

        } //isset( $_GET['page'] ) && $_GET['page'] != ''
        else {
            $page = 0;
            $data['page'] = 0;

        }
        $start_temp = (($page == 0) ? 0 : $page - 1);
        $start = $start_temp * $maxm;

        if ($start < 0) {
            $start = 0;
        }

        $data['start'] = $page;

        $data['maxm'] = $maxm;
        // $limit_qry = " LIMIT ".$start.",".$maxm;
        $sql = "";
        if (isset($_GET['getdate']) && $_GET['getdate'] != '') {
            $getdate = filter_var($_GET['getdate'], FILTER_SANITIZE_STRING);
            $sql .= "    and o.date_added like '" . $getdate . "%' ";
        }

        if (isset($_GET['mod']) && $_GET['mod'] != '') {
            $mod =  $this->input->post('mod');
            $sql .= "    and o.payment_method like '" . $mod . "%' ";
        }
        $data['oderlist'] = $this->ecommercemodal->getOderlist_custom('4', $start, $maxm, 'rows', $sql);
        $data['num_row'] = $this->ecommercemodal->getOderlist_custom('4', 0, 0, 'numrows', $sql);

        $fun_name = $this->ctrl_name . "/delivered";
        $data['other_para'] = "";

        $data['fun_name'] = $fun_name . "?" . $data['other_para'];

        $this->load->view('orders_list', $data);
        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');
    }

    public function allorders()
    {
        $data['msg'] = '';
        $error = '';
        $data['activaation_id'] = 22;
        $data['sub_activaation_id'] = '22_6';

        $data['title'] = 'Order';
        $data['sub_heading'] = 'New Orders';
        $data['controller'] = $this->ctrl_name;

        $data['start'] = 0;
        $data['maxm'] = $maxm = 100;

        if (isset($_GET['page']) && $_GET['page'] != '') {
            $page = $this->input->post('page');

            $data['page'] = $page;

        } //isset( $_GET['page'] ) && $_GET['page'] != ''
        else {
            $page = 0;
            $data['page'] = 0;

        }
        $start_temp = (($page == 0) ? 0 : $page - 1);
        $start = $start_temp * $maxm;

        if ($start < 0) {
            $start = 0;
        }

        $data['start'] = $page;

        $data['maxm'] = $maxm;
        // $limit_qry = " LIMIT ".$start.",".$maxm;
       

        

        $sql = "";
        $date_range = "";
        $order_status_id_cond = "1,2,3,4";
        if (isset($_GET['mode']) && $_GET['mode'] == "condtion") {
            $results = [];
           
            $order_status_id = (isset($_GET['order_status_id'])) ? $this->input->get('order_status_id') : '';
            $payment_method = (isset($_GET['payment_method'])) ? $this->input->get('payment_method'): '';
            $date_range = (isset($_GET['date_range'])) ? $this->input->get('date_range') : '';
            $customer = (isset($_GET['customer'])) ? $this->input->get('customer'): '';
           
            $order_id = (isset($_GET['order_id'])) ? $this->input->get('order_id') : '';

            if ($date_range != "") {
                $date_range_exp = explode(" - ", $date_range);
                //    print_r($date_range_exp);
                $date_range_exp[0] = $this->common->getDateFormat(trim($date_range_exp[0]), "Y-m-d");
                $date_range_exp[1] = $this->common->getDateFormat(trim($date_range_exp[1]), "Y-m-d");
                $sql = " and  (DATE_FORMAT(o.date_added,'%Y-%m-%d')   BETWEEN '" . $date_range_exp[0] . "' AND '" . $date_range_exp[1] . "') ";
            }

            $data['date_range'] = $date_range;
            $data['oderlist'] = $this->ecommercemodal->getOderlist_custom($order_status_id_cond, $start, $maxm, 'rows', $sql);
            $data['num_row'] = $this->ecommercemodal->getOderlist_custom($order_status_id_cond, 0, 0, 'numrows', $sql);
        }
        else {
         
            $data['oderlist'] = $this->ecommercemodal->getOderlist_custom($order_status_id_cond, $start, $maxm, 'rows', $sql);
            $data['num_row'] = $this->ecommercemodal->getOderlist_custom($order_status_id_cond, 0, 0, 'numrows', $sql);
        }
        
       

        $fun_name = $this->ctrl_name . "/allorders";
        $data['other_para'] = "";
        $data['tittle'] = "Order " . $date_range;
        $data['fun_name'] = $fun_name . "?" . $data['other_para'];

        $this->load->view('report_orders_list', $data);
        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');
    }

    public function exporttocsv()
    {
        // print_r($_POST);
        $limit_total = 900000;
        $xcelfiles = [];
        $filename = "Orders";
        $search_qry = "";
        $date_range = (isset($_GET['date_range'])) ? $this->input->get('date_range') : '';
       
        if ($date_range != "") {
            $date_range_exp = explode(" - ", $date_range);
            //    print_r($date_range_exp);
            $date_range_exp[0] = $this->common->getDateFormat(trim($date_range_exp[0]), "Y-m-d");
            $date_range_exp[1] = $this->common->getDateFormat(trim($date_range_exp[1]), "Y-m-d");
            $search_qry = " and  (DATE_FORMAT(o.date_added,'%Y-%m-%d')   BETWEEN '" . $date_range_exp[0] . "' AND '" . $date_range_exp[1] . "') ";
        }

        $sql = "select count('')  as total_data  from    `m_order` o  inner join 	m_order_status os on o.order_status_id = os.order_status_id 
        left join review_order ro on o.order_id = ro.order_id
        $search_qry
        ORDER BY o.order_id DESC  ";
        $query = $this->db->query($sql);
        $resultdata = $query->row_array();
        $total_data = $resultdata['total_data'];

        $noofexcels = $total_data > $limit_total ? ceil($total_data / $limit_total) : 1;

        $headtitle = ['Invoice-No', 'Date Of Order', 'Total-Amount','Customer Name','Email','Phone' , 'Payment Method','Address','Status','Products','Info' ];

        for ($i = 0; $i < $noofexcels; $i++) {
            $spreadsheet = new Spreadsheet();
            $spreadsheet->setActiveSheetIndex(0);
            $activeSheet = $spreadsheet->getActiveSheet();
            $header = array_keys($headtitle);

            $header = $header[0];
            $header = $headtitle;
            $header = array_values($header);
            $activeSheet->fromArray([$header], null, 'A1');

            $offset = $i == 0 ? $i : $i * $limit_total;
            $resultsPerPage = $noofexcels > 1 ? $limit_total : $total_data;

            $sql = "select o.order_id,o.store_id, CONCAT ( o.invoice_prefix,o.invoice_no ) as invoiceno,o.date_added, o.total ,CONCAT(o.firstname,' ', o.lastname) as fullname ,email,o.telephone, o.payment_method,CONCAT(o.shipping_firstname,' ',o.shipping_lastname,', ',o.shipping_address_1 ,' , ', o.shipping_city,' , ',o.shipping_postcode ) as shipping_address ,  os.name as order_satus_name   from    `m_order` o  inner join 	m_order_status os on o.order_status_id = os.order_status_id ".$search_qry."
              ORDER BY o.order_id DESC limit 0, ".$resultsPerPage." ";
            $query = $this->db->query($sql);
            $resultdata = $query->result_array();
            
            $startCell = 2; //starting from A2

            foreach ($resultdata as $key => $valueData) {
               
                 
               // print_r($valueData);
                $products = $this->ecommercemodal->getOrderProducts($valueData['order_id']);
                //print_r($products);
                $product_str = "";
                foreach ($products as $product) {
                    $product_str .= $product['name']." :: ".$product['quantity']." :: ".$product['total']."".PHP_EOL;
                
                }
                $order_total_str = "";
                $totals = $this->ecommercemodal->getOrderTotals($valueData['order_id']);
                foreach ($totals as $total) {
                    $order_total_str .= $total['title'] ." :: ".$total['value']."".PHP_EOL;
                    
                }
                $valueData['product'] = $product_str;
                $valueData['info'] = $order_total_str;

                unset($valueData['order_id']);
                unset($valueData['store_id']);
               // print_r($valueData);

                $value = array_values($valueData);
               // print_r([$valueData]);

                $activeSheet->fromArray([$value], null, 'A' . $startCell, true);
                $startCell++;

               
            }
            //$writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
            $filename =  'Order-' . $i;
            $xcelfiles[] = $filename;
            $writer = new Xlsx($spreadsheet);
            $writer->save('uploads/' .$filename. '.xlsx');
        }
       header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');  
       header('Content-Disposition: attachment; filename=' .$filename. '.xlsx');  
       $writer->save('php://output');
        // if(sizeof($xcelfiles) > 0){
        //     $file_name_download = "Products-".time();
        //     $zip_file_tmp = "uploads/".$file_name_download. '.zip';
        //     $zip = new ZipArchive();
        //     $zip->open($zip_file_tmp, ZipArchive::CREATE);
        //     foreach ($xcelfiles as $file) {
        //         $zip->addFile($file . '.xlsx');
        //     }
        //     $zip->close();
        //     foreach ($xcelfiles as $file) {
        //         @unlink('uploads/' .$file . '.xlsx');
        //     }
        //     ob_flush();
        //     flush();
        // }
   

    }
    public function orderdetail($order_uuid = '')
    {
       
        $current_date_time = date("Y-m-d h:i:s");
        $session_user_data = $this->session->userdata('admin_user_data');

        $data['title'] = 'Order';
        $data['back_link'] = $this->ctrl_name;
        $data['sub_heading'] = 'Order Information';
        $data['activaation_id'] = 21;
        $data['sub_activaation_id'] = $l_s_act = (isset($_GET['activaation_id'])) ? filter_var($_GET['activaation_id'], FILTER_SANITIZE_STRING) : '1';
        
        $data['activaation_id'] = 22;
        $data['sub_activaation_id'] = '22_1';



        $order_uuid = filter_var($order_uuid, FILTER_SANITIZE_STRING);

        $order_info = $this->ecommercemodal->getOrder($order_uuid);
        
        $data['page'] = $page = (isset($_GET['page'])) ? $this->input->post('page') : '';

        if (!sizeof($order_info)) {
            $newdata = array('warning' => 'Please select order');
            $this->session->set_userdata($newdata);
            redirect('orders');
        }

        $order_status_id = $order_info['order_status_id'];
        
        if (isset($_POST['mode']) && $_POST['mode'] == 'edit_content_updatestatus') {
            $order_status_id = $order_status_id = (isset($_POST['order_status_id'])) ? $this->common->mysql_safe_detail($_POST['order_status_id']) : '';

            if (isset($_POST['notify'])) {

                $notify = $notify = (isset($_POST['notify'])) ? $this->common->mysql_safe_detail($_POST['notify']) : '';
            } else {
                $notify = "0";
            }

            $comment = $comment = (isset($_POST['comment'])) ? $this->common->mysql_safe_detail($_POST['comment']) : '';

            

            $this->db->query("UPDATE `m_order` SET order_status_id = '" . (int) $order_status_id . "', date_modified   ='" . $current_date_time . "'  WHERE order_id = '" . (int) $order_info['order_id'] . "'");

            $this->db->query("INSERT INTO order_history SET order_id = '" . (int) $order_info['order_id'] . "',  order_status_id = '" . (int) $order_status_id . "', notify = '" . (int) $notify . "', comment = '" . $comment . "', date_added = '" . $current_date_time . "' ");

            if ($notify == "1") {

                $subject = sprintf('%s - Order Update %s', $order_info['store_name'], $order_info['invoice_prefix'] . $order_info['invoice_no'] );

                $message  = 'Order ID:' . ' ' . $order_info['invoice_prefix'] . $order_info['invoice_no']  . "\n";
                $message .= 'Date Ordered:' . ' ' . date('d-m-Y', strtotime($order_info['date_added'])) . "\n\n";
    
                $order_status_query = $this->db->query("SELECT * FROM m_order_status WHERE order_status_id = '" . (int)$order_status_id . "' ");
    
                if ($order_status_query->num_rows()>0) {
                    $order_status_query_row = $order_status_query->row_array();
                    $message .= 'Your order has been updated to the following status:' . "\n";
                    $message .= $order_status_query_row['name'] . "\n\n";
                }
    
                if ($order_info['customer_id']) {
                    $message .= 'To view your order click on the link below:' . "\n";
                    $message .= html_entity_decode($order_info['store_url'] . 'index.php/account/orderdetail/'.$order_uuid, ENT_QUOTES, 'UTF-8') . "\n\n";
                }
    
                if ($comment!="") {
                    $message .= 'The comments for your order are:' . "\n\n";
                    $message .= strip_tags(html_entity_decode($comment, ENT_QUOTES, 'UTF-8')) . "\n\n";
                }
    
                $message .= 'Please reply to this email if you have any questions.';

                $getDomainAddress = $this->services->getDomainAddress();

                $sql = "select * from  `wti_m_setting` where `group_name`='config_site_mail' ";

                $query = $this->db->query($sql);
                if ($query->num_rows() > 0) {
                    $m_setting = $query->result_array();
        
                    foreach ($m_setting as $key => $val) {
                        $config_site_mail[$val['key_name']] = $val['value'];
                    }

                   // $mail = new Mail();
                  
                      
                            $this->email->from($config_site_mail['config_site_mail']);
							$this->email->to($order_info['email']);
							$this->email->subject($subject);
							$this->email->message($message);
							$this->email->send();

                    // try {
                    //     //Server settings
        
                    //     $mail = new PHPMailer(true);
        
                    //     $mail->SMTPDebug = 0; // Enable verbose debug output
                    //     $mail->isMail(); // Send using SMTP
                        
                    //     //Recipients
                    //     $admin_mail_id = $config_site_mail['config_site_mail'];
        
                    //     $mail->setFrom($admin_mail_id, $config_site_mail['config_site_from_name']);
                    //     $contact_name  = $order_info['firstname']. " ".$order_info['lastname'];
                    //     $mail->addAddress($order_info['email'], $contact_name); // Add a recipient
                    //     //  $mail->addReplyTo($admin_mail_id, $contact_name);
                    //     /*
                    //     $config_alert_emails = $config_site_mail['config_alert_emails'];
                    //     $config_alert_emails_exp = explode(",",$config_alert_emails);
                    //     foreach($config_alert_emails_exp as $key => $alertemails){
                    //     $mail->addCC($alertemails);
                    //     }
                    //      */
                    //     // Attachments
        
                    //     // Content
                    //     $mail->isHTML(false); // Set email format to HTML
                    //     $mail->Subject = $subject;
                    //     $mail->Body = $message;
                    //     //  $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        
                    //     $mail->send();
                    //     // echo 'Message has been sent';
                    // } catch (Exception $e) {
                    //     //  $error_msg = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        
                    // }
                }
                  
                   
                 
            }

            $this->session->set_flashdata('success', 'Order updatated succssfully!');
            redirect("orders/orderdetail/" . $order_uuid . "?page=" . $page);
        }
 
        //print_r($order_info);
        $data['controller'] = $this->ctrl_name;

        $data['order_info'] = $order_info;

        //$data['order_id'] = $order_info['order_id'];

        $products = $this->ecommercemodal->getOrderProducts($order_info['order_id']);
        //print_r($products);
        foreach ($products as $product) {

            $data['products'][] = array(

                'order_product_id' => $product['order_product_id'],
                'product_id' => $product['product_id'],
                'name' => $product['name'],
                'model' => $product['item_code'],
                'main_image' => $product['main_image'],
                'quantity' => $product['quantity'],
                'order_status_name' => isset($product['order_status_name']) ? $product['order_status_name'] : '',
                'price' => $this->ecommercemodal->format($product['price'],$order_info['store_id']),
                'total' => $this->ecommercemodal->format($product['total'],$order_info['store_id']),
                'href' => '',
            );
        }

        $totals = $this->ecommercemodal->getOrderTotals($order_info['order_id']);
        foreach ($totals as $total) {
            $data['totals'][] = array(
                'title' => $total['title'],
                'text' => $this->ecommercemodal->format($total['value'],$order_info['store_id']),
            );
        }

        // Payment Address
        $format = '{firstname} {lastname}' . "\n" . '{company}' . "\n" . '{address_1}' . "\n" . '{postcode}' . "\n" . '{state_name}' . "\n" . '{country_name}';
        $find = array(
            '{firstname}',
            '{lastname}',
            '{company}',
            '{address_1}',
            '{postcode}',
            '{state_name}',
            '{country_name}',
           
        );

        $replace = array(
            'firstname' => "<strong>" . ucfirst($order_info['payment_firstname']),
            'lastname' => ucfirst($order_info['payment_lastname']) . "</strong>",
            'company' => ucfirst($order_info['payment_company']),
            'address_1' => ucfirst($order_info['payment_address_1']),
            'postcode' => $order_info['payment_postcode'],
            'state_name' => ucfirst($order_info['payment_zone']),
            'country_name' => ucfirst($order_info['payment_country']),
            
        );

        $data['payment_address'] = str_replace(array("\r\n", "\r", "\n"), '<br />', preg_replace(array("/\s\s+/", "/\r\r+/", "/\n\n+/"), '<br />', trim(str_replace($find, $replace, $format))));

        // Shipping Address
        $format = '{firstname} {lastname}' . "\n" . '{company}' . "\n" . '{address_1}' . "\n" . '{postcode}' . "\n" . '{state_name}' . "\n" . '{country_name}';
        $find = array(
            '{firstname}',
            '{lastname}',
            '{company}',
            '{address_1}',
            '{postcode}',
            '{state_name}',
            '{country_name}'
           
        );

        $replace = array(
            'firstname' => "<strong>" . ucfirst($order_info['shipping_firstname']),
            'lastname' => ucfirst($order_info['shipping_lastname']) . "</strong>",
            'company' => ucfirst($order_info['shipping_company']),
            'address_1' => ucfirst($order_info['shipping_address_1']),
            'postcode' => $order_info['shipping_postcode'],
            'state_name' => ucfirst($order_info['shipping_zone']),
            'country_name' => ucfirst($order_info['shipping_country'])
            
        );

        $data['shipping_address'] = str_replace(array("\r\n", "\r", "\n"), '<br />', preg_replace(array("/\s\s+/", "/\r\r+/", "/\n\n+/"), '<br />', trim(str_replace($find, $replace, $format))));

        /*  $order_status_info = $this->ecommercemodal->getOrderStatus($order_info['order_status_id']);

        if ($order_status_info) {
        $data['order_status'] = $order_status_info['name'];
        } else {
        $data['order_status'] = '';
        } */
        $data['order_uuid'] = $order_uuid;
        $data['order_statuses'] = $this->ecommercemodal->getOrderStatusesForOrder();
        $data['driver_list'] = [];//$this->ecommercemodal->get_ddriver_list();

        $data['histories'] = $this->ecommercemodal->getOrderHistories($order_info['order_id']);
        
        $fun_name = "orderdetail/" . $order_uuid . "?page=" . $page;
        $data['fun_name'] = $fun_name;
        $data['controller'] = $this->ctrl_name;

        if ($order_status_id == 1) {
            $data['fun_name_back'] = 'new_orders';
        }
        if ($order_status_id == 2) {
            $data['fun_name_back'] = 'confirmed_orders';
        }
        if ($order_status_id == 3) {
            $data['fun_name_back'] = 'confirmed_orders';
        }
        if ($order_status_id == 4 && $l_s_act == 2) {
            $data['fun_name_back'] = 'delivered';
        }
        if ($order_status_id == 4 && $l_s_act == 4) {
            $data['fun_name_back'] = 'reviewpending';
        }
        if ($order_status_id == 4 && $l_s_act == 5) {
            $data['fun_name_back'] = 'reviewlist';
        }
        $this->load->view('orders_orderdetail', $data);

    }
    //end
    public function reviewpending()
    {
        $data['msg'] = '';
        $error = '';
        $data['activaation_id'] = 22;
        $data['sub_activaation_id'] = '22_4';

        $data['title'] = 'Order';
        $data['sub_heading'] = 'Review Pending Orders';
        $data['controller'] = $this->ctrl_name;

        $data['start'] = 0;
        $data['maxm'] = $maxm = 100;

        if (isset($_GET['page']) && $_GET['page'] != '') {
            $page = $this->input->post('page');

            $data['page'] = $page;

        } //isset( $_GET['page'] ) && $_GET['page'] != ''
        else {
            $page = 0;
            $data['page'] = 0;

        }
        $start_temp = (($page == 0) ? 0 : $page - 1);
        $start = $start_temp * $maxm;

        if ($start < 0) {
            $start = 0;
        }

        $data['start'] = $page;

        $data['maxm'] = $maxm;
        // $limit_qry = " LIMIT ".$start.",".$maxm;

        $data['oderlist'] = $this->ecommercemodal->getOderlistReviewPending($start, $maxm, 'rows');
        $data['num_row'] = $this->ecommercemodal->getOderlistReviewPending(0, 0, 'numrows');

        $fun_name = $this->ctrl_name . "/reviewpending";
        $data['other_para'] = "";

        $data['fun_name'] = $fun_name . "?" . $data['other_para'];

        $this->load->view('orders_list', $data);
        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');
    }
    public function reviewlist()
    {
        $data['msg'] = '';
        $error = '';
        $data['activaation_id'] = 22;
        $data['sub_activaation_id'] = '22_5';

        $data['title'] = 'Order';
        $data['sub_heading'] = 'Review Pending Orders';
        $data['controller'] = $this->ctrl_name;

        $data['start'] = 0;
        $data['maxm'] = $maxm = 100;

        if (isset($_GET['page']) && $_GET['page'] != '') {
            $page = $this->input->post('page');

            $data['page'] = $page;

        } //isset( $_GET['page'] ) && $_GET['page'] != ''
        else {
            $page = 0;
            $data['page'] = 0;

        }
        $start_temp = (($page == 0) ? 0 : $page - 1);
        $start = $start_temp * $maxm;

        if ($start < 0) {
            $start = 0;
        }

        $data['start'] = $page;

        $data['maxm'] = $maxm;
        // $limit_qry = " LIMIT ".$start.",".$maxm;

        $data['oderlist'] = $this->ecommercemodal->getOderlistReviewDone($start, $maxm, 'rows');
        $data['num_row'] = $this->ecommercemodal->getOderlistReviewDone(0, 0, 'numrows');

        $fun_name = $this->ctrl_name . "/reviewlist";
        $data['other_para'] = "";

        $data['fun_name'] = $fun_name . "?" . $data['other_para'];

        $this->load->view('orders_list_reviewlist', $data);
        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');
    }

 

}
