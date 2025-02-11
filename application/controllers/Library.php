<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Library extends Auth_Controller {

    protected $_template = 'layouts/templates/';
    protected $_primary_view = 'main/';

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model("Model_library", "m_lib");
    }
	
	public function index()
	{
        $session = $this->session->get_userdata();

        $data = &$this->data;
        $data['final_view'] = $this->_template.'_main_template';
        $data['primary_view'] = $this->_primary_view.'library';

		$data['user_id'] = $session["id"];
		$user_libraries = $this->m_lib->get($session["id"]);
		$user_library_ids = array_map(function($data){ return $data["library_id"]; },$user_libraries);
		$data['user_libraries'] = $user_library_ids;
		$data['libraries'] = $this->m_lib->get_libraries();
		$this->load->view($data['final_view'], $data);
	}

    public function remove()
    {
        $data = $this->input->post();

        $remove = $this->m_lib->delete($data["user_id"], $data["library"]);
        if($remove){
            $this->session->set_flashdata('success', 'Subject successfully removed!');
        }else{
            $this->session->set_flashdata('error', 'Unable to remove selected library');
        }

        redirect($_SERVER['HTTP_REFERER']);
    }
}

