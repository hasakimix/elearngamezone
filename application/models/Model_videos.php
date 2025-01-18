<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Model_videos extends MY_Model
{
    public function __construct()
	{
		parent::__construct();
	}

    public function get_videos_with_library()
    {
        $videos = $this->db->select("*")
                            ->from("video")
                            ->get()->result_array();

        $libraries = $this->db->select("*")
                            ->from("library")
                            ->get()->result_array();

        foreach ($videos as $key => $value) {
            $library_id = $value["library_id"];
            $library = array_filter($libraries, function ($lib) use ($library_id) {
                return intval($lib['library_id']) == intval($library_id);
            });
            $library = array_values($library);
            if(isset($library[0]["library_name"])){
                $videos[$key]["library_name"] = $library[0]["library_name"];
            }else{
                $videos[$key]["library_name"] = "Subject was Deleted";
            }
        }

        return $videos;
    }

	public function get_videos($id)
    {
        return $this->db->select("*")
                        ->from("video")
						->where("library_id",$id)
                        ->get()->row_array();
    }
	
	public function get_user_progress($user_id, $video_id)
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

    public function get_libraries()
    {
        return $this->db->select("*")
                        ->from("library")
                        ->get()->result_array();
    } 

	public function get_video_by_video_id($video_id)
    {
        return $this->db->select("*")
                        ->from("video")
						->where("video_id",$video_id)
                        ->get()->row_array();
    }

	public function save_video($save_data)
	{
		$this->writeDB->insert("video", $save_data);
        if ($this->writeDB->affected_rows() > 0) {
            return $this->writeDB->insert_id();
        } else {
            return false;
        }
	}

    public function update_video(array $save_data): mixed
    {
        $this->writeDB->where("video_id", $save_data["video_id"])
                ->set($save_data)
                ->update("video");

        if ($this->writeDB->affected_rows() >= 0) {
            return true;
        } else {
            return false;
        }
    } 

    public function delete_video($video_id)
    {
        $this->db->where("video_id", $video_id);
        $this->db->delete("video");
        return ($this->db->affected_rows() > 0);
    }
}
