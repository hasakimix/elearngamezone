<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Model_user_progress extends MY_Model
{
    public function __construct()
	{
		parent::__construct();
	} 

    public function get_modules_by_library($library_id)
    {
        return $this->db->select("*")
                        ->from("module")
                        ->where("library_id", $library_id)
                        ->get()->result_array();
    }

    public function get_user_total_module_progress($library_id, $user_id)
    {
        return $this->db->select("sum(mp.progress) as total")
                        ->from("module_progress as mp")
                        ->join("module as m", "m.module_id = mp.module_id", "left")
                        ->where("m.library_id", $library_id)
                        ->where("mp.user_id", $user_id)
                        ->get()->row_array();
    }

    public function get_user_total_quizzes_progress($library_id, $user_id)
    {
        return $this->db->select("mp.quiz_score")
                        ->from("module_progress as mp")
                        ->join("module as m", "m.module_id = mp.module_id", "left")
                        ->where("m.library_id", $library_id)
                        ->where("mp.user_id", $user_id)
                        ->where("mp.quiz_score >", 0)
                        ->get()->row_array();
    }

    public function get_games_by_library($library_id)
    {
        return $this->db->select("*")
                        ->from("games")
                        ->where("library_id", $library_id)
                        ->get()->result_array();
    }

    public function get_user_total_game_progress($library_id, $user_id)
    {
        return $this->db->select("sum(gp.progress) as total")
                        ->from("game_progress as gp")
                        ->join("games as g", "g.games_id = gp.game_id", "left")
                        ->where("g.library_id", $library_id)
                        ->where("gp.user_id", $user_id)
                        ->get()->row_array();
    }

    public function get_user_total_video_progress($library_id, $user_id)
    {
        return $this->db->select("vp.progress as total")
                        ->from("video_progress as vp")
                        ->join("video as v", "v.video_id = vp.video_id", "left")
                        ->where("v.library_id", $library_id)
                        ->where("vp.user_id", $user_id)
                        ->get()->row_array();
    }
}