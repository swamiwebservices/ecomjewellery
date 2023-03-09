<?php
error_reporting(E_ALL);
//use Hackzilla\PasswordGenerator\Generator\ComputerPasswordGenerator;
//use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;
//use Ramsey\Uuid\Uuid;

class Services extends CI_Model
{

    public function __construct()
    {
    }

    public function getTableData($mytable, $where = "", $returnformat = "json")
    {
        //SHOW VARIABLES WHERE Variable_name LIKE  '%max_allowed_packet%'
        $params = $this->common->getRecord($mytable, $where);

        if ($returnformat == "json") {
            return $this->common->jsonencode($params);
            die();
        } else {
            return $params;
            die();
        }
    }
    public function getRecord($mytable, $where = "", $returnformat = "json")
    {
        //SHOW VARIABLES WHERE Variable_name LIKE  '%max_allowed_packet%'
        $params = $this->common->getRecord($mytable, $where);

        if ($returnformat == "json") {
            return $this->common->jsonencode($params);
            die();
        } else {
            return $params;
            die();
        }
    }

    public function getSetting($key='') {
		 
		$value= "";
		$query = $this->db->query("SELECT * FROM `setting` where `key`='".$key."' ");
		
		if($query->num_rows() > 0){
			$row = $query->row_array();
			if($row['serialized']){
				$value= json_decode($this->common->getDbValue($row['value']));
				
			} else {
				$value= $this->common->getDbValue($row['value']);
			}
			
		} 
		return $value;

    }
    
 
   
    public function update_password($params = array(), $from = "WEB", $returnformat = "json")
    {
        $add_in = array();
        $add_in['login_password'] = $new_password = (isset($params['new_password'])) ? $this->common->mysql_safe_string($params['new_password']) : '';

        $new_password2 = (isset($params['new_password2'])) ? $this->common->mysql_safe_string($params['new_password2']) : '';
        $errorData = array();
        if ($new_password == '') {
            $errorData[] = "Please enter new password<br>";
        }

        if ($new_password2 == '') {
            $errorData[] = "Please enter confirm password<br>";
        }
        if (sizeof($errorData) <= 0) {
            $add_in['modified'] = date("Y-m-d");

            $this->common->updateRecord('customer_master', $add_in, "uuid='" . $params['uuid'] . "'");

            $arr = array('status' => 1, 'retData' => $params, 'errorData' => array());
            if ($returnformat == "json") {
                return $this->common->jsonencode($arr);
                die();
            } else {
                return $arr;
                die();
            }
        } else {
             // print_r($errorData);
             $arr = array('status' => 0, 'retData' => $params, 'errorData' => $errorData);
             if ($returnformat == "json") {
                 return $this->common->jsonencode($arr);
                 die();
             } else {
                 return $arr;
                 die();
             }
        }
    }
     

    public function sendOrderMail($order_id = 0, $order_data, $mail_id = 0, $sms_id = 0, $order_for = 'membership')
    {

       
    }
     
    //ecom  market place section 
 
    //end of ecom  market place section 

    public function getDomainId()
    {
        $domain_name = $_SERVER['HTTP_HOST'];
        $domain_name   = str_replace("www.","",$domain_name);
        $domain_list = $this->config->item("DOMAINs");
        $domain_id = array_search($domain_name, $domain_list);
        if (!$domain_id) {
            $domain_id = 1;
        }
        $domain_id = 1;
        return $domain_id;
    }
    public function getDomainAddress()
    {
        $date1 = date("Y");
        $date2 = date("Y") + 1;
        $domain_name = $_SERVER['HTTP_HOST'];
        $domain_name   = str_replace("www.","",$domain_name);

        // $domain_list = $this->config->item("DOMAINs");
        // $domain_id = array_search($domain_name, $domain_list);
        // if (!$domain_id) {
        //     $domain_id = 1;
        // }
        
        $domain_id = 1;
        $HTTP_DOMAIN_URL = site_url();
        $LOGO_URL = "https://www.bondbeyond.ae/assets/img/logo/logo.png";

        $address = array('DOMAIN_ID' => $domain_id, 'LOGO_URL' => $LOGO_URL, 'HTTP_DOMAIN_URL' => $HTTP_DOMAIN_URL, 'DOMAINNAME' => $domain_name, 'DOMAIN_ADDRESS_FOOTER' => "Address: Shop No.34, AL Kifaf Oasis, Near Burjuman Metro exit2,Karama, Dubai <br /> Phone: +971 42968516 | Email: info@bondbeyond.ae<br /> Web <a href='http://bondbeyond.ae/' target='_blank'>{$domain_name}</a><br /> &copy;  {$date1}- {$date2} - All rights reserved ", 'CONTACTUS_URL' => site_url('contact-us'));

        // $LOGO_URL = "https://www.bondforu.com/assets/img/logo/logo.png";

        // $address[2] = array('DOMAIN_ID' => $domain_id, 'LOGO_URL' => $LOGO_URL, 'HTTP_DOMAIN_URL' => $HTTP_DOMAIN_URL, 'DOMAINNAME' => $domain_name, 'DOMAIN_ADDRESS_FOOTER' => "Address: Shop No.34, AL Kifaf Oasis, Near Burjuman Metro exit2,Karama, Dubai <br /> Phone: +971 42968516 | Email: info@bondforu.com<br /> Web <a href='http://bondforu.com/' target='_blank'>{$domain_name}</a><br /> &copy;  {$date1}- {$date2} - All rights reserved ", 'CONTACTUS_URL' => site_url('contact-us'));

        // $LOGO_URL = "https://www.bondforu.com/assets/img/logo/logo.png";

        // $address[3] = array('DOMAIN_ID' => $domain_id, 'LOGO_URL' => $LOGO_URL, 'HTTP_DOMAIN_URL' => $HTTP_DOMAIN_URL, 'DOMAINNAME' => $domain_name, 'DOMAIN_ADDRESS_FOOTER' => "Address: Shop No.34, AL Kifaf Oasis, Near Burjuman Metro exit2,Karama, Dubai <br /> Phone: +971 42968516 | Email: info@bondforu.com<br /> Web <a href='https://www.bondforu.com/' target='_blank'>{$domain_name}</a><br /> &copy;  {$date1}- {$date2} - All rights reserved ", 'CONTACTUS_URL' => site_url('contact-us'));

        $address_single = $address;
        return $address_single;
    }
    public function getCurrency()
    {

        $currencyarr[2] = array('title' => 'USD', 'code' => 'USD', 'symbol_left' => '$', 'symbol_right' => '', 'decimal_place' => '2', 'domains' => '2');
        $currencyarr[1] = array('title' => 'AED', 'code' => 'AED', 'symbol_left' => 'AED', 'symbol_right' => '', 'decimal_place' => '0', 'domains' => '1');
        $currencyarr[3] = array('title' => 'INR', 'code' => 'INR', 'symbol_left' => '₹', 'symbol_right' => '', 'decimal_place' => '2', 'domains' => '3');
        $getDomainId = $this->getDomainId();

        $currentCurrency = $currencyarr[$getDomainId];
        return $currentCurrency;
    }
    public function format($number)
    {
        $currencyarr[1] = array('title' => 'AED', 'code' => 'AED', 'symbol_left' => 'AED', 'symbol_right' => '', 'decimal_place' => '0', 'domains' => '1');
        $currencyarr[2] = array('title' => 'USD', 'code' => 'USD', 'symbol_left' => '$', 'symbol_right' => '', 'decimal_place' => '2', 'domains' => '2');
        $currencyarr[3] = array('title' => 'INR', 'code' => 'INR', 'symbol_left' => '₹', 'symbol_right' => '', 'decimal_place' => '2', 'domains' => '3');

        $getDomainId = $this->getDomainId();

        $currentCurrency = $currencyarr[$getDomainId];
        $symbol_left = $currentCurrency['symbol_left'];
        $symbol_right = $currentCurrency['symbol_right'];
        $decimal_place = $currentCurrency['decimal_place'];

        $string = '';
        if ($symbol_left) {
            $string .= $symbol_left . "";
        }
        $string .= number_format($number, (int) $decimal_place, '.', ',');
        if ($symbol_right) {
            $string .= $symbol_right;
        }
        return $string;
    }

  
}
