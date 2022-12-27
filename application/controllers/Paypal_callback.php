<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paypal_callback extends CI_Controller {
 
		public $controller = "paypal_callback";
		public $domain_id = 1;
		public function __construct(){
			parent::__construct();
			$this->load->library('session');
			$this->load->model('common');
			$this->load->model('services');
 			$this->load->model('tax');
			$this->load->helper('security');
			$this->load->library('email');
			$this->load->helper('url_helper');

			  
			 
		}


	public function index(){ 
	
		if (isset($_POST['custom'])) {
			$order_id = $_POST['custom'];
		} else {
			$order_id = 0;
		}		
  
		$order_info = $this->services->getOrder($order_id);
		if ($order_info) {
			$request = 'cmd=_notify-validate';

			foreach ($_POST as $key => $value) {
				$request .= '&' . $key . '=' . urlencode(html_entity_decode($value, ENT_QUOTES, 'UTF-8'));
			}

			if (!$this->services->getold('pp_standard_test')) {
				$curl = curl_init('https://www.paypal.com/cgi-bin/webscr');
			} else {
				$curl = curl_init('https://www.sandbox.paypal.com/cgi-bin/webscr');
			}

			curl_setopt($curl, CURLOPT_POST, true);
			curl_setopt($curl, CURLOPT_POSTFIELDS, $request);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($curl, CURLOPT_HEADER, false);
			curl_setopt($curl, CURLOPT_TIMEOUT, 30);
			curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

			$response = curl_exec($curl);

			if (!$response) {
			//	$this->log->write('PP_STANDARD :: CURL failed ' . curl_error($curl) . '(' . curl_errno($curl) . ')');
			}

			// if ($this->services->getold('pp_standard_debug')) {
			// 	//$this->log->write('PP_STANDARD :: IPN REQUEST: ' . $request);
			// //	$this->log->write('PP_STANDARD :: IPN RESPONSE: ' . $response);
			// }

			if ((strcmp($response, 'VERIFIED') == 0 || strcmp($response, 'UNVERIFIED') == 0) && isset($_POST['payment_status'])) {
				$order_status_id = 1;//$this->services->getold('config_order_status_id');

				switch($_POST['payment_status']) {
					
					case 'Completed':
						$receiver_match = (strtolower($_POST['receiver_email']) == strtolower($this->services->getold('pp_standard_email')));

						$total_paid_match = ((float)$_POST['mc_gross'] == $this->currencymodal->format($order_info['total'], $order_info['currency_code'], $order_info['currency_value'], false));

						if ($receiver_match && $total_paid_match) {
							$order_status_id = 2;
						}
						
						if (!$receiver_match) {
							//$this->log->write('PP_STANDARD :: RECEIVER EMAIL MISMATCH! ' . strtolower($_POST['receiver_email']));
						}
						
						if (!$total_paid_match) {
							//$this->log->write('PP_STANDARD :: TOTAL PAID MISMATCH! ' . $_POST['mc_gross']);
						}
						break;
					case 'Canceled_Reversal':
						$order_status_id = -1;
						break;	
					case 'Denied':
						$order_status_id = -1;
						break;
					case 'Expired':
						$order_status_id = -1;
						break;
					case 'Failed':
						$order_status_id = -3;
						break;
					case 'Pending':
						$order_status_id = 1;
						break;
					case 'Processed':
						$order_status_id = -2;
						break;
					case 'Refunded':
						$order_status_id = -1;
						break;
					case 'Reversed':
						$order_status_id = -1;
						break;
					case 'Voided':
						$order_status_id = -1;
						break;
				}

//				$this->services->addOrderHistory($order_id, $order_status_id);
				$this->services->addOrderHistory($order_id, $order_status_id,'',1,false);

			} else {
//				$this->services->addOrderHistory($order_id, $this->services->getold('config_order_status_id'));
				$this->services->addOrderHistory($order_id, 0,'',1,false);

			}

			curl_close($curl);
		}	
	
	}
	  
	  		
	 
}