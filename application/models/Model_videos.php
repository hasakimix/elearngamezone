<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Model_videos extends MY_Model
{
    public function __construct()
	{
		parent::__construct();
	}

	public function get_videos($id)
    {
        return $this->db->select("*")
                        ->from("video")
						->where("library_id",$id)
                        ->get()->row_array();
    }
	
	public function get_user_and_video_progress($user_id, $video_id)
	{
		return $this->db->select("*")
						->from("video_progress")
						->where("user_id", $user_id)
						->where("video_id", $video_id)
						->get()->row_array();
	}

	public function save_progress($save_data)
	{
		$this->writeDB->insert("video_progress", $save_data);
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
                ->update("video_progress");

        if ($this->writeDB->affected_rows() >= 0) {
            return true;
        } else {
            return false;
        }
    }
}
