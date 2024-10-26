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

    public function save_user_data($data){
        $this->writeDB->insert($this->table("users_data"), $data);
        if ($this->writeDB->affected_rows() > 0) {
            return $this->writeDB->insert_id();
        } else {
            return false;
        }
    }

    public function save_user_spouse($data){
        $this->writeDB->insert($this->table("users_spouse"), $data);
        if ($this->writeDB->affected_rows() > 0) {
            return $this->writeDB->insert_id();
        } else {
            return false;
        }
    }

    public function get_user_and_spouse()
    {
        $result = $this->db->select("*")
                        ->from($this->table("users"))
                        ->get()->result_array();
        if($result){
            foreach ($result as $k => $v) {
                $data = $this->db->select("*")
                        ->from($this->table("users_data"))
                        ->where("user_id", $v['user_id'])
                        ->get()->row_array();
                if($data){
                    $result[$k]['data'] = $data;
                }

                $spouse = $this->db->select("*")
                        ->from($this->table("users_spouse"))
                        ->where("user_id", $v['user_id'])
                        ->get()->row_array();
                if($spouse){
                    $result[$k]['spouse'] = $spouse;
                }
            }
        }

        return $result;
    }
}