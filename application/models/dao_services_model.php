<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dao_services_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}

	public function add_service($new_service){
		//$this->db->get($new_service);
		return $this->db->insert('services', $new_service);
	}
	

}

/* End of file dao_services_model.php */
/* Location: ./application/models/dao_services_model.php */