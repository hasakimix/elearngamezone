<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Model_flashcards extends MY_Model
{
    public function __construct()
	{
		parent::__construct();
	}

    public function get_flashcards_with_library()
    {
        $flashcards = $this->db->select("*")
                            ->from("flashcard")
                            ->get()->result_array();

        $libraries = $this->db->select("*")
                            ->from("library")
                            ->get()->result_array();

        foreach ($flashcards as $key => $value) {
            $library_id = $value["library_id"];
            $library = array_filter($libraries, function ($lib) use ($library_id) {
                return intval($lib['library_id']) == intval($library_id);
            });
            $library = array_values($library);
            if(isset($library[0]["library_name"])){
                $flashcards[$key]["library_name"] = $library[0]["library_name"];
            }else{
                $flashcards[$key]["library_name"] = "Subject was Deleted";
            }
        }

        return $flashcards;
    }

	public function get_library($id)
    {
        return $this->db->select("*")
                        ->from("library")
						->where("library_id",$id)
                        ->get()->row_array();
    }

	public function get_flashcard($id)
    {
        return $this->db->select("*")
                        ->from("flashcard")
						->where("library_id",$id)
                        ->get()->result_array();
    }

    public function get_libraries()
    {
        return $this->db->select("*")
                        ->from("library")
                        ->get()->result_array();
    } 

	public function save_flashcard($save_data)
	{
		$this->writeDB->insert("flashcard", $save_data);
        if ($this->writeDB->affected_rows() > 0) {
            return $this->writeDB->insert_id();
        } else {
            return false;
        }
	}

    public function update_flashcard(array $save_data): mixed
    {
        $this->writeDB->where("flashcard_id", $save_data["flashcard_id"])
                ->set($save_data)
                ->update("flashcard");

        if ($this->writeDB->affected_rows() >= 0) {
            return true;
        } else {
            return false;
        }
    } 

	public function get_flashcard_by_flashcard_Id($id)
    {
        return $this->db->select("*")
                        ->from("flashcard")
						->where("flashcard_id",$id)
                        ->get()->row_array();
    }

    public function delete_flashcard($flashcard_id)
    {
        $this->db->where("flashcard_id", $flashcard_id);
        $this->db->delete("flashcard");
        return ($this->db->affected_rows() > 0);
    }

}
