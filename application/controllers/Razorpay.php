<?php
defined('BASEPATH') or exit('No direct script access allowed');
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

class Razorpay extends CI_Controller
{
    public $controller = "razorpay";
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

   
        /////////////////////////////////////Start Payu Vital  Information /////////////////////////////////
	 
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

        $data['action'] = site_url("checkout/razorpaysuccess?uuid=".$order_info['uuid']);

             
        //$this->render();
        $method_data = array(
            'code' => 'razorpay',
            'title' => 'Razorpay',
            'terms' => '',
            'sort_order' => $this->services->getold('razorpay_sort_order'),
        );
        $this->session->set_userdata('payment_method', $method_data);

       
        return $this->load->view('payment/razorpay', $data);
    }
    public function confirm()
    {

        $order_id = (int) $this->session->userdata('order_id_ki');
        $order_info = $this->services->getOrder($order_id);
        $getDomainAddress = $this->services->getDomainAddress();
         
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

        $order_data['payment_method'] = 'razorpay';
        $order_data['payment_code'] = 'razorpay';

     
        $return_result['status'] = 1;
        $return_result['msg'] = "";
        $return_result['uuid'] = $order_info['uuid'];


        $data['razorpay_keyId'] = $razorpay_keyId = $this->services->getold('razorpay_keyId');
        $data['razorpay_keySecret'] = $razorpay_keySecret = $this->services->getold('razorpay_keySecret');
        $razorapi = new Api($razorpay_keyId, $razorpay_keySecret);

     

      
        $orderData = [
            'receipt' => $order_info['invoice_no'],
            'amount' => $order_info['total'] * 100, // 2000 rupees in paise
            'currency' => 'INR',
            'payment_capture' => 1, // auto capture
        ];
     
        $razorpayOrder = $razorapi->order->create($orderData);
    

        $return_payment_txn_id = $razorpayOrder['id'];

        $order_data['return_payment_txn_id'] = $return_payment_txn_id;
        

        $where_cart = "order_id = '" . $order_id . "' ";
        $this->common->updateRecord('m_order', $order_data, $where_cart);

 

        $payment_for = $getDomainAddress['DOMAINNAME'] . '-produuct';


    $data_pass = [
        "key" => $razorpay_keyId,
        "amount" => $order_info['total'],
        "name" => $payment_for,
        "description" => $payment_for,
        "image" => $getDomainAddress['LOGO_URL'],
        "callback_url" => site_url("razorpay/razorpaysuccess/".$order_info['uuid'])  ,
        "prefill" => [
            "name" => $order_info['payment_firstname'],
            "email" => $order_info['email'],
            "contact" => $order_info['telephone'],
        ],
        "notes" => [
            "address" => $order_info['payment_address_1'],
            "merchant_order_id" => $order_info['transaction_id'],
        ],
        "theme" => [
            "color" => "#ec268f",
        ],
        "order_id" => $return_payment_txn_id,
    ];

    $return_data['status'] = 1;
    $return_data['options'] = $data_pass;
    
    //$data['json_return_data'] = json_encode($data_pass);

        echo json_encode($return_data);
        die();

    }
    public function razorpaysuccess($uuid = "")
    {
		$session_user_data = $this->session->userdata('front_user_detail');

       // print_r($_POST);
		 
    //   print_r($_POST);
     //  print_r($_GET);

       if (empty($_POST['razorpay_payment_id']) === false) {
           $data['razorpay_keyId'] = $razorpay_keyId = $this->services->getold('razorpay_keyId');
           $data['razorpay_keySecret'] = $razorpay_keySecret = $this->services->getold('razorpay_keySecret');
           $razorapi = new Api($razorpay_keyId, $razorpay_keySecret);

           $data['order_info'] =  $order_info = $this->services->getOrderUUID($uuid);
           //print_r($order_info);
           $order_return_transaction_id = (isset($_POST['razorpay_payment_id'])) ? filter_var($_POST['razorpay_payment_id'], FILTER_SANITIZE_STRING) : '0';
           try
           {
               // Please note that the razorpay order ID must
               // come from a trusted source (session here, but
               // could be database or something else)
               $attributes = array(
                   'razorpay_order_id' => $order_info['return_payment_txn_id'],
                   'razorpay_payment_id' => $_POST['razorpay_payment_id'],
                   'razorpay_signature' => $_POST['razorpay_signature'],
               );

               $razorapi->utility->verifyPaymentSignature($attributes);
               $success = true;

                  
               $message = '';
               $message .= 'Invoice No: ' . $order_info['invoice_no'] . "\n";
               $message .= 'Razor-payment Id: ' . $order_return_transaction_id . "\n";
               foreach ($_POST as $k => $val) {
                   $message .= $k . ': ' . $val . "\n";
               }
               $this->db->query("UPDATE `m_order` SET  return_payment_status = 'success', return_payment_txn_id='" . $_POST['razorpay_payment_id'] . "', return_payment_data='" . json_encode($_POST) . "'   WHERE uuid  = '" . $order_info['uuid'] . "'");

               $order_status_id = 2;
               $data['continue'] = site_url('checkout/success/'.$order_info['uuid']);
               $this->services->addOrderHistory($order_info['order_id'], $order_status_id, $message, 0, false);
              


           } catch (SignatureVerificationError $e) {

               $order_return_data = json_encode($_POST);

                 $sql = "UPDATE m_order  SET order_status_id=0,return_payment_status='Fail',return_payment_data='$order_return_data' WHERE uuid='".$uuid."'";

               $this->db->query($sql);

               $success = false;
               $error = 'Razorpay Error : ' . $e->getMessage();
               $data['error'] = $error;
           }
       }

       if ($success === true) {
        $this->services->clear();
        //die("aaaaaaaaaa");

        $this->session->unset_userdata('shipping_method');
        $this->session->unset_userdata('shipping_methods');
        $this->session->unset_userdata('payment_method');
        $this->session->unset_userdata('payment_methods');
//            $this->session->unset_userdata('guest');
        $this->session->unset_userdata('comment');
        $this->session->unset_userdata('order_id_ki');
        $this->session->unset_userdata('coupon');
        // $this->session->unset_userdata('reward');
        // $this->session->unset_userdata('voucher');
        // $this->session->unset_userdata('vouchers');
        $this->session->unset_userdata('totals');

        $this->session->unset_userdata('order_id_ki');

        $array_items = array('shipping_method' => '', 'shipping_methods' => '', 'payment_method' => '', 'payment_methods' => '', 'comment' => '', 'order_id' => '', 'shipping_methods' => '', 'coupon' => '', 'totals' => '', 'shipping_address' => '', 'payment_address' => '', 'order_id_ki' => '', 'warning' => '', 'shipping_address' => '', 'payment_address' => '', 'same_payment_shipping_address' => '');
        $this->session->unset_userdata($array_items);
        redirect("checkout/razorpaysuccess/".$uuid);
       // $this->load->view('checkout_success', $data);
        } else {
            $this->load->view('checkout_fail', $data);
        }
    }
    

}
