<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends MY_Controller {

	public $dados = array(
			'title'       => 'Seja Bem Vindo ao MeuTecnicooooo',
			'description' => 'A Dinâmica é uma empresa que...'
	);

	public function index()
	{
		$this->load->single_view('inicio',$this->dados);
	}

}

/* End of file inicio.php */
/* Location: ./application/controllers/inicio.php */