<?php
error_reporting(E_ALL);

class Services extends CI_Model
{

    public function __construct()
    {
        // if(empty($this->session->userdata('domain_id'))){
        //     $this->session->set_userdata('domain_id', '1');

        // }
    }

    public function getProductList($params=array()){

        $domain_id = 1;
        if(empty($this->session->userdata('domain_id'))){
            $domain_id = $this->session->userdata('domain_id');
        }

        $result_array=[];

            if($params['type']=="latestProduct"){
                $sql = "select * from product_master where status_flag='Active' and featured=1 order by sort_order asc, name asc ";
                if(ZEROQTYALLOW==1){
                    $sql = "select * from product_master where status_flag='Active'  and featured=1 order by sort_order asc, name asc ";
                }else {
                    $sql = "select * from product_master where status_flag='Active'  and featured=1 and quantity > 0 order by sort_order asc, name asc ";
                }
                $query  = $this->db->query($sql);
                if($query->num_rows()>0){
                    $result_array = $query->result_array();

                }
                return $result_array;
            }
    }

    
	public function sendotp($user_info=array()){


        $sms_description = $this->common->get_sms_data(1);
        $sms_description = $this->common->mysql_safe_string($sms_description);

        
        $pattern = array('/#REG_OTP#/');
        $replacement = array($user_info['REG_OTP']);
        $sms_description = preg_replace($pattern, $replacement, $sms_description);
      //  $outputtemp = print_r($sms_description,true);
		//file_put_contents('deubg_logs/debug_emp_type.txt', $outputtemp, FILE_APPEND);
        $this->common->send_sms($user_info['mobile'],$sms_description);

        $add_in_cust = array();
        $add_in_cust['user_id'] = $user_info['user_id'];
        $add_in_cust['mobile'] = $user_info['mobile'];
        $add_in_cust['otpcode'] = $user_info['REG_OTP'];
        $add_in_cust['date_sent'] = date("Y-m-d h:i:s");
        $add_in_cust['otp_verification_status'] = 0;
        $add_in_cust['sms_purpose'] = 'OTP';
        $add_in_cust['session_id'] = 91;
        $this->common->insertRecord('wti_sms_register_log', $add_in_cust);
    }
 
}
