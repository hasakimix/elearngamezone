<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends MY_Controller {

    protected $_template = 'admin/layouts/templates/';
    protected $_primary_view = 'admin/authentication/';
	
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model("Model_admin_users", "admin");
    }

    public function login()
    {
        $data = $this->input->post();
        
        $result = $this->admin->validateUsernamePassword(make_string_safe($data['email']), $data['password']);
        if($result){
            if($this->build_session($result)){
                if($this->buildCookies($result)){
                    redirect(base_url('admin/dashboard'));
                }else{
                    $this->end_sessions();
                }
            }else{
                $this->end_sessions();
            }
        }else{
            redirect(base_url('admin'));
        }
    }

    private function build_session($data)
    {
        $this->session->set_userdata([
            'id' => $data['id'],
            'email' => $data['email'],
			'is_admin' => true,
            'logged_in' => true
        ]);
        return true;
    }

    private function buildCookies($data)
    {
        $cookie = [
            'expires' => (time() + AUTH_TOKEN_TIMEOUT),
            'secure' => (ENVIRONMENT == 'development') ? false : true,
            'domain' => getenv('APP_DOMAIN_NAME'),
            'path' => '/',
        ];
        setcookie('userUID', sha1($data['id']), $cookie);
        return true;
    }

    public function end_sessions()
    {
        $user_id = isset($_SESSION['id']) ? $_SESSION['id'] : false;
        $this->session->sess_destroy();

        if (isset($_COOKIE['userUID'])) {
            unset($_COOKIE['userUID']);
            setcookie('userUID', '', 1, '/'); // empty value and old timestamp
        }

        redirect(base_url('/'));
    }
}
