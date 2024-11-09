<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Model_library extends MY_Model
{
    public function __construct()
	{
		parent::__construct();
	}

	public function get($id)
    {
        return $this->db->select("*")
                        ->from("users_library")
						->where("user_id",$id)
                        ->get()->result_array();
    }

	public function get_libraries()
    {
        return $this->db->select("*")
                        ->from("library")
                        ->get()->result_array();
    }

	public function save($save_data)
	{
		$this->writeDB->insert("users_library", $save_data);
        if ($this->writeDB->affected_rows() > 0) {
            return $this->writeDB->insert_id();
        } else {
            return false;
        }
	}
}
