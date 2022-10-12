<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

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
        $data['maxm'] = $maxm = 50;
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
		   	where   status_flag!='Deleted' ORDER BY sort_order ";// . $limit_qry;
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $resultdata = $query->result_array();
        }
        $data['results'] = $resultdata;

        $sql = "select count('')  as numrows  from product_master b   where    status_flag!='Deleted' ORDER BY sort_order ";
        $query = $this->db->query($sql);
        $resultdata = $query->row_array();
        $data['num_row'] = $resultdata['numrows']; //= $this->common->numRow($this->tablename,$where_cond);


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

            $category_ids = str_replace("|",",",$category_id);
            $add_in_m['category_ids'] = $category_ids;
			$m_s_cat = explode("|",$category_id);
            $add_in_m['category_id'] = $m_s_cat[0];
			$add_in_m['sub_category_id'] = $m_s_cat[1];
			
			 		
            $add_in_m['name'] = $name = (isset($_POST['name'])) ? $this->common->mysql_safe_string($_POST['name']) : '';
            

            $add_in_m['item_code'] = $item_code = (isset($_POST['item_code'])) ? $this->common->mysql_safe_string($_POST['item_code']) : '';
		 
            $add_in_m['description'] = $description = (isset($_POST['description'])) ? $this->common->mysql_safe_string_descriptive($_POST['description']) : '';

            $add_in_m['featured'] = $featured = (isset($_POST['featured'])) ? $this->common->mysql_safe_string($_POST['featured']) : '0';
		 
            $add_in_m['quantity'] = $quantity = (isset($_POST['quantity'])) ? $this->common->mysql_safe_string($_POST['quantity']) : '0';
            $add_in_m['mrp'] = $price = (isset($_POST['mrp'])) ? $this->common->mysql_safe_string($_POST['mrp']) : '0';
            $add_in_m['sellprice'] = $sale_price = (isset($_POST['sellprice'])) ? $this->common->mysql_safe_string($_POST['sellprice']) : '0';
            
            $add_in_m['sort_order'] = $sort_order = (isset($_POST['sort_order'])) ? $this->common->mysql_safe_string($_POST['sort_order']) : '1';
		 
            $add_in_m['status_flag'] = $status_flag = (isset($_POST['status_flag'])) ? $this->common->mysql_safe_string($_POST['status_flag']) : 'Active';
		 
           
           
    
           

            if ($id == "") {
                $chkUserInfo = $this->common->getSingleInfoBy('product_master', 'item_code', $item_code);
                if (sizeof($chkUserInfo) > 0) {
                    $error = $item_code . "   is already added";
                }
            }
           

            if ($name == '') {$error .= "Please enter Name/Title  <br>";}
            if ($item_code == '') {$error .= "Please enter Item Code <br>";}
            if ($category_id == '0|0') {$error .= "Please select category_id <br>";}


			if($error==""){
                if (isset($_FILES['main_image']['name']) && $_FILES['main_image']['name'] != '') {
                    $image_old_path_only = '../uploads/prod_images/';
                    //  $image_replace_name = $_FILES["main_image"]['name'];
                    $filename = "prod-". $this->common->tep_short_name_list($_FILES["main_image"]['name']);
    
                    $upload = $this->common->UploadImage('main_image', $image_old_path_only, 0, $height_thumb = '', $width_thumb = '', $filename);
    
                    if ($upload['uploaded'] == 'false') {
                        $error = $upload['uploadMsg'];
                    } else {
    
                        $add_in_m['main_image'] = $upload['imageFile'];
    
                        if(IMAGE_AUTO_RESIZE==1){
                            $this->load->library('Kishoreimagelib');
                        error_reporting(0);   
                        $this->kishoreimagelib->load($image_old_path_only . $add_in_m['main_image'])->set_background_colour("#dfdfdf")->resize(350, 350, true)->save($image_old_path_only . "350". $add_in_m['main_image']);
    
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

                $price_json['quantity'] = $_POST['quantity'];
                $price_json['mrp'] = $_POST['mrp'];
                $price_json['sellprice'] = $_POST['sellprice'];
                $add_in_m['price_json'] = json_encode($price_json);
                
                
                //print_r($price_json);
                //default domain key id =1
                $add_in_m['mrp'] = (isset($_POST['mrp'][1])) ? $_POST['mrp'][1] : 0;
                $add_in_m['sellprice'] = (isset($_POST['sellprice'][1])) ? $_POST['sellprice'][1] : 0;
                $add_in_m['quantity'] = (isset($_POST['quantity'][1])) ? $_POST['quantity'][1] : 0;

                $add_in_m['domain2_mrp'] = (isset($_POST['mrp'][2])) ? $_POST['mrp'][2] : 0;
                $add_in_m['domain2_sellprice'] = (isset($_POST['sellprice'][2])) ? $_POST['sellprice'][2] : 0;
                $add_in_m['domain2_qty'] = (isset($_POST['quantity'][2])) ? $_POST['quantity'][2] : 0;

                $add_in_m['domain3_mrp'] = (isset($_POST['mrp'][3])) ? $_POST['mrp'][3] : 0;
                $add_in_m['domain3_sellprice'] = (isset($_POST['sellprice'][3])) ? $_POST['sellprice'][3] : 0;
                $add_in_m['domain3_qty'] = (isset($_POST['quantity'][3])) ? $_POST['quantity'][3] : 0;

               
                 
                if ($id != "") {
                    if ($name_old != $name) {
                        $add_in_m['slug_name'] = $this->common->getUniqueSlug('product_master', 'slug_name', $this->common->tep_short_name_list($name), 'slug_name');
                    }
                    $add_in_m['updated_at'] = $today = date("Y-m-d H:i:s");

                    $where = "uuid = '" . $id . "'";
                    $update_status = $this->common->updateRecord('product_master', $add_in_m, $where);
                    $this->session->set_flashdata('success', 'Information updated successfully.');

                    $product_id = $this->common->getSinlgeColumn('product_id','product_master',$where);
                   // print_r($product_id);exit;
                    foreach($_POST['quantity'] as $domain_id => $valqty){
                        
                        $where_price = "product_id='{$product_id}' and domain_id='{$domain_id}' ";
                        $add_in_m_price['product_id'] = $product_id;
                        $add_in_m_price['domain_id'] = $domain_id;
                        $add_in_m_price['mrp'] = $_POST['mrp'][$domain_id];
                        $add_in_m_price['sellprice'] = $_POST['sellprice'][$domain_id];
                        $add_in_m_price['quantity'] = $_POST['quantity'][$domain_id];
                      //  $add_in_m_price['featured_flag'] = $_POST['featured_flag'][$domain_id];
                     //   $add_in_m_price['home_flag'] = $_POST['home_flag'][$domain_id];
                        $this->common->updateRecord('product_master_price', $add_in_m_price,$where_price);
                       

                    }

                    $this->common->createjson('product_master', 'category',"select *    from   product_master   	where    status_flag='Active' order by sort_order asc, name asc ",'multiple','home');

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

                   
                    foreach($_POST['quantity'] as $domain_id => $valqty){

                        $add_in_m_price['product_id'] = $product_id;
                        $add_in_m_price['domain_id'] = $domain_id;
                        $add_in_m_price['mrp'] = $_POST['mrp'][$domain_id];
                        $add_in_m_price['sellprice'] = $_POST['sellprice'][$domain_id];
                        $add_in_m_price['quantity'] = $_POST['quantity'][$domain_id];
                        $add_in_m_price['featured_flag'] = $_POST['featured_flag'][$domain_id];
                        $add_in_m_price['home_flag'] = $_POST['home_flag'][$domain_id];
                        $this->common->insertRecord('product_master_price', $add_in_m_price);

                    }

                    $this->session->set_flashdata('success', 'Information added successfully.');

                    $this->common->createjson('product_master', 'category',"select *    from   product_master   	where    status_flag='Active' order by sort_order asc, name asc ",'multiple','home');


                    redirect($this->controller . '/product_action');
                }

              

               
            } else {
                $this->session->set_flashdata('error', $error);
            }
        }
  		
        
        $data_info = array();
        $data['records'] = $data_info;
        if ($id != "") {
            $sql = "select *  from  product_master b where     (status_flag!='Deleted')  and b.uuid='" . $id . "'  ";
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

                $sql = "select count('')  as numrows  from product_master        where     (status_flag!='Deleted')   ";
                $query = $this->db->query($sql);
                $resultdata = $query->row_array();
                $data['records']['sort_order'] = $resultdata['numrows'] + 1;
            }
        }


        $this->load->view('product_action', $data);
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
		   	where   status_flag!='Deleted' AND parent_id=0 ORDER BY sort_order ";// . $limit_qry;
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

            $add_in_m['domains'] = $domains = (isset($_POST['domains'])) ? implode(",",$_POST['domains']) : ""; 


            
            $name_old = (isset($_POST['name_old'])) ? $this->common->mysql_safe_string($_POST['name_old']) : '';
            $add_in_m['name'] = $name = (isset($_POST['name'])) ? $this->common->mysql_safe_string($_POST['name']) : '';
           
            $add_in_m['description'] = $description = (isset($_POST['description'])) ? $this->common->mysql_safe_string_descriptive($_POST['description']) : '';
            $add_in_m['sort_order'] = $sort_order  = (isset($_POST['sort_order'])) ? $this->common->mysql_safe_string($_POST['sort_order']) : '';
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

                    if(IMAGE_AUTO_RESIZE==1){
                        $this->load->library('Kishoreimagelib');
                       
                    $this->kishoreimagelib->load($image_old_path_only . $add_in_m['main_image'])->set_background_colour("#dfdfdf")->resize(350, 350, true)->save($image_old_path_only .  "350-".$add_in_m['main_image']);

                      //$this->kishoreimagelib->load('../uploads/category/' . $add_in_m['main_image'])->set_background_colour("#dfdfdf")->resize(600, 600, true)->save($image_old_path_only .  $add_in_m['main_image'])->resize(350, 350, true)->save($image_old_path_only . "360" . $add_in_m['main_image'])->resize(81, 75, true)->save($image_old_path_only . "81" . $add_in_m['main_image']);
                    }
                }

            }

            if (isset($_FILES['pdf_file'])) {
                if ($_FILES['pdf_file']['name'] != "") {

                    $filename = time() . "-" . $this->common->tep_short_name_list($_FILES['pdf_file']['name']);
                    $file_allowed = array('pdf');
                    $upload = $this->common->UploadFiles('pdf_file', 'uploads/category/', $filename, $file_allowed);
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

                $this->common->createjson('product_category', 'category',"select *    from   product_category   	where    status_flag='Active' order by sort_order asc, name asc ",'multiple','home');
                
                $this->common->createjson('product_category', 'category',"select *    from   product_category   	where    status_flag='Active' order by sort_order asc, name asc ",'multiple','self');


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

        $this->load->view('category_action', $data);
        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');

    }
 

    public function delete_category($id = 0){
        $where_edt = "uuid = '{$id}'";
        $add_in['status_flag'] = 'Deleted';
        $add_in['updated_at'] =  date("Y-m-d H:i:s");
        $update_status = $this->common->updateRecord('product_category', $add_in, $where_edt);
        $this->session->set_flashdata('success', 'Product deleted succssfully!');
        redirect($this->ctrl_name . "/categorylistall");
    }
 
    //end of category
}
