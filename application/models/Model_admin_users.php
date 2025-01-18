<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Model_admin_users extends MY_Model
{
    public function __construct()
	{
		parent::__construct();
	}

    public function validateUsernamePassword(string $username, string $password)
    {
        $user = $this->getUserByUsername(strtolower($username));
        if (!$user) {return false;};

        return (password_verify($password, $user['password'])) ? $user : false;
    }

    public function getUserByUsername(string $username)
    {
        return $this->db->select("*")
                        ->from($this->table("admin_users"))
                        ->where("email", $username)
                        ->where("is_admin", 1)
                        ->get()->row_array();
    }

}