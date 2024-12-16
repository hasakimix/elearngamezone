<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quiz extends Auth_Controller {

    protected $_template = 'layouts/templates/';
    protected $_primary_view = 'main/';
	
	public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model("Model_quiz", "m_quiz");
    }

    public function take($library)
    {
        $data = &$this->data;
        $data['final_view'] = $this->_template.'_main_template';
        $data['primary_view'] = $this->_primary_view.'quiz/index';
        $data['quiz'] = $this->m_quiz->get_quiz($library);
        $data['solutions'] = $this->m_quiz->get_questions($data['quiz']['quiz_id']);
		$this->load->view($data['final_view'], $data);
    }
}
