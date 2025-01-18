<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Flashcards extends Admin_Controller {

    protected $_template = 'layouts/templates/';
    protected $_primary_view = 'admin/flashcards/';
	
	public function __construct()
    {
        parent::__construct();
        $this->load->model("Model_flashcards", "m_flashcards");
    }
	
	public function index()
	{
        $data = &$this->data;
        $data['final_view'] = $this->_template.'_admin_template';
        $data['primary_view'] = $this->_primary_view.'_index';
        $data['flashcards'] = $this->m_flashcards->get_flashcards_with_library();
		$this->load->view($data['final_view'], $data);   
	}

	public function create()
	{
        $data = &$this->data;
        $data['final_view'] = $this->_template.'_admin_template';
        $data['primary_view'] = $this->_primary_view.'_create';
        $data['libraries'] = $this->m_flashcards->get_libraries();
		$this->load->view($data['final_view'], $data);   
	}

	public function update($flashcard_id)
	{
        $data = &$this->data;
        $data['final_view'] = $this->_template.'_admin_template';
        $data['primary_view'] = $this->_primary_view.'_update';
        $data['libraries'] = $this->m_flashcards->get_libraries();
        $data['flashcard'] = $this->m_flashcards->get_flashcard_by_flashcard_Id($flashcard_id);
		$this->load->view($data['final_view'], $data);   
	}


    public function save($method)
    {
        $data = $this->input->post();
        if($method == "create"){
            $save_data["library_id"] = $data["library_id"];
            $save_data["question"] = base64_encode($data["question"]);
            $save_data["answer"] = base64_encode($data["answer"]);
            $save_data["created_at"] = UTC_NOW();
            if($this->m_flashcards->save_flashcard($save_data)){
                $this->session->set_flashdata('success', 'Flashcard Successfully Added');
            }else{
                $this->session->set_flashdata('error', 'Failed To Add Flashcard');
            }
        }else{
            $save_data["flashcard_id"] = $data["flashcard_id"];
            $save_data["library_id"] = $data["library_id"];
            $save_data["question"] = base64_encode($data["question"]);
            $save_data["answer"] = base64_encode($data["answer"]);
            $save_data["updated_at"] = UTC_NOW();
            if($this->m_flashcards->update_flashcard($save_data)){
                $this->session->set_flashdata('success', 'Flashcard Successfully Updated');
            }else{
                $this->session->set_flashdata('error', 'Failed To Update Flashcard');
            }  
        }

        redirect(base_url("admin/flashcards"));
    }

    public function delete($flashcard_id)
    {
        if($flashcard_id){
            if($this->m_flashcards->delete_flashcard($flashcard_id)){
                $this->session->set_flashdata('success', 'Flashcard Successfully Deleted');
            }else{
                $this->session->set_flashdata('error', 'Failed to delete Flashcard');
            }
        }else{
            $this->session->set_flashdata('error', 'Invalid Request');
        }
        redirect($_SERVER["HTTP_REFERER"]);
    }
}
