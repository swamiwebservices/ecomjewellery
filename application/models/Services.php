<?php
error_reporting(E_ALL);
//use Ifsnop\Mysqldump as IMysqldump;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;
use Ramsey\Uuid\Uuid;

class Services extends CI_Model
{
    public function __construct()
    {
        // if(empty($this->session->userdata('domain_id'))){
        //     $this->session->set_userdata('domain_id', '1');
        // }
    }
    public function getCategoryId($slugnam = '')
    {
        $result = $this->common->getOneRow('product_category', "where slug_name='{$slugnam}'");
        return $result;
    }
    public function getProductDetail($params = array())
    {
        $slug_name = (!empty($params['slug_name'])) ? $params['slug_name'] : '';
        $product_id = (!empty($params['product_id'])) ? $params['product_id'] : '';
        $sql = "select *  from  product_master p where (status_flag='Active')  and product_id='" . $product_id . "'  ";
        $records = [];
        if ($slug_name != "") {
            $sql = "select *  from  product_master p where (status_flag='Active')  and slug_name='" . $slug_name . "'  ";
        }
        if ($product_id != "") {
            $sql = "select *  from  product_master p where (status_flag='Active')  and product_id='" . $product_id . "'  ";
        }

        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $records = $query->row_array();

        }

        //  print_r($records);
        return $records;

    }
    public function getProductDetails($params = array())
    {
        $slug_name = (!empty($params['slug_name'])) ? $params['slug_name'] : '';
        $product_id = (!empty($params['product_id'])) ? $params['product_id'] : '';

        $records = [];
        if ($slug_name != "") {
            $sql = "select *  from  product_master p where (status_flag='Active')  and slug_name='" . $slug_name . "'  ";
        }
        if ($product_id != "") {
            $sql = "select *  from  product_master p where (status_flag='Active')  and product_id='" . $product_id . "'  ";
        }
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $records = $query->row_array();

            $sql = "select image_name from product_images where   product_id='{$records['product_id']}' ";
            $request_query = $this->db->query($sql);
            if ($request_query->num_rows() > 0) {
                $records['other_images'] = $request_query->result_array();
            }
            $sql = "select name,slug_name ,category_id from product_category where   category_id in ({$records['category_ids']})";
            $request_query = $this->db->query($sql);
            if ($request_query->num_rows() > 0) {
                $request_product_category = $request_query->result_array();
                foreach ($request_product_category as $key => $value) {
                    $product_category[$value['slug_name']] = $value['name'];
                }
                $records['product_category'] = $product_category;
            }

            $records['review_product'] = [];
        }

        // print_r($records);
        return $records;

    }
    public function getProductList($params = array())
    {
        $domain_id = 1;
        if (empty($this->session->userdata('domain_id'))) {
            $domain_id = $this->session->userdata('domain_id');
        }
        $result_array = [];
        if ($params['type'] == "latestProduct") {
            $order_limit = (isset($params['limit'])) ? " limit 0," . $params['limit'] : ' limit 0,10';
            $sort = (isset($params['sort'])) ? $params['sort'] : 'sort_order';
            $sort = ($sort == 'price') ? 'sellprice' : $sort;
            $order = (isset($params['order'])) ? $params['order'] : 'asc';
            $order_by = " order by  rand(), {$sort} {$order}, name asc";

            $sql = "select * from product_master where status_flag='Active' and featured=1  " . $order_by . ' ' . $order_limit;
            if (ZEROQTYALLOW == 1) {
                $sql = "select * from product_master where status_flag='Active'  and featured=1 " . $order_by . ' ' . $order_limit;
            } else {
                $sql = "select * from product_master where status_flag='Active'  and featured=1 and quantity > 0 " . $order_by . ' ' . $order_limit;
            }
            $query = $this->db->query($sql);
            if ($query->num_rows() > 0) {
                $result_array = $query->result_array();
            }
            return $result_array;
        }
        if ($params['type'] == "category") {
            $order_limit = (isset($params['start'])) ? " limit " . $params['start'] . "," . $params['limit'] : '';

            $sort = (isset($params['sort'])) ? $params['sort'] : 'sort_order';

            $sort = ($sort == 'price') ? 'sellprice' : $sort;

            $order = (isset($params['order'])) ? $params['order'] : 'asc';
            $order_by = "order by {$sort} {$order}, name asc";

            //where status_flag=1 and  FIND_IN_SET ({$value['category_id']},category_id) > 0
            //and  sub_category_id='{$params['category_id']}'
            $column_name = (empty($params['parent_id']) && $params['parent_id'] == 0) ? 'category_id' : 'sub_category_id';
            $sql = "select * from product_master where status_flag='Active'    and {$column_name} = '{$params['category_id']}' " . $order_by . ' ' . $order_limit;

            $query = $this->db->query($sql);
            if ($query->num_rows() > 0) {
                $result_array = $query->result_array();
            }
            return $result_array;
        }
    }

    public function sendotp($user_info = array())
    {
        $sms_description = $this->common->get_sms_data(1);
        $sms_description = $this->common->mysql_safe_string($sms_description);

        $pattern = array('/#REG_OTP#/');
        $replacement = array($user_info['REG_OTP']);
        $sms_description = preg_replace($pattern, $replacement, $sms_description);
        //  $outputtemp = print_r($sms_description,true);
        //file_put_contents('deubg_logs/debug_emp_type.txt', $outputtemp, FILE_APPEND);
        $this->common->send_sms($user_info['mobile'], $sms_description);
        $add_in_cust = array();
        $add_in_cust['user_id'] = $user_info['user_id'];
        $add_in_cust['mobile'] = $user_info['mobile'];
        $add_in_cust['otpcode'] = $user_info['REG_OTP'];
        $add_in_cust['date_sent'] = date("Y-m-d h:i:s");
        $add_in_cust['otp_verification_status'] = 0;
        $add_in_cust['sms_purpose'] = 'OTP';
        $add_in_cust['session_id'] = 91;
        $this->common->insertRecord('wti_sms_register_log', $add_in_cust);
    }

    public function getDomainId()
    {
        $domain_name = $_SERVER['HTTP_HOST'];

        $domain_list = $this->config->item("DOMAINs");
        $domain_id = array_search($domain_name, $domain_list);
        if (!$domain_id) {
            $domain_id = 1;
        }
        return $domain_id;
    }
    public function getDomainAddress()
    {
        $date1 = date("Y");
        $date2 = date("Y") + 1;
        $domain_name = $_SERVER['HTTP_HOST'];
        $domain_list = $this->config->item("DOMAINs");
        $domain_id = array_search($domain_name, $domain_list);
        if (!$domain_id) {
            $domain_id = 1;
        }
        $HTTP_DOMAIN_URL = site_url();
        $LOGO_URL = "https://bondbeyond.ae/assets/img/logo/logo.png";
        $address[1] = array('DOMAIN_ID' => $domain_id, 'LOGO_URL' => $LOGO_URL, 'HTTP_DOMAIN_URL' => $HTTP_DOMAIN_URL, 'DOMAINNAME' => $domain_name, 'DOMAIN_ADDRESS_FOOTER' => "Address: Shop No.34, AL Kifaf Oasis, Near Burjuman Metro exit2,Karama, Dubai <br /> Phone: +971 42968516 | Email: info@bondbeyond.ae<br /> Web <a href='http://bondbeyond.ae/' target='_blank'>{$domain_name}</a><br /> &copy;  {$date1}- {$date2} - All rights reserved ", 'CONTACTUS_URL' => site_url('contact-us'));

        $address[2] = array('DOMAIN_ID' => $domain_id, 'LOGO_URL' => $LOGO_URL, 'HTTP_DOMAIN_URL' => $HTTP_DOMAIN_URL, 'DOMAINNAME' => $domain_name, 'DOMAIN_ADDRESS_FOOTER' => "Address: Shop No.34, AL Kifaf Oasis, Near Burjuman Metro exit2,Karama, Dubai <br /> Phone: +971 42968516 | Email: info@bondforu.com<br /> Web <a href='http://bondforu.com/' target='_blank'>{$domain_name}</a><br /> &copy;  {$date1}- {$date2} - All rights reserved ", 'CONTACTUS_URL' => site_url('contact-us'));

        $address[3] = array('DOMAIN_ID' => $domain_id, 'LOGO_URL' => $LOGO_URL, 'HTTP_DOMAIN_URL' => $HTTP_DOMAIN_URL, 'DOMAINNAME' => $domain_name, 'DOMAIN_ADDRESS_FOOTER' => "Address: Shop No.34, AL Kifaf Oasis, Near Burjuman Metro exit2,Karama, Dubai <br /> Phone: +971 42968516 | Email: info@bondbeyond.in<br /> Web <a href='http://bondbeyond.in/' target='_blank'>{$domain_name}</a><br /> &copy;  {$date1}- {$date2} - All rights reserved ", 'CONTACTUS_URL' => site_url('contact-us'));

        $address_single = $address[$domain_id];
        return $address_single;
    }
    public function getCurrency()
    {

        $currencyarr[2] = array('title' => 'USD', 'code' => 'USD', 'symbol_left' => '$', 'symbol_right' => '', 'decimal_place' => '2', 'domains' => '2');
        $currencyarr[1] = array('title' => 'AED', 'code' => 'AED', 'symbol_left' => 'AED', 'symbol_right' => '', 'decimal_place' => '0', 'domains' => '3');
        $currencyarr[3] = array('title' => 'INR', 'code' => 'INR', 'symbol_left' => '₹', 'symbol_right' => '', 'decimal_place' => '2', 'domains' => '1');
        $getDomainId = $this->getDomainId();

        $currentCurrency = $currencyarr[$getDomainId];
        return $currentCurrency;
    }
    
    public function format($number,$getDomainId=0)
    {
        if($getDomainId==0){
            $getDomainId = $this->getDomainId();
        }

        $currencyarr[1] = array('title' => 'AED', 'code' => 'AED', 'symbol_left' => 'AED', 'symbol_right' => '', 'decimal_place' => '0', 'domains' => '3');
        $currencyarr[2] = array('title' => 'USD', 'code' => 'USD', 'symbol_left' => '$', 'symbol_right' => '', 'decimal_place' => '2', 'domains' => '2');
        $currencyarr[3] = array('title' => 'INR', 'code' => 'INR', 'symbol_left' => '₹', 'symbol_right' => '', 'decimal_place' => '2', 'domains' => '1');

       

        $currentCurrency = $currencyarr[$getDomainId];
        $symbol_left = $currentCurrency['symbol_left'];
        $symbol_right = $currentCurrency['symbol_right'];
        $decimal_place = $currentCurrency['decimal_place'];

        $string = '';
        if ($symbol_left) {
            
        }
        if($number<0){
            $string .= "-".$symbol_left . " ";
            $number = abs($number);
            $string .= number_format($number, (int) $decimal_place, '.', ',');
        } else {
            $string .= $symbol_left . " ";
            $string .= number_format($number, (int) $decimal_place, '.', ',');
        }
       
        if ($symbol_right) {
            $string .= $symbol_right;
        }
        return $string;
    }

    //cart function
    public function addtocart($params = array())
    {

        $product_id = (!empty($params['product_id'])) ? $params['product_id'] : '-999999999';
        $quantity = (!empty($params['quantity'])) ? $params['quantity'] : '1';
        $price = (!empty($params['price'])) ? $params['price'] : '0';
        $date_added = date("Y-m-d");
        $domain = $this->getDomainId();
        //$get_user_session_id = (!empty($this->getId())) ? $this->getId() : $this->get_shopping_session() ;

        if ($product_id > 0) {
            $query = $this->db->query("SELECT COUNT('') AS total FROM cart_master WHERE user_id = '" . (int) $this->getId() . "' AND shopping_session = '" . $this->get_shopping_session() . "' AND product_id = '" . (int) $product_id . "'");

            $query_row = $query->row_array();

            if (!$query_row['total']) {

                $cart_date = time();

                $this->db->query("INSERT cart_master SET  domain='{$domain}', user_id = '" . (int) $this->getId() . "', shopping_session = '" . $this->get_shopping_session() . "', product_id = '" . (int) $product_id . "',   cart_qty = '" . (int) $quantity . "', price = '" . $price . "', date_added = '{$date_added}' ");

            } else {

                $this->db->query("UPDATE cart_master SET cart_qty = (cart_qty + " . (int) $quantity . ") ,price = '" . $price . "' WHERE   user_id = '" . (int) $this->getId() . "' AND shopping_session = '" . $this->get_shopping_session() . "' AND product_id = '" . (int) $product_id . "'");

            }

        }

        return $this->getCartQty();
    }
    public function getCartQty()
    {
        $session_user_data = $this->session->userdata('front_user_detail');

        if (isset($session_user_data['customer_id'])) {
            $sql = "SELECT sum(cart_qty) AS total FROM cart_master WHERE user_id = '" . (int) $this->getId() . "'    ";
        } else {
            $sql = "SELECT sum(cart_qty) AS total FROM cart_master WHERE  shopping_session = '" . $this->get_shopping_session() . "'";
        }

        $query = $this->db->query($sql);

        $query_row = $query->row_array();
        return $query_row['total'];

    }
    public function updatecartqty($cart_id, $quantity)
    {
        $session_user_data = $this->session->userdata('front_user_detail');

        if (isset($session_user_data['customer_id'])) {
            $this->db->query("UPDATE cart_master SET cart_qty = '" . (int) $quantity . "' WHERE cart_id = '" . (int) $cart_id . "'     AND user_id = '" . (int) $this->getId() . "' ");
        } else {
            $this->db->query("UPDATE cart_master SET cart_qty = '" . (int) $quantity . "' WHERE cart_id = '" . (int) $cart_id . "'   and  shopping_session = '" . $this->get_shopping_session() . "'");
        }
    }
    public function doRemoveItemCart($params)
    {

        $product_id = (!empty($params['product_id'])) ? $params['product_id'] : '-999999999';
        $session_user_data = $this->session->userdata('front_user_detail');

        if (isset($session_user_data['customer_id'])) {
            $sql = "delete    from cart_master   where  user_id = '" . (int) $this->getId() . "' and product_id = '" . (int) $product_id . "'";
        } else {
            $sql = "delete    from cart_master   where  shopping_session = '" . $this->get_shopping_session() . "' and product_id = '" . (int) $product_id . "'";
        }
        $query = $this->db->query($sql);
        return $this->getCartQty();
    }
    public function getCartinfo()
    {
        $get_user_session_id = (!empty($this->getId())) ? $this->getId() : '';
        $session_user_data = $this->session->userdata('front_user_detail');

        if (isset($session_user_data['customer_id'])) {
            $sql = "select cm.* ,pm.slug_name,pm.main_image, pm.name , pm.price_json,pm.item_code from cart_master cm , product_master pm  where cm.product_id=pm.product_id and user_id = '" . (int) $this->getId() . "'";
        } else {
            $sql = "select cm.* ,pm.slug_name,pm.main_image, pm.name , pm.price_json , pm.item_code from cart_master cm , product_master pm  where cm.product_id=pm.product_id and  shopping_session = '" . $this->get_shopping_session() . "'";
        }

        $query = $this->db->query($sql);
        $query_row = $query->result_array();

        return $query_row;
    }
    public function getCartSubtotal()
    {
        $get_user_session_id = (!empty($this->getId())) ? $this->getId() : '';
        $session_user_data = $this->session->userdata('front_user_detail');
        if (isset($session_user_data['customer_id'])) {
            $sql = "select sum(cart_qty * price) as subtotal from cart_master cm   where  user_id = '" . (int) $this->getId() . "'";
        } else {
            $sql = "select  sum(cart_qty * price) as subtotal from cart_master cm    where   shopping_session = '" . $this->get_shopping_session() . "'";
        }

        $query = $this->db->query($sql);
        $query_row = $query->row_array();

        return $query_row['subtotal'];
    }

    public function get_shopping_session()
    {
        if ($this->session->userdata('sel_user_session') == "") {
            $dt1 = date("His");
            $dt2 = $this->common->gen_key(10);
            $date_var = $dt1 . "" . $dt2;
            $UID = substr(str_replace(".", "", $date_var), 0, 20);
            $userdata = array('sel_user_session' => $UID);
            $this->session->set_userdata($userdata);
            $rd_session = $this->session->userdata('sel_user_session');
        } else {
            $rd_session = $this->session->userdata('sel_user_session');
        }
        return $rd_session;
    }

    public function getId()
    {
        $session_user_data = $this->session->userdata('front_user_detail');
        if (isset($session_user_data['customer_id'])) {
            return (int) $session_user_data['customer_id'];
        } else {
            return $this->get_shopping_session();
        }

    }
    //end of cart function
    //order

    public function addOrder($params = array())
    {

        $cartinfo = $params['cartinfo'];
        $cartSubtotal = $params['cartSubtotal'];

        $uuid = "";
        try {
            // Generate a version 4 (random) UUID object
            $uuid4 = Uuid::uuid4();
            $uuid = $uuid4->toString();

        } catch (UnsatisfiedDependencyException $e) {
            //  echo 'Caught exception: ' . $e->getMessage() . "\n";
        }
        $order_data['uuid'] = $uuid;

        $order_id = (int) $this->session->userdata('order_id_ki');
        $order_query = $this->db->query("select * from `m_order` where order_id = '" . (int) $order_id . "'");

        $order_data['transaction_id'] = $uuid;
        
        $order_data['total'] = $params['total'];
        $domain_id = $this->services->getDomainId();
        if ($domain_id == 1) {
            $invoice_prefix = "AE";
        }
        if ($domain_id == 2) {
            $invoice_prefix = "OT";
        }
        if ($domain_id == 3) {
            $invoice_prefix = "IN";
        }
        $params['invoice_prefix'] = $invoice_prefix;
        //date_added
        $order_data['date_added'] = date("Y-m-d H:i:s");
        $order_data['return_payment_status'] = 'initiated';
        $order_data['store_id'] = $this->services->getDomainId();
        $order_data['store_name'] = $_SERVER['SERVER_NAME'];
        $order_data['store_url'] = base_url();

        //coupon_code coupon_type coupon_discount
            if(!empty($params['coupon_info'])){
                
                $order_data['coupon_code'] = $params['coupon_info']['code'];
                $order_data['coupon_type'] = $params['coupon_info']['type'];
                $order_data['coupon_discount'] = $params['coupon_info']['discount'];
            }
        if ($order_query->num_rows() > 0) {

           
            $order_data['customer_id'] = $params['customer_id'];
            $order_data['firstname'] = $params['firstname'];
            $order_data['lastname'] = $params['lastname'];
            $order_data['email'] = $params['email'];
            $order_data['telephone'] = $params['telephone'];
            $order_data['customer_id'] = $params['customer_id'];
            $order_data['payment_method'] = 'cod';

            $order_data['invoice_prefix'] = $params['invoice_prefix'];
            $order_data['payment_firstname'] = $params['payment_firstname'];
            $order_data['payment_lastname'] = $params['payment_lastname'];
            $order_data['payment_company'] = $params['payment_company'];
            $order_data['payment_address_1'] = $params['payment_address_1'];
            $order_data['payment_address_2'] = $params['payment_address_2'];
            $order_data['payment_country_id'] = $params['payment_country_id'];
            $order_data['payment_zone_id'] = $params['payment_zone_id'];
            $order_data['payment_city'] = $params['payment_city'];
            $order_data['payment_postcode'] = $params['payment_postcode'];

            $order_data['shipping_firstname'] = $params['shipping_firstname'];
            $order_data['shipping_lastname'] = $params['shipping_lastname'];
            $order_data['shipping_company'] = $params['shipping_company'];
            $order_data['shipping_address_1'] = $params['shipping_address_1'];
            $order_data['shipping_address_2'] = $params['shipping_address_2'];
            $order_data['shipping_country_id'] = $params['shipping_country_id'];
            $order_data['shipping_zone_id'] = $params['shipping_zone_id'];
            $order_data['shipping_city'] = $params['shipping_city'];
            $order_data['shipping_postcode'] = $params['shipping_postcode'];

            // $order_data['total'] = $total = (isset($_POST['total'])) ? $this->input->post('total') : '';

            $config_order_status_id = $this->config->item("config_order_status_id");

            $order_data['order_status_id'] = $config_order_status_id;

            $currentCurrency = $this->services->getCurrency();
            $order_data['currency_id'] = $this->services->getDomainId();
            $order_data['currency_code'] = $currentCurrency['code'];

            $order_data['ip'] = $this->input->ip_address();
            $order_data['user_agent'] = $this->input->user_agent();
 
            $where_cart = "order_id = '" . $order_id . "' ";
            $this->common->updateRecord('m_order', $order_data, $where_cart);

        } else {

          
            $order_data['customer_id'] = $params['customer_id'];
            $order_data['firstname'] = $params['firstname'];
            $order_data['lastname'] = $params['lastname'];
            $order_data['email'] = $params['email'];
            $order_data['telephone'] = $params['telephone'];
            $order_data['customer_id'] = $params['customer_id'];
            $order_data['payment_method'] = 'cod';

            $order_data['invoice_prefix'] = $params['invoice_prefix'];
            $order_data['payment_firstname'] = $params['payment_firstname'];
            $order_data['payment_lastname'] = $params['payment_lastname'];
            $order_data['payment_company'] = $params['payment_company'];
            $order_data['payment_address_1'] = $params['payment_address_1'];
            $order_data['payment_address_2'] = $params['payment_address_2'];
            $order_data['payment_country_id'] = $params['payment_country_id'];
            $order_data['payment_zone_id'] = $params['payment_zone_id'];
            $order_data['payment_city'] = $params['payment_city'];
            $order_data['payment_postcode'] = $params['payment_postcode'];

            $order_data['shipping_firstname'] = $params['shipping_firstname'];
            $order_data['shipping_lastname'] = $params['shipping_lastname'];
            $order_data['shipping_company'] = $params['shipping_company'];
            $order_data['shipping_address_1'] = $params['shipping_address_1'];
            $order_data['shipping_address_2'] = $params['shipping_address_2'];
            $order_data['shipping_country_id'] = $params['shipping_country_id'];
            $order_data['shipping_zone_id'] = $params['shipping_zone_id'];
            $order_data['shipping_city'] = $params['shipping_city'];
            $order_data['shipping_postcode'] = $params['shipping_postcode'];

            $config_order_status_id = $this->config->item("config_order_status_id");

            $order_data['order_status_id'] = $config_order_status_id;

            $currentCurrency = $this->services->getCurrency();
            $order_data['currency_id'] = $this->services->getDomainId();
            $order_data['currency_code'] = $currentCurrency['code'];

            $order_data['ip'] = $this->input->ip_address();
            $order_data['user_agent'] = $this->input->user_agent();

            $order_id = $this->common->insertRecord('m_order', $order_data);

        }

        // $totals[] = array(
        //     'code' => 'sub_total',
        //     'title' => 'Sub-Total:',
        //     'value' => $order_data['total'],
        //     'sort_order' => 1,
        // );

        // //total module
        // $totals[] = array(
        //     'code' => 'total',
        //     'title' => 'Total',
        //     'value' => max(0, $order_data['total']),
        //     'sort_order' => 100,
        // );
        // $sort_order = array();

        // foreach ($totals as $key => $value) {

        //     if (sizeof($value) > 0) {
        //         $sort_order[$key] = $value['sort_order'];
        //     } else {
        //         $sort_order[$key] = '';
        //     }

        // }
        // array_multisort($sort_order, SORT_ASC, $totals);

        // $order_data['totals'] = $totals;

        $sql = "delete from order_product where order_id='" . (int) $order_id . "'";
        $this->db->query($sql);

        foreach ($cartinfo as $key => $product) {
            $price_json = json_decode($product['price_json'], true);
            //   print_r($price_json);

            $sellprice = $product['price'];
            $sellprice_total = $sellprice * $product['cart_qty'];

            $this->db->query("INSERT INTO order_product SET order_id = '" . (int) $order_id . "', product_id = '" . (int) $product['product_id'] . "', name = '" . $this->common->getDbValue($product['name']) . "', model = '" . $this->common->getDbValue($product['item_code']) . "', quantity = '" . (int) $product['cart_qty'] . "', price = '" . (float) $sellprice . "', total = '" . $sellprice_total . "' ");

        }
       // print_r($params);
        if (isset($params['totals'])) {
             $sql = "delete from order_total where order_id='" . (int) $order_id . "'";
            $this->db->query($sql);
            foreach ($params['totals'] as $total) {
                $this->db->query("INSERT INTO order_total SET order_id = '" . (int) $order_id . "', code = '" . $this->common->getDbValue($total['code']) . "', title = '" . $this->common->getDbValue($total['title']) . "', `value` = '" . (float) $total['value'] . "', sort_order = '" . (int) $total['sort_order'] . "'");

            }
        }

        return (int) $order_id;

    }
    //end of order
    public function getCustomerInfo($params = array())
    {
        $customer_info = [];

        $session_user_data = $this->session->userdata('front_user_detail');

        $uuid = $session_user_data['uuid'];

        $sql = "select cm.customer_id, cm.firstname,cm.lastname,cm.email,cm.telephone,cm.uuid,cm.gender,cm.profile_pic ,ca.address_id, ca.uuid  as ca_uuid, ca.firstname as ship_firstname, ca.lastname as ship_lastname,ca.company,ca.address_1,ca.address_2,ca.city,ca.postcode,ca.country_id,ca.zone_id, cnt.name as country,cnt.iso_code_2,cnt.iso_code_3,z.name as zone,z.code as zone_code  from m_customer cm
                inner join customer_address ca on cm.customer_id = ca.customer_id
                left join   m_country cnt on ca.country_id = cnt.country_id
                left join   m_zone z on ca.zone_id = z.zone_id
                where cm.uuid='{$uuid}'";
        $rs_chk = $this->db->query($sql);
        if ($rs_chk->num_rows() > 0) {
            $customer_info = $rs_chk->row_array();
        }
        return $customer_info;
    }
    public function addCustomer($params = array())
    {
        $domain = $this->getDomainId();

        $customer_info = [];
        $params['store_id'] = $domain;
        $uuid = "";
        $uuid2 = "";
        try {

            // Generate a version 4 (random) UUID object
            $uuid4 = Uuid::uuid4();
            $uuid = $uuid4->toString();

            $uuid42 = Uuid::uuid4();
            $uuid2 = $uuid42->toString();

        } catch (UnsatisfiedDependencyException $e) {
            //  echo 'Caught exception: ' . $e->getMessage() . "\n";
        }
        $add_in_add['uuid'] = $uuid2;

        $params['uuid'] = $uuid;

        $add_in_cust['uuid'] = (isset($params['uuid'])) ? $params['uuid'] : '';
        $add_in_cust['store_id'] = (isset($params['store_id'])) ? $params['store_id'] : '';
        $add_in_cust['firstname'] = (isset($params['firstname'])) ? $params['firstname'] : '';
        $add_in_cust['lastname'] = (isset($params['lastname'])) ? $params['lastname'] : '';
        $add_in_cust['email'] = (isset($params['email'])) ? $params['email'] : '';
        $add_in_cust['telephone'] = (isset($params['telephone'])) ? $params['telephone'] : '';
        $add_in_cust['password'] = (isset($params['password'])) ? $params['password'] : '';
        $add_in_cust['newsletter'] = (isset($params['newsletter'])) ? $params['newsletter'] : '';
        $add_in_cust['ip'] = $this->input->ip_address();

        $this->common->insertRecord('m_customer', $add_in_cust);

        //$last_id = $this->db->insert_id();
        $sql = "select * from m_customer where uuid='{$uuid}'";
        $rs_chk = $this->db->query($sql);
        if ($rs_chk->num_rows() > 0) {
            $customer_info = $rs_chk->row_array();

            $add_in_add['customer_id'] = $customer_info['customer_id'];
            $add_in_add['firstname'] = $customer_info['firstname'];
            $add_in_add['lastname'] = $customer_info['lastname'];

            $add_in_add['company'] = (isset($params['company'])) ? $params['company'] : '';
            $add_in_add['address_1'] = (isset($params['address_1'])) ? $params['address_1'] : '';
            $add_in_add['address_2'] = (isset($params['address_2'])) ? $params['address_2'] : '';
            $add_in_add['city'] = (isset($params['city'])) ? $params['city'] : '';
            $add_in_add['postcode'] = $postcode = (isset($params['postcode'])) ? $params['postcode'] : '';
            $add_in_add['country_id'] = $country_id = (isset($params['country_id'])) ? $params['country_id'] : '';
            $add_in_add['zone_id'] = $zone_id = (isset($params['zone_id'])) ? $params['zone_id'] : '';
            $add_in_add['default'] = (isset($params['default'])) ? $params['default'] : '1';

            if ($country_id == "") {
                if ($domain == 1) {
                    $add_in_add['country_id'] = 99;
                }
                if ($domain == 2) {
                    $add_in_add['country_id'] = 221;
                }
                if ($domain == 3) {
                    $add_in_add['country_id'] = 223;
                }
            }

            $this->common->insertRecord('customer_address', $add_in_add);

            //  $where_reg_user = "WHERE uuid='".$uuid2."'";
            //    $row_address = $this->common->getOneRow('m_customer',$where_reg_user);

            //  print_r($row_address);

            //update cart
            $shopping_session = $this->services->get_shopping_session();
            $updt_cart['user_id'] = $customer_info['customer_id'];
            $where_cart = "shopping_session = '" . $shopping_session . "' ";
            $this->common->updateRecord('cart_master', $updt_cart, $where_cart);
            //end of update cart

            //send mail

            $getDomainAddress = $this->services->getDomainAddress();
            $sql = "select * from  `wti_m_setting` where `group_name`='config_site_mail' and store_id='{$getDomainAddress['DOMAIN_ID']}'";

            $query = $this->db->query($sql);
            if ($query->num_rows() > 0) {
                $m_setting = $query->result_array();

                foreach ($m_setting as $key => $val) {
                    $config_site_mail[$val['key_name']] = $val['value'];
                }

                try {
                    //Server settings
                    $fileg = file_get_contents("htmlemails/account_create.html");
                    $dateadded = date("Y-m-d");
                    $contact_email = $customer_info['email'];

                    $contact_name = $customer_info['firstname'] . ' ' . $customer_info['lastname'];

                    $subject = 'Thank you for registering';
                    $password = $add_in_cust['password'];

                    $pattern = array('/{DOMAINNAME}/', '/{HTTP_DOMAIN_URL}/', '/{LOGO_URL}/', '/{CONTACTUS_URL}/', '/{DOMAIN_ADDRESS_FOOTER}/', '/{SUBJECT}/', '/{FULLNAME}/', '/{EMAIL}/', '/{PASSWORD}/', '/{DATE}/');
                    $replacement = array($getDomainAddress['DOMAINNAME'], $getDomainAddress['HTTP_DOMAIN_URL'], $getDomainAddress['LOGO_URL'], $getDomainAddress['CONTACTUS_URL'], $getDomainAddress['DOMAIN_ADDRESS_FOOTER'], $subject, $contact_name, $contact_email, $password, $dateadded);
                    $mess_body = preg_replace($pattern, $replacement, $fileg);

                    $mail = new PHPMailer(true);

                    $mail->SMTPDebug = 0; // Enable verbose debug output
                    $mail->isMail(); // Send using SMTP

                    //Recipients
                    $admin_mail_id = $config_site_mail['config_site_mail'];

                    $mail->setFrom($admin_mail_id, $config_site_mail['config_site_from_name']);
                    $contact_name = $customer_info['firstname'] . " " . $customer_info['lastname'];
                    $mail->addAddress($customer_info['email'], $contact_name); // Add a recipient
                    //  $mail->addReplyTo($admin_mail_id, $contact_name);
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
            //end of send mail

        }

        return $customer_info;
    }

    public function addOrderHistory($order_id = 0, $order_status_id = 1, $comment = '', $notify = 0, $override = false)
    {

        $order_info = $this->getOrder($order_id);

        $status = false;
        if ($status) {
            $order_status_id = 1; //pending
        }

        $query_invoice = $this->db->query("SELECT MAX(invoice_no) AS invoice_no FROM `m_order` WHERE invoice_prefix = '" . $order_info['invoice_prefix'] . "'");
        $query_invoice_row = $query_invoice->row_array();
        if ($query_invoice_row['invoice_no']) {
            $invoice_no = $query_invoice_row['invoice_no'] + 1;
        } else {
            $invoice_no = 1;
        }
        $order_info['invoice_no'] = $invoice_no;

        $this->db->query("UPDATE `m_order` SET invoice_no = '" . (int) $invoice_no . "'  WHERE order_id = '" . (int) $order_id . "'");

        $this->db->query("INSERT INTO order_history SET order_id = '" . (int) $order_id . "', order_status_id = '" . (int) $order_status_id . "', notify = $notify, comment = '" . $this->common->getDbValue($comment) . "', date_added = NOW()");

        $order_product_query = $this->db->query("SELECT * FROM order_product WHERE order_id = '" . (int) $order_id . "'");
        // If order status is 0 then becomes greater than 0 send main html email

        $order_status_query = $this->db->query("SELECT * FROM m_order_status WHERE order_status_id = '" . (int) $order_status_id . "' AND language_id = '1'");

        if ($order_status_query->num_rows() > 0) {
            $order_status_query_row = $order_status_query->row_array();
            $order_status = $order_status_query_row['name'];
        } else {
            $order_status = '';
        }

        $subject = sprintf('%s - Order %s', html_entity_decode($order_info['store_name'], ENT_QUOTES, 'UTF-8'), $order_info['invoice_prefix'] . $order_info['invoice_no']);
        //    $text  = sprintf('Thank you for your interest in %s products. Your order has been received and will be processed once payment has been confirmed.', html_entity_decode($order_info['store_name'], ENT_QUOTES, 'UTF-8')) . "\n\n";
        //    @mail("swamiwebservices@gmail.com","simple1".$subject,$text);

        // HTML Mail

        $getDomainAddress = $this->services->getDomainAddress();

        $data = array();
        $data['TOP_SUBJECT'] = $subject;
        $data['DOMAINNAME'] = $getDomainAddress['DOMAINNAME'];
        $data['HTTP_DOMAIN_URL'] = $getDomainAddress['HTTP_DOMAIN_URL'];
        $data['LOGO_URL'] = $getDomainAddress['LOGO_URL'];
        $data['CONTACTUS_URL'] = $getDomainAddress['CONTACTUS_URL'];
        $data['DOMAIN_ADDRESS_FOOTER'] = $getDomainAddress['DOMAIN_ADDRESS_FOOTER'];

        $data['title'] = sprintf('%s - Order %s', $order_info['store_name'], $order_info['invoice_prefix'] . $order_info['invoice_no']);

        $data['text_greeting'] = sprintf('Thank you for your interest in %s products. Your order has been received and will be processed once payment has been confirmed.', $order_info['store_name']);
        $data['text_link'] = 'To view your order click on the link below:';
        $data['text_download'] = '';
        $data['text_order_detail'] = 'Order Details';
        $data['text_instruction'] = 'Instructions';
        $data['text_order_id'] = 'Order ID:';
        $data['text_date_added'] = 'Date Added:';
        $data['text_payment_method'] = 'Payment Method:';
        $data['text_shipping_method'] = 'Shipping Method:';
        $data['text_email'] = 'Email:';
        $data['text_telephone'] = 'Telephone:';
        $data['text_ip'] = 'IP Address:';
        $data['text_order_status'] = 'Order Status:';
        $data['text_payment_address'] = 'Payment Address';
        $data['text_shipping_address'] = 'Shipping Address';
        $data['text_product'] = 'Product';
        $data['text_model'] = 'Model';
        $data['text_quantity'] = 'Quantity';
        $data['text_price'] = 'Price';
        $data['text_total'] = 'Order Totals';
        $data['text_footer'] = 'Please reply to this email if you have any questions.';

        $data['logo'] = $getDomainAddress['LOGO_URL'];
        $data['store_name'] = $order_info['store_name'];
        $data['store_url'] = $order_info['store_url'];
        $data['customer_id'] = $order_info['customer_id'];
        $data['link'] = site_url('account/orderdetail/' . $order_info['uuid']);

        $data['download'] = '';

        $data['invoice_no'] = $order_info['invoice_prefix'] . $order_info['invoice_no'];
        $data['date_added'] = $order_info['date_added'];
        $data['payment_method'] = $order_info['payment_method'];
        $data['shipping_method'] = $order_info['shipping_method'];
        $data['email'] = $order_info['email'];
        $data['telephone'] = $order_info['telephone'];
        $data['ip'] = $order_info['ip'];
        $data['order_status'] = $order_status;

        if ($comment && $notify) {
            $data['comment'] = nl2br($comment);
        } else {
            $data['comment'] = '';
        }

        if ($order_info['payment_address_format']) {
            $format = $order_info['payment_address_format'];
        } else {
            $format = '{firstname} {lastname}' . "\n" . '{company}' . "\n" . '{address_1}' . "\n" . '{address_2}' . "\n" . '{city} {postcode}' . "\n" . '{zone}' . "\n" . '{country}' . "\n" . '{mobile}';
        }

        $find = array(
            '{firstname}',
            '{lastname}',
            '{company}',
            '{address_1}',
            '{address_2}',
            '{city}',
            '{postcode}',
            '{zone}',
            '{zone_code}',
            '{country}',
            '{mobile}',
        );

        $replace = array(
            'firstname' => $order_info['payment_firstname'],
            'lastname' => $order_info['payment_lastname'],
            'company' => $order_info['payment_company'],
            'address_1' => $order_info['payment_address_1'],
            'address_2' => $order_info['payment_address_2'],
            'city' => $order_info['payment_city'],
            'postcode' => $order_info['payment_postcode'],
            'zone' => $order_info['payment_zone'],
            'zone_code' => $order_info['payment_zone_code'],
            'country' => $order_info['payment_country'],
            'mobile' => $order_info['telephone'],
        );

        $data['payment_address'] = str_replace(array("\r\n", "\r", "\n"), '<br />', preg_replace(array("/\s\s+/", "/\r\r+/", "/\n\n+/"), '<br />', trim(str_replace($find, $replace, $format))));

        if ($order_info['shipping_address_format']) {
            $format = $order_info['shipping_address_format'];
        } else {
            $format = '{firstname} {lastname}' . "\n" . '{company}' . "\n" . '{address_1}' . "\n" . '{address_2}' . "\n" . '{city} {postcode}' . "\n" . '{zone}' . "\n" . '{country}' . "\n" . '{mobile}';
        }

        $find = array(
            '{firstname}',
            '{lastname}',
            '{company}',
            '{address_1}',
            '{address_2}',
            '{city}',
            '{postcode}',
            '{zone}',
            '{zone_code}',
            '{country}',
            '{mobile}',
        );

        $replace = array(
            'firstname' => $order_info['shipping_firstname'],
            'lastname' => $order_info['shipping_lastname'],
            'company' => $order_info['shipping_company'],
            'address_1' => $order_info['shipping_address_1'],
            'address_2' => $order_info['shipping_address_2'],
            'city' => $order_info['shipping_city'],
            'postcode' => $order_info['shipping_postcode'],
            'zone' => $order_info['shipping_zone'],
            'zone_code' => $order_info['shipping_zone_code'],
            'country' => $order_info['shipping_country'],
            'mobile' => $order_info['shipping_mobile'],
        );

        $data['shipping_address'] = str_replace(array("\r\n", "\r", "\n"), '<br />', preg_replace(array("/\s\s+/", "/\r\r+/", "/\n\n+/"), '<br />', trim(str_replace($find, $replace, $format))));

        // Products
        $data['products'] = array();

        foreach ($order_product_query->result_array() as $product) {

            // Stock subtraction
            //  $this->db->query("UPDATE product_master SET quantity = (quantity - " . (int) $product['quantity'] . ") WHERE product_id = '" . (int) $product['product_id'] . "' ");

            $data['products'][] = array(
                'name' => $product['name'],
                'model' => $product['model'],
                'quantity' => $product['quantity'],
                'price' => $this->services->format($product['price'],$order_info['store_id']),
                'total' => $this->services->format($product['total'],$order_info['store_id']),
            );
        }

        // Order Totals
        $data['totals'] = array();

        $order_total_query = $this->db->query("SELECT * FROM `order_total` WHERE order_id = '" . (int) $order_id . "' ORDER BY sort_order ASC");
        if ($order_total_query->num_rows()) {
            $order_total_query_rows = $order_total_query->result_array();
            foreach ($order_total_query_rows as $total) {
                $data['totals'][] = array(
                    'title' => $total['title'],
                    'text' =>  $this->services->format($total['value'],$order_info['store_id']),
                );
            }
        }

        $getDomainAddress = $this->services->getDomainAddress();
        $sql = "select * from  `wti_m_setting` where `group_name`='config_site_mail' and store_id='{$getDomainAddress['DOMAIN_ID']}'";

        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $m_setting = $query->result_array();

            foreach ($m_setting as $key => $val) {
                $config_site_mail[$val['key_name']] = $val['value'];
            }

            try {
                //Server settings

                $mail = new PHPMailer(true);

                $mail->SMTPDebug = 0; // Enable verbose debug output
                $mail->isMail(); // Send using SMTP
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
                $contact_name = $order_info['firstname'] . " " . $order_info['lastname'];
                $mail->addAddress($order_info['email'], $contact_name); // Add a recipient
                //  $mail->addReplyTo($admin_mail_id, $contact_name);
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
                $mail->Body = $this->load->view('mail/order', $data, true);
                //  $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                $mail->send();
                // echo 'Message has been sent';
            } catch (Exception $e) {
                //  $error_msg = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

            }
            //@mail("swamiwebservices@gmail.com","simple3".$subject,$text);

            // Admin Alert Mail
            if ($config_site_mail['config_site_mail'] != '') {
                $subject = sprintf('%s - Order %s', html_entity_decode($getDomainAddress['DOMAINNAME']), $order_info['invoice_prefix'] . $order_info['invoice_no']);
                $data['text_greeting'] = 'You have received an order';
                $data['link'] = base_url() . "websiteadmin/index.php/orders/orderdetail/" . $order_info['uuid'];

                // Text
                $text = 'You have received an order.' . "\n\n";
                $text .= 'Order ID:' . ' ' . $order_info['invoice_prefix'] . $order_info['invoice_no'] . "\n";
                $text .= 'Date Added:' . ' ' . date('d/m/Y', strtotime($order_info['date_added'])) . "\n";
                $text .= 'Order Status:' . ' ' . $order_status . "\n\n";
                $text .= 'Products' . "\n";

                foreach ($order_product_query->result_array() as $product) {
                    $text .= $product['quantity'] . 'x ' . $product['name'] . ' (' . $product['model'] . ') ' . html_entity_decode($product['total']) . "\n";

                }

                $text .= "\n";

                $text .= 'Order Totals' . "\n";
                foreach ($order_total_query->result_array() as $total) {
                    $text .= $total['title'] . ': ' . html_entity_decode($total['value']) . "\n";
                }
                foreach ($order_total_query->result_array() as $total) {
                    //$text .= $total['title'] . ': ' . html_entity_decode($total['text'], ENT_NOQUOTES, 'UTF-8') . "\n";
                }

                $text .= "\n";

                if ($order_info['comment']) {
                    $text .= 'The comments for your order are:' . "\n\n";
                    $text .= $order_info['comment'] . "\n\n";
                }

                // Send to additional alert emails
                try {
                    //Server settings

                    $mail = new PHPMailer(true);

                    $mail->SMTPDebug = 0; // Enable verbose debug output
                    $mail->isMail(); // Send using SMTP
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
                    //  $mail->addReplyTo($admin_mail_id, $contact_name);
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
                    $mail->Body = $this->load->view('mail/order', $data, true);
                    //  $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                    $config_alert_emails = $config_site_mail['config_alert_emails'];
                    if ($config_alert_emails != "") {
                        $config_alert_emails_exp = explode(",", $config_alert_emails);
                        foreach ($config_alert_emails_exp as $key => $alertemails) {
                            $mail->addCC($alertemails);
                        }
                    }

                    $mail->send();
                    // echo 'Message has been sent';
                } catch (Exception $e) {
                    //  $error_msg = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

                }

            }

        }

    }
    public function getOrderUUID($order_UUID)
    {
        //echo "SELECT * FROM `order` WHERE order_id = '" . (int)$order_id . "' AND customer_id = '" . (int)$this->session->userdata('lux_user_id') . "' AND order_status_id > '0'";
        //$order_query = $this->db->query("SELECT * FROM `order` WHERE order_id = '" . (int)$order_id . "' AND customer_id = '" . (int)$this->session->userdata('lux_user_id') . "' AND order_status_id > '0'");
        $sql = "SELECT *, (SELECT os.name FROM `m_order_status` os WHERE os.order_status_id = o.order_status_id ) AS order_status FROM `m_order` o WHERE o.uuid = '" . $order_UUID . "'";
        $order_query = $this->db->query($sql);

        if ($order_query->num_rows() > 0) {
            $order_query_row = $order_query->row_array();

            $country_query = $this->db->query("SELECT * FROM `m_country` WHERE country_id = '" . (int) $order_query_row['payment_country_id'] . "'");

            if ($country_query->num_rows()) {
                $country_query_row = $country_query->row_array();
                $payment_iso_code_2 = $country_query_row['iso_code_2'];
                $payment_iso_code_3 = $country_query_row['iso_code_3'];
            } else {
                $payment_iso_code_2 = '';
                $payment_iso_code_3 = '';
            }

            $zone_query = $this->db->query("SELECT * FROM `m_zone` WHERE zone_id = '" . (int) $order_query_row['payment_zone_id'] . "'");

            if ($zone_query->num_rows() > 0) {

                $zone_query_row = $zone_query->row_array();
                $payment_zone_code = $zone_query_row['code'];
            } else {
                $payment_zone_code = '';
            }

            $country_query = $this->db->query("SELECT * FROM `m_country` WHERE country_id = '" . (int) $order_query_row['shipping_country_id'] . "'");

            if ($country_query->num_rows() > 0) {
                $country_query_row = $country_query->row_array();

                $shipping_iso_code_2 = $country_query_row['iso_code_2'];
                $shipping_iso_code_3 = $country_query_row['iso_code_3'];
            } else {
                $shipping_iso_code_2 = '';
                $shipping_iso_code_3 = '';
            }

            $zone_query = $this->db->query("SELECT * FROM `m_zone` WHERE zone_id = '" . (int) $order_query_row['shipping_zone_id'] . "'");

            if ($zone_query->num_rows() > 0) {
                $zone_query_row = $zone_query->row_array();
                $shipping_zone_code = $zone_query_row['code'];
            } else {
                $shipping_zone_code = '';
            }

            return array(
                'order_id' => $order_query_row['order_id'],
                'uuid' => $order_query_row['uuid'],
                'transaction_id' => $order_query_row['transaction_id'],
                'invoice_no' => $order_query_row['invoice_no'],
                'invoice_prefix' => $order_query_row['invoice_prefix'],
                'store_id' => $order_query_row['store_id'],
                'store_name' => $order_query_row['store_name'],
                'store_url' => $order_query_row['store_url'],
                'customer_id' => $order_query_row['customer_id'],
                'firstname' => $order_query_row['firstname'],
                'lastname' => $order_query_row['lastname'],
                'telephone' => $order_query_row['telephone'],

                'email' => $order_query_row['email'],
                'payment_firstname' => $order_query_row['payment_firstname'],
                'payment_lastname' => $order_query_row['payment_lastname'],
                'payment_company' => $order_query_row['payment_company'],
                'payment_address_1' => $order_query_row['payment_address_1'],
                'payment_address_2' => $order_query_row['payment_address_2'],
                'payment_postcode' => $order_query_row['payment_postcode'],
                'payment_city' => $order_query_row['payment_city'],
                'payment_zone_id' => $order_query_row['payment_zone_id'],
                'payment_zone' => $order_query_row['payment_zone'],
                'payment_zone_code' => $payment_zone_code,
                'payment_country_id' => $order_query_row['payment_country_id'],
                'payment_country' => $order_query_row['payment_country'],
                'payment_iso_code_2' => $payment_iso_code_2,
                'payment_iso_code_3' => $payment_iso_code_3,
                'payment_address_format' => $order_query_row['payment_address_format'],
                'payment_method' => $order_query_row['payment_method'],
                'shipping_firstname' => $order_query_row['shipping_firstname'],
                'shipping_lastname' => $order_query_row['shipping_lastname'],
                'shipping_mobile' => $order_query_row['shipping_mobile'],
                'shipping_company' => $order_query_row['shipping_company'],
                'shipping_address_1' => $order_query_row['shipping_address_1'],
                'shipping_address_2' => $order_query_row['shipping_address_2'],
                'shipping_postcode' => $order_query_row['shipping_postcode'],
                'shipping_city' => $order_query_row['shipping_city'],
                'shipping_zone_id' => $order_query_row['shipping_zone_id'],
                'shipping_zone' => $order_query_row['shipping_zone'],
                'shipping_zone_code' => $shipping_zone_code,
                'shipping_country_id' => $order_query_row['shipping_country_id'],
                'shipping_country' => $order_query_row['shipping_country'],
                'shipping_iso_code_2' => $shipping_iso_code_2,
                'shipping_iso_code_3' => $shipping_iso_code_3,
                'shipping_address_format' => $order_query_row['shipping_address_format'],
                'shipping_method' => $order_query_row['shipping_method'],
                'comment' => $order_query_row['comment'],
                'total' => $order_query_row['total'],
                'order_status_id' => $order_query_row['order_status_id'],

                'currency_id' => $order_query_row['currency_id'],
                'currency_code' => $order_query_row['currency_code'],

                'date_modified' => $order_query_row['date_modified'],
                'date_added' => $order_query_row['date_added'],
                'ip' => $order_query_row['ip'],

            );
        } else {
            return false;
        }
    }
    public function getOrderProducts($order_id)
    {
        $query = $this->db->query("SELECT op.*, p.main_image,p.slug_name FROM order_product op
								left join 	product_master p on op.product_id = p.product_id
							 WHERE order_id = '" . (int) $order_id . "'");

        return $query->result_array();
    }
    public function getOrderTotals($order_id)
    {
        $query = $this->db->query("SELECT * FROM order_total WHERE order_id = '" . (int) $order_id . "' ORDER BY sort_order");

        return $query->result_array();
    }
    public function getOrderStatus($order_status_id)
    {
        $query = $this->db->query("SELECT * FROM m_order_status WHERE order_status_id = '" . (int) $order_status_id . "'   ");
        $row = $query->row_array();
        return $row;
    }
    public function getOrderHistories($order_id)
    {
        $query = $this->db->query("SELECT date_added, os.name AS status, oh.comment, oh.notify FROM order_history oh LEFT JOIN m_order_status os ON oh.order_status_id = os.order_status_id WHERE oh.order_id = '" . (int) $order_id . "'   ORDER BY oh.date_added");

        return $query->result_array();
    }

    public function getOrder($order_id)
    {
        //echo "SELECT * FROM `order` WHERE order_id = '" . (int)$order_id . "' AND customer_id = '" . (int)$this->session->userdata('lux_user_id') . "' AND order_status_id > '0'";
        //$order_query = $this->db->query("SELECT * FROM `order` WHERE order_id = '" . (int)$order_id . "' AND customer_id = '" . (int)$this->session->userdata('lux_user_id') . "' AND order_status_id > '0'");
        $order_query = $this->db->query("SELECT *, (SELECT os.name FROM `m_order_status` os WHERE os.order_status_id = o.order_status_id ) AS order_status FROM `m_order` o WHERE o.order_id = '" . (int) $order_id . "'");

        if ($order_query->num_rows() > 0) {
            $order_query_row = $order_query->row_array();

            $country_query = $this->db->query("SELECT * FROM `m_country` WHERE country_id = '" . (int) $order_query_row['payment_country_id'] . "'");

            if ($country_query->num_rows()) {
                $country_query_row = $country_query->row_array();
                $payment_iso_code_2 = $country_query_row['iso_code_2'];
                $payment_iso_code_3 = $country_query_row['iso_code_3'];
            } else {
                $payment_iso_code_2 = '';
                $payment_iso_code_3 = '';
            }

            $zone_query = $this->db->query("SELECT * FROM `m_zone` WHERE zone_id = '" . (int) $order_query_row['payment_zone_id'] . "'");

            if ($zone_query->num_rows() > 0) {

                $zone_query_row = $zone_query->row_array();
                $payment_zone_code = $zone_query_row['code'];
            } else {
                $payment_zone_code = '';
            }

            $country_query = $this->db->query("SELECT * FROM `m_country` WHERE country_id = '" . (int) $order_query_row['shipping_country_id'] . "'");

            if ($country_query->num_rows() > 0) {
                $country_query_row = $country_query->row_array();

                $shipping_iso_code_2 = $country_query_row['iso_code_2'];
                $shipping_iso_code_3 = $country_query_row['iso_code_3'];
            } else {
                $shipping_iso_code_2 = '';
                $shipping_iso_code_3 = '';
            }

            $zone_query = $this->db->query("SELECT * FROM `m_zone` WHERE zone_id = '" . (int) $order_query_row['shipping_zone_id'] . "'");

            if ($zone_query->num_rows() > 0) {
                $zone_query_row = $zone_query->row_array();
                $shipping_zone_code = $zone_query_row['code'];
            } else {
                $shipping_zone_code = '';
            }

            return array(
                'order_id' => $order_query_row['order_id'],
                'uuid' => $order_query_row['uuid'],
                'transaction_id' => $order_query_row['transaction_id'],
                'invoice_no' => $order_query_row['invoice_no'],
                'invoice_prefix' => $order_query_row['invoice_prefix'],
                'store_id' => $order_query_row['store_id'],
                'store_name' => $order_query_row['store_name'],
                'store_url' => $order_query_row['store_url'],
                'customer_id' => $order_query_row['customer_id'],
                'firstname' => $order_query_row['firstname'],
                'lastname' => $order_query_row['lastname'],
                'telephone' => $order_query_row['telephone'],

                'email' => $order_query_row['email'],
                'payment_firstname' => $order_query_row['payment_firstname'],
                'payment_lastname' => $order_query_row['payment_lastname'],
                'payment_company' => $order_query_row['payment_company'],
                'payment_address_1' => $order_query_row['payment_address_1'],
                'payment_address_2' => $order_query_row['payment_address_2'],
                'payment_postcode' => $order_query_row['payment_postcode'],
                'payment_city' => $order_query_row['payment_city'],
                'payment_zone_id' => $order_query_row['payment_zone_id'],
                'payment_zone' => $order_query_row['payment_zone'],
                'payment_zone_code' => $payment_zone_code,
                'payment_country_id' => $order_query_row['payment_country_id'],
                'payment_country' => $order_query_row['payment_country'],
                'payment_iso_code_2' => $payment_iso_code_2,
                'payment_iso_code_3' => $payment_iso_code_3,
                'payment_address_format' => $order_query_row['payment_address_format'],
                'payment_method' => $order_query_row['payment_method'],
                'shipping_firstname' => $order_query_row['shipping_firstname'],
                'shipping_lastname' => $order_query_row['shipping_lastname'],
                'shipping_mobile' => $order_query_row['shipping_mobile'],
                'shipping_company' => $order_query_row['shipping_company'],
                'shipping_address_1' => $order_query_row['shipping_address_1'],
                'shipping_address_2' => $order_query_row['shipping_address_2'],
                'shipping_postcode' => $order_query_row['shipping_postcode'],
                'shipping_city' => $order_query_row['shipping_city'],
                'shipping_zone_id' => $order_query_row['shipping_zone_id'],
                'shipping_zone' => $order_query_row['shipping_zone'],
                'shipping_zone_code' => $shipping_zone_code,
                'shipping_country_id' => $order_query_row['shipping_country_id'],
                'shipping_country' => $order_query_row['shipping_country'],
                'shipping_iso_code_2' => $shipping_iso_code_2,
                'shipping_iso_code_3' => $shipping_iso_code_3,
                'shipping_address_format' => $order_query_row['shipping_address_format'],
                'shipping_method' => $order_query_row['shipping_method'],
                'comment' => $order_query_row['comment'],
                'total' => $order_query_row['total'],
                'order_status_id' => $order_query_row['order_status_id'],

                'currency_id' => $order_query_row['currency_id'],
                'currency_code' => $order_query_row['currency_code'],

                'date_modified' => $order_query_row['date_modified'],
                'date_added' => $order_query_row['date_added'],
                'ip' => $order_query_row['ip'],

            );
        } else {
            return false;
        }
    }

    //other

    public function getAddress($customer_id = 0)
    {

        $address_query = $this->db->query("SELECT DISTINCT * FROM customer_address WHERE customer_id = '" . (int) $customer_id . "' ");

        if ($address_query->num_rows() > 0) {
            $address_query_row = $address_query->row_array();
            $country_query = $this->db->query("SELECT * FROM `m_country` WHERE country_id = '" . (int) $address_query_row['country_id'] . "'");

            if ($country_query->num_rows() > 0) {
                $country_query_row = $country_query->row_array();
                $country = $country_query_row['name'];
                $iso_code_2 = $country_query_row['iso_code_2'];
                $iso_code_3 = $country_query_row['iso_code_3'];

                $geo_zone_id = 0; //$country_query_row['geo_zone_id'];
            } else {
                $country = '';
                $iso_code_2 = '';
                $iso_code_3 = '';
                $address_format = '';
                $geo_zone_id = "0";
            }

            $zone_query = $this->db->query("SELECT * FROM `m_zone` WHERE zone_id = '" . (int) $address_query_row['zone_id'] . "'");

            if ($zone_query->num_rows() > 0) {
                $zone_query_row = $zone_query->row_array();
                $zone = $zone_query_row['name'];
                $zone_code = $zone_query_row['code'];
            } else {
                $zone = '';
                $zone_code = '';
            }

            $address_data = array(
                'address_id' => $address_query_row['address_id'],
                'firstname' => $address_query_row['firstname'],
                'lastname' => $address_query_row['lastname'],
                //'mobile'       => $address_query_row['mobile'],
                'company' => $address_query_row['company'],
                'address_1' => $address_query_row['address_1'],
                'address_2' => $address_query_row['address_2'],
                'postcode' => $address_query_row['postcode'],
                'city' => $address_query_row['city'],
                'zone_id' => $address_query_row['zone_id'],
                'zone_id' => $address_query_row['zone_id'],
                'zone' => $zone,
                'zone_code' => $zone_code,
                'country_id' => $address_query_row['country_id'],
                'country' => $country,
                'iso_code_2' => $iso_code_2,
                'iso_code_3' => $iso_code_3,
                //'address_format' => $address_format,
                'geo_zone_id' => $geo_zone_id,

            );

            return $address_data;
        } else {
            return false;
        }
    }
    public function getAddresses($customer_id = 0)
    {
        $address_data = array();

        $query = $this->db->query("SELECT * FROM customer_address WHERE customer_id = '" . (int) $customer_id . "'");

        foreach ($query->result_array() as $result) {
            $country_query = $this->db->query("SELECT * FROM `m_country` WHERE country_id = '" . (int) $result['country_id'] . "'");

            if ($country_query->num_rows() > 0) {
                $country_query_row = $country_query->row_array();
                $country = $country_query_row['name'];
                $iso_code_2 = $country_query_row['iso_code_2'];
                $iso_code_3 = $country_query_row['iso_code_3'];

                $geo_zone_id = $country_query_row['geo_zone_id'];

            } else {
                $country = '';
                $iso_code_2 = '';
                $iso_code_3 = '';
                $address_format = '';
                $geo_zone_id = "0";
            }

            $zone_query = $this->db->query("SELECT * FROM `m_zone` WHERE zone_id = '" . (int) $result['zone_id'] . "'");

            if ($zone_query->num_rows() > 0) {
                $zone_query_row = $zone_query->row_array();
                $zone = $zone_query_row['name'];
                $zone_code = $zone_query_row['code'];
            } else {
                $zone = '';
                $zone_code = '';
            }

            $address_data[$result['address_id']] = array(
                'address_id' => $result['address_id'],
                'firstname' => $result['firstname'],
                'lastname' => $result['lastname'],
                'mobile' => $result['mobile'],
                'company' => $result['company'],
                'address_1' => $result['address_1'],
                'address_2' => $result['address_2'],
                'postcode' => $result['postcode'],
                'city' => $result['city'],
                'zone_id' => $result['zone_id'],
                'zone' => $zone,
                'zone_code' => $zone_code,
                'country_id' => $result['country_id'],
                'country' => $country,
                'iso_code_2' => $iso_code_2,
                'iso_code_3' => $iso_code_3,
                'address_format' => $address_format,
                'geo_zone_id' => $geo_zone_id,

            );
        }

        return $address_data;
    }

    public function getTotalAddresses()
    {
        $query = $this->db->query("SELECT COUNT(*) AS total FROM customer_address WHERE customer_id = '" . (int) $this->session->userdata('lux_address_id') . "'");

        $row = $query->row_array();

        return $row['total'];
    }

    public function getCountryNew($country_id)
    {
        $query = $this->db->query("SELECT * FROM m_country WHERE country_id = '" . (int) $country_id . "' AND status = '1'");
        return $query->row_array();
    }

    public function getZonesByCountryId($country_id)
    {

        $query = $this->db->query("SELECT * FROM  m_zone WHERE country_id = '" . (int) $country_id . "' AND status = '1' ORDER BY name");
        $zone_data = $query->result_array();

        return $zone_data;
    }
    public function clear()
    {

        $session_user_data = $this->session->userdata('front_user_detail');
        //print_r($session_user_data);
        if (!isset($session_user_data['customer_id'])) {
            $this->db->query("DELETE FROM cart_master WHERE  user_id = '" . (int) $session_user_data['customer_id'] . "'    ");
        } else {
            $this->db->query("DELETE FROM cart_master WHERE   shopping_session = '" . $this->get_shopping_session() . "'  ");
        }

    }

    public function getTotalOrderProductsByOrderId($order_id)
    {

        $query = $this->db->query("SELECT COUNT('') AS total FROM order_product WHERE order_id = '" . (int) $order_id . "'");

        $row = $query->row_array();

        return $row['total'];
    }

    //copun
    public function getCoupon($code)
    {
        $session_user_data = $this->session->userdata('front_user_detail');
        $coupon_info = [];
        $status = true;
        $code = $this->common->mysql_safe_string($code);
        
        $coupon_query = $this->db->query("SELECT * FROM `coupon` WHERE code = '" . $code . "' AND ((date_start IS NULL or  date_start = '0000-00-00' OR date_start < NOW()) AND (date_end IS NULL or date_end = '0000-00-00' OR date_end > NOW())) AND status = 'Active'");

        if ($coupon_query->num_rows()) {
            $coupon_query_row = $coupon_query->row_array();
            $sub_total = $this->services->getCartSubtotal();
            if ($coupon_query_row['total'] >= $sub_total) {
                $status = false;
            }

            $coupon_history_query = $this->db->query("SELECT COUNT(*) AS total FROM `coupon_history` ch WHERE ch.coupon_id = '" . (int) $coupon_query_row['coupon_id'] . "'");
            $coupon_history_query_row = $coupon_history_query->row_array();
            if ($coupon_query_row['uses_total'] > 0 && ($coupon_history_query_row['total'] >= $coupon_query_row['uses_total'])) {
                $status = false;
            }

            if (empty($session_user_data['customer_id'])) {
                $status = false;
            }

            if (!empty($session_user_data['customer_id'])) {
                $coupon_history_query = $this->db->query("SELECT COUNT(*) AS total FROM `coupon_history` ch WHERE ch.coupon_id = '" . (int) $coupon_query_row['coupon_id'] . "' AND ch.customer_id = '" . (int) $session_user_data['customer_id'] . "'");

                if ($coupon_query_row['uses_customer'] > 0 && ($coupon_history_query_row['total'] >= $coupon_query_row['uses_customer'])) {
                    $status = false;
                }
            }

            // Products
            $coupon_product_data = array();

            // $coupon_product_query = $this->db->query("SELECT * FROM `coupon_product` WHERE coupon_id = '" . (int) $coupon_query_row['coupon_id'] . "'");
            // $coupon_product_query_rows = $coupon_product_query->result_array();
            // foreach ($coupon_product_query_rows as $product) {
            //     $coupon_product_data[] = $product['product_id'];
            // }

            // Categories
            $coupon_category_data = array();

            // $coupon_category_query = $this->db->query("SELECT * FROM `coupon_category` cc  where 1=2");
            // $coupon_category_query_rows = $coupon_category_query->result_array();
            // foreach ($coupon_category_query_rows as $category) {
            //     $coupon_category_data[] = $category['category_id'];
            // }

            $product_data = array();

            // if ($coupon_product_data || $coupon_category_data) {
            //     foreach ($this->getProducts() as $product) {
            //         if (in_array($product['product_id'], $coupon_product_data)) {
            //             $product_data[] = $product['product_id'];

            //             continue;
            //         }

            //         foreach ($coupon_category_data as $category_id) {
            //             $coupon_category_query = $this->db->query("SELECT COUNT(*) AS total FROM `product_to_category` WHERE `product_id` = '" . (int) $product['product_id'] . "' AND category_id = '" . (int) $category_id . "'");
            //             $coupon_category_query_row = $coupon_category_query->row_array();
            //             if ($coupon_category_query_row['total']) {
            //                 $product_data[] = $product['product_id'];

            //                 continue;
            //             }
            //         }
            //     }

            //     if (!$product_data) {
            //         $status = false;
            //     }
            // }
        } else {
            $status = false;
        }

        if ($status) {
            $coupon_info =  array(
                'coupon_id' => $coupon_query_row['coupon_id'],
                'code' => $coupon_query_row['code'],
                'name' => $coupon_query_row['name'],
                'type' => $coupon_query_row['type'],
                'discount' => $coupon_query_row['discount'],
                'shipping' => $coupon_query_row['shipping'],
                'total' => $coupon_query_row['total'],
                'product' => $product_data,
                'date_start' => $coupon_query_row['date_start'],
                'date_end' => $coupon_query_row['date_end'],
                'uses_total' => $coupon_query_row['uses_total'],
                'uses_customer' => $coupon_query_row['uses_customer'],
                'status' => $coupon_query_row['status'],
                'date_added' => $coupon_query_row['added_date'],
            );
           
        }
        //print_r($coupon_info);
        return $coupon_info;
    }
	public function getTaxes() {
		$tax_data = array();

		// foreach ($this->getProducts() as $product) {
		// 	if ($product['tax_class_id']) {
		// 		$tax_rates = $this->tax->getRates($product['price'], $product['tax_class_id']);

		// 		foreach ($tax_rates as $tax_rate) {
		// 			if (!isset($tax_data[$tax_rate['tax_rate_id']])) {
		// 				$tax_data[$tax_rate['tax_rate_id']] = ($tax_rate['amount'] * $product['quantity']);
		// 			} else {
		// 				$tax_data[$tax_rate['tax_rate_id']] += ($tax_rate['amount'] * $product['quantity']);
		// 			}
		// 		}
		// 	}
		// }

		return $tax_data;
	}
    public function getTotal($total)
    {

    }

    public function confirm($order_info, $order_total)
    {
        $code = '';

        $start = strpos($order_total['title'], '(') + 1;
        $end = strrpos($order_total['title'], ')');

        if ($start && $end) {
            $code = substr($order_total['title'], $start, $end - $start);
        }

        if ($code) {
            $coupon_info = $this->getCoupon($code);

            if ($coupon_info) {
                $this->db->query("INSERT INTO `coupon_history` SET coupon_id = '" . (int) $coupon_info['coupon_id'] . "', order_id = '" . (int) $order_info['order_id'] . "', customer_id = '" . (int) $order_info['customer_id'] . "', amount = '" . (float) $order_total['value'] . "', date_added = NOW()");
            } else {
                return $this->configmodal->get('config_fraud_status_id');
            }
        }
    }

    public function unconfirm($order_id)
    {
        $this->db->query("DELETE FROM `coupon_history` WHERE order_id = '" . (int) $order_id . "'");
    }
    public function redeem($coupon_id, $order_id, $customer_id, $amount)
    {
        $this->db->query("INSERT INTO `coupon_history` SET coupon_id = '" . (int) $coupon_id . "', order_id = '" . (int) $order_id . "', customer_id = '" . (int) $customer_id . "', amount = '" . (float) $amount . "', date_added = NOW()");
    }
    //copun

    function getExtensions($type) {
		$query = $this->db->query("SELECT * FROM extension WHERE `type` = '" . $this->common->getDbValue($type) . "'");

		return $query->result_array();
	}
    public function getold($key='') {
		// echo "SELECT * FROM currency where default_flag='1'";
		//$getDomainId = $this->services->getDomainId();

		$query = $this->db->query("SELECT * FROM `setting` where `key`='".$key."' ");
		
		if($query->num_rows() > 0){
			$row = $query->row_array();
			if($row['serialized']){
				$value= json_decode($this->common->getDbValue($row['value']));
				
			} else {
				$value= $this->common->getDbValue($row['value']);
			}
			
		} else {
			$value= "";
		}
		return $value;

	}
}
