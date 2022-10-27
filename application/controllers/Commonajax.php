<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Commonajax extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('common');
        $this->load->model('services');
        $this->load->helper('security');
        $this->load->library('email');
        $this->load->helper('url_helper');
        //if session not exist

    }
    public function add_wish_list()
    {
        //extract($_POST);
        $json = array();
        if (isset($_POST['product_id'])) {
            $product_id = $this->common->mysql_safe_string($_POST['product_id']);
        } else {
            $product_id = 0;
        }
        $this->load->model('productmodal');

        $product_info = $this->productmodal->getProduct($product_id);

        if ($product_info) {
            $pro_slug = $this->common->getDbValue($product_info['name_slug']);
            if ($pro_slug == "") {
                $pro_slug = $product_info['product_id'];
            }
            if ($this->session->userdata('lux_user_id')) {
                $this->db->query("DELETE FROM customer_wishlist WHERE customer_id = '" . (int) $this->session->userdata('lux_user_id') . "' AND product_id = '" . (int) $product_id . "'");

                $date_added = date('Y-m-d');
                $this->db->query("INSERT INTO customer_wishlist SET customer_id = '" . (int) $this->session->userdata('lux_user_id') . "', product_id = '" . (int) $product_id . "', date_added = '" . $date_added . "'");

                $json['success'] = sprintf('Success: You have added <a href="%s">%s</a> to your <a href="%s">wish list</a>!', site_url('detail/' . $pro_slug . '/' . $product_info['product_id']), $product_info['name'], site_url('my_dashboard/my_wish_list'));

                //$query = $this->db->query("SELECT COUNT(*) AS total FROM customer_wishlist WHERE customer_id = '" .(int)$this->session->userdata('lux_user_id') . "'");
            } else {
                $json['success'] = sprintf('You must <a href="%s">login</a> or <a href="%s">create an account</a> to save <a href="%s">%s</a> to your <a href="%s">wish list</a>', site_url('login'), site_url('login'), site_url('detail/' . $pro_slug . '/' . $product_info['product_id']), $product_info['name'], site_url('my_dashboard/my_wish_list'));

            }

            echo json_encode($json);
            die();

        } else {

        }
    }
    public function rem_wish_list()
    {
        //extract($_POST);

        if ($_POST['frm_mode'] == 'rem_w_list') {

            $pro_id = $this->common->mysql_safe_string($_POST['product_id']);

            $where = "product_id = '" . $pro_id . "' AND customer_id='" . $this->session->userdata('lux_user_id') . "' ";
            $this->common->deleteRecord('customer_wishlist', $where);
            echo 'DONE';
            exit;
        }
    }

    public function country()
    {
        $country_id = $this->input->get('country_id');
        $country_info = $this->services->getCountryNew($country_id);
        $json = array();
        if ($country_info) {
            $json = array(
                'country_id' => $country_info['country_id'],
                'name' => $country_info['name'],
                'iso_code_2' => $country_info['iso_code_2'],
                'iso_code_3' => $country_info['iso_code_3'],
                'postcode_required' => $country_info['postcode_required'],
                'zone' => $this->services->getZonesByCountryId($country_id),
                'status' => $country_info['status'],
                'iso_code_3' => $country_info['iso_code_3'],
            );
        }
        //$this->response->addHeader('Content-Type: application/json');
        //$this->response->setOutput(json_encode($json));
        echo json_encode($json);
        die();
    }
}
