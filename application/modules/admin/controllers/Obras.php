<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Obras extends MY_Controller
{
	private $form_errors = null;
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Obras_model', 'obras');
	}
	public function index()
	{
		$this->load->admin('obras/list');
	}
	public function lista()
	{
		$this->dados['obras'] = $this->obras->getObras();
		
		$this->load->admin('obras/list', $this->dados);
	}
	public function editar($id_obra)
	{
		//$id_obra = $this->input->get('id');
		$this->dados += $this->obras->getObra($id_obra);
		$this->load->admin('obras/update', $this->dados);
	}

	public function excluir($id_obra){
		$url_image = $this->obras->getImage($id_obra);
		unlink($url_image);		
		$this->obras->delete($id_obra);
		redirect(base_url().'admin/obras/lista');
	}
	public function add()
	{
		$new_service_data = $this->input->post();

		if(!count($new_service_data)) {
			$this->load->admin('obras/edit', $this->dados);
		} //!count($new_service_data)
		else {
			if(!$this->form_validate($new_service_data)) {
				$this->alertas->alert('error', 'Atenção', $this->get_form_errors());
				$this->dados += $new_service_data;
				$this->load->admin('obras/edit', $this->dados);
			} //!$this->form_validate($new_service_data)
			else {
				if($this->obras->add($new_service_data)) {
					$this->alertas->alert('success', 'Parabéns', 'Obra adicionada com sucesso');
				} //$this->services->add($new_service_data)
				else {
					$this->alertas->alert('error', 'Atenção', 'Erro ao salvar obra. Tente novamente.');
				}
				$this->load->admin('obras/edit', $this->dados);
			}
		}
	}

	public function update($id_obra)
	{
		$new_service_data = $this->input->post();
		$this->dados += $new_service_data;
		$new_service_data = $this->input->post();
		if(!$this->form_validate($new_service_data)) {
			$this->alertas->alert('error', 'Atenção', $this->get_form_errors());			
			$this->load->admin('obras/update', $this->dados);
		} //!$this->form_validate($new_service_data)
		else {
			if($this->obras->update($id_obra, $new_service_data)) {
				$this->alertas->alert('success', 'Parabéns', 'Obra alterada com sucesso');
			} //$this->services->add($new_service_data)
			else {
				$this->alertas->alert('error', 'Atenção', 'Erro ao alterar obra. Tente novamente.');
			}
			$this->load->admin('obras/update', $this->dados);
		}
		
	}
	// Valida os dados do formulário
	private function form_validate($data)
	{
		$validate = new Data_Validator();
		$validate->set('Proprietário', $data['proprietario'])->is_required();
		$validate->set('Arquiteto', $data['arquiteto'])->is_required();
		$validate->set('Tamanho da Obra', $data['tamanho_obra'])->is_required();
		$validate->set('Rua', $data['rua'])->is_required();
		$validate->set('Numero', $data['numero'])->is_required();
		if(!$validate->validate()) {
			$this->form_errors = $validate->get_errors();
			return false;
		} //!$validate->validate()
		else {
			return true;
		}
	}
	// Retorna os erros de formulário
	private function get_form_errors()
	{
		$msg = '<ul>';
		foreach($this->form_errors as $erros) {
			foreach($erros as $erro) {
				$msg .= '<li>' . $erro . '</li>';
			} //$erros as $erro
		} //$this->form_errors as $erros
		$this->form_errors = null;
		return $msg;
	}
}
/* End of file services.php */
/* Location: ./application/modules/admin/controllers/services.php */
