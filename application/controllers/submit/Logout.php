<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }
    
    public function index()
    {
        $user_id = isset($_SESSION['id']) ? $_SESSION['id'] : false;
        $this->session->sess_destroy();

        if (isset($_COOKIE['userUID'])) {
            unset($_COOKIE['userUID']);
            setcookie('userUID', '', 1, '/'); // empty value and old timestamp
        }

        if (isset($_COOKIE['elearngamezone_session'])) {
            unset($_COOKIE['elearngamezone_session']);
            setcookie('elearngamezone_session', '', 1, '/'); // empty value and old timestamp
            $config = (array)$this->config;
            $config = $config['config'];
            
            setcookie(
                "elearngamezone_session",
                NULL,
                1,
                $config['cookie_path'],
                $config['cookie_domain'],
                $config['cookie_secure'],
                TRUE
            );
        }
        redirect(base_url('/'));
    }
}
