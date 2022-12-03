<?php
 
class Configmodal extends CI_Model{
	private $configdata = array();

	public function __construct() {
		 
		 
	}
	public function get($key='') {
		// echo "SELECT * FROM currency where default_flag='1'";
		
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
	 public function getSetting($group, $store_id = 0) {
		$data = array(); 
		
		$query = $this->db->query("SELECT * FROM `setting` WHERE store_id = '" . (int)$store_id . "' AND `group` = '" . $group . "'");
		
		foreach ($query->result_array() as $result) {
			if (!$result['serialized']) {
				$data[$result['key']] = $result['value'];
			} else {
				$data[$result['key']] = unserialize($result['value']);
			}
		}

		return $data;
	}
	
	public function editSetting($group, $data, $store_id = 0) {
		$this->db->query("DELETE FROM `setting` WHERE store_id = '" . (int)$store_id . "' AND `group` = '" . $group . "'");

		foreach ($data as $key => $value) {
			if (!is_array($value)) {
				$this->db->query("INSERT INTO `setting` SET store_id = '" . (int)$store_id . "', `group` = '" . $group . "', `key` = '" . $key . "', `value` = '" . $value . "'");
			} else {
				$this->db->query("INSERT INTO setting SET store_id = '" . (int)$store_id . "', `group` = '" . $group . "', `key` = '" . $key . "', `value` = '" . serialize($value) . "', serialized = '1'");
			}
		}
	}
	
	public function deleteSetting($group, $store_id = 0) {
		$this->db->query("DELETE FROM `setting` WHERE store_id = '" . (int)$store_id . "' AND `group` = '" . $group . "'");
	}
	
	public function editSettingValue($group = '', $key = '', $value = '', $store_id = 0) {
		if (!is_array($value)) {
			$this->db->query("UPDATE `setting` SET `value` = '" . $value . "' WHERE `group` = '" . $group. "' AND `key` = '" . $key . "' AND store_id = '" . (int)$store_id . "'");
		} else {
			$this->db->query("UPDATE `setting` SET `value` = '" . serialize($value) . "' WHERE `group` = '" . $group . "' AND `key` = '" . $key . "' AND store_id = '" . (int)$store_id . "', serialized = '1'");
		}
	}
}
