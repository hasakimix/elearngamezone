<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Model_modules extends MY_Model
{
    public function __construct()
	{
		parent::__construct();
	}

	public function get_modules($library_id)
    {
        return $this->db->select("*")
                        ->from("module")
						->where("library_id",$library_id)
                        ->get()->result_array();
    }

    public function get_chapters($library_id)
    {
        return $this->db->select("c.*")
                        ->from("chapter as c")
                        ->join("module m", "m.module_id = c.module_id", "left")
                        ->where("m.library_id", $library_id)
                        ->get()->result_array();
    }

	public function get_libraries()
    {
        return $this->db->select("*")
                        ->from("library")
                        ->get()->result_array();
    }

	public function save($save_data)
	{
		$this->writeDB->insert("user_library", $save_data);
        if ($this->writeDB->affected_rows() > 0) {
            return $this->writeDB->insert_id();
        } else {
            return false;
        }
	}

    public function delete($user_id, $library_id)
    {
        $this->db->where("user_id", $user_id);
        $this->db->where("library_id", $library_id);
        $this->db->delete("user_library");
        return ($this->db->affected_rows() > 0);
    }

    public function get_modules_with_library()
    {
        $modules = $this->db->select("*")
                            ->from("module")
                            ->get()->result_array();

        $libraries = $this->db->select("*")
                            ->from("library")
                            ->get()->result_array();

        foreach ($modules as $key => $value) {
            $library_id = $value["library_id"];
            $library = array_filter($libraries, function ($lib) use ($library_id) {
                return intval($lib['library_id']) == intval($library_id);
            });
            $library = array_values($library);
            if(isset($library[0]["library_name"])){
                $modules[$key]["library_name"] = $library[0]["library_name"];
            }else{
                $modules[$key]["library_name"] = "Subject was Deleted";
            }
        }

        return $modules;
    }

    public function get_module_by_module_id($module_id)
    {
        $module = $this->db->select("*")
                            ->from("module")
                            ->where("module_id", $module_id)
                            ->get()->row_array();

        return $module;
    }

	public function save_module($save_data)
	{
		$this->writeDB->insert("module", $save_data);
        if ($this->writeDB->affected_rows() > 0) {
            return $this->writeDB->insert_id();
        } else {
            return false;
        }
	}

    public function update_module(array $save_data): mixed
    {
        $this->writeDB->where("module_id", $save_data["module_id"])
                ->set($save_data)
                ->update("module");

        if ($this->writeDB->affected_rows() >= 0) {
            return true;
        } else {
            return false;
        }
    }  

    public function delete_module($module_id)
    {
        $this->db->where("module_id", $module_id);
        $this->db->delete("module");
        return ($this->db->affected_rows() > 0);
    }

    public function get_chapters_by_module_id($module_id)
    {
        return $this->db->select("*")
                        ->from("chapter")
                        ->where("module_id", $module_id)
                        ->get()->result_array();
    }

	public function save_chapter($save_data)
	{
		$this->writeDB->insert("chapter", $save_data);
        if ($this->writeDB->affected_rows() > 0) {
            return $this->writeDB->insert_id();
        } else {
            return false;
        }
	}

    public function get_chapter_by_chapter_id($chapter_id)
    {
        return $this->db->select("*")
                        ->from("chapter")
                        ->where("chapter_id", $chapter_id)
                        ->get()->row_array();
    }

    public function delete_chapter($chapter_id)
    {
        $this->db->where("chapter_id", $chapter_id);
        $this->db->delete("chapter");
        return ($this->db->affected_rows() > 0);
    }

    public function update_chapter(array $save_data): mixed
    {
        $this->writeDB->where("chapter_id", $save_data["chapter_id"])
                ->set($save_data)
                ->update("chapter");

        if ($this->writeDB->affected_rows() >= 0) {
            return true;
        } else {
            return false;
        }
    } 

    public function get_module_by_chapter_id($chapter_id)
    {
        return $this->db->select("*")
                        ->from("chapter")
                        ->where("chapter_id", $chapter_id)
                        ->get()->row_array();
    }
   
    public function get_user_module_progress($module_id, $user_id)
    {
        return $this->db->select("*")
                        ->from("module_progress")
                        ->where("module_id", $module_id)
                        ->where("user_id", $user_id)
                        ->get()->row_array();
    }   

	public function save_module_progress($save_data)
	{
		$this->writeDB->insert("module_progress", $save_data);
        if ($this->writeDB->affected_rows() > 0) {
            return $this->writeDB->insert_id();
        } else {
            return false;
        }
	}

    public function update_module_progress(array $save_data): mixed
    {
        $this->writeDB->where("progress_id", $save_data["progress_id"])
                ->set($save_data)
                ->update("module_progress");

        if ($this->writeDB->affected_rows() >= 0) {
            return true;
        } else {
            return false;
        }
    } 


}
