<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Auth_Controller {

    protected $_template = 'layouts/templates/';
    protected $_primary_view = 'main/';
	
	public function index()
	{
        $data = &$this->data;
        $data['final_view'] = $this->_template.'_main_template';
        $data['primary_view'] = $this->_primary_view.'home';
		$this->load->view($data['final_view'], $data);
	}
}

