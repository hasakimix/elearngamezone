<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Videos extends Admin_Controller {

    protected $_template = 'layouts/templates/';
    protected $_primary_view = 'admin/videos/';
	
	public function __construct()
    {
        parent::__construct();
        $this->load->model("Model_videos", "m_videos");
    }
	
	public function index()
	{
        $data = &$this->data;
        $data['final_view'] = $this->_template.'_admin_template';
        $data['primary_view'] = $this->_primary_view.'_index';
        $data['videos'] = $this->m_videos->get_videos_with_library();
		$this->load->view($data['final_view'], $data);   
	}

	public function create()
	{
        $data = &$this->data;
        $data['final_view'] = $this->_template.'_admin_template';
        $data['primary_view'] = $this->_primary_view.'_create';
        $data['libraries'] = $this->m_videos->get_libraries();
		$this->load->view($data['final_view'], $data);   
	}

	public function update($video_id)
	{
        $data = &$this->data;
        $data['final_view'] = $this->_template.'_admin_template';
        $data['primary_view'] = $this->_primary_view.'_update';
        $data['libraries'] = $this->m_videos->get_libraries();
        $data['video'] = $this->m_videos->get_video_by_video_id($video_id);
		$this->load->view($data['final_view'], $data);   
	}

    public function save($method)
    {
        $data = $this->input->post();
        if($method == "create"){
            $save_data["library_id"] = $data["library_id"];
            $save_data["name"] = $data["name"];
            $save_data["description"] = $data["description"];
            $save_data["video_url"] = $data["video_url"];
            $save_data["creted_at"] = UTC_NOW();
            if($this->m_videos->save_video($save_data)){
                $this->session->set_flashdata('success', 'Video Successfully Added');
            }else{
                $this->session->set_flashdata('error', 'Failed To Add Video');
            }
        }else{
            $save_data["video_id"] = $data["video_id"];
            $save_data["library_id"] = $data["library_id"];
            $save_data["name"] = $data["name"];
            $save_data["description"] = $data["description"];
            $save_data["video_url"] = $data["video_url"];
            $save_data["updated_at"] = UTC_NOW();
            if($this->m_videos->update_video($save_data)){
                $this->session->set_flashdata('success', 'Video Successfully Updated');
            }else{
                $this->session->set_flashdata('error', 'Failed To Update Video');
            }  
        }

        redirect(base_url("admin/videos"));
    }

    public function delete($video_id)
    {
        if($video_id){
            if($this->m_videos->delete_video($video_id)){
                $this->session->set_flashdata('success', 'Video Successfully Deleted');
            }else{
                $this->session->set_flashdata('error', 'Failed to delete Video');
            }
        }else{
            $this->session->set_flashdata('error', 'Invalid Request');
        }
        redirect($_SERVER["HTTP_REFERER"]);
    }
}