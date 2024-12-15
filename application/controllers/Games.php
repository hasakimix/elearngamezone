<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Games extends Auth_Controller {

    protected $_template = 'layouts/templates/';
    protected $_primary_view = 'main/';

	public function __construct()
    {
        parent::__construct();
        $this->load->model("Model_games", "m_games");
    }

	public function index($library_id)
	{
        $data = &$this->data;
        $data['final_view'] = $this->_template.'_main_template';
        $data['primary_view'] = $this->_primary_view.'games/index';
		$data['games'] = $this->m_games->get_games($library_id);
		$this->load->view($data['final_view'], $data);
	}

	public function play($play, $library_id)
	{
		$session = $this->session->get_userdata();

        $data = &$this->data;
        $data['final_view'] = $this->_template.'_main_template';
        $data['primary_view'] = $this->_primary_view.'games/_play_'.$play;
		$data['game'] = $this->m_games->get_game($play, $library_id);
		$data['user_id'] = $session['id'];
		$data['back_url'] = $_SERVER['HTTP_REFERER'];
		$this->load->view($data['final_view'], $data);
	}
}

