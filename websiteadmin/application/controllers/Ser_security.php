<?php
defined('BASEPATH') or exit('No direct script access allowed');

use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\LabelAlignment;
use Endroid\QrCode\QrCode;
use Kreait\Firebase;
use Kreait\Firebase\Exception\MessagingException;
use Kreait\Firebase\Messaging\CloudMessage;
use Kreait\Firebase\Util\JSON;

class Ser_security extends CI_Controller
{
    public $db;
    public $m_act = 0;
    public $s_act = 1;

    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('common');
		//$this->load->model('services');
		$this->load->model('ecommercemodal');
        $this->load->model('securitymodel');
        $this->load->model('currencymodal');

        $this->load->helper('security');
        $this->load->helper('url_helper');
        $this->db = $this->load->database('default', true);

    }
	
    public function get_scan_cool_box($returnformat = "json"){

        $arr = array('status' => 0, 'errorMessage' => "NOT APPROVED");
        $data_json = file_get_contents('php://input');

        $received_signature = (isset($_SERVER['HTTP_DOICEX_SIGNATURE'])) ? $this->common->mysql_safe_string($_SERVER['HTTP_DOICEX_SIGNATURE']) : ''; // $_SERVER['HTTP_DOICEX_SIGNATURE'];
        $computed_signature = hash_hmac('sha256', $data_json, Secret_Key);
        header('Content-Type: application/json');

        if ($received_signature != $computed_signature) {
            $arr = array('status' => 0, 'errorMessage' => "Invalid Signature");
            print_r($this->common->jsonencode($arr));
            die();
        }

        $data_json = json_decode($data_json, true);
        if (isset($data_json['frm_mode']) && $data_json['frm_mode'] == 'get_scan_cool_box') {
			
			
			$cust_id = (isset($data_json['cust_id'])) ? $this->common->mysql_safe_string($data_json['cust_id']) : '0';
			$uuid = (isset($data_json['uuid'])) ? $this->common->mysql_safe_string($data_json['uuid']) : '0';

			$cust_sql = " SELECT * FROM coolbox_cust_master WHERE box_id=".$uuid." AND cust_id=".$cust_id." order by id desc  ";
			$query_result = $this->db->query($cust_sql);
			$box_assigned = $query_result->row_array();
			
			if($box_assigned) {
	
				$arr['status'] = 1;
				$arr['errorMessage'] = 'APPROVED';
			} else {
				$arr = array('status' => 0, 'errorMessage' => "NOT APPROVED");
			}
			
        }

        if ($returnformat == "json") {
            print_r($this->common->jsonencode($arr));
        } else {
            print_r($arr);
        }
        die();
    }
	
    public function get_inventry($returnformat = "json"){

        $arr = array('status' => 0, 'errorMessage' => "INVALID");
        $data_json = file_get_contents('php://input');

        $received_signature = (isset($_SERVER['HTTP_DOICEX_SIGNATURE'])) ? $this->common->mysql_safe_string($_SERVER['HTTP_DOICEX_SIGNATURE']) : ''; // $_SERVER['HTTP_DOICEX_SIGNATURE'];
        $computed_signature = hash_hmac('sha256', $data_json, Secret_Key);
        header('Content-Type: application/json');

        if ($received_signature != $computed_signature) {
            $arr = array('status' => 0, 'errorMessage' => "Invalid Signature");
            print_r($this->common->jsonencode($arr));
            die();
        }

        $data_json = json_decode($data_json, true);
        if (isset($data_json['frm_mode']) && $data_json['frm_mode'] == 'get_inventry') {
			
			$uuid = (isset($data_json['uuid'])) ? $this->common->mysql_safe_string($data_json['uuid']) : '0';
			$LANGCODE = (isset($data_json['LANGCODE'])) ? $this->common->mysql_safe_string($data_json['LANGCODE']) : 'EN';

			$inv_sql = " SELECT * FROM inventory_master WHERE driver_id=".$uuid." AND inv_date='".date('Y-m-d')."' AND check_out_secu=0 AND status='Active' order by inv_id ";
			$query_result = $this->db->query($inv_sql);
			$inv_rs = $query_result->row_array();
			
			if($inv_rs) {

				$veh_sql = " SELECT * FROM master_vehicles WHERE id=".$inv_rs['vehicle_id']." order by id ";
				$query_result = $this->db->query($veh_sql);
				$veh_rs = $query_result->row_array();
				
				$arr['status'] = 1;
				$arr['errorMessage'] = 'VALID';
				$arr['inv_id'] = $inv_rs['inv_id'];
				$arr['vehicle_no'] = $this->common->mysql_safe_string($veh_rs['number_plate']);
				$invList = $this->ecommercemodal->getCarryBoyList($inv_rs['driver_id']);
				$arr['carry_boys_list'] = $invList;
				$invList = $this->securitymodel->getInventryList($inv_rs['inv_id'],$LANGCODE);
				$arr['items_list'] = $invList;

				
			} else {
				$arr = array('status' => 0, 'errorMessage' => "INVALID");
			}
			
        }

        if ($returnformat == "json") {
            print_r($this->common->jsonencode($arr));
        } else {
            print_r($arr);
        }
        die();
    }
	
	
    public function get_inventry_history($returnformat = "json"){

        $arr = array('status' => 0, 'errorMessage' => "NO RECORDS FOUND");
        $data_json = file_get_contents('php://input');

        $received_signature = (isset($_SERVER['HTTP_DOICEX_SIGNATURE'])) ? $this->common->mysql_safe_string($_SERVER['HTTP_DOICEX_SIGNATURE']) : ''; // $_SERVER['HTTP_DOICEX_SIGNATURE'];
        $computed_signature = hash_hmac('sha256', $data_json, Secret_Key);
        header('Content-Type: application/json');

        if ($received_signature != $computed_signature) {
            $arr = array('status' => 0, 'errorMessage' => "Invalid Signature");
            print_r($this->common->jsonencode($arr));
            die();
        }

        $data_json = json_decode($data_json, true);
        if (isset($data_json['frm_mode']) && $data_json['frm_mode'] == 'get_inventry_history') {
			
			$uuid = (isset($data_json['uuid'])) ? $this->common->mysql_safe_string($data_json['uuid']) : '0';
			$user_id = (isset($data_json['user_id'])) ? $this->common->mysql_safe_string($data_json['user_id']) : '0';
			$LANGCODE = (isset($data_json['LANGCODE'])) ? $this->common->mysql_safe_string($data_json['LANGCODE']) : 'EN';
			
			$inv_date = date('Y-m-d');
			$inv_date = '2020-06-20';
			

			$inv_sql = " SELECT * FROM inventory_master WHERE (check_out_secu=".$user_id." OR check_in_secu=".$user_id.") AND inv_date='".$inv_date."' order by inv_id ";
			$query_result = $this->db->query($inv_sql);
			$inv_rs = $query_result->row_array();
			
			if($inv_rs) {
				
				$in_out_count = $this->securitymodel->get_in_out_count($uuid,$user_id,$inv_date,$LANGCODE);
				$in_out_count = explode("###", $in_out_count);
				
				$arr['status'] = 1;
				$arr['errorMessage'] = '';
				$arr['out_counter'] = $in_out_count[0];
				$arr['in_counter'] = $in_out_count[1];		
				$invList = $this->securitymodel->getInventryHistory($uuid,$user_id,$inv_date,$LANGCODE);
				$arr['inv_list'] = $invList;

				
			} else {
				$arr = array('status' => 0, 'errorMessage' => "NO RECORDS FOUND");
			}
			
        }

        if ($returnformat == "json") {
            print_r($this->common->jsonencode($arr));
        } else {
            print_r($arr);
        }
        die();
    }
		
	function set_check_out($returnformat = "json"){
		
		if(isset($_POST['frm_mode']) && $_POST['frm_mode']=="set_check_out"){
			
			$inv_id = (isset($_POST['inv_id'])) ? $this->common->mysql_safe_string($_POST['inv_id']) : '0';
			$add_in['check_out_secu'] = $check_out_secu = (isset($_POST['check_out_secu'])) ? $this->common->mysql_safe_string($_POST['check_out_secu']) : '0';
			$add_in['check_out_date'] = date("Y-m-d h:i:s");
			//$add_in['c_boy_count'] = $c_boy_count = (isset($_POST['c_boy_count'])) ? $this->common->mysql_safe_string($_POST['c_boy_count']) : '0';			
			
				if (isset($_FILES['checkout_photo'])) {
					if ($_FILES['checkout_photo']['name'] != "") {
						$pusti = $this->common->gen_key(10);
						$extension = strstr($_FILES['checkout_photo']['name'], ".");
						$thumbpath = $_FILES['checkout_photo']['name'];
						$thumbpath = preg_replace("/[^a-zA-Z0-9.]/", "", $thumbpath);
						copy($_FILES['checkout_photo']['tmp_name'], "./uploads/checkout_images/" . $pusti . $thumbpath);
						$add_in['checkout_photo'] = $pusti . $thumbpath;
					}
				}
							
				$where_edt = "inv_id = $inv_id";
				$update_status = $this->common->updateRecord('inventory_master', $add_in, $where_edt);
				$arr = array('status' => 0, 'errorMessage' => "DONE");
				if ($returnformat == "json") {
					print_r($this->common->jsonencode($arr));
				} else {
					print_r($arr);
				}
				die();
		}
	}
	
	function set_check_in($returnformat = "json"){
		
		if(isset($_POST['frm_mode']) && $_POST['frm_mode']=="set_check_in"){
			
			$inv_id = (isset($_POST['inv_id'])) ? $this->common->mysql_safe_string($_POST['inv_id']) : '0';
			$add_in['check_in_secu'] = $check_in_secu = (isset($_POST['check_in_secu'])) ? $this->common->mysql_safe_string($_POST['check_in_secu']) : '0';
			$add_in['check_in_date'] = date("Y-m-d h:i:s");
			$in_item_array = (isset($_POST['in_item_array'])) ? $this->common->mysql_safe_string($_POST['in_item_array']) : '';			
			$in_item_array = json_decode($in_item_array);
			//die();
			
			
				if (isset($_FILES['checkin_photo'])) {
					if ($_FILES['checkin_photo']['name'] != "") {
						$pusti = $this->common->gen_key(10);
						$extension = strstr($_FILES['checkin_photo']['name'], ".");
						$thumbpath = $_FILES['checkin_photo']['name'];
						$thumbpath = preg_replace("/[^a-zA-Z0-9.]/", "", $thumbpath);
						copy($_FILES['checkin_photo']['tmp_name'], "./uploads/checkin_images/" . $pusti . $thumbpath);
						$add_in['checkin_photo'] = $pusti . $thumbpath;
					}
				}

			/*$in_item_array = '[
			  {
				"rec_id": "2",
				"prod_chk_in_qty": "1"
			  },
			  {
				"rec_id": "3",
				"prod_chk_in_qty": "1"
			  },
			  {
				"rec_id": "4",
				"prod_chk_in_qty": "1"
			  }
			]';*/
			
			

			if(sizeof($in_item_array)) {
				
				foreach ($in_item_array as $atten) {
					
						$add_in_inv['prod_chk_in_qty'] = $atten->prod_chk_in_qty;
				        $where_edt = "rec_id = ".$atten->rec_id." AND inv_id=".$inv_id;
						$update_status = $this->common->updateRecord('inventory_receipt', $add_in_inv, $where_edt);
						
				}				
			}
			
				$where_edt = "inv_id = $inv_id";
				$update_status = $this->common->updateRecord('inventory_master', $add_in, $where_edt);
				$arr = array('status' => 1, 'errorMessage' => "DONE");
				if ($returnformat == "json") {
					print_r($this->common->jsonencode($arr));
				} else {
					print_r($arr);
				}
				
				die();
			
		}
	}	
}
//
