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
    public $m_act = 2;

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
        $this->listall();
    }

    public function listall()
    {
        $data['msg'] = '';
        $error = '';
        $data['l_s_act'] = 1;
        $data['sub_heading'] = 'Products List';

        $where_cond = " WHERE  status!='Delete' ORDER BY product_id";
        $data['results'] = $results = $this->common->getAllRow($this->tbl_name, $where_cond);

        $this->load->view('products_list', $data);
        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');
    }
	

    public function product_images($id = 1)
    {
        $data['msg'] = '';
        $data['id'] = $id;
        $data['l_s_act'] = 2;
        $data['sub_heading'] = 'Edit Product';
        $error = '';

        $where_edt = "product_id = $id";
        $where_fetch = "WHERE product_id=" . $id;

        if (isset($_POST['mode']) && $_POST['mode'] == "submitform") {
			
			$category_id = (isset($_POST['category_id'])) ? $this->common->mysql_safe_string($_POST['category_id']) : '0|0';
			$m_s_cat = explode("|",$category_id);
            $add_in['category_id'] = $m_s_cat[0];
			$add_in['sub_category_id'] = $m_s_cat[1];
			
			
			$add_in['item_id'] = $item_id = (isset($_POST['item_id'])) ? $this->common->mysql_safe_string($_POST['item_id']) : '0';			
            $add_in['name'] = $name = (isset($_POST['name'])) ? $this->common->mysql_safe_string($_POST['name']) : '';
			$add_in['name_en'] = $name_en = (isset($_POST['name_en'])) ? $this->common->mysql_safe_string($_POST['name_en']) : '';
            $add_in['price'] = $price = (isset($_POST['price'])) ? $this->common->mysql_safe_string($_POST['price']) : '';
			$add_in['sale_price'] = $sale_price = (isset($_POST['sale_price'])) ? $this->common->mysql_safe_string($_POST['sale_price']) : '';
			$add_in['unit'] = $unit = (isset($_POST['unit'])) ? $this->common->mysql_safe_string($_POST['unit']) : null;
			$add_in['unit_bag'] = $unit_bag = (isset($_POST['unit_bag'])) ? $this->common->mysql_safe_string($_POST['unit_bag']) : '';
            $add_in['kg_bag'] = $kg_bag = (isset($_POST['kg_bag'])) ? $this->common->mysql_safe_string($_POST['kg_bag']) :null;
            $add_in['driver_bonus'] = $driver_bonus = (isset($_POST['driver_bonus'])) ? $this->common->mysql_safe_string($_POST['driver_bonus']) : null;
			$add_in['carry_boy_bonus'] = $carry_boy_bonus = (isset($_POST['carry_boy_bonus'])) ? $this->common->mysql_safe_string($_POST['carry_boy_bonus']) : null;
			$add_in['stock_location'] = $stock_location = (isset($_POST['stock_location'])) ? $this->common->mysql_safe_string($_POST['stock_location']) : null;
			$add_in['re_order_point'] = $re_order_point = (isset($_POST['re_order_point'])) ? $this->common->mysql_safe_string($_POST['re_order_point']) : null;
			
			
            $add_in['status'] = $status = (isset($_POST['status'])) ? $this->common->mysql_safe_string($_POST['status']) : '';
            $add_in['date_added'] = date('Y-m-d');

			//die();
			if ($category_id == "") {
                $error = "Please select category";
			}
			if ($name == "") {
                $error = "Please enter name";
			}
			/*if ($short_description == "") {
                $error = "Please enter short description";
			}
			if ($description == "") {
                $error = "Please enter description";
			}*/
			if ($price == "") {
                $error = "Please enter price";
			}
			/*if ($status == "") {
                $error = "Please enter status";
			}

			if ($variations == "") {
				$add_in['variations'] = null;			 
		    }*/
		  
            if (isset($_FILES['main_image'])) {
                if ($_FILES['main_image']['name'] != "") {
                    $pusti = $this->common->gen_key(10);
                    $extension = strstr($_FILES['main_image']['name'], ".");
                    $thumbpath = $_FILES['main_image']['name'];
                    $thumbpath = preg_replace("/[^a-zA-Z0-9.]/", "", $thumbpath);
                    copy($_FILES['main_image']['tmp_name'], "../uploads/prod_images/" . $pusti . $thumbpath);
                    $add_in['main_image'] = $pusti . $thumbpath;
                }
            }

            for ($img = 2; $img < 7; $img++) {
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
            }

            if ($error == '') {
                $update_status = $this->common->updateRecord($this->tbl_name, $add_in, $where_edt);
                $this->session->set_flashdata('success', 'Information updated succssfully!');
                redirect($this->ctrl_name);
            } else {
                $data['msg'] = $error;
                $this->session->set_flashdata('error', $error);
            }
        }

        $where_cond = "where product_id=" . $id;
        $data['records'] = $records = $this->common->getOneRow($this->tbl_name, $where_cond);

        /*$where_cond = "where product_id=".$type_id;
        $data['type_rs'] = $type_rs = $this->common->getOneRow($this->tbl_name,$where_cond);*/

        $this->load->view('edit_product', $data);
        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');

    }
	
    public function add_product()
    {
        $data['msg'] = '';
        $error = '';
        $data['l_s_act'] = 1;
        $data['sub_heading'] = 'Add Product';
        $error = '';

        if (isset($_POST['mode']) && $_POST['mode'] == "submitform") {

			$category_id = (isset($_POST['category_id'])) ? $this->common->mysql_safe_string($_POST['category_id']) : '0|0';
			$m_s_cat = explode("|",$category_id);
            $add_in['category_id'] = $m_s_cat[0];
			$add_in['sub_category_id'] = $m_s_cat[1];
			
			$add_in['item_id'] = $item_id = (isset($_POST['item_id'])) ? $this->common->mysql_safe_string($_POST['item_id']) : '0';			
            $add_in['name'] = $name = (isset($_POST['name'])) ? $this->common->mysql_safe_string($_POST['name']) : '';
			$add_in['name_en'] = $name_en = (isset($_POST['name_en'])) ? $this->common->mysql_safe_string($_POST['name_en']) : '';
            $add_in['price'] = $price = (isset($_POST['price'])) ? $this->common->mysql_safe_string($_POST['price']) : '';
			$add_in['sale_price'] = $sale_price = (isset($_POST['sale_price'])) ? $this->common->mysql_safe_string($_POST['sale_price']) : '';
			$add_in['unit'] = $unit = (isset($_POST['unit'])) ? $this->common->mysql_safe_string($_POST['unit']) : null;
			$add_in['unit_bag'] = $unit_bag = (isset($_POST['unit_bag'])) ? $this->common->mysql_safe_string($_POST['unit_bag']) : '';
            $add_in['kg_bag'] = $kg_bag = (isset($_POST['kg_bag'])) ? $this->common->mysql_safe_string($_POST['kg_bag']) :null;
            $add_in['driver_bonus'] = $driver_bonus = (isset($_POST['driver_bonus'])) ? $this->common->mysql_safe_string($_POST['driver_bonus']) : null;
			$add_in['carry_boy_bonus'] = $carry_boy_bonus = (isset($_POST['carry_boy_bonus'])) ? $this->common->mysql_safe_string($_POST['carry_boy_bonus']) : null;
			$add_in['stock_location'] = $stock_location = (isset($_POST['stock_location'])) ? $this->common->mysql_safe_string($_POST['stock_location']) : null;
			$add_in['re_order_point'] = $re_order_point = (isset($_POST['re_order_point'])) ? $this->common->mysql_safe_string($_POST['re_order_point']) : null;

            //die();
			/*if ($category_id == "") {
                $error = "Please select category";
			}
			if ($name == "") {
                $error = "Please enter name";
			}
			if ($short_description == "") {
                $error = "Please enter short description";
			}
			if ($description == "") {
                $error = "Please enter description";
			}
			if ($price == "") {
                $error = "Please enter price";
			}
			if ($status == "") {
                $error = "Please enter status";
			}
			
			if ($variations == "") {
				$add_in['variations'] = null;			 
		    }*/

            $chkUserInfo = $this->common->getSingleInfoBy($this->tbl_name, 'name', $name);
            if (sizeof($chkUserInfo) > 0) {
                $error = $name . "   is already added";
            }

			if($error==""){
				if (isset($_FILES['main_image'])) {
					if ($_FILES['main_image']['name'] != "") {
						$pusti = $this->common->gen_key(10);
						$extension = strstr($_FILES['main_image']['name'], ".");
						$thumbpath = $_FILES['main_image']['name'];
						$thumbpath = preg_replace("/[^a-zA-Z0-9.]/", "", $thumbpath);
						copy($_FILES['main_image']['tmp_name'], "../uploads/prod_images/" . $pusti . $thumbpath);
						$add_in['main_image'] = $pusti . $thumbpath;
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
                $uuid = "";
                try {

                    // Generate a version 4 (random) UUID object
                    $uuid4 = Uuid::uuid4();
                    $uuid = $uuid4->toString();

                } catch (UnsatisfiedDependencyException $e) {
                    //  echo 'Caught exception: ' . $e->getMessage() . "\n";
                }
                $add_in['product_uuid'] = $uuid;
                $this->common->insertRecord($this->tbl_name, $add_in);
                $this->session->set_flashdata('success', 'Information added succssfully!');
                redirect($this->ctrl_name);
            } else {
                $this->session->set_flashdata('error', $error);
            }
        }
  		$data_info = (isset($_POST)) ? $_POST : '';
        $data['records'] = $data_info;
        $this->load->view('add_product', $data);
        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');

    }

    public function delete_product($id = 0)
    {
        $where_edt = "product_id = $id";
        $add_in['status'] = 'Delete';
        $update_status = $this->common->updateRecord($this->tbl_name, $add_in, $where_edt);

        $this->session->set_flashdata('success', 'Product deleted succssfully!');
        //$this->session->set_flashdata('error', $error);
        redirect($this->ctrl_name);
    }

    public function edit_product($id = 1)
    {
        $data['msg'] = '';
        $data['id'] = $id;
        $data['l_s_act'] = 2;
        $data['sub_heading'] = 'Edit Product';
        $error = '';

        $where_edt = "product_id = $id";
        $where_fetch = "WHERE product_id=" . $id;

        if (isset($_POST['mode']) && $_POST['mode'] == "submitform") {
			
			$category_id = (isset($_POST['category_id'])) ? $this->common->mysql_safe_string($_POST['category_id']) : '0|0';
			$m_s_cat = explode("|",$category_id);
            $add_in['category_id'] = $m_s_cat[0];
			$add_in['sub_category_id'] = $m_s_cat[1];
			
			
			$add_in['item_id'] = $item_id = (isset($_POST['item_id'])) ? $this->common->mysql_safe_string($_POST['item_id']) : '0';			
            $add_in['name'] = $name = (isset($_POST['name'])) ? $this->common->mysql_safe_string($_POST['name']) : '';
			$add_in['name_en'] = $name_en = (isset($_POST['name_en'])) ? $this->common->mysql_safe_string($_POST['name_en']) : '';
            $add_in['price'] = $price = (isset($_POST['price'])) ? $this->common->mysql_safe_string($_POST['price']) : '';
			$add_in['sale_price'] = $sale_price = (isset($_POST['sale_price'])) ? $this->common->mysql_safe_string($_POST['sale_price']) : '';
			$add_in['unit'] = $unit = (isset($_POST['unit'])) ? $this->common->mysql_safe_string($_POST['unit']) : null;
			$add_in['unit_bag'] = $unit_bag = (isset($_POST['unit_bag'])) ? $this->common->mysql_safe_string($_POST['unit_bag']) : '';
            $add_in['kg_bag'] = $kg_bag = (isset($_POST['kg_bag'])) ? $this->common->mysql_safe_string($_POST['kg_bag']) :null;
            $add_in['driver_bonus'] = $driver_bonus = (isset($_POST['driver_bonus'])) ? $this->common->mysql_safe_string($_POST['driver_bonus']) : null;
			$add_in['carry_boy_bonus'] = $carry_boy_bonus = (isset($_POST['carry_boy_bonus'])) ? $this->common->mysql_safe_string($_POST['carry_boy_bonus']) : null;
			$add_in['stock_location'] = $stock_location = (isset($_POST['stock_location'])) ? $this->common->mysql_safe_string($_POST['stock_location']) : null;
			$add_in['re_order_point'] = $re_order_point = (isset($_POST['re_order_point'])) ? $this->common->mysql_safe_string($_POST['re_order_point']) : null;
			
			
            $add_in['status'] = $status = (isset($_POST['status'])) ? $this->common->mysql_safe_string($_POST['status']) : '';
            $add_in['date_added'] = date('Y-m-d');

			//die();
			if ($category_id == "") {
                $error = "Please select category";
			}
			if ($name == "") {
                $error = "Please enter name";
			}
			/*if ($short_description == "") {
                $error = "Please enter short description";
			}
			if ($description == "") {
                $error = "Please enter description";
			}*/
			if ($price == "") {
                $error = "Please enter price";
			}
			/*if ($status == "") {
                $error = "Please enter status";
			}

			if ($variations == "") {
				$add_in['variations'] = null;			 
		    }*/
		  
            if (isset($_FILES['main_image'])) {
                if ($_FILES['main_image']['name'] != "") {
                    $pusti = $this->common->gen_key(10);
                    $extension = strstr($_FILES['main_image']['name'], ".");
                    $thumbpath = $_FILES['main_image']['name'];
                    $thumbpath = preg_replace("/[^a-zA-Z0-9.]/", "", $thumbpath);
                    copy($_FILES['main_image']['tmp_name'], "../uploads/prod_images/" . $pusti . $thumbpath);
                    $add_in['main_image'] = $pusti . $thumbpath;
                }
            }

            for ($img = 2; $img < 7; $img++) {
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
            }

            if ($error == '') {
                $update_status = $this->common->updateRecord($this->tbl_name, $add_in, $where_edt);
                $this->session->set_flashdata('success', 'Information updated succssfully!');
                redirect($this->ctrl_name);
            } else {
                $data['msg'] = $error;
                $this->session->set_flashdata('error', $error);
            }
        }

        $where_cond = "where product_id=" . $id;
        $data['records'] = $records = $this->common->getOneRow($this->tbl_name, $where_cond);

        /*$where_cond = "where product_id=".$type_id;
        $data['type_rs'] = $type_rs = $this->common->getOneRow($this->tbl_name,$where_cond);*/

        $this->load->view('edit_product', $data);
        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');

    }
    //category
    public function categorylistall($start = 0, $otherparam = "")
    {
        
        $data['activaation_id'] = 1011;
        $data['sub_activaation_id'] = '1011_2';
        $data['title'] = 'Post';
        $data['start'] = $start;
        $data['maxm'] = $maxm = 50;
        $data['sub_heading'] = 'List';
        $fun_name = $this->controller . '/categorylistall';
        $data['fun_name'] = $fun_name;
        $data['add_link'] = $this->controller . '/category_action';
        $data['edit_link'] = $this->controller . '/category_action';

        $data['controller'] = $this->controller;


        $where_cond = " WHERE  status!='Delete' AND parent_id=0 ORDER BY sort_order";
        $data['results'] = $results = $this->common->getAllRow('product_category', $where_cond);

        $this->load->view('categorylistall', $data);
        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');
    }

    
    public function category_action($id = "")
    {

        $session_user_data = $this->session->userdata('user_data');
        $data['controller'] = $this->controller;
        $data['activaation_id'] = 1011;
        $data['sub_activaation_id'] = '1011_2';
        $data['title'] = 'Post';
        $data['id'] = (isset($id)) ? $this->common->mysql_safe_string($id) : '';
        $data['sub_heading'] = (isset($id) && $id != "") ? " Edit Post" : 'Add Post';
        $data['back_link'] = $this->controller . '/listshow';
        $data['fun_name'] = 'news_action/' . $id;
        $data['controller'] = $this->controller;

        $error = '';

        $data_info = array();
        // print_r($_POST);exit;
        if (isset($_POST['mode']) && $_POST['mode'] == "edit_content") {

            $event_dates = (isset($_POST['event_dates'])) ? $this->common->mysql_safe_string($_POST['event_dates']) : '';
            $heading_old = (isset($_POST['heading_old'])) ? $this->common->mysql_safe_string($_POST['heading_old']) : '';
            $add_in_m['heading'] = $heading = (isset($_POST['heading'])) ? $this->common->mysql_safe_string($_POST['heading']) : '';
            $add_in_m['blogger_name'] = $blogger_name = (isset($_POST['blogger_name'])) ? $this->common->mysql_safe_string($_POST['blogger_name']) : '';
            $add_in_m['descriptions'] = $descriptions = (isset($_POST['descriptions'])) ? $this->common->mysql_safe_string_descriptive($_POST['descriptions']) : '';
            $add_in_d['language_id'] = $language_id = (isset($_POST['language_id'])) ? $this->common->mysql_safe_string($_POST['language_id']) : '1';
            $add_in_m['newsblogs_cat_id'] = $newsblogs_cat_id = (isset($_POST['newsblogs_cat_id'])) ? $this->common->mysql_safe_string($_POST['newsblogs_cat_id']) : 0;

            $add_in_m['tags'] = $tags = (isset($_POST['tags'])) ? $this->common->mysql_safe_string($_POST['tags']) : '';
            //    $add_in_m['featured_image'] = $featured_image = (isset($_POST['featured_image'])) ? $this->common->mysql_safe_string($_POST['featured_image']) : '';
            $add_in_m['page_meta_title'] = $page_meta_title = (isset($_POST['page_meta_title'])) ? $this->common->mysql_safe_string($_POST['page_meta_title']) : '';
            $add_in_m['meta_keywords'] = $meta_keywords = (isset($_POST['meta_keywords'])) ? $this->common->mysql_safe_string($_POST['meta_keywords']) : '';
            $add_in_m['meta_description'] = $meta_description = (isset($_POST['meta_description'])) ? $this->common->mysql_safe_string($_POST['meta_description']) : '';

            $add_in_m['sort_no'] = $sort_no = (isset($_POST['sort_no'])) ? $this->common->mysql_safe_string($_POST['sort_no']) : '';
            $add_in_m['featured_image_alignment'] = $featured_image_alignment = (isset($_POST['featured_image_alignment'])) ? $this->common->mysql_safe_string($_POST['featured_image_alignment']) : 'none';

            $add_in_m['status_flag'] = $status_flag = (isset($_POST['status_flag'])) ? $this->common->mysql_safe_string($_POST['status_flag']) : '2';
            $add_in_m['add_date'] = $today = date("Y-m-d");
            $add_in_m['edit_date'] = null;
            $add_in_m['added_by_user_id'] = $session_user_data['user_id'];
            $add_in_m['edit_by_user_id'] = null;

            if (isset($_FILES['main_image']['name']) && $_FILES['main_image']['name'] != '') {

                //  $image_replace_name = $_FILES["main_image"]['name'];
                $filename = "post-" .time(). $this->common->tep_short_name_list($_FILES["main_image"]['name']);

                $upload = $this->common->UploadImage('main_image', 'uploads/news/', 0, $height_thumb = '', $width_thumb = '', $filename);

                if ($upload['uploaded'] == 'false') {
                    $error = $upload['uploadMsg'];
                } else {

                    $add_in_m['featured_image'] = $upload['imageFile'];

                    //    $this->load->library('Kishoreimagelib');
                    //    $image_old_path_only = '../uploads/news/';
                    //  $this->kishoreimagelib->load('../uploads/news/' . $add_in_m['featured_image'])->set_background_colour("#fff")->resize(808, 360, true)->save($image_old_path_only .  $add_in_m['featured_image'])->resize(360, 233, true)->save($image_old_path_only . "360" . $add_in_m['featured_image'])->resize(81, 75, true)->save($image_old_path_only . "81" . $add_in_m['featured_image']);
                }

            }

            if (isset($_FILES['pdf_file'])) {
                if ($_FILES['pdf_file']['name'] != "") {

                    $filename = time() . "-" . $this->common->tep_short_name_list($_FILES['pdf_file']['name']);
                    $file_allowed = array('pdf');
                    $upload = $this->common->UploadFiles('pdf_file', 'uploads/news/', $filename, $file_allowed);
                    if ($upload['uploaded'] == 'false') {

                        $error = $upload['uploadMsg'];
                    } else {
                        $add_in_m['pdf_file'] = $upload['imageFile'];
                        //print_r($add_in);
                    }

                }
            }

            if ($heading == '') {$error .= "Please enter Title  <br>";}

            if ($error == '') {

                if (!empty($event_dates)) {
                    $add_in_m['event_dates'] = $this->common->dateexplode("-", $event_dates);
                    //  $add_in_m['event_dates'] = $event_dates;
                }

                if ($id != "") {
                    if ($heading_old != $heading) {
                        $add_in_m['slug_name'] = $this->common->getUniqueSlug('wti_t_newsblogs', 'slug_name', $this->common->tep_short_name_list($heading), 'slug_name');
                    }

                    $where = "uuid = '" . $id . "'";
                    $update_status = $this->common->updateRecord('wti_t_newsblogs', $add_in_m, $where);

                    $sql = "delete from 	wti_m_search where section_auto_id='" . $id . "'  ";
                    $this->db->query($sql);
                    if ($add_in_m['status_flag'] == 1) {

                        $add_in_search['section_name'] = "Post";
                        $add_in_search['section_auto_id'] = $id;
                        $add_in_search['table_name'] = "wti_t_newsblogs";
                        $add_in_search['contents'] = $add_in_m['heading'] . "<br>" . $add_in_m['descriptions'];
                        $add_in_search['urls'] = site_url('latest-post');
                        $add_in_search['main_url'] = site_url('latest-post');
                        $add_in_search['slug_name'] = $add_in_m['slug_name'];

                        $search_id = $this->common->insertRecord('wti_m_search', $add_in_search);

                    }

                    $this->session->set_flashdata('success', 'Information updated successfully.');

                } else {

                    $uuid = "";
                    try {

                        // Generate a version 4 (random) UUID object
                        $uuid4 = Uuid::uuid4();
                        $add_in_m['uuid'] = $uuid4->toString();

                    } catch (UnsatisfiedDependencyException $e) {
                        //  echo 'Caught exception: ' . $e->getMessage() . "\n";
                    }

                    $add_in_m['slug_name'] = $this->common->getUniqueSlug('wti_t_newsblogs', 'slug_name', $this->common->tep_short_name_list($heading), 'slug_name');

                    $blogs_id = $this->common->insertRecord('wti_t_newsblogs', $add_in_m);

                    if ($add_in_m['status_flag'] == 1) {
                        $add_in_search['section_name'] = "Post";
                        $add_in_search['section_auto_id'] = $add_in_m['uuid'];
                        $add_in_search['table_name'] = "wti_t_newsblogs";
                        $add_in_search['contents'] = $add_in_m['heading'] . "<br>" . $add_in_m['descriptions'];
                        $add_in_search['urls'] = site_url('latest-post');
                        $add_in_search['main_url'] = site_url('latest-post');
                        $add_in_search['slug_name'] = $add_in_m['slug_name'];

                        $search_id = $this->common->insertRecord('wti_m_search', $add_in_search);

                    }

                    $this->session->set_flashdata('success', 'Information added successfully.');

                }

                $this->common->createjson('wti_t_newsblogs', 'news','select *    from   wti_t_newsblogs b  	where   b.delete_status=0 and status_flag=1 order by  b.newsblogs_id desc limit 0,2','multiple','home');


                redirect($this->controller . '/listshow');
            } else {
                //$this->session->set_userdata('error', $error);
                $data['error_msg'] = $error;
            }
        }

        //  $where_cond = "where delete_status=0  ORDER BY cate_name  ";
        //  $data['mst_category_blogs'] = $mst_category_blogs = $this->common->getAllRow('m_newsblog_cat', $where_cond);

        $data_info = array();
        if ($id != "") {
            $sql = "select *  from  wti_t_newsblogs b where   b.delete_status=0 and b.uuid='" . $id . "'   order by  b.newsblogs_id desc";
            $query = $this->db->query($sql);
            if ($query->num_rows() > 0) {
                $data_info = $query->row_array();
                $data['records'] = $data_info;
                $data['records']['event_dates'] = $this->common->getDateFormat($data_info['event_dates'], 'd-m-Y');
            }
        } else {
            if (isset($add_in_m) && sizeof($add_in_m) > 0) {
                $data_info = (isset($_POST)) ? $_POST : '';
                $data['records'] = $data_info;
            } else {

                $sql = "select count('')  as numrows  from wti_t_newsblogs        where     (delete_status=0 or delete_status IS NULL)   ";
                $query = $this->db->query($sql);
                $resultdata = $query->row_array();
                $data['records']['sort_no'] = $resultdata['numrows'] + 1;
            }
        }

        $this->load->view('websiteadmin/news_action', $data);
        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');

    }

    public function add_category()
    {
        $data['msg'] = '';
        $error = '';
        $data['l_s_act'] = 3;
        $data['sub_heading'] = 'Add category';
        $error = '';

        if (isset($_POST['mode']) && $_POST['mode'] == "submitform") {

            $add_in['name'] = $name = (isset($_POST['name'])) ? $this->common->mysql_safe_string($_POST['name']) : '';
            $add_in['description'] = $description = (isset($_POST['description'])) ? $this->common->mysql_safe_string($_POST['description']) : '';

            $add_in['name_en'] = $name_en = (isset($_POST['name_en'])) ? $this->common->mysql_safe_string($_POST['name_en']) : '';
            $add_in['description_en'] = $description_en = (isset($_POST['description_en'])) ? $this->common->mysql_safe_string($_POST['description_en']) : '';

            $add_in['status'] = $status = (isset($_POST['status'])) ? $this->common->mysql_safe_string($_POST['status']) : '';
            $add_in['sort_order'] = $sort_order = (isset($_POST['sort_order'])) ? $this->common->mysql_safe_string($_POST['sort_order']) : '';
            $add_in['date_added'] = date('Y-m-d h:i:s');
			$add_in['parent_id'] = $parent_id = (isset($_POST['parent_id'])) ? $this->common->mysql_safe_string($_POST['parent_id']) : '';

            //die();
            if (isset($_FILES['main_image'])) {
                if ($_FILES['main_image']['name'] != "") {
                    $pusti = $this->common->gen_key(10);
                    $extension = strstr($_FILES['main_image']['name'], ".");
                    $thumbpath = $_FILES['main_image']['name'];
                    $thumbpath = preg_replace("/[^a-zA-Z0-9.]/", "", $thumbpath);
                    copy($_FILES['main_image']['tmp_name'], "../uploads/category/" . $pusti . $thumbpath);
                    $add_in['main_image'] = $pusti . $thumbpath;
                }
            }

            $chkUserInfo = $this->common->getSingleInfoBy('product_category', 'name', $name);
            if (sizeof($chkUserInfo) > 0) {
                $error = $name . "   is already added";
            }

            if ($error == '') {

                $this->common->insertRecord('product_category', $add_in);
                $this->session->set_flashdata('success', 'Information added succssfully!');
                redirect($this->ctrl_name . "/categorylistall");
            } else {
                $this->session->set_flashdata('error', $error);
            }
        }

        $this->load->view('add_category', $data);
        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');

    }

    public function delete_category($id = 0){
        $where_edt = "category_id = $id";
        $add_in['status'] = 'Delete';
        $update_status = $this->common->updateRecord('product_category', $add_in, $where_edt);
        $this->session->set_flashdata('success', 'Product deleted succssfully!');
        redirect($this->ctrl_name . "/categorylistall");
    }

    public function edit_category($id = 1)
    {
        $data['msg'] = '';
        $data['id'] = $id;
        $data['l_s_act'] = 3;
        $data['sub_heading'] = 'Edit category';
        $error = '';

        $where_edt = "category_id = $id";
        $where_fetch = "WHERE category_id=" . $id;

        if (isset($_POST['mode']) && $_POST['mode'] == "submitform") {

            $add_in['name'] = $name = (isset($_POST['name'])) ? $this->common->mysql_safe_string($_POST['name']) : '';
            $add_in['description'] = $description = (isset($_POST['description'])) ? $this->common->mysql_safe_string($_POST['description']) : '';

            $add_in['name_en'] = $name_en = (isset($_POST['name_en'])) ? $this->common->mysql_safe_string($_POST['name_en']) : '';
            $add_in['description_en'] = $description_en = (isset($_POST['description_en'])) ? $this->common->mysql_safe_string($_POST['description_en']) : '';

            $add_in['status'] = $status = (isset($_POST['status'])) ? $this->common->mysql_safe_string($_POST['status']) : '';
            $add_in['sort_order'] = $sort_order = (isset($_POST['sort_order'])) ? $this->common->mysql_safe_string($_POST['sort_order']) : '';
			
			$add_in['parent_id'] = $parent_id = (isset($_POST['parent_id'])) ? $this->common->mysql_safe_string($_POST['parent_id']) : '';

            //die();
            if (isset($_FILES['main_image'])) {
                if ($_FILES['main_image']['name'] != "") {
                    $pusti = $this->common->gen_key(10);
                    $extension = strstr($_FILES['main_image']['name'], ".");
                    $thumbpath = $_FILES['main_image']['name'];
                    $thumbpath = preg_replace("/[^a-zA-Z0-9.]/", "", $thumbpath);
                    copy($_FILES['main_image']['tmp_name'], "../uploads/category/" . $pusti . $thumbpath);
                    $add_in['main_image'] = $pusti . $thumbpath;
                }
            }

            if ($error == '') {
                $update_status = $this->common->updateRecord('product_category', $add_in, $where_edt);
                $this->session->set_flashdata('success', 'Information updated succssfully!');

                redirect($this->ctrl_name . "/categorylistall");

            } else {
                $data['msg'] = $error;
            }
        }

        $where_cond = "where category_id='" . $id . "'";
        $data['records'] = $records = $this->common->getOneRow('product_category', $where_cond);

        $this->load->view('edit_category', $data);
        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');

    }
    //end of category
}
