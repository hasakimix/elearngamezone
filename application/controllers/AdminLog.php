<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminLog extends MY_Controller {

    protected $_template = 'layouts/templates/';
    protected $_primary_view = 'auth/';

	public function __construct()
    {
        parent::__construct();
    }
	
	public function index()
	{
        $data = &$this->data;
        $data['final_view'] = $this->_template.'_auth_template';
        $data['primary_view'] = $this->_primary_view.'adminlog';
		$this->load->view($data['final_view'], $data);   
	}
}

