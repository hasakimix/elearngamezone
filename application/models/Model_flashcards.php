<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Model_flashcards extends MY_Model
{
    public function __construct()
	{
		parent::__construct();
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
}
