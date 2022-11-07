<?php
error_reporting(E_ALL);
//use Ifsnop\Mysqldump as IMysqldump;
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
            $order_limit = (isset($params['limit'])) ? " limit 0," . $params['limit'] : '';
            $sort = (isset($params['sort'])) ? $params['sort'] : 'sort_order';
            $sort = ($sort == 'price') ? 'sellprice' : $sort;
            $order = (isset($params['order'])) ? $params['order'] : 'asc';
            $order_by = "order by {$sort} {$order}, name asc";

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
            $sql = "select * from product_master where status_flag='Active'     " . $order_by . ' ' . $order_limit;

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
    public function getCurrency()
    {
        $currencyarr[1] = array('title' => 'INR', 'code' => 'INR', 'symbol_left' => '₹', 'symbol_right' => '', 'decimal_place' => '2', 'domains' => '1');
        $currencyarr[2] = array('title' => 'USD', 'code' => 'USD', 'symbol_left' => '$', 'symbol_right' => '', 'decimal_place' => '2', 'domains' => '2');
        $currencyarr[3] = array('title' => 'AED', 'code' => 'AED', 'symbol_left' => 'AED', 'symbol_right' => '', 'decimal_place' => '0', 'domains' => '3');
        $getDomainId = $this->getDomainId();

        $currentCurrency = $currencyarr[$getDomainId];
        return $currentCurrency;
    }
    public function format($number)
    {

        $currencyarr[1] = array('title' => 'INR', 'code' => 'INR', 'symbol_left' => '₹', 'symbol_right' => '', 'decimal_place' => '2', 'domains' => '1');
        $currencyarr[2] = array('title' => 'USD', 'code' => 'USD', 'symbol_left' => '$', 'symbol_right' => '', 'decimal_place' => '2', 'domains' => '2');
        $currencyarr[3] = array('title' => 'AED', 'code' => 'AED', 'symbol_left' => 'AED', 'symbol_right' => '', 'decimal_place' => '0', 'domains' => '3');

        $getDomainId = $this->getDomainId();

        $currentCurrency = $currencyarr[$getDomainId];
        $symbol_left = $currentCurrency['symbol_left'];
        $symbol_right = $currentCurrency['symbol_right'];
        $decimal_place = $currentCurrency['decimal_place'];

        $string = '';
        if ($symbol_left) {
            $string .= $symbol_left . "";
        }
        $string .= number_format($number, (int) $decimal_place, '.', ',');
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
         
        $cartinfo = $this->getCartinfo();
        $cartSubtotal = $this->getCartSubtotal();

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
        $order_data['total'] = (!empty($cartSubtotal)) ? $cartSubtotal : '0.00';
        if ($order_query->num_rows() > 0) {

            $order_data['store_id'] = $this->services->getDomainId();
            $order_data['store_name'] = $_SERVER['HTTP_HOST'];
            $order_data['customer_id'] = $params['customer_id'];
            $order_data['firstname'] = $params['firstname'];
            $order_data['lastname'] = $params['lastname'];
            $order_data['email'] = $params['email'];
            $order_data['telephone'] = $params['telephone'];
            $order_data['customer_id'] = $params['customer_id'];
            $order_data['payment_method'] = 'COD';

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
            $order_data['user_agent'] = $this->input->user_agent();

            $where_cart = "order_id = '" . $order_id . "' ";
            $this->common->updateRecord('m_order', $order_data, $where_cart);

        } else {

            $order_data['store_id'] = $this->services->getDomainId();
            $order_data['store_name'] = $_SERVER['HTTP_HOST'];
            $order_data['customer_id'] = $params['customer_id'];
            $order_data['firstname'] = $params['firstname'];
            $order_data['lastname'] = $params['lastname'];
            $order_data['email'] = $params['email'];
            $order_data['telephone'] = $params['telephone'];
            $order_data['customer_id'] = $params['customer_id'];
            $order_data['payment_method'] = 'COD';

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
            $order_data['user_agent'] = $this->input->user_agent();

            $order_id = $this->common->insertRecord('m_order', $order_data);

        }

        $totals[] = array(
            'code'       => 'sub_total',
            'title'      => 'Sub-Total:',
            'value'      => $order_data['total'],
            'sort_order' => 1
        );

        //total module
        $totals[] = array(
            'code'       => 'total',
            'title'      => 'Total',
            'value'      => max(0, $order_data['total']),
            'sort_order' => 100
        );
        $sort_order = array();
			 
        foreach ($totals as $key => $value) {
             
            if(sizeof($value)>0){
                    $sort_order[$key] = $value['sort_order'];
            } else {
                    $sort_order[$key] = '';
            }
        
            
        }
        array_multisort($sort_order, SORT_ASC, $totals);
        
        $order_data['totals'] = $totals;

        $sql = "delete from order_product where order_id='" . (int) $order_id . "'";
        $this->db->query($sql);

        foreach ($cartinfo as $key => $product) {
            $price_json = json_decode($product['price_json'], true);
            //   print_r($price_json);

            $sellprice = $product['price'];
            $sellprice_total = $sellprice * $product['cart_qty'];

            $this->db->query("INSERT INTO order_product SET order_id = '" . (int) $order_id . "', product_id = '" . (int) $product['product_id'] . "', name = '" . $this->common->getDbValue($product['name']) . "', model = '" . $this->common->getDbValue($product['item_code']) . "', quantity = '" . (int) $product['cart_qty'] . "', price = '" . (float) $sellprice . "', total = '" .   $sellprice_total . "' ");

        }

        if (isset($order_data['totals'])) {
            $sql = "delete from order_total where order_id='" . (int) $order_id . "'";
            $this->db->query($sql);
            foreach ($order_data['totals'] as $total) {
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

        $this->common->insertRecord('m_customer', $params);
        //$last_id = $this->db->insert_id();
        $sql = "select * from m_customer where uuid='{$uuid}'";
        $rs_chk = $this->db->query($sql);
        if ($rs_chk->num_rows() > 0) {
            $customer_info = $rs_chk->row_array();

            $add_in_add['customer_id'] = $customer_info['customer_id'];
            $add_in_add['firstname'] = $customer_info['firstname'];
            $add_in_add['lastname'] = $customer_info['lastname'];

            $add_in_add['company'] = $company = ''; //$this->input->post($_POST['company']);
            $add_in_add['address_1'] = $address_1 = ''; //$this->input->post($_POST['address_1']);
            $add_in_add['address_2'] = $address_2 = ''; //$this->input->post($_POST['address_2']);
            $add_in_add['city'] = $city = ''; //$this->input->post($_POST['city']);
            $add_in_add['postcode'] = $postcode = ''; //$this->input->post($_POST['postcode']);
            $add_in_add['country_id'] = $country_id = '221'; //$this->input->post($_POST['country_id']);
            $add_in_add['zone_id'] = $zone_id = '0'; //$this->input->post($_POST['zone_id']);
            $add_in_add['default'] = 1;

            if ($domain == 1) {
                $add_in_add['country_id'] = 99;
            }
            if ($domain == 2) {
                $add_in_add['country_id'] = 221;
            }
            if ($domain == 3) {
                $add_in_add['country_id'] = 223;
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

        }

        return $customer_info;
    }

    public function addOrderHistory($order_id, $order_status_id, $comment = '', $notify = false, $override = false)
    {
       
        

            //$customer_info = $this->customercartordermodal->getCustomer($order_info['customer_id']);

            $status = false;
            if ($status) {
                $order_status_id = 1 ; //pending
            }

            
            $query_invoice = $this->db->query("SELECT MAX(invoice_no) AS invoice_no FROM `m_order` WHERE order_id = '" . (int) $order_id . "'");
            $query_invoice_row = $query_invoice->row_array();
            if ($query_invoice_row['invoice_no']) {
                $invoice_no = $query_invoice_row['invoice_no'] + 1;
            } else {
                $invoice_no = 1;
            }

            $this->db->query("UPDATE `m_order` SET invoice_no = '" . (int) $invoice_no . "'  WHERE order_id = '" . (int) $order_id . "'");

            $this->db->query("INSERT INTO order_history SET order_id = '" . (int) $order_id . "', order_status_id = '" . (int) $order_status_id . "', notify = '1', comment = '" . $this->common->getDbValue($comment) . "', date_added = NOW()");

            // Stock subtraction

            // $order_product_query = $this->db->query("SELECT * FROM order_product WHERE order_id = '" . (int) $order_id . "'");

            // foreach ($order_product_query->result_array() as $order_product) {
            //   //  $this->db->query("UPDATE product_master SET quantity = (quantity - " . (int) $order_product['quantity'] . ") WHERE product_id = '" . (int) $order_product['product_id'] . "' AND subtract = '1'");

             
            // }

 

        

          

        

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

            if ($country_query->num_rows) {
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
	public function getOrderProducts($order_id) {
		$query = $this->db->query("SELECT op.*, p.main_image FROM order_product op 
								left join 	product_master p on op.product_id = p.product_id
							 WHERE order_id = '" . (int)$order_id . "'");

		return $query->result_array() ;
	}
	public function getOrderTotals($order_id) {
		$query = $this->db->query("SELECT * FROM order_total WHERE order_id = '" . (int)$order_id . "' ORDER BY sort_order");

		return $query->result_array() ;
	}
    public function getOrderStatus($order_status_id) {
		$query = $this->db->query("SELECT * FROM m_order_status WHERE order_status_id = '" . (int)$order_status_id . "'   ");
		$row = $query->row_array();
		return $row;
	}	
    public function getOrderHistories($order_id) {
		$query = $this->db->query("SELECT date_added, os.name AS status, oh.comment, oh.notify FROM order_history oh LEFT JOIN m_order_status os ON oh.order_status_id = os.order_status_id WHERE oh.order_id = '" . (int)$order_id . "'   ORDER BY oh.date_added");

		return $query->result_array() ;
	}
    public function getOrder($order_id)
    {
        //echo "SELECT * FROM `order` WHERE order_id = '" . (int)$order_id . "' AND customer_id = '" . (int)$this->session->userdata('lux_user_id') . "' AND order_status_id > '0'";
        //$order_query = $this->db->query("SELECT * FROM `order` WHERE order_id = '" . (int)$order_id . "' AND customer_id = '" . (int)$this->session->userdata('lux_user_id') . "' AND order_status_id > '0'");
        $order_query = $this->db->query("SELECT *, (SELECT os.name FROM `order_status` os WHERE os.order_status_id = o.order_status_id AND os.language_id = o.language_id) AS order_status FROM `order` o WHERE o.order_id = '" . (int) $order_id . "'");

        if ($order_query->num_rows() > 0) {
            $order_query_row = $order_query->row_array();

            $country_query = $this->db->query("SELECT * FROM `country` WHERE country_id = '" . (int) $order_query_row['payment_country_id'] . "'");

            if ($country_query->num_rows) {
                $country_query_row = $country_query->row_array();
                $payment_iso_code_2 = $country_query_row['iso_code_2'];
                $payment_iso_code_3 = $country_query_row['iso_code_3'];
            } else {
                $payment_iso_code_2 = '';
                $payment_iso_code_3 = '';
            }

            $zone_query = $this->db->query("SELECT * FROM `zone` WHERE zone_id = '" . (int) $order_query_row['payment_zone_id'] . "'");

            if ($zone_query->num_rows() > 0) {

                $zone_query_row = $zone_query->row_array();
                $payment_zone_code = $zone_query_row['code'];
            } else {
                $payment_zone_code = '';
            }

            $country_query = $this->db->query("SELECT * FROM `country` WHERE country_id = '" . (int) $order_query_row['shipping_country_id'] . "'");

            if ($country_query->num_rows() > 0) {
                $country_query_row = $country_query->row_array();

                $shipping_iso_code_2 = $country_query_row['iso_code_2'];
                $shipping_iso_code_3 = $country_query_row['iso_code_3'];
            } else {
                $shipping_iso_code_2 = '';
                $shipping_iso_code_3 = '';
            }

            $zone_query = $this->db->query("SELECT * FROM `zone` WHERE zone_id = '" . (int) $order_query_row['shipping_zone_id'] . "'");

            if ($zone_query->num_rows() > 0) {
                $zone_query_row = $zone_query->row_array();
                $shipping_zone_code = $zone_query_row['code'];
            } else {
                $shipping_zone_code = '';
            }

            return array(
                'order_id' => $order_query_row['order_id'],
                'invoice_no' => $order_query_row['invoice_no'],
                'invoice_prefix' => $order_query_row['invoice_prefix'],
                'store_id' => $order_query_row['store_id'],
                'store_name' => $order_query_row['store_name'],
                'store_url' => $order_query_row['store_url'],
                'customer_id' => $order_query_row['customer_id'],
                'firstname' => $order_query_row['firstname'],
                'lastname' => $order_query_row['lastname'],
                'telephone' => $order_query_row['telephone'],
                'fax' => $order_query_row['fax'],
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
                'currency_value' => $order_query_row['currency_value'],
                'date_modified' => $order_query_row['date_modified'],
                'date_added' => $order_query_row['date_added'],
                'ip' => $order_query_row['ip'],
                'billing_mobile' => $order_query_row['billing_mobile'],
                'shipping_mobile' => $order_query_row['shipping_mobile'],
            );
        } else {
            return false;
        }
    }

    //other

    public function getAddress($customer_id=0) {

		$address_query = $this->db->query("SELECT DISTINCT * FROM customer_address WHERE customer_id = '" . (int)$customer_id . "' ");

		if ($address_query->num_rows() > 0 ) {
			$address_query_row = $address_query->row_array(); 
			$country_query = $this->db->query("SELECT * FROM `m_country` WHERE country_id = '" . (int)$address_query_row['country_id'] . "'");

			if ($country_query->num_rows() > 0 ) {
				$country_query_row = $country_query->row_array(); 
				$country = $country_query_row['name'];
				$iso_code_2 = $country_query_row['iso_code_2'];
				$iso_code_3 = $country_query_row['iso_code_3'];
			 
				 $geo_zone_id= 0;//$country_query_row['geo_zone_id'];
			} else {
				$country = '';
				$iso_code_2 = '';
				$iso_code_3 = '';
				$address_format = '';
				$geo_zone_id = "0";
			}

			$zone_query = $this->db->query("SELECT * FROM `m_zone` WHERE zone_id = '" . (int)$address_query_row['zone_id'] . "'");
			
			if ($zone_query->num_rows() > 0 ) {
				$zone_query_row = $zone_query->row_array(); 
				$zone = $zone_query_row['name'];
				$zone_code = $zone_query_row['code'];
			} else {
				$zone = '';
				$zone_code = '';
			}

			$address_data = array(
				'address_id'     => $address_query_row['address_id'],
				'firstname'      => $address_query_row['firstname'],
				'lastname'       => $address_query_row['lastname'],
				//'mobile'       => $address_query_row['mobile'],
				'company'        => $address_query_row['company'],
				'address_1'      => $address_query_row['address_1'],
				'address_2'      => $address_query_row['address_2'],
				'postcode'       => $address_query_row['postcode'],
				'city'           => $address_query_row['city'],
				'zone_id'        => $address_query_row['zone_id'],
				'zone_id'        => $address_query_row['zone_id'],
				'zone'           => $zone,
				'zone_code'      => $zone_code,
				'country_id'     => $address_query_row['country_id'],
				'country'        => $country,
				'iso_code_2'     => $iso_code_2,
				'iso_code_3'     => $iso_code_3,
				//'address_format' => $address_format,
				'geo_zone_id'	 => $geo_zone_id
				 
			);

			return $address_data;
		} else {
			return false;
		}
	}
	public function getAddresses($customer_id=0) {
		$address_data = array();

		$query = $this->db->query("SELECT * FROM customer_address WHERE customer_id = '" . (int)$customer_id . "'");

		foreach ($query->result_array() as $result) {
			$country_query = $this->db->query("SELECT * FROM `m_country` WHERE country_id = '" . (int)$result['country_id'] . "'");

			if ($country_query->num_rows() > 0) {
				$country_query_row = $country_query->row_array(); 
				$country = $country_query_row['name'];
				$iso_code_2 = $country_query_row['iso_code_2'];
				$iso_code_3 = $country_query_row['iso_code_3'];
				 
				$geo_zone_id= $country_query_row['geo_zone_id'];
				
			} else {
				$country = '';
				$iso_code_2 = '';
				$iso_code_3 = '';
				$address_format = '';
				$geo_zone_id = "0";
			}

			$zone_query = $this->db->query("SELECT * FROM `m_zone` WHERE zone_id = '" . (int)$result['zone_id'] . "'");

			if ($zone_query->num_rows() > 0 ) {
				$zone_query_row = $zone_query->row_array(); 
				$zone = $zone_query_row['name'];
				$zone_code = $zone_query_row['code'];
			} else {
				$zone = '';
				$zone_code = '';
			}

			$address_data[$result['address_id']] = array(
				'address_id'     => $result['address_id'],
				'firstname'      => $result['firstname'],
				'lastname'       => $result['lastname'],
				'mobile'       => $result['mobile'],
				'company'        => $result['company'],
				'address_1'      => $result['address_1'],
				'address_2'      => $result['address_2'],
				'postcode'       => $result['postcode'],
				'city'           => $result['city'],
				'zone_id'        => $result['zone_id'],
				'zone'           => $zone,
				'zone_code'      => $zone_code,
				'country_id'     => $result['country_id'],
				'country'        => $country,
				'iso_code_2'     => $iso_code_2,
				'iso_code_3'     => $iso_code_3,
				'address_format' => $address_format,
				'geo_zone_id'	 => $geo_zone_id
				 

			);
		}

		return $address_data;
	}

	public function getTotalAddresses() {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM customer_address WHERE customer_id = '" . (int)$this->session->userdata('lux_address_id') . "'");

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
    public function clear() {

        $session_user_data = $this->session->userdata('front_user_detail');
        //print_r($session_user_data);
        if (!isset($session_user_data['user_id'])) {
            $this->db->query("DELETE FROM cart_master WHERE  user_id = '" . (int) $this->getId() . "'    ");
        } else {
            $this->db->query("DELETE FROM cart_master WHERE   shopping_session = '" . $this->get_shopping_session() . "'  ");
        }

	}

    public function getTotalOrderProductsByOrderId($order_id) {
		 
		$query = $this->db->query("SELECT COUNT('') AS total FROM order_product WHERE order_id = '" . (int)$order_id . "'");

		 $row = $query->row_array();

		return $row['total'];
	}
}
