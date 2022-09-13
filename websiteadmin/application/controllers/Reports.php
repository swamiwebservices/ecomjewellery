<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Reports extends CI_Controller
{
    public $db;
    public $ctrl_name = 'reports';
    public $tbl_name = 'order_master';
    public $tbl_name_one = 'mst_user_type';
    public $pg_title = 'Reports';
    public $m_act = 8;

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
        $this->order();
    }

    public function order()
    {
        $data['msg'] = '';
        $error = '';
        $data['l_s_act'] = 1;
        $data['title'] = 'Report';
        $data['sub_heading'] = 'Orders';
        $data['controller'] = $this->ctrl_name;

        $sql_sub = "";
        $date_range = "";
        if (isset($_POST['mode']) && $_POST['mode'] == "condtion") {
            $results = [];
            $order_status_id_cond = "2,3,4";
            $order_status_id = (isset($_POST['order_status_id'])) ? filter_var($_POST['order_status_id'], FILTER_SANITIZE_STRING) : '';
            $payment_method = (isset($_POST['payment_method'])) ? filter_var($_POST['payment_method'], FILTER_SANITIZE_STRING) : '';
            $date_range = (isset($_POST['date_range'])) ? filter_var($_POST['date_range'], FILTER_SANITIZE_STRING) : '';
            $customer = (isset($_POST['customer'])) ? filter_var($_POST['customer'], FILTER_SANITIZE_STRING) : '';
            $driver = (isset($_POST['driver'])) ? filter_var($_POST['driver'], FILTER_SANITIZE_STRING) : '';
            $order_id = (isset($_POST['order_id'])) ? filter_var($_POST['order_id'], FILTER_SANITIZE_STRING) : '';

            if ($date_range != "") {
                $date_range_exp = explode(" - ", $date_range);
                //    print_r($date_range_exp);
                $date_range_exp[0] = $this->common->getDateFormat(trim($date_range_exp[0]), "Y-m-d");
                $date_range_exp[1] = $this->common->getDateFormat(trim($date_range_exp[1]), "Y-m-d");
                $sql_sub = " and  (DATE_FORMAT(o.date_added,'%Y-%m-%d')   BETWEEN '" . $date_range_exp[0] . "' AND '" . $date_range_exp[1] . "') ";

                // inner join user_master_front um on o.customer_id = um.user_id
                $sSql = "SELECT o.order_id, o.oorder_uid,o.invoice_no,o.customer_id,o.parent_id, o.email,o.telephone,o.payment_company, o.shipping_company, o.payment_firstname,o.payment_lastname,o.payment_address_1,o.payment_postcode,o.payment_state_name,o.payment_district_name,o.payment_state_id,o.payment_district_id,o.payment_method,o.shipping_firstname,o.shipping_lastname,o.shipping_address_1,o.shipping_postcode,o.shipping_state_name,o.shipping_state_id,o.shipping_district_id,o.shipping_district_name ,o.comment ,o.total ,o.order_status_id,o.order_status_id as order_satus_code ,o.date_added,o.credit_pay_date, o.delivery_time ,o.order_delivery_date_expected ,o.shipping_longitude ,o.shipping_latitude ,o.credit_pay_status,  os.name as order_satus_name,o.complete_date,o.driver_id,um.first_name as dri_first_name ,um.last_name as dri_last_name , IFNULL(ro.rating, 0) as rating
			FROM `order_master` o  inner join master_order_status os on o.order_status_id = os.order_status_id
			left join review_order ro on o.order_id = ro.order_id
			left join 	user_master_front um on o.driver_id = um.user_id  and  um.user_type='DRI'
			WHERE o.order_id!=0  and o.order_status_id in ($order_status_id_cond) " . $sql_sub . " ORDER BY o.order_id DESC";
                $query = $this->db->query($sSql);

                $data['oderlist'] = $query->result_array();
                $data['date_range'] = $date_range;
            } else {
                $error = "Please select date range";
            }

        } else {

            $data['oderlist'] = [];
        }

        $data['tittle'] = "Order " . $date_range;
        $fun_name = $this->ctrl_name . "/order";
        $data['other_para'] = "";
		$data['error'] = $error;
        $data['fun_name'] = $fun_name . "?" . $data['other_para'];
        $this->load->view('report_orders_list', $data);
        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');
    }
    public function customers()
    {
        $data['msg'] = '';
        $error = '';
        $data['l_s_act'] = 2;
        $data['title'] = 'Report';
        $data['sub_heading'] = 'customers';
        $data['controller'] = $this->ctrl_name;

        $sql_sub = "";
        $date_range = "";
        if (isset($_POST['mode']) && $_POST['mode'] == "condtion") {
            $results = [];
            $order_status_id_cond = "1,2,3,4";
            $date_range = (isset($_POST['date_range'])) ? filter_var($_POST['date_range'], FILTER_SANITIZE_STRING) : '';

            if ($date_range != "") {
                $date_range_exp = explode(" - ", $date_range);
                //    print_r($date_range_exp);
                $date_range_exp[0] = $this->common->getDateFormat(trim($date_range_exp[0]), "Y-m-d");
                $date_range_exp[1] = $this->common->getDateFormat(trim($date_range_exp[1]), "Y-m-d");
                $sql_sub = " and  (DATE_FORMAT(o.date_added,'%Y-%m-%d')   BETWEEN '" . $date_range_exp[0] . "' AND '" . $date_range_exp[1] . "') ";

                // inner join user_master_front um on o.customer_id = um.user_id
                $sSql = "SELECT um.*,mp.name as state_name, mp.name_en as state_name_en, md.name as district_name , md.name_en as district_name_en ,
			COUNT(o.order_id) AS total_order
			 FROM `user_master_front` um
			left join master_province mp on um.state_id = mp.id
			left join master_district md on um.district_id = md.id
			left join order_master o on um.user_id = o.parent_id  and o.order_status_id in ($order_status_id_cond) $sql_sub
			WHERE um.status in ('Active','Inactive')  and user_type='CUST'  and um.parent_id=0
			GROUP BY um.user_id
			ORDER BY total_order DESC";
                $query = $this->db->query($sSql);

                $data['results'] = $query->result_array();
                $data['date_range'] = $date_range;
            } else {
                $error = "Please select date range";
            }

        } else {

            $data['results'] = [];
        }

        $data['tittle'] = "customers " . $date_range;
        $fun_name = $this->ctrl_name . "/customers";
        $data['other_para'] = "";
		$data['error'] = $error;
        $data['fun_name'] = $fun_name . "?" . $data['other_para'];
        $this->load->view('report_customers_list', $data);
        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');
    }
    public function products()
    {
        $data['msg'] = '';
        $error = '';
        $data['l_s_act'] = 3;
        $data['title'] = 'Report';
        $data['sub_heading'] = 'products';
        $data['controller'] = $this->ctrl_name;

        $sql_sub = "   1=1 ";
        $date_range = "";
        if (isset($_POST['mode']) && $_POST['mode'] == "condtion") {
            $results = [];
            $order_status_id_cond = "2,3,4";
            $date_range = (isset($_POST['date_range'])) ? filter_var($_POST['date_range'], FILTER_SANITIZE_STRING) : '';

            if ($date_range != "") {
                $date_range_exp = explode(" - ", $date_range);
                //    print_r($date_range_exp);
                $date_range_exp[0] = $this->common->getDateFormat(trim($date_range_exp[0]), "Y-m-d");
                $date_range_exp[1] = $this->common->getDateFormat(trim($date_range_exp[1]), "Y-m-d");
                $sql_sub = "    (DATE_FORMAT(o.date_added,'%Y-%m-%d')   BETWEEN '" . $date_range_exp[0] . "' AND '" . $date_range_exp[1] . "') ";

                // inner join user_master_front um on o.customer_id = um.user_id
                $sSql = "SELECT
			p.*,
			COUNT(op.product_id) AS total_product
		FROM
			`product_master` p
			left join order_product op on p.product_id = op.product_id
			and op.order_id in (
		select
			o.order_id
		from
			order_master o
		where     o.order_status_id in ($order_status_id_cond) and
			(
				$sql_sub
			)
				)
		WHERE
			p.status in ('Active', 'Inactive')
		GROUP BY
			p.product_id
		ORDER BY
			total_product DESC";
                $query = $this->db->query($sSql);

                $data['results'] = $query->result_array();
                $data['date_range'] = $date_range;

            } else {
                $error = "Please select date range";
            }

        } else {

            $data['results'] = [];
        }

        $data['tittle'] = "Product " . $date_range;
        $fun_name = $this->ctrl_name . "/products";
        $data['other_para'] = "";
		$data['error'] = $error;
        $data['fun_name'] = $fun_name . "?" . $data['other_para'];
        $this->load->view('report_products_list', $data);
        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');
    }
    public function driver()
    {
        $data['msg'] = '';
        $error = '';
        $data['l_s_act'] = 4;
        $data['title'] = 'Report';
        $data['sub_heading'] = 'driver';
        $data['controller'] = $this->ctrl_name;

        $sql_sub = "";
        $date_range = "";
        if (isset($_POST['mode']) && $_POST['mode'] == "condtion") {
            $results = [];
            $order_status_id_cond = "2,3,4";
            $date_range = (isset($_POST['date_range'])) ? filter_var($_POST['date_range'], FILTER_SANITIZE_STRING) : '';

            if ($date_range != "") {
                $date_range_exp = explode(" - ", $date_range);
                //    print_r($date_range_exp);
                $date_range_exp[0] = $this->common->getDateFormat(trim($date_range_exp[0]), "Y-m-d");
                $date_range_exp[1] = $this->common->getDateFormat(trim($date_range_exp[1]), "Y-m-d");
                $sql_sub = " and  (DATE_FORMAT(o.date_added,'%Y-%m-%d')   BETWEEN '" . $date_range_exp[0] . "' AND '" . $date_range_exp[1] . "') ";

                // inner join user_master_front um on o.customer_id = um.user_id
                $sSql = "SELECT um.*,mp.name as state_name, mp.name_en as state_name_en, md.name as district_name , md.name_en as district_name_en ,
			COUNT(o.order_id) AS total_order
			 FROM `user_master_front` um
			left join master_province mp on um.state_id = mp.id
			left join master_district md on um.district_id = md.id
			left join order_master o on um.user_id = o.driver_id and o.order_status_id in ($order_status_id_cond) $sql_sub
			WHERE um.status in ('Active','Inactive')  and user_type='DRI'
			GROUP BY um.user_id
			ORDER BY total_order DESC";
                $query = $this->db->query($sSql);

                $data['results'] = $query->result_array();
                $data['date_range'] = $date_range;
            } else {
                $error = "Please select date range";
            }

        } else {

            $data['results'] = [];
        }

        $data['tittle'] = "Driver " . $date_range;
        $fun_name = $this->ctrl_name . "/driver";
        $data['other_para'] = "";
		$data['error'] = $error;
        $data['fun_name'] = $fun_name . "?" . $data['other_para'];
        $this->load->view('report_driver_list', $data);
        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');
    }
    public function carryboy()
    {
        $data['msg'] = '';
        $error = '';
        $data['l_s_act'] = 5;
        $data['title'] = 'Report';
        $data['sub_heading'] = 'carryboy';
        $data['controller'] = $this->ctrl_name;

        $sql_sub = " and 1=1 ";
        $sql_sub1 = "  ";
        $date_range = "  ";
        if (isset($_POST['mode']) && $_POST['mode'] == "condtion") {
            $results = [];
            $order_status_id_cond = "2,3,4";
            $date_range = (isset($_POST['date_range'])) ? filter_var($_POST['date_range'], FILTER_SANITIZE_STRING) : '';

            if ($date_range != "") {
                $date_range_exp = explode(" - ", $date_range);
                //    print_r($date_range_exp);
                $date_range_exp[0] = $this->common->getDateFormat(trim($date_range_exp[0]), "Y-m-d");
                $date_range_exp[1] = $this->common->getDateFormat(trim($date_range_exp[1]), "Y-m-d");
                $sql_sub = " and  (DATE_FORMAT(om.date_added,'%Y-%m-%d')   BETWEEN '" . $date_range_exp[0] . "' AND '" . $date_range_exp[1] . "') ";
                $sql_sub1 = " and  (DATE_FORMAT(cdl.daily_date,'%Y-%m-%d')   BETWEEN '" . $date_range_exp[0] . "' AND '" . $date_range_exp[1] . "')";
				$sql_sub2 = " and  (DATE_FORMAT(om3.date_added,'%Y-%m-%d')   BETWEEN '" . $date_range_exp[0] . "' AND '" . $date_range_exp[1] . "') ";
                /*     left join order_product op on p.product_id = op.product_id
                and op.order_id in (
                select
                o.order_id
                from
                order_master o
                where     o.order_status_id in ($order_status_id_cond) and
                (
                $sql_sub
                )
                ) */
                // inner join user_master_front um on o.customer_id = um.user_id
                $sSql = "
			select um1.*,cdl.driver_id ,cdl.carryboy_id from `user_master_front` um1
			left join  carryboy_dailylogs cdl on um1.user_id = cdl.carryboy_id  $sql_sub1 and   cdl.driver_id in (
			select driver_id from order_master om where om.driver_id!=0 and  om.order_status_id in (2,3,4) $sql_sub )
			WHERE   um1.user_type='CMAN'
			GROUP BY um1.user_id
			 ";
                $query = $this->db->query($sSql);
                $results = $query->result_array();

                $results_temp = [];
                foreach ($results as $key => $result) {

                    $result['driver_id'] = $result['driver_id'] * 1;

                    $sql = " select um3.first_name, um3.last_name,  count(order_id) as order_count from user_master_front um3,  order_master om3 where um3.user_id = om3.driver_id and om3.driver_id!=0 and om3.driver_id='" . $result['driver_id'] . "' and om3.order_status_id in (2,3,4)  " . $sql_sub2;
                    $query = $this->db->query($sql);
                    $order_count = $query->row_array();
                    $result['dri_name'] = $order_count['first_name'] . " " . $order_count['last_name'];
                    $result['total_order'] = $order_count['order_count'];
                    $results_temp[] = $result;
                }
                $results = $results_temp;
                $data['date_range'] = $date_range;

            } else {
                $error = "Please select date range";
            }

        } else {
            $results = [];
            $data['results'] = [];
        }
        //print_r($results);
        $data['results'] = $results;
        $data['tittle'] = "carryboy " . $date_range;
        $fun_name = $this->ctrl_name . "/carryboy";
        $data['other_para'] = "";
        $data['error'] = $error;
        $data['fun_name'] = $fun_name . "?" . $data['other_para'];
        $this->load->view('report_carryboy_list', $data);
        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');
    }
    public function driverwages()
    {
        $data['msg'] = '';
        $error = '';
        $data['l_s_act'] = 6;
        $data['title'] = 'Report';
        $data['sub_heading'] = 'Driver Wages';
        $data['controller'] = $this->ctrl_name;

        $sql_sub = "";
        $date_range = "";
        $date_range = "";
         $sSql = "SELECT um.user_id,
        um.first_name,
        um.last_name,
        um.profile_pic
        
        , SUM(COALESCE(CASE WHEN transaction_type = 'CREDIT' THEN amount END,0)) total_wages
        , SUM(COALESCE(CASE WHEN transaction_type = 'DEBIT' THEN amount END,0)) total_wages_paid
        , SUM(COALESCE(CASE WHEN transaction_type = 'CREDIT' THEN amount END,0)) 
        + SUM(COALESCE(CASE WHEN transaction_type = 'DEBIT' THEN amount END,0)) balance_wages 

        FROM `user_master_front` um
        left join commission_wallet cwc on um.user_id = cwc.user_id   and    cwc.status_flag='1' 
        
        WHERE um.status in ('Active','Inactive')  and um.user_type='DRI'
        GROUP BY um.user_id ";
        $query = $this->db->query($sSql);
        $results = $query->result_array();
        $data['date_range'] = $date_range;

        $data['results'] = $results;
        $data['tittle'] = "Driver " . $date_range;
        $fun_name = $this->ctrl_name . "/driverwages";
        $data['other_para'] = "";
		$data['error'] = $error;
        $data['fun_name'] = $fun_name . "?" . $data['other_para'];
        $this->load->view('report_driverwages_list', $data);
        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');
    }
    public function carryboywages()
    {
        $data['msg'] = '';
        $error = '';
        $data['l_s_act'] = 7;
        $data['title'] = 'Report';
        $data['sub_heading'] = 'Driver Wages';
        $data['controller'] = $this->ctrl_name;

        $sql_sub = "";
        $date_range = "";
         
        $date_range = "";
          $sSql = "SELECT um.user_id,
        um.first_name,
        um.last_name,
        um.profile_pic 
        , SUM(COALESCE(CASE WHEN transaction_type = 'CREDIT' THEN amount END,0)) total_wages
        , SUM(COALESCE(CASE WHEN transaction_type = 'DEBIT' THEN amount END,0)) total_wages_paid
        , SUM(COALESCE(CASE WHEN transaction_type = 'CREDIT' THEN amount END,0)) 
        + SUM(COALESCE(CASE WHEN transaction_type = 'DEBIT' THEN amount END,0)) balance_wages 

        FROM `user_master_front` um
        left join commission_wallet cwc on um.user_id = cwc.user_id  and cwc.status_flag='1' 
       
        WHERE um.status in ('Active','Inactive')  and um.user_type='CMAN'
        GROUP BY um.user_id ";

        $query = $this->db->query($sSql);

        $results = $query->result_array();

        $data['date_range'] = $date_range;


        $data['results'] = $results;
        $data['tittle'] = "Driver " . $date_range;
        $fun_name = $this->ctrl_name . "/carryboywages";
        $data['other_para'] = "";
		$data['error'] = $error;
        $data['fun_name'] = $fun_name . "?" . $data['other_para'];
        $this->load->view('report_driverwages_list', $data);
        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');
    }
    public function wages_history($uuid=0)
    {
        $data['msg'] = '';
        $error = '';
        $data['l_s_act'] = 7;
        $data['title'] = 'Report';
        $data['id'] = $uuid;
        $data['sub_heading'] = 'Driver Wages';
        $data['controller'] = $this->ctrl_name;

        $sql_sub = "";
        $date_range = "";
        if (isset($_POST['mode']) && $_POST['mode'] == "btnPayment") {
            $user_id = (isset($_POST['user_id'])) ? $this->common->mysql_safe_string($_POST['user_id']) : '0';
            $amount = (isset($_POST['amount'])) ? $this->common->mysql_safe_string($_POST['amount']) : '0';
            $date_added = (isset($_POST['date_added'])) ? $this->common->mysql_safe_string($_POST['date_added']) : date("Y-m-d");;
            $description = (isset($_POST['description'])) ? $this->common->mysql_safe_string($_POST['description']) : '';
           
            $amount = -1 * abs($amount); 
            $dri_bonus_add['user_id'] = $user_id;
            $dri_bonus_add['order_id'] = 0;
            $dri_bonus_add['description'] = $description;
            $dri_bonus_add['amount'] = $amount;
            $dri_bonus_add['date_added'] = $date_added;
            $dri_bonus_add['transaction_type'] = 'DEBIT';
            $dri_bonus_add['status_flag'] = '1';
            $this->common->insertRecord('commission_wallet', $dri_bonus_add);
            $this->session->set_flashdata('success', 'Payment status updated succssfully!');
            redirect("reports/wages_history/" . $uuid);
            die();
        }  

        $sSql = "SELECT um.*,mp.name as state_name, mp.name_en as state_name_en, md.name as district_name , md.name_en as district_name_en  
        FROM `user_master_front` um
        left join master_province mp on um.state_id = mp.id
        left join master_district md on um.district_id = md.id
        WHERE um.status in ('Active','Inactive')  and um.user_id='".$uuid."'     ";
       $query = $this->db->query($sSql);
       $data['user_info'] = $user_info = $query->row_array();
     
        $data['user_info'] = $user_info;
        if(sizeof($user_info)<=0){
            redirect("reports/driverwages");
            die();
        }
        if($user_info['user_type']=="DRI"){
            $data['tittle'] = "Driver ";
            $data['l_s_act'] = 6;
        } else {
            $data['tittle'] = "Carryman ";
            $data['l_s_act'] = 7;
        }
        
        $date_range = "";
        $sSql = "SELECT cwc.customer_transaction_id,  cwc.order_id, cwc.description,  cwc.amount   , cwc.date_added , om.invoice_no ,om.oorder_uid
        FROM `commission_wallet` cwc 
        inner join order_master om on cwc.order_id = om.order_id and order_status_id=4  
        WHERE cwc.transaction_type='CREDIT' and  cwc.status_flag='1'  and status_flag='1'   and cwc.user_id='".$uuid."' order by cwc.customer_transaction_id desc";

        $query = $this->db->query($sSql);
        $results_credit = $query->result_array();
        $data['results_credit'] = $results_credit;


        $sSql = "SELECT cwc.customer_transaction_id,   cwc.description,  cwc.amount   , cwc.date_added  
        FROM `commission_wallet` cwc  WHERE cwc.transaction_type='DEBIT'  and cwc.status_flag='1'   and cwc.user_id='".$uuid."'  order by cwc.customer_transaction_id desc";

        $query = $this->db->query($sSql);
        $results_credit = $query->result_array();
        $data['results_debit'] = $results_credit;

        $fun_name = $this->ctrl_name . "/wages_history";
        $data['other_para'] = "";
		$data['error'] = $error;
        $data['form_action'] = $fun_name ."/".$uuid;
        $data['fun_name'] = $fun_name . "?" . $data['other_para'];
        $this->load->view('report_wages_history_list', $data);
        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');
    }
    public function deviceid()
    {
        $data['msg'] = '';
        $error = '';
        $data['l_s_act'] = 6;
        $data['title'] = 'Report';
        $data['sub_heading'] = 'Device ids';
        $data['controller'] = $this->ctrl_name;
        $sSql  = "select first_name , last_name , uuid, email, mobile , user_type from user_master_front where  user_type in ('CUST','DRI') and  uuid!='' and uuid is NOT NULL order by user_type ";
        $query = $this->db->query($sSql);
        $results = $query->result_array();
        $data['results'] = $results;
        $this->load->view('report_deviceid', $data);
        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');
    }
}
