<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dao_obras_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}

	public function add_obra($new_obra){
		//$this->db->get($new_service);
		return $this->db->insert('obras', $new_obra);
	}

	public function get_all_obras(){
		return $this->db->get('obras')->result_array();
	}
	

}

/* End of file dao_services_model.php */
/* Location: ./application/models/dao_services_model.php */