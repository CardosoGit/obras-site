<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/* load the MX_Loader class */
require APPPATH."third_party/MX/Loader.php";

class MY_Loader extends MX_Loader {
	public function template($view, $dados = [] ){
		$dados['base_url'] = base_url();
		foreach ($dados as $key => $value) {
			if(is_array($value)){
				foreach ($value as $key2 => $value2) {
					$dados[$key][$key2]['base_url'] = base_url();
				}
				
			}
		}
		if($this->ion_auth->logged_in()){
			$user = $this->ion_auth->user()->row();
			$dados['username'] = 'Olá '.$user->first_name;
			$dados['link_header_username'] = base_url('login');
		}
		else{
			$dados['username'] = 'Login';
			$dados['link_header_username'] = base_url('login');
		}
		
		$this->view_out('header.php',$dados);
		$this->view_out($view,$dados);
		$this->view_out('footer.php',$dados);
	}

	public function admin($view, $dados = [] ){
		$dados['base_url'] = base_url();
		foreach ($dados as $key => $value) {
			if(is_array($value)){
				foreach ($value as $key2 => $value2) {
					$dados[$key][$key2]['base_url'] = base_url();
				}
				
			}
		}
		if(true /*$this->ion_auth->logged_in()*/){

			if (true /*$this->ion_auth->is_admin()*/)
			{
				// $user = $this->ion_auth->user()->row();
				// $dados['username'] = 'Olá '.$user->first_name;
				// $dados['link_header_username'] = base_url('login');	
				
				$this->view_out('header',$dados);
				$this->view_out('aside',$dados);
				$this->view_out($view,$dados);
				$this->view_out('footer',$dados);
			}
			else{
				$this->session->set_userdata('page_to_go', current_url());
				redirect('login?restrict','refresh');
			}
				
			
		}
		else{
			$this->session->set_userdata('page_to_go', current_url());
			redirect('login?restrict','refresh');
		}
			

		
	}

	public function single_view($view, $dados = [], $return = false ){
		$dados['base_url'] = base_url();
		foreach ($dados as $key => $value) {
			if(is_array($value)){
				foreach ($value as $key2 => $value2) {
					$dados[$key][$key2]['base_url'] = base_url();
				}
				
			}
		}
		if ($return) {
			return $this->view_out($view,$dados,true);
		}
		return $this->view_out($view,$dados);
		
	}

	public function view_out($view, $dados, $return = false){
		$view_clean =  preg_replace('/{+\/?+[a-zA-Z0-9-_\.]+}/', '', $this->parser->parse($view,$dados,true));
		if ($return) {
			return $this->parser->parse_string($view_clean,[], true);
		}
		$this->parser->parse_string($view_clean,[]);
		
		
	}

	
}




