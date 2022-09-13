<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;
use Ramsey\Uuid\Uuid;

class Products extends CI_Controller
{
    public $db;
    public $ctrl_name = 'products';
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
    public function categorylistall()
    {
        $data['msg'] = '';
        $error = '';
        $data['l_s_act'] = 3;
        $data['sub_heading'] = 'Category List';

        $where_cond = " WHERE  status!='Delete' AND parent_id=0 ORDER BY sort_order";
        $data['results'] = $results = $this->common->getAllRow('product_category', $where_cond);

        $this->load->view('categorylistall', $data);
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
