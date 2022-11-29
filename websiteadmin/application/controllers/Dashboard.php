<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
 //   public $db;
    public $title = "Dashboard";
    public $controller = "dashboard";
	public $m_act = 0;
 
 

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
      //  print_r($this->session->all_userdata());


        $data['activaation_id'] = 100;
        $data['sub_activaation_id'] = '100';
        $data['title'] = 'Dashboard';

        $data['maxm'] = $maxm = 50;
        $data['sub_heading'] = 'List';

        $session_user_data = $this->session->userdata('admin_user_data');
        $uid = $session_user_data['user_id'];
        $data['user_id'] = $uid;

		$data['cust_cnt'] = $cust_cnt = $this->common->numRow('	m_customer'," ");

	 	$data['prod_cnt'] = $prod_cnt = $this->common->numRow('product_master'," WHERE status_flag in ('Active','Inactive') ORDER BY product_id");
	//	$data['mobile_cnt'] = $mobile_cnt = $this->common->numRow('master_mobile_phones'," WHERE status in ('Active','Inactive') ORDER BY id");
	//	$data['zone_cnt'] = $zone_cnt = $this->common->numRow('master_zone'," WHERE status in ('Active','Inactive') ORDER BY id");
     //today total cod order
     $today_date = date("Y-m-d");
 

     $sql = "SELECT  sum(total) as today_total_cod_order FROM `m_order` where date_added like '".$today_date."%' and payment_method='COD' ";
     $query = $this->db->query($sql);
     $query_result = $query->row_array();
     $data['today_total_cod_order'] =  $query_result['today_total_cod_order'];
     $sql = "SELECT sum(total) as today_total_credit_order FROM `m_order` where date_added like '".$today_date."%' and payment_method='Credit' ";
     $query = $this->db->query($sql);
     $query_result = $query->row_array();
     $data['today_total_credit_order'] =  $query_result['today_total_credit_order'];
 
     $sql = "SELECT  sum(total) as today_total_revenue FROM `m_order` where date_added like '".$today_date."%' ";
     $query = $this->db->query($sql);
     $query_result = $query->row_array();
     $data['today_total_revenue'] =  $query_result['today_total_revenue'];
     
   
   
    $sql = "SELECT  count('') as today_total_order FROM `m_order` where date_added like '".$today_date."%' ";
    $query = $this->db->query($sql);
    $query_result = $query->row_array();
    $data['today_total_order'] =  $query_result['today_total_order'];

    $sql = "SELECT  count('') as today_total_order_pending FROM `m_order` where order_status_id=1 and  date_added like '".$today_date."%' ";
    $query = $this->db->query($sql);
    $query_result = $query->row_array();
    $data['today_total_order_pending'] =  $query_result['today_total_order_pending'];

    
    $sql = "SELECT  count('') as today_total_order_accepted FROM `m_order` where order_status_id in (2,3) and date_added like '".$today_date."%' ";
    $query = $this->db->query($sql);
    $query_result = $query->row_array();
    $data['today_total_order_accepted'] =  $query_result['today_total_order_accepted'];

    $sql = "SELECT  count('') as today_total_order_completed FROM `m_order` where order_status_id in (4) and date_added like '".$today_date."%' ";
    $query = $this->db->query($sql);
    $query_result = $query->row_array();
    $data['today_total_order_completed'] =  $query_result['today_total_order_completed'];

  
    //end 
    $data['today_dateymd'] = date("Y-m-d");
    $data['today_date'] = date("d-m-Y");

       
       
        $data['monthyear_graph'] = $monthyear_graph = (isset($_POST['monthyear_graph'])) ? $this->common->mysql_safe_string($_POST['monthyear_graph']) : date("m-Y");
        $data['monthyear_pie'] = $monthyear_pie = (isset($_POST['monthyear_pie'])) ? $this->common->mysql_safe_string($_POST['monthyear_pie']) : date("m-Y");
        $data['date_sales_graph'] =  $date_sales_graph =  $this->common->getDateFormat("01-".$monthyear_graph, 'm-Y');
        $data['date_sales_graph_cond'] =  $date_sales_graph_cond =  $this->common->getDateFormat("01-".$monthyear_graph, 'Y-m');
        $data['date_sales_pie_cond'] =  $date_sales_pie_cond =  $this->common->getDateFormat("01-".$monthyear_pie, 'Y-m');

        $currentMonth = (int)  $this->common->getDateFormat("01-".$monthyear_graph, 'm');
        $currentYear =  (int) $this->common->getDateFormat("01-".$monthyear_graph, 'Y');;


        $days_str = [];
        $total_days_inmonth = date('t', mktime(0, 0, 0, (int) $currentMonth, 1, $currentYear));
        for($i=1;$i<=$total_days_inmonth;$i++){
            $data['days_array_final'][$i] = 0;
            $days_str[$i]=$i;
        }
        $data['days_str'] =  implode(",",$days_str);
        $sql = "SELECT date_format(date_added,'%d') as day1, date_format(date_added,'%d-%m-%Y') as daysmonth, sum(total) as total_perday FROM `m_order` where date_added like '".$data['date_sales_graph_cond']."%' GROUP by daysmonth order by day1 desc";
        $query = $this->db->query($sql);
        $query_result = $query->result_array();
        $data['query_result'] =  $query_result;
       
        foreach($query_result as $key => $values ){
             
                $data['days_array_final'][(int)$values['day1']]=$values['total_perday'];
            
        }
       //print_r($data['days_array_final']);
        $data['days_array_final_str'] =  implode(",",$data['days_array_final']);
        //end of sales graph

       //tope 5 product 
       $sql = "SELECT product_id ,`name`, SUM(quantity) as topproduct FROM `order_product` op ,m_order om where op.order_id=om.order_id and om.date_added like '".$data['date_sales_pie_cond']."%' GROUP by product_id order by topproduct desc limit 0,5 ";
       $query = $this->db->query($sql);
       $query_top = $query->result_array();
       $data['topproduct'] =  $query_top;
       //end of top 5 product

        //print_r($query_top);

        $sql = " and    payment_method='Credit' ";
        $data['oderlistinprogress'] =  $this->ecommercemodal->getOderlist_custom('4', 0,100, 'rows',$sql);
        
        $data['oderlistnew'] = $this->ecommercemodal->getOderlist_custom('1', 0,10, 'rows');
       // $data['oderlistinprogress'] = [];//$this->ecommercemodal->getOderlist_custom('2,3', 0,10, 'rows');
        
      
        $data['controller_order'] = "orders";
        $data['l_s_act'] = "1";
        $data['page'] = "1";
         $this->load->view('dashboard', $data);

    }

    public function logout()
    {
        $newdata = array(
            'user_id' => '',
            'first_name' => '',
            'last_name' => '',
            'user_type' => '',
            'username' => '',
            'user_email' => '',
            'logged_in' => false,
        );
        $this->session->unset_userdata('user_data');
        $this->session->sess_destroy();
       // print_r($this->session->all_userdata());
        redirect(base_url());

        // echo 'You are logged out';
    }
    public function registertoken() {
        
        $add_in['tokenid'] = $deviceid = (isset($_POST['deviceid'])) ? $this->common->mysql_safe_string($_POST['deviceid']) : '';
        $arr = array('status' => 0, 'errorMessage' => "Some issues");
        if($deviceid!=""){
            $add_in['date_added'] = date("Y-m-d h:i:s");
            $add_in['status'] = 1;
           $sql = "select * from admin_web_tokenid  where tokenid='".$deviceid."'"; 
           $test= $this->db->query($sql);
           if($test->num_rows() <=0 ){
            $this->db->insert('admin_web_tokenid', $add_in);
           }
            $arr = array('status' => 1, 'errorMessage' => $deviceid . " Registered");
        }
        print_r($this->common->jsonencode($arr));
        exit;
    }
}
