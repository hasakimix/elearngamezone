<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends MY_Controller {
	
	public function construct(){
    	parent::construct();
	}

	public function index()
	{
		$this->load->model("auth/Model_auth_main", "m_main");
		$input_POST = $this->input->post();

		$save_data = [
			"first_name" => $input_POST["first_name"],
			"last_name" => $input_POST["last_name"],
			"email" => $input_POST["email"],
			"password" => password_hash($input_POST["password"], PASSWORD_DEFAULT)
		]; 

		$save_result = $this->m_main->save($save_data);
       	redirect(base_url());		
	}
}

