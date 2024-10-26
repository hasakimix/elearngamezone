<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    protected $_template = 'layouts/templates/';
    protected $_primary_view = 'auth/';
	
	public function index()
	{
        $data = &$this->data;
        $data['final_view'] = $this->_template.'_auth_template';
        $data['primary_view'] = $this->_primary_view.'test';
		$this->load->view($data['final_view'], $data);   
	}
}

