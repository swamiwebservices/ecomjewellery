<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Orders extends CI_Controller
{
    public $db;
    public $ctrl_name = 'orders';
    public $tbl_name = 'order_master';
    public $tbl_name_one = 'mst_user_type';
    public $pg_title = 'Orders';
    public $m_act = 6;

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
        $this->new_orders();
    }

    public function new_orders()
    {
        $data['msg'] = '';
        $error = '';
        $data['l_s_act'] = 1;
        $data['title'] = 'Order';
        $data['sub_heading'] = 'New Orders';
        $data['controller'] = $this->ctrl_name;

        $data['start'] = 0;
        $data['maxm'] = $maxm = 100;

        if (isset($_GET['page']) && $_GET['page'] != '') {
            $page = filter_var($_GET['page'], FILTER_SANITIZE_STRING);

            $data['page'] = $page;

        } //isset( $_GET['page'] ) && $_GET['page'] != ''
        else {
            $page = 0;
            $data['page'] = 0;

        }
        $start_temp = (($page == 0) ? 0 : $page - 1);
        $start = $start_temp * $maxm;

        if ($start < 0) {
            $start = 0;
        }

        $data['start'] = $page;

        $data['maxm'] = $maxm;
        // $limit_qry = " LIMIT ".$start.",".$maxm;
        $sql = "";
        if (isset($_GET['getdate']) && $_GET['getdate'] != '') {
            $getdate = filter_var($_GET['getdate'], FILTER_SANITIZE_STRING);
            $sql .= "    and o.date_added like '" . $getdate . "%' ";
        }

        if (isset($_GET['mod']) && $_GET['mod'] != '') {
            $mod = filter_var($_GET['mod'], FILTER_SANITIZE_STRING);
            $sql .= "    and o.payment_method like '" . $mod . "%' ";
        }
        $data['oderlist'] = $this->ecommercemodal->getOderlist_custom(1, $start, $maxm, 'rows', $sql);
        $data['num_row'] = $this->ecommercemodal->getOderlist_custom(1, 0, 0, 'numrows', $sql);

        $fun_name = $this->ctrl_name . "/new_orders";
        $data['other_para'] = "";

        $data['fun_name'] = $fun_name . "?" . $data['other_para'];

        $this->load->view('orders_list', $data);
        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');
    }

    public function confirmed_orders()
    {
        $data['msg'] = '';
        $error = '';
        $data['l_s_act'] = 2;
        $data['title'] = 'Order';
        $data['sub_heading'] = 'Accepted Orders';
        $data['controller'] = $this->ctrl_name;

        $data['start'] = 0;
        $data['maxm'] = $maxm = 100;

        if (isset($_GET['page']) && $_GET['page'] != '') {
            $page = filter_var($_GET['page'], FILTER_SANITIZE_STRING);

            $data['page'] = $page;

        } //isset( $_GET['page'] ) && $_GET['page'] != ''
        else {
            $page = 0;
            $data['page'] = 0;

        }
        $start_temp = (($page == 0) ? 0 : $page - 1);
        $start = $start_temp * $maxm;

        if ($start < 0) {
            $start = 0;
        }

        $data['start'] = $page;

        $data['maxm'] = $maxm;
        // $limit_qry = " LIMIT ".$start.",".$maxm;
        $sql = "";
        if (isset($_GET['getdate']) && $_GET['getdate'] != '') {
            $getdate = filter_var($_GET['getdate'], FILTER_SANITIZE_STRING);
            $sql .= "    and o.date_added like '" . $getdate . "%' ";
        }

        if (isset($_GET['mod']) && $_GET['mod'] != '') {
            $mod = filter_var($_GET['mod'], FILTER_SANITIZE_STRING);
            $sql .= "    and o.payment_method like '" . $mod . "%' ";
        }
        $data['oderlist'] = $this->ecommercemodal->getOderlist_custom('2,3', $start, $maxm, 'rows', $sql);
        $data['num_row'] = $this->ecommercemodal->getOderlist_custom('2,3', 0, 0, 'numrows', $sql);

        $fun_name = $this->ctrl_name . "/confirmed_orders";
        $data['other_para'] = "";

        $data['fun_name'] = $fun_name . "?" . $data['other_para'];

        $this->load->view('orders_list', $data);
        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');
    }

    public function delivered()
    {
        $data['msg'] = '';
        $error = '';
        $data['l_s_act'] = 3;
        $data['title'] = 'Order';
        $data['sub_heading'] = 'Delivered Orders';
        $data['controller'] = $this->ctrl_name;

        $data['start'] = 0;
        $data['maxm'] = $maxm = 100;

        if (isset($_GET['page']) && $_GET['page'] != '') {
            $page = filter_var($_GET['page'], FILTER_SANITIZE_STRING);

            $data['page'] = $page;

        } //isset( $_GET['page'] ) && $_GET['page'] != ''
        else {
            $page = 0;
            $data['page'] = 0;

        }
        $start_temp = (($page == 0) ? 0 : $page - 1);
        $start = $start_temp * $maxm;

        if ($start < 0) {
            $start = 0;
        }

        $data['start'] = $page;

        $data['maxm'] = $maxm;
        // $limit_qry = " LIMIT ".$start.",".$maxm;
        $sql = "";
        if (isset($_GET['getdate']) && $_GET['getdate'] != '') {
            $getdate = filter_var($_GET['getdate'], FILTER_SANITIZE_STRING);
            $sql .= "    and o.date_added like '" . $getdate . "%' ";
        }

        if (isset($_GET['mod']) && $_GET['mod'] != '') {
            $mod = filter_var($_GET['mod'], FILTER_SANITIZE_STRING);
            $sql .= "    and o.payment_method like '" . $mod . "%' ";
        }
        $data['oderlist'] = $this->ecommercemodal->getOderlist_custom('4', $start, $maxm, 'rows', $sql);
        $data['num_row'] = $this->ecommercemodal->getOderlist_custom('4', 0, 0, 'numrows', $sql);

        $fun_name = $this->ctrl_name . "/delivered";
        $data['other_para'] = "";

        $data['fun_name'] = $fun_name . "?" . $data['other_para'];

        $this->load->view('orders_list', $data);
        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');
    }

    public function allorders()
    {
        $data['msg'] = '';
        $error = '';
        $data['l_s_act'] = 6;
        $data['title'] = 'Order';
        $data['sub_heading'] = 'Accepted Orders';
        $data['controller'] = $this->ctrl_name;

        $data['start'] = 0;
        $data['maxm'] = $maxm = 100;

        if (isset($_GET['page']) && $_GET['page'] != '') {
            $page = filter_var($_GET['page'], FILTER_SANITIZE_STRING);

            $data['page'] = $page;

        } //isset( $_GET['page'] ) && $_GET['page'] != ''
        else {
            $page = 0;
            $data['page'] = 0;

        }
        $start_temp = (($page == 0) ? 0 : $page - 1);
        $start = $start_temp * $maxm;

        if ($start < 0) {
            $start = 0;
        }

        $data['start'] = $page;

        $data['maxm'] = $maxm;
        // $limit_qry = " LIMIT ".$start.",".$maxm;
        $sql = "";
        if (isset($_GET['getdate']) && $_GET['getdate'] != '') {
            $getdate = filter_var($_GET['getdate'], FILTER_SANITIZE_STRING);
            $sql .= "    and o.date_added like '" . $getdate . "%' ";
        }

        if (isset($_GET['mod']) && $_GET['mod'] != '') {
            $mod = filter_var($_GET['mod'], FILTER_SANITIZE_STRING);
            $sql .= "    and o.payment_method like '" . $mod . "%' ";
        }
        $data['oderlist'] = $this->ecommercemodal->getOderlist_custom('1,2,3,4', $start, $maxm, 'rows', $sql);
        $data['num_row'] = $this->ecommercemodal->getOderlist_custom('1,2,3,4', 0, 0, 'numrows', $sql);

        $fun_name = $this->ctrl_name . "/allorders";
        $data['other_para'] = "";

        $data['fun_name'] = $fun_name . "?" . $data['other_para'];

        $this->load->view('orders_list', $data);
        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');
    }

    public function orderdetail($order_uuid = '')
    {
        date_default_timezone_set('Asia/Bangkok');
        $current_date_time = date("Y-m-d h:i:s");
        $session_user_data = $this->session->userdata('admin_user_data');

        $data['title'] = 'Order';

        $data['sub_heading'] = 'Order Information';

        $data['l_s_act'] = $l_s_act = (isset($_GET['l_s_act'])) ? filter_var($_GET['l_s_act'], FILTER_SANITIZE_STRING) : '1';
        $order_uuid = filter_var($order_uuid, FILTER_SANITIZE_STRING);

        $order_info = $this->ecommercemodal->getOrder($order_uuid);

        $data['page'] = $page = (isset($_GET['page'])) ? filter_var($_GET['page'], FILTER_SANITIZE_STRING) : '';

        if (!sizeof($order_info)) {
            $newdata = array('warning' => 'Please select order');
            $this->session->set_userdata($newdata);
            redirect('orders');
        }

        $order_status_id = $order_info['order_status_id'];
        if (isset($_POST['mode_pop']) && $_POST['mode_pop'] == 'frmUpdateData') {
            $credit_pay_status = (isset($_POST['credit_pay_status'])) ? $this->common->mysql_safe_string($_POST['credit_pay_status']) : 'Unpaid';
            $credit_pay_status = (isset($_POST['credit_pay_status'])) ? $this->common->mysql_safe_string($_POST['credit_pay_status']) : 'Unpaid';
            if ($credit_pay_status == "Paid") {
                $credit_paid_date = date("Y-m-d");
            } else {
                $credit_paid_date = null;
            }
            $this->db->query("UPDATE `order_master` SET credit_pay_status = '" . $credit_pay_status . "',  credit_paid_date = '" . $credit_paid_date . "'   WHERE order_id = '" . (int) $order_info['order_id'] . "'");

            $this->session->set_flashdata('success', 'Order updatated succssfully!');
            redirect("orders/orderdetail/" . $order_uuid . "?page=" . $page);

        }
        if (isset($_POST['mode']) && $_POST['mode'] == 'edit_content_updatestatus') {
            $order_status_id = $order_status_id = (isset($_POST['order_status_id'])) ? $this->common->mysql_safe_detail($_POST['order_status_id']) : '';

            if (isset($_POST['notify'])) {

                $notify = $notify = (isset($_POST['notify'])) ? $this->common->mysql_safe_detail($_POST['notify']) : '';
            } else {
                $notify = "0";
            }

            $comment = $comment = (isset($_POST['comment'])) ? $this->common->mysql_safe_detail($_POST['comment']) : '';

            if($order_status_id == 4){

                 //adding commsion to commission_wallet table
                
                 $productsList_products = $this->ecommercemodal->getOrderProducts($order_info['order_id']);
                 if (sizeof($productsList_products) > 0) {
                     $dri_bonus= 0 ;
                     $carryman_bonus = 0 ;
                     $product_ids = [] ;
                     foreach ($productsList_products as $product) {
                         $dri_bonus = $dri_bonus + ($product['driver_bonus'] * $product['quantity']);  
                         $carryman_bonus = $carryman_bonus + ($product['carry_boy_bonus'] * $product['quantity']);  
                         $product_ids[] = array(
                             'product_id' => $product['product_id'],
                             'name' => $product['name_en'],
                             'driver_bonus' => $product['driver_bonus'],
                             'carry_boy_bonus' => $product['carry_boy_bonus'],
                             'quantity' => $product['quantity']
                         );
                        
                     }
                     $dri_bonus_add['user_id'] = $order_info['driver_id'];
                     $dri_bonus_add['order_id'] = $order_info['order_id'];
                     $dri_bonus_add['description'] = json_encode($product_ids);
                     $dri_bonus_add['amount'] = $dri_bonus;
                     $dri_bonus_add['date_added'] = $current_date_time;
                     $dri_bonus_add['transaction_type'] = 'CREDIT';
                     $dri_bonus_add['status_flag'] = '';
                     $this->common->insertRecord('commission_wallet', $dri_bonus_add);
                     $daily_date = $this->common->getDateFormat($order_info['date_added'],'Y-m-d');
                     $carryBoy_list = $this->ecommercemodal->getCarryBoyList($order_info['driver_id'], $daily_date);
                     if(sizeof($carryBoy_list) > 0 ){
                        $perHeadCommsion = $carryman_bonus / sizeof($carryBoy_list);
                        foreach ($carryBoy_list as $keyC => $carryboys) {
                          $carry_bonus_add['user_id'] = $carryboys['carryboy_id'];
                          $carry_bonus_add['order_id'] = $order_info['order_id'];
                          $carry_bonus_add['description'] = json_encode($product_ids);
                          $carry_bonus_add['amount'] = $perHeadCommsion;
                          $carry_bonus_add['date_added'] = $order_info['order_id'];
                          $carry_bonus_add['transaction_type'] = 'CREDIT';
                          $carry_bonus_add['status_flag'] = '';
                          $this->common->insertRecord('commission_wallet', $carry_bonus_add);
                        }
                     }
                     
                 }
                 //end of commsion code  
            }

            $this->db->query("UPDATE `order_master` SET order_status_id = '" . (int) $order_status_id . "', date_modified   ='" . $current_date_time . "'  WHERE order_id = '" . (int) $order_info['order_id'] . "'");

            $this->db->query("INSERT INTO order_history SET order_id = '" . (int) $order_info['order_id'] . "',  order_status_id = '" . (int) $order_status_id . "', notify = '" . (int) $notify . "', comment = '" . $comment . "', date_added = '" . $current_date_time . "' ");

            if ($notify == "1") {

               

            }

            $this->session->set_flashdata('success', 'Order updatated succssfully!');
            redirect("orders/orderdetail/" . $order_uuid . "?page=" . $page);
        }

        if (isset($_POST['mode']) && $_POST['mode'] == 'assignDriver') {
            $error = '';
            $driver_id = (isset($_POST['driver_id'])) ? $this->common->mysql_safe_string($_POST['driver_id']) : '';

            if ($driver_id == "" || $driver_id == 0) {
                $error = "Please select driver";
            }
            if ($error == '') {
                $where_edt_assigned = " order_id='" . $order_info['order_id'] . "'";
                $order_driver_assigned_temp['status'] = 0;
                $this->common->updateRecord('order_driver_assigned', $order_driver_assigned_temp, $where_edt_assigned);

                $sql = "SELECT '' FROM `order_driver_assigned`  od where   od.order_id='" . $order_info['order_id'] . "' and driver_user_id='" . $driver_id . "'";
                $queryDriverchk = $this->db->query($sql);
                if ($queryDriverchk->num_rows() <= 0) {
                    $add_in['order_id'] = $order_info['order_id'];
                    $add_in['driver_user_id'] = $driver_id;
                    $add_in['status'] = 1;
                    $add_in['added_date'] = date("Y-m-d h:i:s");
                    $this->db->insert('order_driver_assigned', $add_in);
                } else {
                    $where_edt_assigned = " order_id='" . $order_info['order_id'] . "' and   driver_user_id='" . $driver_id . "'";
                    $order_driver_assigned_temp['status'] = 1;
                    $this->common->updateRecord('order_driver_assigned', $order_driver_assigned_temp, $where_edt_assigned);
                }
                $today = date("Y-m-d h:i:s");
                $order_delivery_date_temp1 = $this->common->getDateFormat($today, "Y-m-d H:i");

                $date = new DateTime($order_delivery_date_temp1);
                $date->add(new DateInterval('PT' . '1H'));
                $order_delivery_date_expected = $date->format('Y-m-d h:i:s');
                $order_master_update['order_status_id'] = 2;
                $order_master_update['driver_id'] = $driver_id;
                
                $order_master_update['order_delivery_date_expected'] = $order_delivery_date_expected;
                //
                $where_edt = " order_id='" . $order_info['order_id'] . "'";
              
                $this->common->updateRecord('order_master', $order_master_update, $where_edt);
             
                $arra['user_id'] = $order_info['customer_id'];
                $arra['order_id'] = $order_info['order_id'];
                $arra['driver_id'] = $driver_id;
                $arra['order_status_id'] = 2;
                $arra['invoice_no'] = $order_info['invoice_no'];
                $arra['order_date_added'] = $order_info['date_added'];
                $arra['oorder_uid'] = $order_info['oorder_uid'];

                $customer_info_temp = $this->ecommercemodal->getCustomerInfoById_inorder_confirm_temponly($order_info['customer_id']);
                $this->ecommercemodal->sendNotificationToCustomer($arra,$customer_info_temp['uuid']);
                $this->ecommercemodal->setFirebaserealtimedata("update",$arra,'Order Accepted by driver');

                //mail code here
                //end of mail code here
                //notification code here
                //end notification of code here
                $this->session->set_flashdata('success', 'Driver assigned sucessfully!');
                redirect("orders/orderdetail/" . $order_uuid . "?page=" . $page);
            }

        }
        //print_r($order_info);
        $data['controller'] = $this->ctrl_name;

        $data['order_info'] = $order_info;

        //$data['order_id'] = $order_info['order_id'];

        $products = $this->ecommercemodal->getOrderProducts($order_info['order_id']);
        //print_r($products);
        foreach ($products as $product) {

            $data['products'][] = array(

                'order_product_id' => $product['order_product_id'],
                'product_id' => $product['product_id'],
                'name' => $product['name'],
                'model' => '',
                'main_image' => $product['main_image'],
                'quantity' => $product['quantity'],
                'order_status_name' => isset($product['order_status_name']) ? $product['order_status_name'] : '',
                'price' => $this->currencymodal->format($product['price'], currency_code, 1),
                'total' => $this->currencymodal->format($product['total'], currency_code, 1),
                'href' => '',
            );
        }

        $totals = $this->ecommercemodal->getOrderTotals($order_info['order_id']);
        foreach ($totals as $total) {
            $data['totals'][] = array(
                'title' => $total['title'],
                'text' => $this->currencymodal->format($total['value'], currency_code, 1),
            );
        }

        // Payment Address
        $format = '{firstname} {lastname}' . "\n" . '{company}' . "\n" . '{address_1}' . "\n" . '{postcode}' . "\n" . '{state_name}' . "\n" . '{district_name}' . "\n" . '{mobile}';
        $find = array(
            '{firstname}',
            '{lastname}',
            '{company}',
            '{address_1}',
            '{postcode}',
            '{state_name}',
            '{district_name}',
            '{mobile}',
        );

        $replace = array(
            'firstname' => "<strong>" . ucfirst($order_info['payment_firstname']),
            'lastname' => ucfirst($order_info['payment_lastname']) . "</strong>",
            'company' => ucfirst($order_info['payment_company']),
            'address_1' => ucfirst($order_info['payment_address_1']),
            'postcode' => $order_info['payment_postcode'],
            'state_name' => ucfirst($order_info['payment_state_name']),
            'district_name' => ucfirst($order_info['payment_district_name']),
            'mobile' => $order_info['telephone'],
        );

        $data['payment_address'] = str_replace(array("\r\n", "\r", "\n"), '<br />', preg_replace(array("/\s\s+/", "/\r\r+/", "/\n\n+/"), '<br />', trim(str_replace($find, $replace, $format))));

        // Shipping Address
        $format = '{firstname} {lastname}' . "\n" . '{company}' . "\n" . '{address_1}' . "\n" . '{postcode}' . "\n" . '{state_name}' . "\n" . '{district_name}' . "\n" . '{mobile}';
        $find = array(
            '{firstname}',
            '{lastname}',
            '{company}',
            '{address_1}',
            '{postcode}',
            '{state_name}',
            '{district_name}',
            '{mobile}',
        );

        $replace = array(
            'firstname' => "<strong>" . ucfirst($order_info['shipping_firstname']),
            'lastname' => ucfirst($order_info['shipping_lastname']) . "</strong>",
            'company' => ucfirst($order_info['shipping_company']),
            'address_1' => ucfirst($order_info['shipping_address_1']),
            'postcode' => $order_info['shipping_postcode'],
            'state_name' => ucfirst($order_info['shipping_state_name']),
            'district_name' => ucfirst($order_info['shipping_district_name']),
            'mobile' => '',
        );

        $data['shipping_address'] = str_replace(array("\r\n", "\r", "\n"), '<br />', preg_replace(array("/\s\s+/", "/\r\r+/", "/\n\n+/"), '<br />', trim(str_replace($find, $replace, $format))));

        /*  $order_status_info = $this->ecommercemodal->getOrderStatus($order_info['order_status_id']);

        if ($order_status_info) {
        $data['order_status'] = $order_status_info['name'];
        } else {
        $data['order_status'] = '';
        } */
        $data['order_uuid'] = $order_uuid;
        $data['order_statuses'] = $this->ecommercemodal->getOrderStatusesForOrder();
        $data['driver_list'] = $this->ecommercemodal->get_ddriver_list();

        $data['histories'] = $this->ecommercemodal->getOrderHistories($order_info['order_id']);
        $data['driver_order_recieved_list'] = $this->ecommercemodal->driver_order_recieved_list($order_info['order_id']);

        $fun_name = "orderdetail/" . $order_uuid . "?page=" . $page;
        $data['fun_name'] = $fun_name;
        $data['controller'] = $this->ctrl_name;

        if ($order_status_id == 1) {
            $data['fun_name_back'] = 'new_orders';
        }
        if ($order_status_id == 2) {
            $data['fun_name_back'] = 'confirmed_orders';
        }
        if ($order_status_id == 3) {
            $data['fun_name_back'] = 'confirmed_orders';
        }
        if ($order_status_id == 4 && $l_s_act == 2) {
            $data['fun_name_back'] = 'delivered';
        }
        if ($order_status_id == 4 && $l_s_act == 4) {
            $data['fun_name_back'] = 'reviewpending';
        }
        if ($order_status_id == 4 && $l_s_act == 5) {
            $data['fun_name_back'] = 'reviewlist';
        }
        $this->load->view('orders_orderdetail', $data);

    }
    //end
    public function reviewpending()
    {
        $data['msg'] = '';
        $error = '';
        $data['l_s_act'] = 4;
        $data['title'] = 'Order';
        $data['sub_heading'] = 'Review Pending Orders';
        $data['controller'] = $this->ctrl_name;

        $data['start'] = 0;
        $data['maxm'] = $maxm = 100;

        if (isset($_GET['page']) && $_GET['page'] != '') {
            $page = filter_var($_GET['page'], FILTER_SANITIZE_STRING);

            $data['page'] = $page;

        } //isset( $_GET['page'] ) && $_GET['page'] != ''
        else {
            $page = 0;
            $data['page'] = 0;

        }
        $start_temp = (($page == 0) ? 0 : $page - 1);
        $start = $start_temp * $maxm;

        if ($start < 0) {
            $start = 0;
        }

        $data['start'] = $page;

        $data['maxm'] = $maxm;
        // $limit_qry = " LIMIT ".$start.",".$maxm;

        $data['oderlist'] = $this->ecommercemodal->getOderlistReviewPending($start, $maxm, 'rows');
        $data['num_row'] = $this->ecommercemodal->getOderlistReviewPending(0, 0, 'numrows');

        $fun_name = $this->ctrl_name . "/reviewpending";
        $data['other_para'] = "";

        $data['fun_name'] = $fun_name . "?" . $data['other_para'];

        $this->load->view('orders_list', $data);
        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');
    }
    public function reviewlist()
    {
        $data['msg'] = '';
        $error = '';
        $data['l_s_act'] = 5;
        $data['title'] = 'Order';
        $data['sub_heading'] = 'Review Pending Orders';
        $data['controller'] = $this->ctrl_name;

        $data['start'] = 0;
        $data['maxm'] = $maxm = 100;

        if (isset($_GET['page']) && $_GET['page'] != '') {
            $page = filter_var($_GET['page'], FILTER_SANITIZE_STRING);

            $data['page'] = $page;

        } //isset( $_GET['page'] ) && $_GET['page'] != ''
        else {
            $page = 0;
            $data['page'] = 0;

        }
        $start_temp = (($page == 0) ? 0 : $page - 1);
        $start = $start_temp * $maxm;

        if ($start < 0) {
            $start = 0;
        }

        $data['start'] = $page;

        $data['maxm'] = $maxm;
        // $limit_qry = " LIMIT ".$start.",".$maxm;

        $data['oderlist'] = $this->ecommercemodal->getOderlistReviewDone($start, $maxm, 'rows');
        $data['num_row'] = $this->ecommercemodal->getOderlistReviewDone(0, 0, 'numrows');

        $fun_name = $this->ctrl_name . "/reviewlist";
        $data['other_para'] = "";

        $data['fun_name'] = $fun_name . "?" . $data['other_para'];

        $this->load->view('orders_list_reviewlist', $data);
        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');
    }
}
