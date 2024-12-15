<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Model_games extends MY_Model
{
    public function __construct()
	{
		parent::__construct();
	}

	public function get_games($library_id)
    {
        return $this->db->select("*")
                        ->from("games")
						->where("library_id",$library_id)
                        ->get()->result_array();
    }

	public function get_game($game_key, $library_id)
	{
		return $this->db->select("*")
                        ->from("games")
						->where("library_id", $library_id)
						->where("game_key",$game_key)
                        ->get()->row_array();
	}

	public function get_user_progress($user_id, $video_id)
	{
		return $this->db->select("*")
						->from("game_progress")
						->where("user_id", $user_id)
						->where("game_id", $video_id)
						->get()->row_array();
	}

	public function save_progress($save_data)
	{
		$this->writeDB->insert("game_progress", $save_data);
        if ($this->writeDB->affected_rows() > 0) {
            return $this->writeDB->insert_id();
        } else {
            return false;
        }
	}

    public function update_progress(array $save_data): mixed
    {
        $this->writeDB->where("progress_id", $save_data["progress_id"])
                ->set($save_data)
                ->update("game_progress");

        if ($this->writeDB->affected_rows() >= 0) {
            return true;
        } else {
            return false;
        }
    }
}
