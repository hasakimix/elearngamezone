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
	
	public function index($library_id)
	{
		$session = $this->session->get_userdata();
        $data = &$this->data;
        $data['final_view'] = $this->_template.'_main_template';
        $data['primary_view'] = $this->_primary_view.'videos/index';
		$data['videos'] = $this->m_vid->get_videos($library_id);
		$data['user_id'] = $session['id'];
        $data['progress'] = $this->m_vid->get_user_progress($data['user_id'], $data['videos']['video_id']);
		$this->load->view($data['final_view'], $data);
	}
}

