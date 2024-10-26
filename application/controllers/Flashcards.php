<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Flashcards extends Auth_Controller {

    protected $_template = 'layouts/templates/';
    protected $_primary_view = 'main/';
	
	public function index()
	{
        $data = &$this->data;
        $data['final_view'] = $this->_template.'_main_template';
        $data['primary_view'] = $this->_primary_view.'flashcards/index';
		$this->load->view($data['final_view'], $data);
	}

	public function cards($subject)
	{
        $data = &$this->data;
        $data['final_view'] = $this->_template.'_main_template';
        $data['primary_view'] = $this->_primary_view.'flashcards/_cards_'.$subject;
		$this->load->view($data['final_view'], $data);
	}
}

