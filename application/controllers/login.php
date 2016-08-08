<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

	

	public function index()
	{
		
		if($this->input->get('restrict') !== null){
			$this->alertas->alert('error','Atenção','Acesso Restrito para Administradores');
		}
		$this->load->template('login',$this->dados);
	}

	public function novo(){
		$this->load->template('register');
	}

	public function entrar(){
		$post = (object)$this->input->post();
		$identity = $post->email;
		$password = $post->password;
		$remember = TRUE; // remember the user
		
		//var_dump($this->ion_auth->login($identity, $password, $remember));
		if(!$this->ion_auth->login($identity, $password, $remember)){

			if (!$this->ion_auth->email_check($identity)) {
				$this->alertas->alert('error','Atenção','Usuario não cadastrado ');
			} else {
				$this->alertas->alert('error','Atenção:','Senha Inválida. <a href="'.base_url().'login/esqueci_a_senha" style="float:right"> Esqueceu a Senha?</a>');
			}
			
			$this->load->template('login.php',$this->dados);
		}else{
			redirect('inicio','refresh');
		}
		
	}

	public function sair(){
		$this->ion_auth->logout();
		redirect('login','refresh');
	}

	public function register(){
		$post = (object)$this->input->post();
		//$username = $post->username;
		$password = $post->password;
		$email = $post->email;
		$additional_data = array(
			'first_name'    => $post->first_name,
			'last_name'     => $post->last_name,
			'phone'         => $post->phone,
			'company'       => (isset($post->company)) ? $post->company : '' ,
			'adress_road'   => (isset($post->adress_road)) ? $post->adress_road : '' ,
			'adress_uf'     =>(isset($post->adress_uf)) ? $post->adress_uf : '' ,
			'adress_city'	=>(isset($post->adress_city)) ? $post->adress_city : '' ,
			'adress_number' =>(isset($post->adress_number)) ? $post->adress_number : '',
			'adress_cep' =>(isset($post->adress_cep)) ? $post->adress_cep : '' 


			);
		$group = array('4');
		$this->ion_auth->register(null, $password, $email, $additional_data, $group);

		var_dump($post);
	}

	
	function activate($id, $code=false)
	{
		if ($code !== false)
		{
			$activation = $this->ion_auth->activate($id, $code);
		}
		else if ($this->ion_auth->is_admin())
		{
			$activation = $this->ion_auth->activate($id);
		}
		if ($activation)
		{
			// redirect them to the auth page
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			redirect("login", 'refresh');
		}
		else
		{
			// redirect them to the forgot password page
			$this->session->set_flashdata('message', $this->ion_auth->errors());
			redirect("login/forgot_password", 'refresh');
		}
	}

	function trocar_senha(){
		$post =  $this->input->post();
		if(!count($post)){
			$this->load->template('auth/change_password',$this->dados);
		}else{

			$user = $this->ion_auth->user()->row();
			$identity = $user->email;
			$this->ion_auth->change_password($identity, $post['old_password'], $post['new_password']);

			echo 'pronto';


		}
	}

	function esqueci_a_senha(){
		$alert_message = '';
		$email =  $this->input->post('email');
		if(!isset($email)){
			$this->load->template('auth/forgot_password',$this->dados);
		}else{

			if($this->ion_auth->email_check($email)){
				if(!$this->ion_auth->forgotten_password($email)){
					$this->alertas->alert('error','Atenção','Erro ao precessar o reset. Por favor, tente novamente.');
					$this->load->template('auth/forgot_password',$this->dados);
				}
				else 
					echo 'pronto';
			}
			else
			{
				$this->alertas->alert('error','Atenção','Email não cadastrado. ');
				$this->load->template('auth/forgot_password',$this->dados);
			}			


		}
	}
	function reset_password($code){
		$reset = $this->ion_auth->forgotten_password_complete($code);
		if($reset){
			$this->alertas->alert('error','Atenção','Você receberá a senha temporária por email em instantes.');
			$this->load->template('login',$this->dados);
		}
		else{
			echo"erro";
		}
	}



}

/* End of file login.php */
/* Location: ./application/controllers/login.php */