<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Product extends CI_Controller
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
    public $controller = "product";
    public $domain_id = 1;
    public $per_page = 50;
    public $min_price = 0;
    public $max_price = 100000000;
    public $min_price_only = 0;
    public $max_price_only = 100000000;
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

        $data['latestProduct'] = [];

        $product_name = $this->uri->segment('2');
        if ($product_name == "") {
            redirect('home');
            die();
        }
        $params_prd['slug_name'] = $product_name;
        $data['productdetail'] = $productdetail = $this->services->getProductDetails($params_prd);

        if (sizeof($productdetail) <= 0) {
            redirect('home');
            die();
        }

        $params['type'] = "latestProduct";
        $params['limit'] = 10;
        $data['latestProduct'] = $latestProduct = $this->services->getProductList($params);
        // $data['categoryProduct'] = $latestProduct;
        // print_r($categoryProduct);
        $data['product_name'] = $product_name;
        $this->load->view("product-details", $data);

    }
    public function search()
    {
 
        $data['maxm'] = $maxm = 90;

        $fil_search = "";
        $search_qry = "";
        $other_para = "";

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

         
  
      

        $limit_qry = " LIMIT " . $start . "," . $maxm;
 
        $other_para = "&v=" . time();

///////////////

        $search_qry = ' ';
        $search = "";

        if (isset($_REQUEST['search']) && $_REQUEST['search'] != '') {
            $search = filter_var($_REQUEST['search'], FILTER_SANITIZE_STRING);
            $other_para .= "&search=" . $search;
            $data['sell_fil_search'] = $search;
            $search_qry .= " AND (p.name LIKE  '%" . $search . "%'   or p.item_code like '%$search%')";
        }

        $sort = (isset($_GET['sort'])) ? $this->common->mysql_safe_string($_GET['sort']) : 'sort_order';
        $order = (isset($_GET['order'])) ? $this->common->mysql_safe_string($_GET['order']) : 'asc';

        $sort = ($sort == 'price') ? 'sellprice' : $sort;

        $order_by = " order by {$sort} {$order}, name asc";
        // print_r($_REQUEST);

        $data['other_para'] = $other_para;
        $resultdata = array();
        //and quantity > 0
        $sql = "SELECT  p.*   FROM product_master p  	 WHERE p.status_flag='Active'   " . $search_qry . $order_by    . $limit_qry;

        $query = $this->db->query($sql);
        $data['categoryProduct'] = $categoryProduct = $query->result_array();

        //$data['results'] = $cat_date = $this->common->getAllRow( $this->tablename,$where_cond);

        //and quantity > 0
        $sql = "SELECT  p.*    FROM product_master p  WHERE p.status_flag='Active'  " . $search_qry;
        $rs_mig = $this->db->query($sql);
        $num_row = $rs_mig->num_rows();

        $data['num_row'] = $num_row; //= $this->common->numRow($this->tablename,$where_cond);
        $data['totalpage'] = round($num_row / $this->per_page); //= $this->common->numRow($this->tablename,$where_cond);
        //$data['num_row'] = $num_row = $this->common->numRow($this->tablename,$where_cond);
////////////////
        $fun_name = $this->controller . '/search?search=' . $search;

        $data['fun_name'] = $fun_name;
        $data['fun_name_only'] = $fun_name;
        $data['controller'] = $this->controller;
      
        $params['type'] = "latestProduct";
        $params['limit'] = 5;
        $data['latestProduct'] =  $latestProduct = $this->services->getProductList($params);
       // $data['categoryProduct'] = $latestProduct;
       // print_r($categoryProduct);
 

        $this->load->view('product_list', $data);
    }
}
