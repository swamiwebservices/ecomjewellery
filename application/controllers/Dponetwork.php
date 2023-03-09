<?php
defined('BASEPATH') or exit('No direct script access allowed');
use Dipnot\DirectPayOnline\Config;
use Dipnot\DirectPayOnline\Model\Service;
use Dipnot\DirectPayOnline\Model\Transaction;
use Dipnot\DirectPayOnline\Request\CreateTokenRequest;

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

        $config = $this->config();
        // print_r($config);
        //         // Transaction
        //$order_info['total']
        $transaction = new Transaction(1, "USD");
        $transaction->setRedirectURL(site_url("dponetwork/dponetworksuccess"));
        $transaction->setBackURL(site_url("cart"));
        $transaction->setDeclinedURL(site_url("dponetwork/dponetworkdeclined"));
        $transaction->setCompanyRef($order_info['uuid']); // You should probably set this
        //print_r($transaction);

        // // Service
        $data['dponetwork_serciceid'] = $dponetwork_serciceid = $this->services->getold('dponetwork_serciceid');

        $payment_for = $getDomainAddress['DOMAINNAME'] . '-produuct';
        $service1 = new Service($payment_for, $dponetwork_serciceid, date("Y/m/d h:i"));
        //   print_r($service1);

        // // createToken Request
        $createTokenRequest = new CreateTokenRequest($config);
        $createTokenRequest->setTransaction($transaction);
        $createTokenRequest->addService($service1);
        $createToken = $createTokenRequest->execute();
        // print_r($createToken);

        // // Get payment URL with created token
        $paymentUrl = $createTokenRequest->getPaymentUrl($createToken["TransToken"]);
      //  print_r($paymentUrl);
        //  $order_data['return_payment_txn_id'] = $return_payment_txn_id;

        //  $where_cart = "order_id = '" . $order_id . "' ";
        //    $this->common->updateRecord('m_order', $order_data, $where_cart);

        $return_data['status'] = 1;
        $return_data['options'] = $paymentUrl;

        echo json_encode($return_data);
        die();

    }
    public function dponetworksuccess($uuid = "")
    {
        $session_user_data = $this->session->userdata('front_user_detail');
        print_r($_POST);
        print_r($_GET);
/*
Array ( ) Array ( [TransID] => 32FE01E0-4134-485B-BC89-34D1D4D81CC1 [CCDapproval] => 4444444429 [PnrID] => 710eca98-d484-4e32-9b6d-4c3f5b56f896 [TransactionToken] => 32FE01E0-4134-485B-BC89-34D1D4D81CC1 [CompanyRef] => 710eca98-d484-4e32-9b6d-4c3f5b56f896 )
*/
    }
    public function dponetworkdeclined($uuid = "")
    {
        $session_user_data = $this->session->userdata('front_user_detail');
        print_r($_POST);
        print_r($_GET);

    }

}
