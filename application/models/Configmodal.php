<?php
 
class Configmodal extends CI_Model{
	 

	public function __construct() {
		 
		 
	}
	public function get($key='') {
		// echo "SELECT * FROM currency where default_flag='1'";
		//$getDomainId = $this->services->getDomainId();

		$query = $this->db->query("SELECT * FROM `wti_m_setting` where `key_name`='".$key."' ");
		
		if($query->num_rows() > 0){
			$row = $query->row_array();
			if($row['serialized']){
				$value= json_decode($this->common->getDbValue($row['value']));
				
			} else {
				$value= $this->common->getDbValue($row['value']);
			}
			
		} else {
			$value= "";
		}
		return $value;

	}
	public function getold($key='') {
		// echo "SELECT * FROM currency where default_flag='1'";
		//$getDomainId = $this->services->getDomainId();

		$query = $this->db->query("SELECT * FROM `setting` where `key`='".$key."' ");
		
		if($query->num_rows() > 0){
			$row = $query->row_array();
			if($row['serialized']){
				$value= json_decode($this->common->getDbValue($row['value']));
				
			} else {
				$value= $this->common->getDbValue($row['value']);
			}
			
		} else {
			$value= "";
		}
		return $value;

	}
}
