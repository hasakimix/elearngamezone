<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Auth_Controller {

	protected $_template = 'admin/layouts/templates/';
	protected $_side_nav = 'admin/layouts/side_nav/';
	protected $_top_nav = 'admin/layouts/top_nav/';
    protected $_primary_view = 'admin/dashboard/';
	
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }

	public function index()
	{
        $data = &$this->data;
        $data['page_title'] 	= "Dashboard";
        $data['final_view'] 	= $this->_template.'_admin_main_template';
		$data['top_navbar'] 	= $this->_top_nav.'_admin_default_top_nav';
		$data['side_navbar'] 	= $this->_side_nav.'_admin_default_side_nav';
        $data['primary_view'] 	= $this->_primary_view.'_main';
		$this->load->view($data['final_view'], $data);   
	}
}
