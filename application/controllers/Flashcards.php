<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Flashcards extends Auth_Controller {

    protected $_template = 'layouts/templates/';
    protected $_primary_view = 'main/';

	public function __construct()
    {
        parent::__construct();
        $this->load->model("Model_flashcards", "m_flash");
    }
	
	public function index($library_id)
	{
        $data = &$this->data;
        $data['final_view'] = $this->_template.'_main_template';
        $data['primary_view'] = $this->_primary_view.'flashcards/index';
		$data['flashcard'] = $this->m_flash->get_flashcard($library_id);
		$this->load->view($data['final_view'], $data);
	}
}

