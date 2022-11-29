<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Account extends CI_Controller
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
    public $controller = "account";
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

        $ar_session_data['last_page_visited'] = site_url("account");
        $this->session->set_userdata($ar_session_data);

    }
    public function index()
    {
        $session_user_data = $this->session->userdata('front_user_detail');

        if (!isset($session_user_data['customer_id'])) {
            $redirect = array('redirect' => site_url('account/my_account'));
            $this->session->set_userdata($redirect);

            redirect("login");
        }

        $data['start'] = $start = 0;
        $data['maxm'] = $maxm = 100;

        $search_qry = " WHERE o.order_id!=0  and customer_id = '" . $session_user_data['customer_id'] . "'   and ( cancel_order_req='0' ||  cancel_order_req is NULL) ";
        $limit_qry = "LIMIT " . $start . "," . $maxm;

        $sSql = "SELECT o.*, os.name FROM `m_order` o inner join m_order_status os on o.order_status_id = os.order_status_id
		$search_qry
		ORDER BY o.order_id DESC";
        $query = $sSql . " " . $limit_qry;

        $query = $this->db->query($query);
        $row = $query->result_array();
        $data['results'] = $row;

        $query_num = $this->db->query($sSql);
        $numrow = $query_num->num_rows();

        $data['test'] = 0;
        $this->load->view("account", $data);

    }
    public function orderdetail($order_uuid = "")
    {

        $session_user_data = $this->session->userdata('front_user_detail');

        if (!isset($session_user_data['customer_id'])) {
            $redirect = array('redirect' => site_url('account/orderdetail'));
            $this->session->set_userdata($redirect);

            redirect("login");
        }

        $order_info = $this->services->getOrderUUID($order_uuid);
        //print_r($order_info);exit;
        $order_id = $order_info['order_id'];

        if (!$order_info) {
            $newdata = array('warning' => 'Please select order');
            $this->session->set_userdata($newdata);
            //redirect('account');
        }

        /////
        $data['order_info'] = $order_info;

        $data['order_id'] = $order_id;

        $data['store_id'] = $order_info['store_id'];
        $data['store_name'] = $order_info['store_name'];

        if ($order_info['invoice_no']) {
            $data['invoice_no'] = $order_info['invoice_prefix'] . $order_info['invoice_no'];
        } else {
            $data['invoice_no'] = '';
        }

        $data['date_added'] = $this->common->getDateFormat($order_info['date_added'], 'd M, Y');

        $data['firstname'] = ucfirst($order_info['firstname']);
        $data['lastname'] = ucfirst($order_info['lastname']);

        if ($order_info['customer_id']) {
            $data['customer'] = $order_info['customer_id'];
        } else {
            $data['customer'] = '';
        }

        $data['email'] = $order_info['email'];
        $data['telephone'] = $order_info['telephone'];

        $data['shipping_method'] = $order_info['shipping_method'];
        $data['payment_method'] = $order_info['payment_method'];

        // Payment Address
        $format = '{firstname} {lastname}' . "\n" . '{company}' . "\n" . '{address_1}' . "\n" . '{address_2}' . "\n" . '{city} {postcode}' . "\n" . '{zone}' . "\n" . '{country}'. "\n" . '{mobile}';

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
            '{mobile}'


        );

        $replace = array(
            'firstname' => "<strong>" . ucfirst($order_info['payment_firstname']),
            'lastname' => ucfirst($order_info['payment_lastname']) . "</strong>",
            'company' => ucfirst($order_info['payment_company']),
            'address_1' => ucfirst($order_info['payment_address_1']),
            'address_2' => ucfirst($order_info['payment_address_2']),
            'city' => ucfirst($order_info['payment_city']),
            'postcode' => $order_info['payment_postcode'],
            'zone' => ucfirst($order_info['payment_zone']),
            'zone_code' => $order_info['payment_zone_code'],
            'country' => ucfirst($order_info['payment_country']),
            'mobile' => ucfirst($order_info['telephone']),

        );

        $data['payment_address'] = str_replace(array("\r\n", "\r", "\n"), '<br />', preg_replace(array("/\s\s+/", "/\r\r+/", "/\n\n+/"), '<br />', trim(str_replace($find, $replace, $format))));

        // Shipping Address
        $format = '{firstname} {lastname}' . "\n" . '{company}' . "\n" . '{address_1}' . "\n" . '{address_2}' . "\n" . '{city} {postcode}' . "\n" . '{zone}' . "\n" . '{country}'. "\n" . '{mobile}';

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
            '{mobile}'

        );

        $replace = array(
            'firstname' => "<strong>" . ucfirst($order_info['shipping_firstname']),
            'lastname' => ucfirst($order_info['shipping_lastname']) . "</strong>",
            'company' => ucfirst($order_info['shipping_company']),
            'address_1' => ucfirst($order_info['shipping_address_1']),
            'address_2' => ucfirst($order_info['shipping_address_2']),
            'city' => ucfirst($order_info['shipping_city']),
            'postcode' => $order_info['shipping_postcode'],
            'zone' => ucfirst($order_info['shipping_zone']),
            'zone_code' => $order_info['shipping_zone_code'],
            'country' => ucfirst($order_info['shipping_country']),
            'mobile' => ucfirst($order_info['shipping_mobile']),

        );

        $data['shipping_address'] = str_replace(array("\r\n", "\r", "\n"), '<br />', preg_replace(array("/\s\s+/", "/\r\r+/", "/\n\n+/"), '<br />', trim(str_replace($find, $replace, $format))));

        $products = $this->services->getOrderProducts($order_id);
        //print_r($products);
        foreach ($products as $product) {
            $option_data = array();

           
            $data['products'][] = array(
                'order_product_id' => $product['order_product_id'],
                'product_id' => $product['product_id'],
                'name' => $product['name'],
                'image' => $product['main_image'],
                'model' => $product['model'],
                'option' => $option_data,
                'quantity' => $product['quantity'],
                'price' => $product['price'],
                'total' => $product['total'],
                'slug_name' => $product['slug_name'],
            );
        }

        $data['totals'] = array();

        $totals = $this->services->getOrderTotals($order_id);

        foreach ($totals as $total) {
            $data['totals'][] = array(
                'title' => $total['title'],
                'text' => $total['value'],
            );
        }

        $data['comment'] = nl2br($order_info['comment']);

        $order_status_info = $this->services->getOrderStatus($order_info['order_status_id']);

        if ($order_status_info) {
            $data['order_status'] = $order_status_info['name'];
        } else {
            $data['order_status'] = '';
        }

        //$data['order_statuses'] = $this->services->getOrderStatuses();

        $data['order_status_id'] = $order_info['order_status_id'];

        $results = $this->services->getOrderHistories($order_id, 0, 1000);

        foreach ($results as $result) {
            $data['histories'][] = array(

                'status' => $result['status'],
                'comment' => $result['notify'] ? nl2br($result['comment']) : '',
                'date_added' => $this->common->getDateFormat($result['date_added']),
            );
        }
        /////
        $this->load->view("orderdetail", $data);
    }

    public function edit_account()
    {
        $session_user_data = $this->session->userdata('front_user_detail');

        if (!isset($session_user_data['customer_id'])) {
            $redirect = array('redirect' => site_url('account/edit_account'));
            $this->session->set_userdata($redirect);

            redirect("login");
        }

        $data['msg'] = '';
        $error = '';

        if (isset($_POST['mode']) == "edit_content") {

            $add_in['firstname'] = $firstname = $this->common->mysql_safe_string($_POST['firstname']);
            $add_in['lastname'] = $lastname = $this->common->mysql_safe_string($_POST['lastname']);
            $add_in['telephone'] = $telephone = $this->common->mysql_safe_string($_POST['telephone']);
            //$add_in['newsletter'] = $newsletter = $this->common->mysql_safe_string($_POST['newsletter']);
            //$add_in['fax'] = $fax = $this->common->mysql_safe_string($_POST['fax']);

            if ($firstname == '') {$error .= "Please enter first name<br>";}
            if ($lastname == '') {$error .= "Please enter last name<br>";}
            if ($telephone == '') {$error .= "Please enter telephone<br>";}

            if ($error == '') {
                $where = "customer_id = " . $session_user_data['customer_id'];
                $update_status = $this->common->updateRecord('m_customer', $add_in, $where);

                $success = array('success' => 'Information updated successfully');
                $this->session->set_flashdata($success);
            } else {
                $error2 = array('error' => $error);
                $this->session->set_flashdata($error2);
            }
        }

        $where_new_rand = " WHERE customer_id=" . $session_user_data['customer_id'];
        $data['cust_rs'] = $cust_rs = $this->common->getOneRow('m_customer', $where_new_rand);

        $this->load->view('edit_account', $data);

    }
    public function change_password()
    {
        $session_user_data = $this->session->userdata('front_user_detail');

        if (!isset($session_user_data['customer_id'])) {
            $redirect = array('redirect' => site_url('account/change_password'));
            $this->session->set_userdata($redirect);

            redirect("login");
        }

        $data['activaation_id'] = 1;
        $data['msg'] = '';
        $data['error_success'] = '';
        $error = '';

        if (isset($_POST['mode_update']) == "change_password") {
            //    $oldpass = $this->common->mysql_safe_string($_POST['oldpassword']);
            $vpwd = $this->common->mysql_safe_string($_POST['vpassword']);
            $npwd = $this->common->mysql_safe_string($_POST['npassword']);

            if ($vpwd != "" && $npwd != "") {
                if ($npwd != $vpwd) {

                    $error2 = array('error' => 'New password and verify password not match');
                    $this->session->set_flashdata($error2);
                } else {

                    $password = $npwd;
                    $salt = $this->common->token(9);

                    $new_pass = sha1($salt . sha1($salt . sha1($password)));
                    $add_in['salt'] = $salt;
                    $add_in['password'] = $new_pass;
                    $where = "customer_id = " . $session_user_data['customer_id'];
                    $update_status = $this->common->updateRecord('customer', $add_in, $where);

                    $success = array('success' => 'Your password has been successfully changed');
                    $this->session->set_flashdata($success);

                }
            } else {
               $error2 = array('error' => 'All fields are required');
				$this->session->set_flashdata($error2);
            }
        }
        $this->load->view('change_password', $data);
    }

	public function address(){
		$session_user_data = $this->session->userdata('front_user_detail');

        if (!isset($session_user_data['customer_id'])) {
            $redirect = array('redirect' => site_url('account/address'));
            $this->session->set_userdata($redirect);

            redirect("login");
        }
		$data['lf_act'] = 2;
		
		//  $where_new_rand = " WHERE customer_id=".$session_user_data['customer_id'];
		$cust_adrs = $this->services->getAddress($session_user_data['customer_id']);
		$format = '{firstname} {lastname}' . "\n" . '{company}' . "\n" . '{address_1}' . "\n" . '{address_2}' . "\n" . '{city} {postcode}' . "\n" . '{zone}' . "\n" . '{country}'. "\n" . '{mobile}';

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
				'{mobile}'
				
			);

			$replace = array(
				'firstname' => "<strong>".ucfirst($cust_adrs['firstname']),
				'lastname'  => ucfirst($cust_adrs['lastname'])."</strong>",
				'company'   => ucfirst($cust_adrs['company']),
				'address_1' => ucfirst($cust_adrs['address_1']),
				'address_2' => ucfirst($cust_adrs['address_2']),
				'city'      => ucfirst($cust_adrs['city']),
				'postcode'  => $cust_adrs['postcode'],
				'zone'      => ucfirst($cust_adrs['zone']),
				'zone_code' => $cust_adrs['zone_code'],
				'country'   => ucfirst($cust_adrs['country']),
				//'mobile'   => $cust_adrs['mobile'],
				
			);

			$data['cust_adrs_rs'] = str_replace(array("\r\n", "\r", "\n"), '<br />', preg_replace(array("/\s\s+/", "/\r\r+/", "/\n\n+/"), '<br />', trim(str_replace($find, $replace, $format))));
			
		
		 
		 
		$this->load->view('address',$data);
	}
	public function edit_address(){
		$session_user_data = $this->session->userdata('front_user_detail');

        if (!isset($session_user_data['customer_id'])) {
            $redirect = array('redirect' => site_url('account/edit_address'));
            $this->session->set_userdata($redirect);

            redirect("login");
        }
 
		$data['lf_act'] = 2;
		$data['msg'] = '';
		$error = '';
		

		$where_new_rand = " WHERE customer_id=".$session_user_data['customer_id'];
		$cust_adrs_rs = $this->common->getOneRow('customer_address',$where_new_rand);
		
		if(isset($_POST['mode'])=="edit_content"){

				$add_in['firstname'] = $firstname = $this->common->mysql_safe_string($_POST['firstname']);
				$add_in['lastname'] = $lastname = $this->common->mysql_safe_string($_POST['lastname']);				
				$add_in['company'] = $company = $this->common->mysql_safe_string($_POST['company']);
				$add_in['address_1'] = $address_1 = $this->common->mysql_safe_string($_POST['address_1']);
				
				$add_in['address_2'] = $address_2 = $this->common->mysql_safe_string($_POST['address_2']);
				$add_in['city'] = $city = $this->common->mysql_safe_string($_POST['city']);
				$add_in['postcode'] = $postcode = $this->common->mysql_safe_string($_POST['postcode']);
				$add_in['country_id'] = $country_id = $this->common->mysql_safe_string($_POST['country_id']);
				$add_in['zone_id'] = $zone_id = $this->common->mysql_safe_string($_POST['zone_id']);
			//	$add_in['mobile'] = $mobile = $this->common->mysql_safe_string($_POST['mobile']);
				
				if ($firstname=='') { $error.="Please enter first name<br>";}
				if ($lastname=='') { $error.="Please enter last name<br>";}
				//if ($mobile=='') { $error.="Please enter mobile<br>";}
				
				if ($error=='') {
					if($cust_adrs_rs) {
						$where = "customer_id = ".$session_user_data['customer_id'];	
						$update_status=$this->common->updateRecord('customer_address',$add_in,$where);
					} else {
						$add_in['customer_id'] = $session_user_data['customer_id'];
						$this->common->insertRecord('address',$add_in);
						$last_id = $this->db->insert_id();
						$add_in_cust['address_id'] = $last_id;
						$where_cust = "customer_id = ".$session_user_data['customer_id'];	
						$update_status=$this->common->updateRecord('m_customer',$add_in_cust,$where_cust);
					}

					$data['msg'] = 'success';
					$error2 = array('success' => 'Information updated successfully');
                    $this->session->set_flashdata($error2);
				} else {
					$data['msg'] = $error;
					$error2 = array('error' => $error);
                    $this->session->set_flashdata($error2);
				}				
		}		

		$where_new_rand = " WHERE customer_id=".$session_user_data['customer_id'];
		$cust_adrs_rs = $this->common->getOneRow('customer_address',$where_new_rand);
		// print_r($cust_adrs_rs);
		if($cust_adrs_rs) {
			$data['firstname'] = stripslashes($cust_adrs_rs['firstname']);
			$data['lastname'] = stripslashes($cust_adrs_rs['lastname']);
			$data['company'] = stripslashes($cust_adrs_rs['company']);
			$data['address_1'] = stripslashes($cust_adrs_rs['address_1']);
			$data['address_2'] = stripslashes($cust_adrs_rs['address_2']);
			$data['city'] = stripslashes($cust_adrs_rs['city']);
			$data['postcode'] = stripslashes($cust_adrs_rs['postcode']);
			$data['country_id'] = $country_id = stripslashes($cust_adrs_rs['country_id']);
			$data['zone_id'] = stripslashes($cust_adrs_rs['zone_id']);	
			// $data['mobile'] = stripslashes($cust_adrs_rs['mobile']);	
			
		} else {
			$data['firstname'] = '';
			$data['lastname'] = '';
			$data['company'] = '';
			$data['address_1'] = '';
			$data['address_2'] = '';
			$data['city'] = '';
			$data['postcode'] = '';
			$data['country_id'] = $country_id = '';
			$data['zone_id'] = '';
			//$data['mobile'] = '';
			
		}
		
		
		$where_cond = "  ORDER BY name";
		$data['country_rs'] = $country_rs = $this->common->getAllRow('m_country',$where_cond);

		$where_cond = "  WHERE country_id='".$country_id."' ORDER BY name";
		$data['state_rs'] = $state_rs = $this->common->getAllRow('m_zone',$where_cond);

		$this->load->view('edit_address',$data);
		 $this->session->unset_userdata('success');
		 $this->session->unset_userdata('warning');
	}

	public function mywishlist(){
		$session_user_data = $this->session->userdata('front_user_detail');

        if (!isset($session_user_data['customer_id'])) {
            $redirect = array('redirect' => site_url('account/mywishlist'));
            $this->session->set_userdata($redirect);

            redirect("login");
        }
		 	
			if (isset($_GET['remove'])) {
			
		    $pro_id = $this->common->mysql_safe_string($_GET['remove']);
			
			 $where = "product_id = '".$pro_id."' AND customer_id='".$session_user_data['customer_id']."' ";
 			$this->common->deleteRecord('customer_wishlist',$where);
		  	 
			$newdata = array('success'  => 'Success: You have modified your wish list!' );
 			$this->session->set_userdata($newdata);
						
		}
		$query = "SELECT pro.* FROM 	product_master pro, customer_wishlist wish WHERE pro.product_id=wish.product_id AND wish.customer_id=".$session_user_data['customer_id']."";

		$query = $this->db->query($query);
		$row = $query->result_array(); 
		$data['sel_rs'] = $row;

		$this->load->view('my_wish_list',$data);
		 $this->session->unset_userdata('success');
		 $this->session->unset_userdata('warning');
	}	
    public function logout()
    {

        $array_items = array('front_user_detail' => '');

        $this->session->unset_userdata($array_items);
        $this->session->sess_destroy();
        redirect('home');

    }
}
