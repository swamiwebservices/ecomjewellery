<?php
error_reporting(E_ALL);
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
            $string .= $symbol_left . " ";
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
        $date_added = date("Y-m-d");
        $domain = $this->getDomainId();
        //$get_user_session_id = (!empty($this->getId())) ? $this->getId() : $this->get_shopping_session() ;

        $query = $this->db->query("SELECT COUNT('') AS total FROM cart_master WHERE user_id = '" . (int) $this->getId() . "' AND shopping_session = '" . $this->get_shopping_session() . "' AND product_id = '" . (int) $product_id . "'");

        $query_row = $query->row_array();

        if (!$query_row['total']) {

            $cart_date = time();

            $this->db->query("INSERT cart_master SET  domain='{$domain}', user_id = '" . (int) $this->getId() . "', shopping_session = '" . $this->get_shopping_session() . "', product_id = '" . (int) $product_id . "',   cart_qty = '" . (int) $quantity . "', date_added = '{$date_added}' ");

        } else {

            $this->db->query("UPDATE cart_master SET cart_qty = (cart_qty + " . (int) $quantity . ") WHERE   user_id = '" . (int) $this->getId() . "' AND shopping_session = '" . $this->get_shopping_session() . "' AND product_id = '" . (int) $product_id . "'");

        }

        $query = $this->db->query("SELECT sum(cart_qty) AS total FROM cart_master WHERE user_id = '" . (int) $this->getId() . "' AND shopping_session = '" . $this->get_shopping_session() . "'");

        $query_row = $query->row_array();
        return $query_row['total'];
    }

    function getCartinfo(){
	    $get_user_session_id = (!empty($this->getId())) ? $this->getId() : '' ;
        if((int)$this->session->userdata('fron_user_id') >0 ) {
            $sql = "select cm.*,pm.name from cart_master cm , product_master pm  where cm.product_id=pm.product_id and user_id = '" . (int) $this->getId() . "'";
        } else {
            $sql = "select * from cart_master where shopping_session = '" . (int) $this->get_shopping_session() . "'";
        }
        $query = $this->db->query($sql);
        $query_row = $query->row_array();
         
      
   }

    function get_shopping_session() {
		if($this->session->userdata('sel_user_session')==""){   	
			$dt1 = date("His");
			$dt2 = $this->common->gen_key(10);
			$date_var = $dt1."".$dt2;
			$UID = substr(str_replace(".","",$date_var),0,20);
			$userdata = array('sel_user_session'=>$UID);
			$this->session->set_userdata($userdata);
			$rd_session = $this->session->userdata('sel_user_session');
		} else {
			$rd_session = $this->session->userdata('sel_user_session');
		}
		return $rd_session;
	}	

    function getId(){
	  
        if((int)$this->session->userdata('fron_user_id') >0 )
            return (int)$this->session->userdata('fron_user_id');
        else 
            return $this->get_shopping_session();
      
   }
    //end of cart function
}
