<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Flashcards extends CI_Controller {

    protected $_template = 'layouts/templates/';
    protected $_primary_view = 'admin/';
	
	public function __construct()
    {
        parent::__construct();
    }
	
	public function index()
	{
        $data = &$this->data;
        $data['final_view'] = $this->_template.'_admin_template';
        $data['primary_view'] = $this->_primary_view.'flashcards';
		$this->load->view($data['final_view'], $data);   
	}
}
