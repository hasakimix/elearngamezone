<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modules extends Auth_Controller {

    protected $_template = 'layouts/templates/';
    protected $_primary_view = 'main/';
	
	public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model("Model_library", "m_lib");
    }
	
	public function read($library_id)
	{
        $data = &$this->data;
        $data['final_view'] = $this->_template.'_main_template';
        $data['primary_view'] = $this->_primary_view.'modules/index';
		$this->load->view($data['final_view'], $data);
	}
}
