<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forgotpass extends CI_Controller {

    protected $_template = 'layouts/templates/';
    protected $_primary_view = 'auth/';
	
	public function index()
	{
        $data = &$this->data;
        $data['final_view'] = $this->_template.'_auth_template';
        $data['primary_view'] = $this->_primary_view.'forgotpage';
		$this->load->view($data['final_view'], $data);   
	}
}

