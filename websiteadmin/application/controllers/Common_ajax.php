<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Common_ajax extends CI_Controller {
public $db;

		public function __construct(){
			parent::__construct();
			$this->load->library('session');
			$this->load->model('Common');
			$this->load->helper('security');
			$this->load->library('email');
			$this->load->helper('url_helper');
			$this->db = $this->load->database('default',TRUE);
		}


 
	 
	public function get_zone_area($city_id=99,$zonearea_id=0)
    { 
		$query_row_str =  "";
		 
		$city_id 		 = $this->common->mysql_safe_string($city_id); 
		$zonearea_id 		 = $this->common->mysql_safe_string($zonearea_id); 
		 $query_row_str = $this->common->get_zone_area($city_id,$zonearea_id);
		 return $query_row_str;
	}	
	
		 
	public function get_district($state_id=99,$zonearea_id=0)
    { 
		$query_row_str =  "";
		 
		$state_id 		 = $this->common->mysql_safe_string($state_id); 
		$zonearea_id 		 = $this->common->mysql_safe_string($zonearea_id); 
		 $query_row_str = $this->common->get_district($state_id,$zonearea_id);
		 return $query_row_str;
	}	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */