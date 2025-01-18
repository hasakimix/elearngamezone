<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modules extends Admin_Controller {

    protected $_template = 'layouts/templates/';
    protected $_primary_view = 'admin/modules/';
	
	public function __construct()
    {
        parent::__construct();
        $this->load->model("Model_modules", "m_modules");
    }
	
	public function index()
	{
        $data = &$this->data;
        $data['final_view'] = $this->_template.'_admin_template';
        $data['primary_view'] = $this->_primary_view.'_index';
        $data['modules'] = $this->m_modules->get_modules_with_library();
		$this->load->view($data['final_view'], $data);   
	}

	public function create()
	{
        $data = &$this->data;
        $data['final_view'] = $this->_template.'_admin_template';
        $data['primary_view'] = $this->_primary_view.'_create';
        $data['libraries'] = $this->m_modules->get_libraries();
		$this->load->view($data['final_view'], $data);   
	}

	public function update($module_id)
	{
        $data = &$this->data;
        $data['final_view'] = $this->_template.'_admin_template';
        $data['primary_view'] = $this->_primary_view.'_update';
        $data['libraries'] = $this->m_modules->get_libraries();
        $data['module'] = $this->m_modules->get_module_by_module_id($module_id);
		$this->load->view($data['final_view'], $data);   
	}

    public function save($method)
    {
        $data = $this->input->post();
        if($method == "create"){
            $save_data["library_id"] = $data["library_id"];
            $save_data["module_topic"] = $data["module_topic"];
            $save_data["creted_at"] = UTC_NOW();
            if($this->m_modules->save_module($save_data)){
                $this->session->set_flashdata('success', 'Module Topic Successfully Added');
            }else{
                $this->session->set_flashdata('error', 'Failed To Add Module Topic');
            }
        }else{
            $save_data["module_id"] = $data["module_id"];
            $save_data["library_id"] = $data["library_id"];
            $save_data["module_topic"] = $data["module_topic"];
            $save_data["updated_at"] = UTC_NOW();
            if($this->m_modules->update_module($save_data)){
                $this->session->set_flashdata('success', 'Module Topic Successfully Updated');
            }else{
                $this->session->set_flashdata('error', 'Failed To Update Module Topic');
            }
        }

        redirect(base_url("admin/modules"));
    }

    public function delete($module_id)
    {
        if($module_id){
            if($this->m_modules->delete_module($module_id)){
                $chapters = $this->m_modules->get_chapters_by_module_id($module_id);
                if($chapters){
                    foreach ($chapters as $key => $value) {
                        $this->m_modules->delete_chapter($value["chapter_id"]);
                    }
                    $this->session->set_flashdata('success', 'Module Topic Successfully Deleted');
                }else{
                    $this->session->set_flashdata('success', 'Module Topic Successfully Deleted');
                }
            }else{
                $this->session->set_flashdata('error', 'Failed to delete Module Topic');
            }
        }else{
            $this->session->set_flashdata('error', 'Invalid Request');
        }
        redirect($_SERVER["HTTP_REFERER"]);
    }

    public function view($module_id)
    {
        $data = &$this->data;
        $data['final_view'] = $this->_template.'_admin_template';
        $data['primary_view'] = $this->_primary_view.'_view';
        $data['module'] = $this->m_modules->get_module_by_module_id($module_id);
        $data['chapters'] = $this->m_modules->get_chapters_by_module_id($module_id);
		$this->load->view($data['final_view'], $data);
    }

    public function chapter($method, $method_id)
    {
        
        if($method == "create"){
            $data = &$this->data;
            $data['final_view'] = $this->_template.'_admin_template';
            $data['primary_view'] = $this->_primary_view.'_chapter_create';
            $data['module'] = $this->m_modules->get_module_by_module_id($method_id);
            $this->load->view($data['final_view'], $data);
        }else if($method == "update"){
            $data = &$this->data;
            $data['final_view'] = $this->_template.'_admin_template';
            $data['primary_view'] = $this->_primary_view.'_chapter_update';
            $data['chapter'] = $this->m_modules->get_chapter_by_chapter_id($method_id);
            $data['module'] = $this->m_modules->get_module_by_module_id($data['chapter']['module_id']);
            $this->load->view($data['final_view'], $data);
        }else if($method == "delete"){
            if($method_id){
                if($this->m_modules->delete_chapter($method_id)){
                    $this->session->set_flashdata('success', 'Chapter Successfully Deleted');
                }else{
                    $this->session->set_flashdata('error', 'Failed to delete Chapter');
                }
            }else{
                $this->session->set_flashdata('error', 'Invalid Request');
            }
            redirect($_SERVER["HTTP_REFERER"]);
        }else{
            $this->session->set_flashdata('error', 'Invalid Request');
            redirect($_SERVER["HTTP_REFERER"]);
        }
        
    }

    public function chapter_save($method)
    {
        $data = $this->input->post();
        $module_id = $data["module_id"];

        if($method == "create"){
            $save_data["module_id"] = $module_id;
            $save_data["chapter_name"] = $data["chapter_name"];
            $save_data["contents"] = base64_encode($data["contents"]);
            $save_data["created_at"] = UTC_NOW();
            if($this->m_modules->save_chapter($save_data)){
                $this->session->set_flashdata('success', 'Chapter Successfully Added');
            }else{
                $this->session->set_flashdata('error', 'Failed To Add Chapter');
            }
        }else{
            $save_data["chapter_id"] = $data["chapter_id"];
            $save_data["chapter_name"] = $data["chapter_name"];
            $save_data["contents"] = base64_encode($data["contents"]);
            $save_data["updated_at"] = UTC_NOW();
            if($this->m_modules->update_chapter($save_data)){
                $this->session->set_flashdata('success', 'Chapter Successfully Updated');
            }else{
                $this->session->set_flashdata('error', 'Failed To Update Chapter');
            }
        }

        redirect(base_url("admin/modules/view/".$module_id));
    }

}
