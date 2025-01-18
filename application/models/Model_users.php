<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Model_users extends MY_Model
{
    public function __construct()
	{
		parent::__construct();
	}

    public function get()
    {
        return $this->db->select("*")
                        ->from($this->table("users"))
                        ->get()->result_array();
    }

    public function save($data){
        $this->writeDB->insert($this->table("users"), $data);
        if ($this->writeDB->affected_rows() > 0) {
            return $this->writeDB->insert_id();
        } else {
            return false;
        }
    }

    public function get_admin_users()
    {
        return $this->db->select("*")
                        ->from("users")
                        ->where("is_admin", 1)
                        ->get()->result_array();
    }

    public function get_admin_user_by_id($id)
    {
        return $this->db->select("*")
                        ->from("users")
                        ->where("id", $id)
                        ->where("is_admin", 1)
                        ->get()->row_array();
    }

	public function save_admin_user($save_data)
	{
		$this->writeDB->insert("users", $save_data);
        if ($this->writeDB->affected_rows() > 0) {
            return $this->writeDB->insert_id();
        } else {
            return false;
        }
	}

    public function update_admin_user(array $save_data): mixed
    {
        $this->writeDB->where("id", $save_data["id"])
                ->set($save_data)
                ->update("users");

        if ($this->writeDB->affected_rows() >= 0) {
            return true;
        } else {
            return false;
        }
    } 

    public function delete_admin_user($id)
    {
        $this->db->where("id", $id);
        $this->db->delete("users");
        return ($this->db->affected_rows() > 0);
    }

    public function get_users()
    {
        return $this->db->select("*")
                        ->from("users")
                        ->get()->result_array();
    }

	public function save_client_user($save_data)
	{
		$this->writeDB->insert("users", $save_data);
        if ($this->writeDB->affected_rows() > 0) {
            return $this->writeDB->insert_id();
        } else {
            return false;
        }
	}

    public function update_client_user(array $save_data): mixed
    {
        $this->writeDB->where("id", $save_data["id"])
                ->set($save_data)
                ->update("users");

        if ($this->writeDB->affected_rows() >= 0) {
            return true;
        } else {
            return false;
        }
    }

    public function get_client_user_by_id($id)
    {
        return $this->db->select("*")
                        ->from("users")
                        ->where("id", $id)
                        ->where("is_admin", 0)
                        ->get()->row_array();
    }

    public function delete_user_progress($id)
    {
        $this->db->where("user_id", $id);
        $this->db->delete("video_progress");
        $video_progress = ($this->db->affected_rows() > 0);

        $this->db->where("user_id", $id);
        $this->db->delete("module_progress");
        $module_progress = ($this->db->affected_rows() > 0);

        $this->db->where("user_id", $id);
        $this->db->delete("game_progress");
        $game_progress = ($this->db->affected_rows() > 0);

        $this->db->where("user_id", $id);
        $this->db->delete("user_library");
        $user_library = ($this->db->affected_rows() > 0);

        return true;
    }

    public function delete_client_user($id)
    {
        $this->db->where("id", $id);
        $this->db->delete("users");
        return ($this->db->affected_rows() > 0);
    }

    public function get_libraries()
    {
        return $this->db->select("*")
                        ->from("library")
                        ->get()->result_array();
    } 
}