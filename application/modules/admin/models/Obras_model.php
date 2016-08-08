<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Obras_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('dao_obras_model', 'dao_obra');
	}
	public function add($obra)
	{
		
		$config['upload_path']          = 'assets/images/obras/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['file_name']			= hash('md5', mt_rand());
		$this->load->library('upload',$config);		
		if ($this->upload->do_upload('url_image_obra')) {			
			$data = $this->upload->data();
			$obra['url_image_obra'] = 'assets/images/obras/'. $data['file_name'];
			if($this->dao_obra->add_obra($obra)) {
				return true;
			} //$this->dao_service->add($service)
			else {
				return false;
			}
			
		} else {
			echo"nao upou";
		}
		
		
	}

	public function update($id, $data){
		if ($this->db->update('obras',$data, array('id'=>$id))) {
			return true;
		}else{
			return false;
		}
		
	}

	public function getImage($id_obra){
		$this->db->select('url_image_obra');
		return $this->db->get_where('obras',array('id'=>$id_obra))->row_array()['url_image_obra'];
	}

	public function getObras(){
		return $this->dao_obra->get_all_obras();
	}

	public function getObra($id_obra){
		return $this->db->get_where('obras', array('id'=>$id_obra))->row_array();
	}

	public function delete($id_obra){
		$this->db->delete('obras', array('id'=>$id_obra));
	}
}
/* End of file services_model.php */
/* Location: ./application/modules/admin/models/services_model.php */