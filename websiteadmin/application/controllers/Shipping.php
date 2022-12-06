<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Shipping extends CI_Controller
{
    public $db;
    public $ctrl_name = 'shipping';
    public $controller = 'shipping';
    public $pg_title = 'shippings';
    public $m_act = 7;

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('common');
        $this->load->model('configmodal');

        $this->load->helper('security');
        $this->load->library('email');
        $this->load->helper('url_helper');
        $this->db = $this->load->database('default', true);
        $this->common->check_user_session();
    }

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
    public function index()
    {
        $data['activaation_id'] = 1101;
        $data['sub_activaation_id'] = '1101_6';
        $data['title'] = 'Shipping';
        $this->listall(0);
        //
        $this->session->unset_userdata('success');
    }
    public function listall($start = 0)
    {
    
        $data['activaation_id'] = 1101;
        $data['sub_activaation_id'] = '1101_6';
        $data['title'] = 'Product Group';
        $data['start'] = $start;
        $data['maxm'] = $maxm = 50;
        $data['sub_heading'] = 'Product Group List';
        $fun_name = $this->controller . '/listall';
        $data['fun_name'] = $fun_name;
        $data['add_link'] = $this->controller . '/shipping_action';
        $data['edit_link'] = $this->controller . '/shipping_action';

        $data['controller'] = $this->controller;

        $resultdata = array();
        $sql = "select *  from  m_geo_zone_shipping b 	  ";// . $limit_qry;
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $resultdata = $query->result_array();
        }
        $data['results'] = $resultdata;

        $sql = "select count('')  as numrows  from m_geo_zone_shipping b     ";
        $query = $this->db->query($sql);
        $resultdata = $query->row_array();
        $data['num_row'] = $resultdata['numrows']; //= $this->common->numRow($this->tablename,$where_cond);


        $this->load->view('shipping_view', $data);
    }
    public function shipping_action($id = "")
    {
        $session_user_data = $this->session->userdata('admin_user_data');
        $data['controller'] = $this->controller;
        $data['activaation_id'] = 1011;
        $data['sub_activaation_id'] = '1011_4';
        $data['title'] = 'Category';
        $data['id'] = (isset($id)) ? $this->common->mysql_safe_string($id) : '';
        $data['sub_heading'] = (isset($id) && $id != "") ? " Edit Product Group" : 'Add Product Group';
        $data['back_link'] = $this->controller . '/listall';
        $data['fun_name'] = 'shipping_action/' . $id;
        $data['controller'] = $this->controller;

        $error = '';

        $data_info = array();
        // print_r($_POST);exit;
        if (isset($_POST['mode']) && $_POST['mode'] == "submitform") {

            
           
            $add_in_m['free_shipping'] = $free_shipping = (isset($_POST['free_shipping'])) ? $this->common->mysql_safe_string($_POST['free_shipping']) : '';
           
            $add_in_m['shipping_charge'] = $shipping_charge = (isset($_POST['shipping_charge'])) ? $this->common->mysql_safe_string_descriptive($_POST['shipping_charge']) : '';
          
            
             
 

            if($free_shipping=="") {	$error="<li>Please enter up to free shipping amount</li>";	}
            if($shipping_charge=="") {	$error="<li>Please enter shipping charge</li>";	}

            if ($error == '') {

                

                if ($id != "") {
                    
                    $where = "geo_zone_id = '" . $id . "'";
                    $update_status = $this->common->updateRecord('m_geo_zone_shipping', $add_in_m, $where);

 
                   

                    $this->session->set_flashdata('success', 'Information updated successfully.');

                } else {
                     
                    

                   
                    $blogs_id = $this->common->insertRecord('m_geo_zone_shipping', $add_in_m);

                   

                    $this->session->set_flashdata('success', 'Information added successfully.');

                }

                
                redirect($this->controller . '/listall');

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
            $sql = "select *  from  m_geo_zone_shipping b where     b.geo_zone_id='" . $id . "'  ";
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

                $sql = "select count('')  as numrows  from m_geo_zone_shipping     ";
                $query = $this->db->query($sql);
                $resultdata = $query->row_array();
                $data['records']['sort_order'] = $resultdata['numrows'] + 1;
            }
        }
         
        $this->load->view('shipping_action', $data);
        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');

    }
}
