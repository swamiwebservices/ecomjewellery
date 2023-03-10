<?php
defined('BASEPATH') or exit('No direct script access allowed');
// use Dipnot\DirectPayOnline\Config;
// use Dipnot\DirectPayOnline\Model\Service;
// use Dipnot\DirectPayOnline\Model\Transaction;
// use Dipnot\DirectPayOnline\Request\CreateTokenRequest;
// use Dipnot\DirectPayOnline\Request\VerifyTokenRequest;

use Zepson\Dpo\Dpo;

class Dponetwork extends CI_Controller
{
    public $controller = "dponetwork";
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

        $this->domain_id = $this->services->getDomainId();

    }
    public function config()
    {
        // Config
        $data['dponetwork_token'] = $dponetwork_token = $this->services->getold('dponetwork_token');

        $data['dponetwork_url'] = $dponetwork_url = $this->services->getold('dponetwork_url');
        $data['dponetwork_test'] = $dponetwork_test = $this->services->getold('dponetwork_test');
        //print_r($data);
        $dponetwork_mode = false;

        if ($dponetwork_test == "demo") {
            $dponetwork_mode = true;
        }

        $config = new Config();
        $config->setCompanyToken($dponetwork_token);
        $config->setTestMode($dponetwork_mode);

        return $config;
    }
    public function information()
    {
        $session_user_data = $this->session->userdata('front_user_detail');

        /////////////////////////////////////Start Payu Vital  Information /////////////////////////////////

        $getDomainAddress = $this->services->getDomainAddress();
        $order_info = $this->services->getOrder($this->session->userdata('order_id_ki'));
        //print_r($order_info);
        $data['amount'] = $amount = $order_info['total'];
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

        $data['action'] = site_url("checkout/dponetworksuccess?uuid=" . $order_info['uuid']);

        //$this->render();
        $method_data = array(
            'code' => 'dponetwork',
            'title' => 'Dponetwork',
            'terms' => '',
            'sort_order' => $this->services->getold('dponetwork_sort_order'),
        );
        $this->session->set_userdata('payment_method', $method_data);

        return $this->load->view('payment/dponetwork', $data);
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

        $order_data['payment_method'] = 'dponetwork';
        $order_data['payment_code'] = 'dponetwork';

        $return_result['status'] = 1;
        $return_result['msg'] = "";
        $return_result['uuid'] = $order_info['uuid'];
        $paymentUrl = "";

        // $config = $this->config();
        // // print_r($config);
        // //         // Transaction
        // //$order_info['total']
        // $transaction = new Transaction(1, "USD");
        // $transaction->setRedirectURL(site_url("dponetwork/dponetworksuccess"));
        // $transaction->setBackURL(site_url("cart"));
        // $transaction->setDeclinedURL(site_url("dponetwork/dponetworkdeclined"));
        // $transaction->setCompanyRef($order_info['uuid']); // You should probably set this
        // //print_r($transaction);

        // // // Service
        // $data['dponetwork_serciceid'] = $dponetwork_serciceid = $this->services->getold('dponetwork_serciceid');

        // $payment_for = $getDomainAddress['DOMAINNAME'] . '-produuct';
        // $service1 = new Service($payment_for, $dponetwork_serciceid, date("Y/m/d h:i"));
        // //   print_r($service1);

        // // // createToken Request
        // $createTokenRequest = new CreateTokenRequest($config);
        // $createTokenRequest->setTransaction($transaction);
        // $createTokenRequest->addService($service1);
        // $createToken = $createTokenRequest->execute();
        // // print_r($createToken);

        // // // Get payment URL with created token
        // $paymentUrl = $createTokenRequest->getPaymentUrl($createToken["TransToken"]);
        //  print_r($paymentUrl);

        $data['dponetwork_token'] = $dponetwork_token = $this->services->getold('dponetwork_token');
        $data['dponetwork_serciceid'] = $dponetwork_serciceid = $this->services->getold('dponetwork_serciceid');
        $data['dponetwork_test'] = $dponetwork_test = $this->services->getold('dponetwork_test');

        $dpo = new Dpo;
        $amount = ($dponetwork_test == "demo") ? 1 : $order_info['total'];
        $data_order = [
            'companyToken' => $dponetwork_token,
            'accountType' => $dponetwork_serciceid,
            'paymentAmount' => $amount,
            'paymentCurrency' => "AED",
            'customerFirstName' => $order_info['payment_firstname'],
            'customerLastName' => $order_info['payment_lastname'],
            'customerAddress' => $order_info['payment_address_1'],
            'customerCity' => $order_info['payment_city'],
            'customerCountry' => $order_info['payment_country'],
            'customerZip' => $order_info['payment_postcode'],
            'customerPhone' => $order_info['telephone'],
            'customerEmail' => $order_info['email'],
            'DefaultPayment' => 'CC',
            'companyRef' => $order_info['invoice_no'],
            'backUrl' => site_url("cart"),
            'redirectURL' => site_url("dponetwork/dponetworksuccess?uuid=" . $order_info['uuid']),
        ];
        // print_r($data_order);die();
        $token = $dpo->createToken($data_order); //return array of response with transaction code
        $token['companyToken'] = $dponetwork_token;
        //print_r($token);

        $paymentUrl = $dpo->getPaymentUrl($token);

        //  print_r($token);
        $order_data['raw_data'] = json_encode($token);
        $order_data['return_payment_txn_id'] = $paymentUrl;

        $where_cart = "order_id = '" . $order_id . "' ";
        $this->common->updateRecord('m_order', $order_data, $where_cart);

        $return_data['status'] = 1;
        $return_data['options'] = $paymentUrl;

        echo json_encode($return_data);
        die();

    }
    public function dponetworksuccess($uuid = "")
    {
        $session_user_data = $this->session->userdata('front_user_detail');
        //print_r($_POST);
       // print_r($_GET);
/*
Array ( [uuid] => 3063cc83-fe08-4d6f-8d8d-a986b3da52be [TransID] => 1AFD9A8F-A5A5-4809-8E31-E9D90E9962C9 [CCDapproval] => 4444444445 [PnrID] => 15 [TransactionToken] => 1AFD9A8F-A5A5-4809-8E31-E9D90E9962C9 [CompanyRef] => 15 )
 */
        $success = false;

        if (isset($_GET['TransactionToken'])) {
            $uuid = $this->input->get('uuid');
            $data['order_info'] =  $order_info = $this->services->getOrderUUID($uuid);

            $data['dponetwork_token'] = $dponetwork_token = $this->services->getold('dponetwork_token');

            $data_order = [
                'companyToken' => $dponetwork_token,
                'transToken' => $_GET['TransactionToken'],
            ];

            $dpo = new Dpo;
            $responseToken = $dpo->verifyToken($data_order); //return array of response with transaction code

            // print_r($response);
            $response = json_decode(json_encode(simplexml_load_string($this->_removeHtml($responseToken))),false);
           // print_r($response);
            $order_data['return_payment_data'] = json_encode($response);
            $order_data['return_payment_status'] = 'Pending';
            if (isset($response->Result)) {
                if ($response->Result === "000") {
                    $success = true;
                    $order_data['return_payment_status'] = 'success';

                    $order_status_id = 2;
                    $data['continue'] = site_url('checkout/success/'.$order_info['uuid']);
                    $this->services->addOrderHistory($order_info['order_id'], $order_status_id, $message, 0, false);
                   
     
                }

            }

            $where_cart = "uuid = '" . $uuid . "' ";
            $this->common->updateRecord('m_order', $order_data, $where_cart);


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
    public function _removeHtml(string $string)
    {
        $string = preg_replace("/<br\W*?\/>/", " ", $string);
        $string = preg_replace("/<br>/", " ", $string);
        $string = preg_replace("/<hr>/", " ", $string);
        return preg_replace("/<hr\W*?\/>/", " ", $string);
    }
    public function dponetworkdeclined($uuid = "")
    {
        $session_user_data = $this->session->userdata('front_user_detail');
        print_r($_POST);
        print_r($_GET);

    }

}
