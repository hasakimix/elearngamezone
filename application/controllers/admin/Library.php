<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Library extends Admin_Controller {

    protected $_template = 'layouts/templates/';
    protected $_primary_view = 'admin/';
	
	public function __construct()
    {
        parent::__construct();
        $this->load->model("Model_library", "m_library");
    }
	
	public function index()
	{
        $data = &$this->data;
        $data['final_view'] = $this->_template.'_admin_template';
        $data['primary_view'] = $this->_primary_view.'library';
        $data["libraries"] = $this->m_library->get_libraries();
		$this->load->view($data['final_view'], $data);   
	}

    public function save()
    {
        $data = $this->input->post();

        if(intval($data["library_id"])){
            $save_data["library_id"] = $data["library_id"];
            $save_data["library_name"] = $data["library-name"];
            $save_data["image_url"] = $data["library-image"];
            $save_data["description"] = base64_encode($data["description"]);
            $save_data["updated_at"] = UTC_NOW();
            if($this->m_library->update_library($save_data)){
                $this->session->set_flashdata('success', 'Subject Successfully Updated');
            }else{
                $this->session->set_flashdata('error', 'Failed To Update Subject');
            }
        }else{
            $save_data["library_name"] = $data["library-name"];
            $save_data["image_url"] = $data["library-image"];
            $save_data["description"] = base64_encode($data["description"]);
            $save_data["created_at"] = UTC_NOW();
            if($this->m_library->save_library($save_data)){
                $this->session->set_flashdata('success', 'Subject Successfully Added');
            }else{
                $this->session->set_flashdata('error', 'Failed To Add Subject');
            }
        }

        redirect($_SERVER["HTTP_REFERER"]);
    }

    public function delete($library_id)
    {
        if($library_id){
            if($this->m_library->delete_library($library_id)){
                $this->session->set_flashdata('success', 'Subject Successfully Deleted');
            }else{
                $this->session->set_flashdata('error', 'Failed to delete subject');
            }
        }else{
            $this->session->set_flashdata('error', 'Invalid Request');
        }
        redirect($_SERVER["HTTP_REFERER"]);
    }
}
