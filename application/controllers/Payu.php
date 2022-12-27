<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Payu extends CI_Controller
{
    public $controller = "payu";
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
        if (empty($this->session->userdata('domain_id'))) {
            $this->session->set_userdata('domain_id', '1');
        }
        if (empty($this->session->userdata('domain_id'))) {
            $this->session->set_userdata('domain_id', '1');
        }
        $this->domain_id = $this->services->getDomainId();

    }

    public function information()
    {
		$session_user_data = $this->session->userdata('front_user_detail');

        $data['merchant'] = $this->services->getold('payu_merchant');

        /////////////////////////////////////Start Payu Vital  Information /////////////////////////////////
		$data['testmode'] = $testmode = $this->services->getold('payu_test');
        if ($testmode == 'demo') {
            $data['action'] = 'https://test.payu.in/_payment.php';
			$data['service_provider'] = '';
        } else {
            $data['action'] = 'https://secure.payu.in/_payment.php';
			$data['service_provider'] = 'payu_paisa';
        }
		$getDomainAddress = $this->services->getDomainAddress();
        $order_info = $this->services->getOrder($this->session->userdata('order_id_ki'));
		//print_r($order_info);
        $data['amount'] =  $amount = $order_info['total']; 
        $data['productinfo'] = $getDomainAddress['DOMAINNAME'];
        $data['firstname'] = $order_info['payment_firstname'];
        $data['Lastname'] = $order_info['payment_lastname'];
        $data['Zipcode'] = $order_info['payment_postcode'];
        $data['email'] = $order_info['email'];
        $data['phone'] = $order_info['telephone'];
        $data['address1'] = $order_info['payment_address_1'];
        $data['address2'] = $order_info['payment_address_2'];
        $data['state'] = $order_info['payment_zone'];
        $data['city'] = $order_info['payment_city'];
        $data['country'] = $order_info['payment_country'];

        $data['surl'] = site_url('payu/callback?uuid='.$session_user_data['uuid']); //HTTP_SERVER.'/index.php?route=payment/payu/callback';
        $data['Furl'] = site_url('payu/callback?uuid='.$session_user_data['uuid']); //HTTP_SERVER.'/index.php?route=payment/payu/callback';
        $data['curl'] = site_url('cart');

       
        $productInfo = $data['productinfo'];
        $firstname = $order_info['payment_firstname'];
        $email = $order_info['email'];
        $data['pg'] = 'NB';
        $txnid =  $order_info['uuid'];

        
        //$MERCHANT_KEY = "v26ZSt";
        // Merchant Salt as provided by Payu
        //$SALT = "A7d1AD15";
        if ($testmode == 'live') {
            $data['key'] = $this->services->getold('payu_merchant');
            $data['salt'] = $this->services->getold('payu_salt');

        } else {
            $data['key'] = 'gtKFFx'; //gtKFFx
            $data['salt'] = '4R38IvwiV57FwVpsgOvTXBdLE4tHUXFW'; //eCwWELxi

        }
        $salt = $data['salt'];
        $key = $data['key'];
        $data['txnid'] = $txnid;

       

		$Hash = hash('sha512', $key . '|' . $txnid . '|' . $amount . '|' . $productInfo . '|' . $firstname . '|' . $email . '|||||||||||' . $salt);
	 
   

        
        $data['Hash'] = $Hash;

        //$this->render();
        $method_data = array(
            'code' => 'payu',
            'title' => 'Payu',
            'terms' => '',
            'sort_order' => $this->services->getold('payu_sort_order'),
        );
        $this->session->set_userdata('payment_method', $method_data);

        $this->db->query("UPDATE `m_order` SET  payment_method = 'Payu', payment_code = 'payu'  WHERE order_id = '" . (int) $this->session->userdata('order_id_ki') . "'");

        return $this->load->view('payment/payu', $data);
    }
    public function confirm()
    {

        $order_id = (int) $this->session->userdata('order_id_ki');
        $order_info = $this->services->getOrder($order_id);
        $order_data['shipping_firstname'] = $this->input->post('shipping_firstname');
        $order_data['shipping_lastname'] = $this->input->post('shipping_lastname');
        $order_data['shipping_company'] = $this->input->post('shipping_company');
        $order_data['shipping_address_1'] = $this->input->post('shipping_address_1');
        $order_data['shipping_address_2'] = $this->input->post('shipping_address_2');
        $order_data['shipping_country_id'] = $this->input->post('shipping_country_id');
        $order_data['shipping_zone_id'] = $this->input->post('shipping_zone_id');
        $order_data['shipping_city'] = $this->input->post('shipping_city');
        $order_data['shipping_postcode'] = $this->input->post('shipping_postcode');
        $order_data['shipping_mobile'] = $this->input->post('shipping_mobile');

        $order_data['comment'] = $this->input->post('comment');

        $order_data['payment_method'] = 'Payu';
        $order_data['payment_code'] = 'payu';

        $where_cart = "order_id = '" . $order_id . "' ";
        $this->common->updateRecord('m_order', $order_data, $where_cart);

        $return_result['status'] = 1;
        $return_result['msg'] = "";
        $return_result['uuid'] = $order_info['uuid'];
        echo json_encode($return_result);
        die();

    }
    public function callback($uuid = "")
    {
		$session_user_data = $this->session->userdata('front_user_detail');

       // print_r($_POST);
		
		//die();
        $data['testmode'] = $testmode = $this->services->getold('payu_test');
        //$MERCHANT_KEY = "v26ZSt";
        // Merchant Salt as provided by Payu
        //$SALT = "A7d1AD15";
        if ($testmode == 'live') {
            $key = $this->services->getold('payu_merchant');
            //$data['salt'] = $this->services->getold('payu_salt');

        } else {
            $key = 'gtKFFx'; //gtKFFx
            //$data['salt'] ='eCwWELxi';     //4R38IvwiV57FwVpsgOvTXBdLE4tHUXFW

        }

		$txnid = $_POST['txnid'];
            
		$order_info = $this->services->getOrderUUID($txnid);

        if (!isset($session_user_data['customer_id'])) {
           
            $sql = "select * from m_customer where customer_id='{$order_info['customer_id']}'";
            $customer_query = $this->db->query($sql);
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
            }
        }
		
        if (isset($_POST['key']) && ($_POST['key'] == $key)) {
			$getDomainAddress = $this->services->getDomainAddress();
            $data['title'] = sprintf('Thank you for shopping with Payu', $getDomainAddress['DOMAINNAME']);

            if (!isset($_SERVER['HTTPS']) || ($_SERVER['HTTPS'] != 'on')) {
                $data['base'] = base_url();
            } else {
                $data['base'] = base_url();
            }

            $data['charset'] = "";
            $data['language'] = "en";
            $data['direction'] = "";
            $data['heading_title'] = sprintf('Thank you for shopping with Payu', $getDomainAddress['DOMAINNAME']);
            $data['text_response'] = "Response from payu:";
            $data['text_success'] = "your payment was successfully received.";
            $data['text_success_wait'] = sprintf('<b><span style="color: #FF0000">Please wait...</span></b> whilst we finish processing your order.<br>If you are not automatically re-directed in 10 seconds, please click <a href="%s">here</a>.', site_url('checkout/success'));
            $data['text_failure'] = "Your payment has been failured";
            $data['text_cancelled'] = "Your payment has been cancelled";
            $data['text_cancelled_wait'] = sprintf('<b><span style="color: #FF0000">Please wait...</span></b><br>If you are not automatically re-directed in 10 seconds, please click <a href="%s">here</a>', site_url('cart'));
            $data['text_pending'] = "Your payment has been pending";
            $data['text_failure_wait'] = sprintf('<b><span style="color: #FF0000">Please wait...</span></b><br>If you are not automatically re-directed in 10 seconds, please click <a href="%s">here</a>', site_url('cart'));

           
            $key = $_POST['key'];
            $amount = $_POST['amount'];
            $productInfo = $_POST['productinfo'];
            $firstname = $_POST['firstname'];
            $email = $_POST['email'];

            if ($testmode == 'live') {
                $salt = $this->services->getold('payu_salt');
            } else {
                $salt = '4R38IvwiV57FwVpsgOvTXBdLE4tHUXFW'; //eCwWELxi
            }

            $txnid = $_POST['txnid'];
            $keyString = $key . '|' . $txnid . '|' . $amount . '|' . $productInfo . '|' . $firstname . '|' . $email . '||||||||||';
            $keyArray = explode("|", $keyString);
            $reverseKeyArray = array_reverse($keyArray);
            $reverseKeyString = implode("|", $reverseKeyArray);

            if (isset($_POST['status']) && $_POST['status'] == 'success') {
                $saltString = $salt . '|' . $_POST['status'] . '|' . $reverseKeyString;
                $sentHashString = strtolower(hash('sha512', $saltString));
                $responseHashString = $_POST['hash'];

               
                
                $message = '';
                $message .= 'Invoice No: ' . $order_info['invoice_no'] . "\n";
                $message .= 'Transaction Id: ' . $_POST['mihpayid'] . "\n";
                foreach ($_POST as $k => $val) {
                    $message .= $k . ': ' . $val . "\n";
                }
                $this->db->query("UPDATE `m_order` SET  return_payment_status = '" . $_POST['status'] . "', return_payment_txn_id='" . $_POST['mihpayid'] . "', return_payment_data='" . serialize($_POST) . "'   WHERE uuid  = '" .   $order_info['uuid'] . "'");

                if ($sentHashString == $_POST['hash']) {
                    //$this->services->confirm($_POST['txnid'], $this->services->getold('payu_order_status_id'));
                    //$this->services->update($_POST['txnid'], $this->services->getold('payu_order_status_id'), $message,false);
                    $order_status_id = 2;
                    $data['continue'] = site_url('checkout/success/'.$order_info['uuid']);
                    $this->services->addOrderHistory($order_info['order_id'], $order_status_id, $message, 0, false);
                     $this->load->view('payment/payu_success', $data);

                    //$this->response->setOutput($this->render());
                } else {
                    //Transaction will be pending
                    //$this->services->confirm($_POST['txnid'],1);
                    //$this->services->update($this->session->userdata('order_id_ki'), 1, $message, false);
                    //
                    //$order_status_id = $this->services->getold('payu_order_status_id');
                    $data['continue'] = site_url('checkout');
                    $this->services->addOrderHistory($order_info['order_id'], 1, $message, 0, false);

                    $this->load->view('payment/payu_pending', $data);
                }

            } else {

                $data['continue'] = site_url('cart');

                $this->load->view('payment/payu_failure', $data);
                //$this->response->setOutput($this->render());
            }
        }

        //$this->load->view('payment/payu_failure', $data);
    }
    

}
