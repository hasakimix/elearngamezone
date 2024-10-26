<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Model_auth_main extends MY_Model
{
    public function __construct()
	{
		parent::__construct();
	}

    public function get()
    {
        return $this->db->select("*")
                        ->from("users")
                        ->get()->result_array();
    }

    public function save($data){
        $this->writeDB->insert("users", $data);
        if ($this->writeDB->affected_rows() > 0) {
            return $this->writeDB->insert_id();
        } else {
            return false;
        }
    }

    public function validateUsernamePassword(string $username, string $password)
    {
        $user = $this->getUserByUsername(strtolower($username));
        if (!$user) {return false;};

        return (password_verify($password, $user['password'])) ? $user : false;
    }

    public function getUserByUsername(string $username)
    {
        return $this->writeDB->select("*")
                        ->from("users")
                        ->where("email", $username)
                        ->get()->row_array();
    }

    public function save_otp($id, $save_data){
		$this->writeDB->where("id", $id)
				->set($save_data)
				->update("users");

		if ($this->writeDB->affected_rows() >= 0) {
			return true;
		} else {
			return false;
		}
    }
}