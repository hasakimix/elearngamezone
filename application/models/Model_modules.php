<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Model_modules extends MY_Model
{
    public function __construct()
	{
		parent::__construct();
	}

	public function get_modules($library_id)
    {
        return $this->db->select("*")
                        ->from("module")
						->where("library_id",$library_id)
                        ->get()->result_array();
    }

    public function get_chapters($library_id)
    {
        return $this->db->select("c.*")
                        ->from("chapter as c")
                        ->join("module m", "m.module_id = c.module_id", "left")
                        ->where("m.library_id", $library_id)
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
		$this->writeDB->insert("user_library", $save_data);
        if ($this->writeDB->affected_rows() > 0) {
            return $this->writeDB->insert_id();
        } else {
            return false;
        }
	}

    public function delete($user_id, $library_id)
    {
        $this->db->where("user_id", $user_id);
        $this->db->where("library_id", $library_id);
        $this->db->delete("user_library");
        return ($this->db->affected_rows() > 0);
    }
}
