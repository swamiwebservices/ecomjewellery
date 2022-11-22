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
        $data['activaation_id'] = 22;
        $data['sub_activaation_id'] = '22_1';

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
        $data['activaation_id'] = 22;
        $data['sub_activaation_id'] = '22_2';

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
        $data['activaation_id'] = 22;
        $data['sub_activaation_id'] = '22_3';

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
        $data['activaation_id'] = 22;
        $data['sub_activaation_id'] = '22_6';

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
       
        $current_date_time = date("Y-m-d h:i:s");
        $session_user_data = $this->session->userdata('admin_user_data');

        $data['title'] = 'Order';
        $data['back_link'] = $this->ctrl_name;
        $data['sub_heading'] = 'Order Information';
        $data['activaation_id'] = 21;
        $data['sub_activaation_id'] = $l_s_act = (isset($_GET['l_s_act'])) ? filter_var($_GET['l_s_act'], FILTER_SANITIZE_STRING) : '1';

        $order_uuid = filter_var($order_uuid, FILTER_SANITIZE_STRING);

        $order_info = $this->ecommercemodal->getOrder($order_uuid);
        
        $data['page'] = $page = (isset($_GET['page'])) ? filter_var($_GET['page'], FILTER_SANITIZE_STRING) : '';

        if (!sizeof($order_info)) {
            $newdata = array('warning' => 'Please select order');
            $this->session->set_userdata($newdata);
            redirect('orders');
        }

        $order_status_id = $order_info['order_status_id'];
        
        if (isset($_POST['mode']) && $_POST['mode'] == 'edit_content_updatestatus') {
            $order_status_id = $order_status_id = (isset($_POST['order_status_id'])) ? $this->common->mysql_safe_detail($_POST['order_status_id']) : '';

            if (isset($_POST['notify'])) {

                $notify = $notify = (isset($_POST['notify'])) ? $this->common->mysql_safe_detail($_POST['notify']) : '';
            } else {
                $notify = "0";
            }

            $comment = $comment = (isset($_POST['comment'])) ? $this->common->mysql_safe_detail($_POST['comment']) : '';

            

            $this->db->query("UPDATE `m_order` SET order_status_id = '" . (int) $order_status_id . "', date_modified   ='" . $current_date_time . "'  WHERE order_id = '" . (int) $order_info['order_id'] . "'");

            $this->db->query("INSERT INTO order_history SET order_id = '" . (int) $order_info['order_id'] . "',  order_status_id = '" . (int) $order_status_id . "', notify = '" . (int) $notify . "', comment = '" . $comment . "', date_added = '" . $current_date_time . "' ");

            if ($notify == "1") {

            }

            $this->session->set_flashdata('success', 'Order updatated succssfully!');
            redirect("orders/orderdetail/" . $order_uuid . "?page=" . $page);
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
                'model' => $product['item_code'],
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
        $format = '{firstname} {lastname}' . "\n" . '{company}' . "\n" . '{address_1}' . "\n" . '{postcode}' . "\n" . '{state_name}' . "\n" . '{country_name}';
        $find = array(
            '{firstname}',
            '{lastname}',
            '{company}',
            '{address_1}',
            '{postcode}',
            '{state_name}',
            '{country_name}',
           
        );

        $replace = array(
            'firstname' => "<strong>" . ucfirst($order_info['payment_firstname']),
            'lastname' => ucfirst($order_info['payment_lastname']) . "</strong>",
            'company' => ucfirst($order_info['payment_company']),
            'address_1' => ucfirst($order_info['payment_address_1']),
            'postcode' => $order_info['payment_postcode'],
            'state_name' => ucfirst($order_info['payment_zone']),
            'country_name' => ucfirst($order_info['payment_country']),
            
        );

        $data['payment_address'] = str_replace(array("\r\n", "\r", "\n"), '<br />', preg_replace(array("/\s\s+/", "/\r\r+/", "/\n\n+/"), '<br />', trim(str_replace($find, $replace, $format))));

        // Shipping Address
        $format = '{firstname} {lastname}' . "\n" . '{company}' . "\n" . '{address_1}' . "\n" . '{postcode}' . "\n" . '{state_name}' . "\n" . '{country_name}';
        $find = array(
            '{firstname}',
            '{lastname}',
            '{company}',
            '{address_1}',
            '{postcode}',
            '{state_name}',
            '{country_name}'
           
        );

        $replace = array(
            'firstname' => "<strong>" . ucfirst($order_info['shipping_firstname']),
            'lastname' => ucfirst($order_info['shipping_lastname']) . "</strong>",
            'company' => ucfirst($order_info['shipping_company']),
            'address_1' => ucfirst($order_info['shipping_address_1']),
            'postcode' => $order_info['shipping_postcode'],
            'state_name' => ucfirst($order_info['shipping_zone']),
            'country_name' => ucfirst($order_info['shipping_country'])
            
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
        $data['activaation_id'] = 22;
        $data['sub_activaation_id'] = '22_4';

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
        $data['activaation_id'] = 22;
        $data['sub_activaation_id'] = '22_5';

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
