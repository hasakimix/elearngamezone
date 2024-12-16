<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Model_quiz extends MY_Model
{
    public function __construct()
	{
		parent::__construct();
	}

	public function get_quiz($library_id)
    {
        return $this->db->select("*")
                        ->from("quizzes")
						->where("library_id",$library_id)
                        ->get()->row_array();
    }

	public function get_questions($quiz_id)
    {
        $result = $this->db->select("*")
                            ->from("solutions")
                            ->where("quiz_id",$quiz_id)
                            ->get()->result_array();
        foreach ($result as $key => $value) {
            $result[$key]["options"] = $this->get_options($value["solution_id"]);
        }

        return $result;
    }

	public function get_options($solution_id)
    {
        return $this->db->select("*")
                        ->from("options")
						->where("solutions_id",$solution_id)
                        ->get()->result_array();
    }

    
}
