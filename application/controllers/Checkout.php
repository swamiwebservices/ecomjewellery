<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Checkout extends CI_Controller
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
    public $controller = "checkout";
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
        $session_user_data = $this->session->userdata('front_user_detail');
        //print_r($session_user_data);die();
        if (!isset($session_user_data['customer_id'])) {
            $ar_session_data['last_page_visited'] = site_url("checkout");
            $this->session->set_userdata($ar_session_data);

            redirect("login");
            die();
        }
       
        $customer_info = $this->services->getCustomerInfo();
        $cartinfo = $this->services->getCartinfo();
        $cartSubtotal = $this->services->getCartSubtotal();
        $data['record']['items'] = $cartinfo;
        $data['record']['shipping_carges'] = 100;
        $data['record']['subtotal'] = $cartSubtotal;

        // print_r($customer_info);

        $payment_address = [
            'address_id' => $customer_info['address_id'],
            'firstname' => $customer_info['firstname'],
            'lastname' => $customer_info['lastname'],
            'telephone' => $customer_info['telephone'],
            'company' => $customer_info['company'],
            'address_1' => $customer_info['address_1'],
            'address_2' => $customer_info['address_2'],
            'city' => $customer_info['city'],
            'postcode' => $customer_info['postcode'],
            'zone_id' => $customer_info['zone_id'],
            'zone' => $customer_info['zone'],
            'zone_code' => $customer_info['zone_code'],
            'country_id' => $customer_info['country_id'],
            'country' => $customer_info['country'],
            'iso_code_2' => $customer_info['iso_code_2'],
            'iso_code_3' => $customer_info['iso_code_3'],

        ];
        
        $data['shipping_address']['shipping_firstname'] = $payment_address['firstname'];
        $data['shipping_address']['shipping_lastname'] = $payment_address['lastname'];
        $data['shipping_address']['shipping_company'] = $payment_address['company'];
        $data['shipping_address']['shipping_address_1'] = $payment_address['address_1'];
        $data['shipping_address']['shipping_address_2'] = $payment_address['address_2'];
        $data['shipping_address']['shipping_country_id'] = $payment_address['country_id'];
        $data['shipping_address']['shipping_zone_id'] = $payment_address['zone_id'];
        $data['shipping_address']['shipping_city'] = $payment_address['city'];
        $data['shipping_address']['shipping_postcode'] = $payment_address['postcode'];
        $data['shipping_address']['shipping_mobile'] = $customer_info['telephone'];

        // add order

        $customer_info = $this->services->getCustomerInfo();
        $cartinfo = $this->services->getCartinfo();
        $cartSubtotal = $this->services->getCartSubtotal();

        $error = "";
        $order_data = array();

        $order_data['company'] = $company = (isset($_POST['company'])) ? $this->input->post('company') : '';

        $order_data['shipping_firstname'] = $shipping_firstname = (isset($_POST['shipping_firstname'])) ? $this->input->post('shipping_firstname') : '';
        $order_data['shipping_lastname'] = $shipping_lastname = (isset($_POST['shipping_lastname'])) ? $this->input->post('shipping_lastname') : '';
        $order_data['shipping_company'] = $shipping_company = (isset($_POST['shipping_company'])) ? $this->input->post('shipping_company') : '';
        $order_data['shipping_address_1'] = $shipping_address_1 = (isset($_POST['shipping_address_1'])) ? $this->input->post('shipping_address_1') : '';
        $order_data['shipping_address_2'] = $shipping_address_2 = (isset($_POST['shipping_address_2'])) ? $this->input->post('shipping_address_2') : '';
        $order_data['shipping_country_id'] = $shipping_country_id = (isset($_POST['shipping_country_id'])) ? $this->input->post('shipping_country_id') : '';
        $order_data['shipping_zone_id'] = $shipping_zone_id = (isset($_POST['shipping_zone_id'])) ? $this->input->post('shipping_zone_id') : '';
        $order_data['shipping_city'] = $shipping_city = (isset($_POST['shipping_city'])) ? $this->input->post('shipping_city') : '';
        $order_data['shipping_postcode'] = $shipping_postcode = (isset($_POST['shipping_postcode'])) ? $this->input->post('shipping_postcode') : '';
        $order_data['comment'] = $comment = (isset($_POST['comment'])) ? $this->input->post('comment') : '';

        // if($shipping_firstname==""){
        //     $error = "Please enter first name";
        // }
        // if($shipping_lastname==""){
        //     $error = "Please enter last name";
        // }
        // if($shipping_firstname==""){
        //     $error = "Please enter first name";
        // }
        // if($shipping_address_1==""){
        //     $error = "Please enter address";
        // }
        // if($shipping_country_id==""){
        //     $error = "Please select country";
        // }
        // if($shipping_zone_id==""){
        //     $error = "Please select zone";
        // }
        // if($shipping_city==""){
        //     $error = "Please enter city";
        // }
        // if($shipping_postcode==""){
        //     $error = "Please select pin code";
        // }
        //$error==""
        if (1) {

            $order_data['store_id'] = $this->services->getDomainId();
            $order_data['store_name'] = $_SERVER['HTTP_HOST'];
            $order_data['customer_id'] = $customer_info['customer_id'];
            $order_data['firstname'] = $customer_info['firstname'];
            $order_data['lastname'] = $customer_info['lastname'];
            $order_data['email'] = $customer_info['email'];
            $order_data['telephone'] = $customer_info['telephone'];
            $order_data['customer_id'] = $customer_info['customer_id'];
            $order_data['payment_method'] = 'COD';

            $order_data['payment_firstname'] = $payment_address['firstname'];
            $order_data['payment_lastname'] = $payment_address['lastname'];
            $order_data['payment_company'] = $payment_address['company'];
            $order_data['payment_address_1'] = $payment_address['address_1'];
            $order_data['payment_address_2'] = $payment_address['address_2'];
            $order_data['payment_country_id'] = $payment_address['country_id'];
            $order_data['payment_zone_id'] = $payment_address['zone_id'];
            $order_data['payment_city'] = $payment_address['city'];
            $order_data['payment_postcode'] = $payment_address['postcode'];

            // $order_data['total'] = $total = (isset($_POST['total'])) ? $this->input->post('total') : '';

            $config_order_status_id = $this->config->item("config_order_status_id");
           
            $order_data['order_status_id'] = $config_order_status_id;
            $order_data['total'] = 0;
            $currentCurrency = $this->services->getCurrency();
            $order_data['currency_id'] = $this->services->getDomainId();
            $order_data['currency_code'] = $currentCurrency['code'];

            $order_data['ip'] = $this->input->ip_address();
            $order_data['user_agent'] = $this->input->user_agent();
            $order_data['user_agent'] = $this->input->user_agent();
            //print_r($order_data);exit;

            // new code here
            $cartinfo = $this->services->getCartinfo();
            $cartSubtotal = $this->services->getCartSubtotal();
            $order_data['cartinfo'] = $cartinfo;
            $order_data['cartSubtotal'] = $cartSubtotal;

            $totals = array();
            $taxes = $this->services->getTaxes();
            $total = 0;

            // Because __call can not keep var references so we put them into an array.
            $total_data = array(
                'totals' => &$totals,
                'taxes' => &$taxes,
                'total' => &$total,
            );

            //sub_total

            $totals[] = array(
                'code' => 'sub_total',
                'class' => '',
                'title' => 'Sub-Total',
                'value' => $cartSubtotal,
                'sort_order' => 1,
            );

            $total_data['total'] = $cartSubtotal;

            //of shipping
            if (!empty($this->session->userdata['shipping_method'])) {

                //$total['total'] += $this->session->userdata['shipping_method']['cost'];
                $totals[] = array(
                    'code' => 'shipping',
                    'title' => $this->session->userdata['shipping_method']['title'],
                    'value' => $this->session->userdata['shipping_method']['cost'],
                    'sort_order' => 3,
                );
            }
            //end of shipping
            $shipping_method_cost = (isset($this->session->userdata['shipping_method']['cost'])) ? $this->session->userdata['shipping_method']['cost'] : 0;

            $total_data['total'] = $cartSubtotal + $shipping_method_cost;
           
            //coupon
            $coupon_temp = $this->session->userdata('coupon');
            $coupon_info = [];
            if (isset($coupon_temp)) {

                $coupon_info = $this->services->getCoupon($coupon_temp);

                if ($coupon_info) {
                    $discount_total = 0;

                    if (!$coupon_info['product']) {
                        $sub_total = $cartSubtotal;
                    } else {
                        $sub_total = 0;

                        // foreach ($this->services->getProducts()  as $product) {
                        //     if (in_array($product['product_id'], $coupon_info['product'])) {
                        //         $sub_total += $product['total'];
                        //     }
                        // }
                    }

                    if ($coupon_info['type'] == 'F') {
                        $coupon_info['discount'] = min($coupon_info['discount'], $sub_total);
                    }

                    if ($coupon_info['type'] == 'F') {
                        $discount = $coupon_info['discount'];
                    } elseif ($coupon_info['type'] == 'P') {
                        $discount = $cartSubtotal / 100 * $coupon_info['discount'];
                    }
                    $discount_total = $discount;

                    //$totals['total'] += $sub_total;
                    //$total = $sub_total;
                    //end of sub_total

                    $total_data['total'] = $sub_total;

                    $totals[] = array(
                        'code' => 'coupon',
                        'class' => '',
                        'title' => sprintf('Coupon(%s)', $coupon_temp),
                        'text' => $this->services->format($discount_total),
                        'value' => -$discount_total,
                        'sort_order' => 2,
                    );

                    //$total -= $discount_total;
                    $total_data['total'] -= $discount_total;
                }
            }
            $order_data['coupon_info'] = $coupon_info;
            //end of coupon
           
            //total module
            $totals[] = array(
                'code' => 'total',
                'class' => 'total-pay',
                'title' => 'Total',
                'value' => max(0, $total),
                'sort_order' => 100,
            );
            //end of total module
           
            $sort_order = array();

            foreach ($totals as $key => $value) {

                if (sizeof($value) > 0) {
                    $sort_order[$key] = $value['sort_order'];
                } else {
                    $sort_order[$key] = '';
                }

            }
            //echo "<pre>";
            //    print_r($totals);
            array_multisort($sort_order, SORT_ASC, $totals);
           
            $data['totals'] = array();

            foreach ($totals as $value) {
                $data['totals'][] = array(
                    'class' => $value['class'],
                    'title' => $value['title'],
                    'text' => $this->services->format($value['value']),
                );
            }
          //  print_r($totals);

            //print_r($total_data) ;
         
            $order_data['totals'] = $totals;

            $method_data = array();
          
          //  $payment_geteways = $this->config->item("PAYMENT_GETEWAYS");
            //print_r($payment_geteways);
            $payment_geteways = $this->services->getExtensions('payment');

            foreach ($payment_geteways as $result) {
                if ($this->services->getold($result['code'] . '_status')) {
                    $this->load->model('extension/payment/' . $result['code']);

                    $method = $this->{$result['code']}->getMethod($data['shipping_address'], $cartSubtotal);

                    if ($method) {
                        $method_data[$result['code']] = $method;
                    }
                }
            }
            //print_r($method_data);
            $sort_order = array();
            
            foreach ($method_data as $key => $value) {
                $sort_order[$key] = $value['sort_order'];
            }

            array_multisort($sort_order, SORT_ASC, $method_data);

            $data['payment_methods'] = $method_data;

            //if session is blank let set cod default to avoid php error
            $payment_method = $this->session->userdata('payment_method');
            if (isset($payment_method) && $payment_method == "") {

                $first_payment = 0;
                foreach ($method_data as $pkey => $payment_method_temp) {

                    if ($first_payment == 0) {
                        $this->session->set_userdata('payment_method', $payment_method_temp);
                    }
                    $first_payment++;
                }

            }
            $data['code'] = '';
            $order_data['total'] = $total_data['total'];
           
            $order_id = $this->services->addOrder($order_data);
            $order_id_sess = array('order_id_ki' => $order_id);
            $this->session->set_userdata($order_id_sess);

        }

        //end of add order

        $format = '{firstname} {lastname}' . "\n" . '{company}' . "\n" . '{address_1}' . "\n" . '{address_2}' . "\n" . '{city} {postcode}' . "\n" . '{zone}' . "\n" . '{country}' . "\n" . '{mobile}';

        $find = array(
            '{firstname}',
            '{lastname}',
            '{company}',
            '{address_1}',
            '{address_2}',
            '{city}',
            '{postcode}',
            '{zone}',
            '{country}',
            '{mobile}',
        );

        $replace = array(
            'firstname' => "<strong>" . $payment_address['firstname'],
            'lastname' => $payment_address['lastname'] . "</strong>",
            'company' => $payment_address['company'],
            'address_1' => $payment_address['address_1'],
            'address_2' => $payment_address['address_2'],
            'city' => $payment_address['city'],
            'postcode' => $payment_address['postcode'],
            'zone' => $payment_address['zone'],
            'country' => $payment_address['country'],
            'mobile' => $payment_address['telephone'],
        );

        $data['payment_address'] = str_replace(array("\r\n", "\r", "\n"), '<br />', preg_replace(array("/\s\s+/", "/\r\r+/", "/\n\n+/"), '<br />', trim(str_replace($find, $replace, $format))));

        $where_cond = "  ORDER BY name";
        $data['country_rs'] = $this->common->getAllRow('m_country', $where_cond);
        // print_r($data['country_rs']);
        $where_cond = "  WHERE country_id='" . $payment_address['country_id'] . "' ORDER BY name";
        $data['state_rs'] = $state_rs = $this->common->getAllRow('m_zone', $where_cond);
       
        $this->load->view("checkout", $data);

    }

    public function success($uuid = "")
    {
        $data['acti_id'] = 0;
         
        if ($this->session->userdata('order_id_ki') != "") {

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

            $array_items = array('shipping_method'=>'','shipping_methods'=>'','payment_method'=>'','payment_methods'=>'','comment'=>'','order_id'=>'','shipping_methods'=>'','coupon'=>'','totals'=>'','shipping_address'=>'','payment_address'=>'','order_id_ki'=>'','warning'=>'','shipping_address'=>'','payment_address'=>'','same_payment_shipping_address'=>'');
            $this->session->unset_userdata($array_items);

        }

        $data['order_info'] = $this->services->getOrderUUID($uuid);
        $this->load->view('checkout_success', $data);

    }
}
