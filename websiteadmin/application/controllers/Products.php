<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;

use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;
use Ramsey\Uuid\Uuid;

class Products extends CI_Controller
{
    public $db;
    public $ctrl_name = 'products';
    public $controller = 'products';
    public $tbl_name = 'product_master';
    public $pg_title = 'Products';

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('common');
        $this->load->helper('security');
        $this->load->library('email');
        $this->load->model('currencymodal');

        $this->load->helper('url_helper');
        $this->db = $this->load->database('default', true);
        $this->common->check_user_session();
    }

    public function index()
    {
        $this->productslist();
    }
//products
    public function productslist($start = 0, $otherparam = "")
    {

        $data['activaation_id'] = 1011;
        $data['sub_activaation_id'] = '1011_2';
        $data['title'] = 'Products';
        $data['start'] = $start;
        $data['maxm'] = $maxm = 1000;
        $data['sub_heading'] = 'List';
        $fun_name = $this->controller . '/productslist';
        $data['fun_name'] = $fun_name;
        $data['add_link'] = $this->controller . '/product_action';
        $data['edit_link'] = $this->controller . '/product_action';

        $data['controller'] = $this->controller;

        $limit_qry = " LIMIT " . $start . "," . $maxm;

        $data['other_para'] = "";

        $resultdata = array();
        $sql = "select *  from  product_master b
		   	where   status_flag!='Deleted' ORDER BY sort_order "; // . $limit_qry;
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $resultdata = $query->result_array();
        }
        $data['results'] = $resultdata;

        $sql = "select count('')  as numrows  from product_master b   where    status_flag!='Deleted' ORDER BY sort_order ";
        $query = $this->db->query($sql);
        $resultdata = $query->row_array();
        $data['num_row'] = $resultdata['numrows']; //= $this->common->numRow($this->tablename,$where_cond);

        $data['param_export'] = "productslist";
        $this->load->view('products_list', $data);
        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');
    }
    public function outofstock($start = 0, $otherparam = "")
    {

        $data['activaation_id'] = 1011;
        $data['sub_activaation_id'] = '1011_5';
        $data['title'] = 'Products';
        $data['start'] = $start;
        $data['maxm'] = $maxm = 1000;
        $data['sub_heading'] = 'List';
        $fun_name = $this->controller . '/outofstock';
        $data['fun_name'] = $fun_name;
        $data['add_link'] = $this->controller . '/product_action';
        $data['edit_link'] = $this->controller . '/product_action';

        $data['controller'] = $this->controller;

        $limit_qry = " LIMIT " . $start . "," . $maxm;

        $data['other_para'] = "";

        $resultdata = array();
        $sql = "select *  from  product_master b
		   	where   status_flag!='Deleted' and quantity <=0 ORDER BY sort_order "; // . $limit_qry;
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $resultdata = $query->result_array();
        }
        $data['results'] = $resultdata;

        $sql = "select count('')  as numrows  from product_master b   where    status_flag!='Deleted' ORDER BY sort_order ";
        $query = $this->db->query($sql);
        $resultdata = $query->row_array();
        $data['num_row'] = $resultdata['numrows']; //= $this->common->numRow($this->tablename,$where_cond);


        $data['param_export'] = "outofstock";

        $this->load->view('products_list', $data);
        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');
    }

    public function product_action($id = "")
    {
        $session_user_data = $this->session->userdata('admin_user_data');
        $data['controller'] = $this->controller;
        $data['activaation_id'] = 1011;
        $data['sub_activaation_id'] = '1011_2';
        $data['title'] = 'Product';
        $data['id'] = (isset($id)) ? $this->common->mysql_safe_string($id) : '';
        $data['sub_heading'] = (isset($id) && $id != "") ? " Edit Product" : 'Add Product';
        $data['back_link'] = $this->controller . '/productslist';
        $data['fun_name'] = 'product_action/' . $id;
        $data['controller'] = $this->controller;

        $error = '';

        if (isset($_POST['mode']) && $_POST['mode'] == "submitform") {

            $add_in_m['specification'] = $specification = (isset($_POST['specification'])) ? json_encode($_POST['specification']) : '';

            $name_old = (isset($_POST['name_old'])) ? $this->common->mysql_safe_string($_POST['name_old']) : '';

            $category_id = (isset($_POST['category_id'])) ? $this->common->mysql_safe_string($_POST['category_id']) : '0|0';

            $category_ids = str_replace("|", ",", $category_id);
            $add_in_m['category_ids'] = $category_ids;
            $m_s_cat = explode("|", $category_id);
            $add_in_m['category_id'] = $m_s_cat[0];
            $add_in_m['sub_category_id'] = $m_s_cat[1];

            $add_in_m['name'] = $name = (isset($_POST['name'])) ? $this->common->mysql_safe_string($_POST['name']) : '';
            $add_in_m['subtract'] = $subtract = (isset($_POST['subtract'])) ? $this->common->mysql_safe_string($_POST['subtract']) : '0';
            $add_in_m['allow_buy_zeroqty'] = $allow_buy_zeroqty = (isset($_POST['allow_buy_zeroqty'])) ? $this->common->mysql_safe_string($_POST['allow_buy_zeroqty']) : '0';
            
            $add_in_m['stock_status'] = $stock_status = (isset($_POST['stock_status'])) ? $this->common->mysql_safe_string($_POST['stock_status']) : '';


            $add_in_m['item_code'] = $item_code = (isset($_POST['item_code'])) ? $this->common->mysql_safe_string($_POST['item_code']) : '';

            $add_in_m['product_group_id'] = $product_group_id = (isset($_POST['product_group_id'])) ? $this->common->mysql_safe_string($_POST['product_group_id']) : '0';

            $add_in_m['weight_gms'] = $weight_gms = (isset($_POST['weight_gms'])) ? $this->common->mysql_safe_string($_POST['weight_gms']) : '0';

            $add_in_m['description'] = $description = (isset($_POST['description'])) ? $this->common->mysql_safe_string_descriptive($_POST['description']) : '';

            $add_in_m['featured'] = $featured = (isset($_POST['featured'])) ? $this->common->mysql_safe_string($_POST['featured']) : '0';

            $add_in_m['quantity'] = $quantity = (isset($_POST['quantity'])) ? $this->common->mysql_safe_string($_POST['quantity']) : '0';
            $add_in_m['mrp'] = $price = (isset($_POST['mrp'])) ? $this->common->mysql_safe_string($_POST['mrp']) : '0';
            $add_in_m['sellprice'] = $sale_price = (isset($_POST['sellprice'])) ? $this->common->mysql_safe_string($_POST['sellprice']) : '0';

            $add_in_m['sort_order'] = $sort_order = (isset($_POST['sort_order'])) ? $this->common->mysql_safe_string($_POST['sort_order']) : '1';

            $add_in_m['status_flag'] = $status_flag = (isset($_POST['status_flag'])) ? $this->common->mysql_safe_string($_POST['status_flag']) : 'Active';

            if ($id == "" && $item_code != '') {
                $chkUserInfo = $this->common->getSingleInfoBy('product_master', 'item_code', $item_code);
                if (sizeof($chkUserInfo) > 0) {
                    $error = $item_code . "   is already added";
                }
            }

            if ($name == '') {$error .= "Please enter Name/Title  <br>";}
            //if ($item_code == '') {$error .= "Please enter Item Code <br>";}
            if ($category_id == '0|0') {$error .= "Please select category_id <br>";}

            if ($error == "") {
                if (isset($_FILES['main_image']['name']) && $_FILES['main_image']['name'] != '') {
                    $image_old_path_only = '../uploads/prod_images/';
                    //  $image_replace_name = $_FILES["main_image"]['name'];
                    $filename = "prod-".time() . $this->common->tep_short_name_list($_FILES["main_image"]['name']);

                    $upload = $this->common->UploadImage('main_image', $image_old_path_only, 0, $height_thumb = '', $width_thumb = '', $filename);

                    if ($upload['uploaded'] == 'false') {
                        $error = $upload['uploadMsg'];
                    } else {

                        $add_in_m['main_image'] = $upload['imageFile'];

                        if (IMAGE_AUTO_RESIZE == 1) {
                            $this->load->library('Kishoreimagelib');
                            error_reporting(0);
                            $this->kishoreimagelib->load($image_old_path_only . $add_in_m['main_image'])->set_background_colour("#dfdfdf")->resize(350, 350, true)->save($image_old_path_only . "350" . $add_in_m['main_image']);

                            //$this->kishoreimagelib->load('../uploads/category/' . $add_in_m['main_image'])->set_background_colour("#dfdfdf")->resize(600, 600, true)->save($image_old_path_only .  $add_in_m['main_image'])->resize(350, 350, true)->save($image_old_path_only . "360" . $add_in_m['main_image'])->resize(81, 75, true)->save($image_old_path_only . "81" . $add_in_m['main_image']);
                        }
                    }

                }

                /*for ($img = 2; $img < 7; $img++) {
            if (isset($_FILES['image' . $img])) {
            if ($_FILES['image' . $img]['name'] != "") {
            $uuid = "";
            try {

            // Generate a version 4 (random) UUID object
            $uuid4 = Uuid::uuid4();
            $pusti = $uuid4->toString();

            } catch (UnsatisfiedDependencyException $e) {
            //  echo 'Caught exception: ' . $e->getMessage() . "\n";
            }

            //  $pusti = $this->common->gen_key(10);
            $extension = $this->common->getExtension($_FILES['image' . $img]['name']);
            $thumbpath = $pusti.".".$extension;
            $thumbpath = preg_replace("/[^a-zA-Z0-9.]/", "", $thumbpath);
            copy($_FILES['image' . $img]['tmp_name'], "../uploads/prod_images/" .  $thumbpath);
            $add_in['image' . $img] =  $thumbpath;
            }
            }
            }*/
            }

            if ($error == '') {

              
                //default domain key id =1
                // $add_in_m['mrp'] = (isset($_POST['mrp'][1])) ? $_POST['mrp'][1] : 0;
                // $add_in_m['sellprice'] = (isset($_POST['sellprice'][1])) ? $_POST['sellprice'][1] : 0;
                // $add_in_m['quantity'] = (isset($_POST['quantity'][1])) ? $_POST['quantity'][1] : 0;

                // $add_in_m['domain2_mrp'] = (isset($_POST['mrp'][2])) ? $_POST['mrp'][2] : 0;
                // $add_in_m['domain2_sellprice'] = (isset($_POST['sellprice'][2])) ? $_POST['sellprice'][2] : 0;
                // $add_in_m['domain2_qty'] = (isset($_POST['quantity'][2])) ? $_POST['quantity'][2] : 0;

                // $add_in_m['domain3_mrp'] = (isset($_POST['mrp'][3])) ? $_POST['mrp'][3] : 0;
                // $add_in_m['domain3_sellprice'] = (isset($_POST['sellprice'][3])) ? $_POST['sellprice'][3] : 0;
                // $add_in_m['domain3_qty'] = (isset($_POST['quantity'][3])) ? $_POST['quantity'][3] : 0;

                $add_in_m['mrp'] = (isset($_POST['mrp'])) ? $_POST['mrp'] : 0;
                $add_in_m['sellprice'] = (isset($_POST['sellprice'])) ? $_POST['sellprice'] : 0;
                $add_in_m['quantity'] = (isset($_POST['quantity'])) ? $_POST['quantity'] : 0;

                if ($id != "") {
                    if ($name_old != $name) {
                        $add_in_m['slug_name'] = $this->common->getUniqueSlug('product_master', 'slug_name', $this->common->tep_short_name_list($name), 'slug_name');
                    }
                    $add_in_m['updated_at'] = $today = date("Y-m-d H:i:s");

                    $where = "uuid = '" . $id . "'";
                    $update_status = $this->common->updateRecord('product_master', $add_in_m, $where);
                    $this->session->set_flashdata('success', 'Information updated successfully.');

                    //$product_id = $this->common->getSinlgeColumn('product_id', 'product_master', $where);
                 

                    $this->common->createjson('product_master', 'category', "select *    from   product_master   	where    status_flag='Active' order by sort_order asc, name asc ", 'multiple', 'home');

                    redirect($data['back_link']);

                } else {
                    $add_in_m['created_at'] = $today = date("Y-m-d");
                    $uuid = "";
                    try {

                        // Generate a version 4 (random) UUID object
                        $uuid4 = Uuid::uuid4();
                        $add_in_m['uuid'] = $uuid4->toString();

                    } catch (UnsatisfiedDependencyException $e) {
                        //  echo 'Caught exception: ' . $e->getMessage() . "\n";
                    }
                    // echo "aa".$name;
                    $add_in_m['slug_name'] = $this->common->getUniqueSlug('product_master', 'slug_name', $this->common->tep_short_name_list($name), 'slug_name');

                    $product_id = $this->common->insertRecord('product_master', $add_in_m);

                   

                    $this->session->set_flashdata('success', 'Information added successfully.');

                    $this->common->createjson('product_master', 'category', "select *    from   product_master   	where    status_flag='Active' order by sort_order asc, name asc ", 'multiple', 'home');

                    redirect($this->controller . '/product_action');
                }

            } else {
                $this->session->set_flashdata('error', $error);
            }
        }

        $data['consignmentimage_temp'] = [];
        $data_info = array();
        $data['records'] = $data_info;

        if ($id != "") {
            $sql = "select *  from  product_master b where     (status_flag!='Deleted')  and b.uuid='" . $id . "'  ";
            $query = $this->db->query($sql);
            if ($query->num_rows() > 0) {
                $data_info = $query->row_array();
                $data['records'] = $data_info;
            }

            $sql = "select * from product_images where   product_id='{$data_info['product_id']}' ";
            $request_query = $this->db->query($sql);
            if ($request_query->num_rows() > 0) {
                $data['consignmentimage_temp'] = $request_query->result_array();
            }

        } else {
            if (isset($add_in_m) && sizeof($add_in_m) > 0) {
                $data_info = (isset($_POST)) ? $_POST : '';
                $data['records'] = $data_info;
            } else {

                $sql = "select count('')  as numrows  from product_master        where     (status_flag!='Deleted')   ";
                $query = $this->db->query($sql);
                $resultdata = $query->row_array();
                $data['records']['sort_order'] = $resultdata['numrows'] + 1;
            }

            $sql = "select * from product_images_temp where   session_id='" . session_id() . "' ";
            $request_query = $this->db->query($sql);
            if ($request_query->num_rows() > 0) {
                $data['consignmentimage_temp'] = $request_query->result_array();
            }
        }

        $this->load->view('product_action', $data);
        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');

    }
    public function purchasedproduct($start = 0, $otherparam = "")
    {

        $data['activaation_id'] = 22;
        $data['sub_activaation_id'] = '22_7';
        $data['title'] = 'Products';
        $data['start'] = $start;
        $data['maxm'] = $maxm = 1000;
        $data['sub_heading'] = 'List';
        $fun_name = $this->controller . '/purchasedproduct';
        $data['fun_name'] = $fun_name;
        $data['add_link'] = $this->controller . '/purchasedproduct';
        $data['edit_link'] = $this->controller . '/purchasedproduct';

        $data['controller'] = $this->controller;

        $limit_qry = " LIMIT " . $start . "," . $maxm;

        $data['other_para'] = "";

        $resultdata = array();
        $sql = "SELECT op.product_id, SUM(op.quantity) as total_qty, SUM(op.price) as  total_amount , op.price as purchased_price, p.main_image, p.item_code, p.name, p.mrp, p.sellprice FROM `order_product` op LEFT JOIN product_master p ON op.product_id = p.product_id GROUP BY op.product_id "; // . $limit_qry;
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $resultdata = $query->result_array();
        }
        $data['results'] = $resultdata;

        
        $data['param_export'] = "purchasedproduct";
        $this->load->view('purchasedproduct', $data);
        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');
    }
    public function delete_product($id = 0)
    {
        $where_edt = "uuid = '{$id}' ";
        $add_in['status_flag'] = 'Deleted';
        $update_status = $this->common->updateRecord('product_master', $add_in, $where_edt);

        $this->session->set_flashdata('success', 'Product deleted succssfully!');
        //$this->session->set_flashdata('error', $error);
        redirect($this->ctrl_name);
    }

    public function productgroup($start = 0, $otherparam = "")
    {

        $data['activaation_id'] = 1011;
        $data['sub_activaation_id'] = '1011_4';
        $data['title'] = 'Product Group';
        $data['start'] = $start;
        $data['maxm'] = $maxm = 50;
        $data['sub_heading'] = 'Product Group List';
        $fun_name = $this->controller . '/productgroup';
        $data['fun_name'] = $fun_name;
        $data['add_link'] = $this->controller . '/productgroup_action';
        $data['edit_link'] = $this->controller . '/productgroup_action';

        $data['controller'] = $this->controller;

        $limit_qry = " LIMIT " . $start . "," . $maxm;

        $data['other_para'] = "";

        $resultdata = array();
        $sql = "select *  from  m_product_group b 	where   status_flag!='Deleted'  "; // . $limit_qry;
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $resultdata = $query->result_array();
        }
        $data['results'] = $resultdata;

        $sql = "select count('')  as numrows  from m_product_group b   where    status_flag!='Deleted'  ";
        $query = $this->db->query($sql);
        $resultdata = $query->row_array();
        $data['num_row'] = $resultdata['numrows']; //= $this->common->numRow($this->tablename,$where_cond);

        $this->load->view('productgroup', $data);
        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');
    }

    public function productgroup_action($id = "")
    {

        $session_user_data = $this->session->userdata('admin_user_data');
        $data['controller'] = $this->controller;
        $data['activaation_id'] = 1011;
        $data['sub_activaation_id'] = '1011_4';
        $data['title'] = 'Category';
        $data['id'] = (isset($id)) ? $this->common->mysql_safe_string($id) : '';
        $data['sub_heading'] = (isset($id) && $id != "") ? " Edit Product Group" : 'Add Product Group';
        $data['back_link'] = $this->controller . '/productgroup';
        $data['fun_name'] = 'productgroup_action/' . $id;
        $data['controller'] = $this->controller;

        $error = '';

        $data_info = array();
        // print_r($_POST);exit;
        if (isset($_POST['mode']) && $_POST['mode'] == "submitform") {

            $add_in_m['name'] = $name = (isset($_POST['name'])) ? $this->common->mysql_safe_string($_POST['name']) : '';

            $add_in_m['price'] = $price = (isset($_POST['price'])) ? $this->common->mysql_safe_string_descriptive($_POST['price']) : '';

            if ($name == '') {$error .= "Please enter Name/Title  <br>";}
            if ($price == '') {$error .= "Please select price <br>";}

            if ($error == '') {

                if ($id != "") {

                    $where = "id = '" . $id . "'";
                    $update_status = $this->common->updateRecord('m_product_group', $add_in_m, $where);

                    $sql = "update product_master set mrp = ROUND(weight_gms * {$price}),sellprice = ROUND(weight_gms * {$price}) where product_group_id='{$id}' ";
                    $this->db->query($sql);

                    

                    $this->session->set_flashdata('success', 'Information updated successfully.');

                } else {

                    $blogs_id = $this->common->insertRecord('m_product_group', $add_in_m);

                    $this->session->set_flashdata('success', 'Information added successfully.');

                }

                redirect($this->controller . '/productgroup');

            } else {
                //$this->session->set_userdata('error', $error);
                $data['error_msg'] = $error;
            }
        }

        //  $where_cond = "where delete_status=0  ORDER BY cate_name  ";
        //  $data['mst_category_blogs'] = $mst_category_blogs = $this->common->getAllRow('m_newsblog_cat', $where_cond);

        $data_info = array();
        $data['records'] = $data_info;
        if ($id != "") {
            $sql = "select *  from  m_product_group b where     b.id='" . $id . "'  ";
            $query = $this->db->query($sql);
            if ($query->num_rows() > 0) {
                $data_info = $query->row_array();
                $data['records'] = $data_info;

            }
        } else {
            if (isset($add_in_m) && sizeof($add_in_m) > 0) {
                $data_info = (isset($_POST)) ? $_POST : '';
                $data['records'] = $data_info;
            } else {

                $sql = "select count('')  as numrows  from m_product_group     ";
                $query = $this->db->query($sql);
                $resultdata = $query->row_array();
                $data['records']['sort_order'] = $resultdata['numrows'] + 1;
            }
        }

        $this->load->view('productgroup_action', $data);
        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');

    }

    //category
    public function categorylistall($start = 0, $otherparam = "")
    {

        $data['activaation_id'] = 1011;
        $data['sub_activaation_id'] = '1011_1';
        $data['title'] = 'Category';
        $data['start'] = $start;
        $data['maxm'] = $maxm = 50;
        $data['sub_heading'] = 'List';
        $fun_name = $this->controller . '/categorylistall';
        $data['fun_name'] = $fun_name;
        $data['add_link'] = $this->controller . '/category_action';
        $data['edit_link'] = $this->controller . '/category_action';

        $data['controller'] = $this->controller;

        $limit_qry = " LIMIT " . $start . "," . $maxm;

        $data['other_para'] = "";

        $resultdata = array();
        $sql = "select *  from  product_category b
		   	where   status_flag!='Deleted' AND parent_id=0 ORDER BY sort_order "; // . $limit_qry;
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $resultdata = $query->result_array();
        }
        $data['results'] = $resultdata;

        $sql = "select count('')  as numrows  from product_category b   where    status_flag!='Deleted' AND parent_id=0 ORDER BY sort_order ";
        $query = $this->db->query($sql);
        $resultdata = $query->row_array();
        $data['num_row'] = $resultdata['numrows']; //= $this->common->numRow($this->tablename,$where_cond);

        $this->load->view('categorylistall', $data);
        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');
    }

    public function category_action($id = "")
    {

        $session_user_data = $this->session->userdata('admin_user_data');
        $data['controller'] = $this->controller;
        $data['activaation_id'] = 1011;
        $data['sub_activaation_id'] = '1011_1';
        $data['title'] = 'Category';
        $data['id'] = (isset($id)) ? $this->common->mysql_safe_string($id) : '';
        $data['sub_heading'] = (isset($id) && $id != "") ? " Edit Category" : 'Add Category';
        $data['back_link'] = $this->controller . '/categorylistall';
        $data['fun_name'] = 'category_action/' . $id;
        $data['controller'] = $this->controller;

        $error = '';

        $data_info = array();
        // print_r($_POST);exit;
        if (isset($_POST['mode']) && $_POST['mode'] == "submitform") {

            $add_in_m['domains'] = $domains = (isset($_POST['domains'])) ? implode(",", $_POST['domains']) : "";

            $name_old = (isset($_POST['name_old'])) ? $this->common->mysql_safe_string($_POST['name_old']) : '';
            $add_in_m['name'] = $name = (isset($_POST['name'])) ? $this->common->mysql_safe_string($_POST['name']) : '';

            $add_in_m['description'] = $description = (isset($_POST['description'])) ? $this->common->mysql_safe_string_descriptive($_POST['description']) : '';
            $add_in_m['sort_order'] = $sort_order = (isset($_POST['sort_order'])) ? $this->common->mysql_safe_string($_POST['sort_order']) : '';
            $add_in_m['status_flag'] = $status_flag = (isset($_POST['status_flag'])) ? $this->common->mysql_safe_string($_POST['status_flag']) : 'Inactive';

            $add_in_m['parent_id'] = $parent_id = (isset($_POST['parent_id'])) ? $this->common->mysql_safe_string($_POST['parent_id']) : '0';

            $add_in_m['meta_title'] = $meta_title = (isset($_POST['meta_title'])) ? $this->common->mysql_safe_string($_POST['meta_title']) : '';
            $add_in_m['meta_keywords'] = $meta_keywords = (isset($_POST['meta_keywords'])) ? $this->common->mysql_safe_string($_POST['meta_keywords']) : '';
            $add_in_m['meta_description'] = $meta_description = (isset($_POST['meta_description'])) ? $this->common->mysql_safe_string($_POST['meta_description']) : '';

            $add_in_m['added_by_user_id'] = $session_user_data['user_id'];
            $add_in_m['edit_by_user_id'] = null;

            if (isset($_FILES['main_image']['name']) && $_FILES['main_image']['name'] != '') {
                $image_old_path_only = '../uploads/category/';
                //  $image_replace_name = $_FILES["main_image"]['name'];
                $filename = "cat-" . $this->common->tep_short_name_list($_FILES["main_image"]['name']);

                $upload = $this->common->UploadImage('main_image', $image_old_path_only, 0, $height_thumb = '', $width_thumb = '', $filename);

                if ($upload['uploaded'] == 'false') {
                    $error = $upload['uploadMsg'];
                } else {

                    $add_in_m['main_image'] = $upload['imageFile'];

                    if (IMAGE_AUTO_RESIZE == 1) {
                        $this->load->library('Kishoreimagelib');

                        $this->kishoreimagelib->load($image_old_path_only . $add_in_m['main_image'])->set_background_colour("#dfdfdf")->resize(350, 350, true)->save($image_old_path_only . "350-" . $add_in_m['main_image']);

                        //$this->kishoreimagelib->load('../uploads/category/' . $add_in_m['main_image'])->set_background_colour("#dfdfdf")->resize(600, 600, true)->save($image_old_path_only .  $add_in_m['main_image'])->resize(350, 350, true)->save($image_old_path_only . "360" . $add_in_m['main_image'])->resize(81, 75, true)->save($image_old_path_only . "81" . $add_in_m['main_image']);
                    }
                }

            }

            if (isset($_FILES['pdf_file'])) {
                if ($_FILES['pdf_file']['name'] != "") {

                    $filename = time() . "-" . $this->common->tep_short_name_list($_FILES['pdf_file']['name']);
                    $file_allowed = array('pdf');
                    $upload = $this->common->UploadFiles('pdf_file', '../uploads/category/', $filename, $file_allowed);
                    if ($upload['uploaded'] == 'false') {

                        $error = $upload['uploadMsg'];
                    } else {
                        $add_in_m['pdf_file'] = $upload['imageFile'];
                        //print_r($add_in);
                    }

                }
            }

            if ($name == '') {$error .= "Please enter Name/Title  <br>";}
            if ($domains == '') {$error .= "Please select atleast 1 domain  <br>";}

            if ($error == '') {

                if ($id != "") {
                    if ($name_old != $name) {
                        $add_in_m['slug_name'] = $this->common->getUniqueSlug('product_category', 'slug_name', $this->common->tep_short_name_list($name), 'slug_name');
                    }
                    $add_in_m['updated_at'] = $today = date("Y-m-d H:i:s");

                    $where = "uuid = '" . $id . "'";
                    $update_status = $this->common->updateRecord('product_category', $add_in_m, $where);

                    $this->session->set_flashdata('success', 'Information updated successfully.');

                } else {
                    $add_in_m['created_at'] = $today = date("Y-m-d");
                    $uuid = "";
                    try {

                        // Generate a version 4 (random) UUID object
                        $uuid4 = Uuid::uuid4();
                        $add_in_m['uuid'] = $uuid4->toString();

                    } catch (UnsatisfiedDependencyException $e) {
                        //  echo 'Caught exception: ' . $e->getMessage() . "\n";
                    }

                    $add_in_m['slug_name'] = $this->common->getUniqueSlug('product_category', 'slug_name', $this->common->tep_short_name_list($name), 'slug_name');

                    $blogs_id = $this->common->insertRecord('product_category', $add_in_m);

                    $this->session->set_flashdata('success', 'Information added successfully.');

                }

                // $this->common->createjson('product_category', 'category',"select *    from   product_category       where    status_flag='Active' and parent_id=0 order by sort_order asc, name asc ",'multiple','home');

                $this->common->createmenujson();

                redirect($this->controller . '/categorylistall');

            } else {
                //$this->session->set_userdata('error', $error);
                $data['error_msg'] = $error;
            }
        }

        //  $where_cond = "where delete_status=0  ORDER BY cate_name  ";
        //  $data['mst_category_blogs'] = $mst_category_blogs = $this->common->getAllRow('m_newsblog_cat', $where_cond);

        $data_info = array();
        $data['records'] = $data_info;
        if ($id != "") {
            $sql = "select *  from  product_category b where     (status_flag!='Deleted')  and b.uuid='" . $id . "'   order by  b.category_id  desc";
            $query = $this->db->query($sql);
            if ($query->num_rows() > 0) {
                $data_info = $query->row_array();
                $data['records'] = $data_info;

            }
        } else {
            if (isset($add_in_m) && sizeof($add_in_m) > 0) {
                $data_info = (isset($_POST)) ? $_POST : '';
                $data['records'] = $data_info;
            } else {

                $sql = "select count('')  as numrows  from product_category        where     (status_flag!='Deleted')   ";
                $query = $this->db->query($sql);
                $resultdata = $query->row_array();
                $data['records']['sort_order'] = $resultdata['numrows'] + 1;
            }
        }
        $this->common->createmenujson();
        $this->load->view('category_action', $data);
        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');

    }

    public function delete_category($id = 0)
    {
        $where_edt = "uuid = '{$id}'";
        $add_in['status_flag'] = 'Deleted';
        $add_in['updated_at'] = date("Y-m-d H:i:s");
        $update_status = $this->common->updateRecord('product_category', $add_in, $where_edt);
        $this->session->set_flashdata('success', 'Product deleted succssfully!');
        $this->common->createmenujson();
        redirect($this->ctrl_name . "/categorylistall");
    }

    //end of category

    public function save_base64_image($base64_image_string, $output_file_without_extension, $path_with_end_slash = "")
    {
        //usage:  if( substr( $img_src, 0, 5 ) === "data:" ) {  $filename=save_base64_image($base64_image_string, $output_file_without_extentnion, getcwd() . "/application/assets/pins/$user_id/"); }
        //
        //data is like:    data:image/png;base64,asdfasdfasdf
        $splited = explode(',', substr($base64_image_string, 5), 2);
        $mime = $splited[0];
        $data = $splited[1];

        $mime_split_without_base64 = explode(';', $mime, 2);
        $mime_split = explode('/', $mime_split_without_base64[0], 2);
        if (count($mime_split) == 2) {
            $extension = $mime_split[1];
            if ($extension == 'jpeg') {
                $extension = 'jpg';
            }

            //if($extension=='javascript')$extension='js';
            //if($extension=='text')$extension='txt';
            $output_file_with_extension = $output_file_without_extension . '.' . $extension;
        }
        file_put_contents($path_with_end_slash . $output_file_with_extension, base64_decode($data));
        return $output_file_with_extension;
    }
    public function doAddimage()
    {
        // print_r($_POST);
        $session_user_data = $this->session->userdata('admin_user_data');

        $user_id = $session_user_data['user_id'];
        $product_id = (isset($_POST['product_id'])) ? $this->common->mysql_safe_string($_POST['product_id']) : '0';

        $img_src = $_POST['img_src'];
        $img_id = $_POST['img_id'];
        $image_name_temp = $user_id . "-" . $img_id;
        if ($product_id > 0) {
            $image_name = $this->save_base64_image($img_src, $image_name_temp, '../uploads/prod_images/');
            $sql_add['image_name'] = $image_name;
            $sql_add['product_id'] = $product_id;
            $sql_add['date_added'] = date("Y-m-d H:i:s");
            $sql_add['img_id'] = $img_id;

            $this->common->insertRecord('product_images', $sql_add);

        } else {
            $image_name = $this->save_base64_image($img_src, $image_name_temp, '../uploads/product_images_temp/');
            $sql_add['image_name'] = $image_name;
            $sql_add['session_id'] = session_id();
            $sql_add['date_added'] = date("Y-m-d H:i:s");
            $sql_add['img_id'] = $img_id;
            $this->common->insertRecord('product_images_temp', $sql_add);

        }

    }
    public function doDeletImage()
    {
        // print_r($_POST);

        $img_id = $_POST['img_id'];

        $sql = "select * from product_images where   img_id='{$img_id}' ";
        $request_query = $this->db->query($sql)->row_array();
        @unlink("../uploads/prod_images/" . $request_query['image_name']);
        $sql = "delete from product_images where  img_id = '" . $img_id . "' ";
        $this->db->query($sql);

        $sql = "select * from product_images_temp where   img_id='{$img_id}' ";
        $request_query = $this->db->query($sql)->row_array();
        @unlink("../uploads/product_images_temp/" . $request_query['image_name']);
        $sql = "delete from product_images_temp where  img_id = '" . $img_id . "' ";
        $this->db->query($sql);
    }
    public function exporttocsv()
    {
        // print_r($_POST);
        $param_export = (isset($_GET['param_export'])) ? $this->common->mysql_safe_string($_GET['param_export']) : '';
        $limit_total = 900000;
        $xcelfiles = [];
        $filename = "product";
        $sql = "select count('')  as total_data  from product_master        where     (status_flag!='Deleted')   ";
        $query = $this->db->query($sql);
        $resultdata = $query->row_array();
        $total_data = $resultdata['total_data'];

        $noofexcels = $total_data > $limit_total ? ceil($total_data / $limit_total) : 1;

        $headtitle = ['product_id', 'name', 'item_code','weight_gms','quantity', 'description','category_name', 'sub_category_name','mrp', 'sellprice', 'status_flag',   'product_group_name'];

        for ($i = 0; $i < $noofexcels; $i++) {
            $spreadsheet = new Spreadsheet();
            $spreadsheet->setActiveSheetIndex(0);
            $activeSheet = $spreadsheet->getActiveSheet();
            $header = array_keys($headtitle);

            $header = $header[0];
            $header = $headtitle;
            $header = array_values($header);
            $activeSheet->fromArray([$header], null, 'A1');

            $offset = $i == 0 ? $i : $i * $limit_total;
            $resultsPerPage = $noofexcels > 1 ? $limit_total : $total_data;
            $sql_sub = "";
            if($param_export=="outofstock"){
                $sql_sub = " and p.quantity <=0 ";
            }
            $sql = "select p.product_id , p.name , p.item_code ,p.weight_gms,p.quantity ,  p.description ,pc.name as category_name,psc.name as sub_category_name,   p.mrp , p.sellprice , p.status_flag  , pg.name as product_group_name    from product_master p   
                    left join product_category pc on p.category_id = pc.category_id   
                    left join product_category psc on p.sub_category_id = psc.category_id  
                    left join m_product_group pg on p.product_group_id = pg.id  
                       where     (p.status_flag!='Deleted') ".$sql_sub." limit 0, ".$resultsPerPage;
            $query = $this->db->query($sql);
            $resultdata = $query->result_array();
            
            $startCell = 2; //starting from A2

            foreach ($resultdata as $key => $valueData) {
               
                //$specification = $valueData['specification'];

                $value = array_values($valueData);

                $activeSheet->fromArray([$value], null, 'A' . $startCell, true);
                $startCell++;

               
            }
            //$writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
            $filename =  'Products-' . $i;
            $xcelfiles[] = $filename;
            $writer = new Xlsx($spreadsheet);
            $writer->save('uploads/' .$filename. '.xlsx');
        }
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');  
        header('Content-Disposition: attachment; filename=' .$filename. '.xlsx');  
        $writer->save('php://output');
        // if(sizeof($xcelfiles) > 0){
        //     $file_name_download = "Products-".time();
        //     $zip_file_tmp = "uploads/".$file_name_download. '.zip';
        //     $zip = new ZipArchive();
        //     $zip->open($zip_file_tmp, ZipArchive::CREATE);
        //     foreach ($xcelfiles as $file) {
        //         $zip->addFile($file . '.xlsx');
        //     }
        //     $zip->close();
        //     foreach ($xcelfiles as $file) {
        //         @unlink('uploads/' .$file . '.xlsx');
        //     }
        //     ob_flush();
        //     flush();
        // }
   

    }
}
