<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends MY_Controller {

    protected $_template = 'layouts/templates/';
    protected $_primary_view = 'admin/';

	public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }

	public function index()
	{
        if ($this->input->post()) {
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            if ($email === 'admin@example.com' && $password === 'password') {
                $this->build_session(['id' => 1, 'email' => $email]);
                redirect(base_url('/home'));
            } else {
                $this->session->set_flashdata('error', 'Invalid Credentials');
                redirect(base_url('/'));
            }
        } else {
            $this->load->view('admin/login'); 
        }
	}

	private function build_session($data)
    {
        $this->session->set_userdata([
            'id' => $data['id'],
            'email' => $data['email'],
			'is_admin' => false,
            'logged_in' => true
        ]);
        return true;
    }

    public function end_sessions()
    {
        $this->session->sess_destroy();

        if (isset($_COOKIE['userUID'])) {
            unset($_COOKIE['userUID']);
            setcookie('userUID', '', 1, '/'); 
        }

        redirect(base_url('/'));
    }
}
