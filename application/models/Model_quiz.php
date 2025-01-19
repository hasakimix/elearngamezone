<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Model_quiz extends MY_Model
{
    public function __construct()
	{
		parent::__construct();
	}

    public function get_quizzes_with_library()
    {
        $quizzes = $this->db->select("*")
                            ->from("quizzes")
                            ->get()->result_array();

        $libraries = $this->db->select("*")
                            ->from("library")
                            ->get()->result_array();

        foreach ($quizzes as $key => $value) {
            $library_id = $value["library_id"];
            $library = array_filter($libraries, function ($lib) use ($library_id) {
                return intval($lib['library_id']) == intval($library_id);
            });
            $library = array_values($library);
            if(isset($library[0]["library_name"])){
                $quizzes[$key]["library_name"] = $library[0]["library_name"];
            }else{
                $quizzes[$key]["library_name"] = "Subject was deleted.";
            }
        }

        return $quizzes;
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

    public function get_libraries()
    {
        return $this->db->select("*")
                        ->from("library")
                        ->get()->result_array();
    } 

	public function save_quiz($save_data)
	{
		$this->writeDB->insert("quizzes", $save_data);
        if ($this->writeDB->affected_rows() > 0) {
            return $this->writeDB->insert_id();
        } else {
            return false;
        }
	}

    public function update_quiz(array $save_data): mixed
    {
        $this->writeDB->where("quiz_id", $save_data["quiz_id"])
                ->set($save_data)
                ->update("quizzes");

        if ($this->writeDB->affected_rows() >= 0) {
            return true;
        } else {
            return false;
        }
    }  

    public function delete_quiz($quiz_id)
    {
        $this->db->where("quiz_id", $quiz_id);
        $this->db->delete("quizzes");
        return ($this->db->affected_rows() > 0);
    }

	public function get_quiz_by_quiz_id($quiz_id)
    {
        return $this->db->select("*")
                        ->from("quizzes")
						->where("quiz_id",$quiz_id)
                        ->get()->row_array();
    }

	public function get_questions_by_quiz_id($quiz_id)
    {
        return $this->db->select("*")
                        ->from("solutions")
						->where("quiz_id",$quiz_id)
                        ->get()->result_array();
    }

	public function get_question_by_solution_id($solution_id)
    {
        return $this->db->select("*")
                        ->from("solutions")
						->where("solution_id",$solution_id)
                        ->get()->row_array();
    }

	public function save_question($save_data)
	{
		$this->writeDB->insert("solutions", $save_data);
        if ($this->writeDB->affected_rows() > 0) {
            return $this->writeDB->insert_id();
        } else {
            return false;
        }
	}

    public function update_question(array $save_data): mixed
    {
        $this->writeDB->where("solution_id", $save_data["solution_id"])
                ->set($save_data)
                ->update("solutions");

        if ($this->writeDB->affected_rows() >= 0) {
            return true;
        } else {
            return false;
        }
    } 
    
    public function delete_question($solution_id)
    {
        $this->db->where("solution_id", $solution_id);
        $this->db->delete("solutions");
        return ($this->db->affected_rows() > 0);
    }

    public function save_batch_answers($save_data){
		$this->writeDB->insert_batch("options", $save_data);
		if ($this->writeDB->affected_rows() >= 0) {
			return $this->db->insert_id();
		} else {
			return false;
		}
    }

    public function update_batch_answers($update_data){
        $this->writeDB->update_batch("options",$update_data, "options_id");
		if ($this->writeDB->affected_rows() >= 0) {
			return true;
		} else {
			return false;
		}
    }

	public function get_answers_by_solution_id($solution_id)
    {
        return $this->db->select("*")
                        ->from("options")
						->where("solutions_id",$solution_id)
                        ->get()->result_array();
    }

    public function delete_question_options($solution_id)
    {
        $this->db->where("solutions_id", $solution_id);
        $this->db->delete("options");
        return ($this->db->affected_rows() > 0);
    }

    public function get_module_progress_by_module_ids($module_ids)
    {
        return $this->db->select("*")
                        ->from("module_progress")
                        ->where("module_id IN ($module_ids)",NULL,FALSE)
                        ->get()->result_array();
    }
    
}
