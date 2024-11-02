<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Auth_Controller {

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
        $data['primary_view'] = $this->_primary_view.'home';

		$data['user_id'] = $session["id"];
		$data['user_libraries'] = $this->m_lib->get($session["id"]);
		$this->load->view($data['final_view'], $data);
	}

	public function add_library()
	{
		$data = $this->input->post();
		$save_data = [
			"user_id" => $data["user_id"],
			"library" => $data["library"]
		];

		$save_result = $this->m_lib->save($save_data);

		if ($save_result) {
			redirect(base_url('library'));
		}else{
			$this->session->set_flashdata('error', 'Something went wrong, Cannot save database.');
            redirect(base_url('home'));
		}
	}
}

