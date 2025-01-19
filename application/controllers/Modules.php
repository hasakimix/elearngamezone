<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modules extends Auth_Controller {

    protected $_template = 'layouts/templates/';
    protected $_primary_view = 'main/';
	
	public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model("Model_modules", "m_module");
    }
	
	public function read($library_id)
	{
        $session = $this->session->get_userdata();

        $data = &$this->data;
        $data['final_view'] = $this->_template.'_main_template';
        $data['primary_view'] = $this->_primary_view.'modules/index';
        $data["modules"] = $this->m_module->get_modules($library_id);
        $data["chapters"] = $this->m_module->get_chapters($library_id);
        $data["quiz"] = base_url("quiz/take/".$library_id);
        $data['user_id'] = $session['id'];
		$this->load->view($data['final_view'], $data);
	}
}
