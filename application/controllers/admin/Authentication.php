<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends MY_Controller {

    protected $_template = 'admin/layouts/templates/';
    protected $_primary_view = 'admin/authentication/';
	
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }

	public function index()
	{
        $data = &$this->data;
        $data['final_view'] = $this->_template.'_authentication_template';
        $data['primary_view'] = $this->_primary_view.'_login';
		$this->load->view($data['final_view'], $data);   
	}

    //admin - OhH3lloP@ss
    public function login()
    {
        $this->load->model("Model_admin_users", "admin");

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
            'user_id' => $data['admin_user_id'],
            'user_full_name' => $data['full_name'],
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
        setcookie('adminUID', sha1($data['admin_user_id']), $cookie);
        return true;
    }

    public function end_sessions()
    {
        $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : false;
        $this->session->sess_destroy();

        if (isset($_COOKIE['adminUID'])) {
            unset($_COOKIE['adminUID']);
            setcookie('adminUID', '', 1, '/'); // empty value and old timestamp
        }

        redirect(base_url('admin'));
    }
}
