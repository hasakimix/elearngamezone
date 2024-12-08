<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Videos extends Auth_Controller {

    protected $_template = 'layouts/templates/';
    protected $_primary_view = 'main/';

	public function __construct()
    {
        parent::__construct();
        $this->load->model("Model_videos", "m_vid");
    }
	
	public function index()
	{
        $data = &$this->data;
        $data['final_view'] = $this->_template.'_main_template';
        $data['primary_view'] = $this->_primary_view.'videos/index';
		$this->load->view($data['final_view'], $data);
	}

	public function subject($subject)
	{
        $data = &$this->data;
        $data['final_view'] = $this->_template.'_main_template';
        $data['primary_view'] = $this->_primary_view.'videos/_vids_'.$subject;
		$data['videos'] = $this->m_vid->get_videos($subject);
		$this->load->view($data['final_view'], $data);
	}
}

