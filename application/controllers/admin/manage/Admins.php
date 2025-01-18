<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admins extends Admin_Controller {

    protected $_template = 'layouts/templates/';
    protected $_primary_view = 'admin/manage/';
	
	public function __construct()
    {
        parent::__construct();
        $this->load->model("Model_users", "m_users");
    }
	
	public function index()
	{
        $data = &$this->data;
        $data['final_view'] = $this->_template.'_admin_template';
        $data['primary_view'] = $this->_primary_view.'_admin_index';
        $data['users'] = $this->m_users->get_admin_users();
		$this->load->view($data['final_view'], $data);   
	}

	public function create()
	{
        $data = &$this->data;
        $data['final_view'] = $this->_template.'_admin_template';
        $data['primary_view'] = $this->_primary_view.'_admin_create';
		$this->load->view($data['final_view'], $data);   
	}

	public function update($id)
	{
        $data = &$this->data;
        $data['final_view'] = $this->_template.'_admin_template';
        $data['primary_view'] = $this->_primary_view.'_admin_update';
        $data['user'] = $this->m_users->get_admin_user_by_id($id);
		$this->load->view($data['final_view'], $data);   
	}

    public function save($method)
    {
        $data = $this->input->post();
        if($method == "create"){
            $save_data["first_name"] = $data["first_name"];
            $save_data["last_name"] = $data["last_name"];
            $save_data["email"] = strtolower($data["email"]);
            $save_data["password"] = password_hash($data["password"], PASSWORD_DEFAULT);
            $save_data["is_admin"] = true;
            $save_data["is_verified"] = true;
            if($this->m_users->save_admin_user($save_data)){
                $this->session->set_flashdata('success', 'Admin User Successfully Added');
            }else{
                $this->session->set_flashdata('error', 'Failed To Add Admin User');
            }
        }else{
            $save_data["id"] = $data["id"];
            $save_data["first_name"] = $data["first_name"];
            $save_data["last_name"] = $data["last_name"];
            $save_data["email"] = strtolower($data["email"]);
            if(!empty($data["password"])){
                $save_data["password"] = password_hash($data["password"], PASSWORD_DEFAULT);
            }
            $save_data["is_admin"] = true;
            $save_data["is_verified"] = true;
            if($this->m_users->update_admin_user($save_data)){
                $this->session->set_flashdata('success', 'Admin User Successfully Updated');
            }else{
                $this->session->set_flashdata('error', 'Failed To Update Admin User');
            }  
        }

        redirect(base_url("admin/manage/admins"));
    }

    public function delete($id)
    {
        if($id){
            $save_data["id"] = $id;
            $save_data["is_admin"] = false;
            if($this->m_users->update_admin_user($save_data)){
                $this->session->set_flashdata('success', 'Admin User Successfully Deleted');
            }else{
                $this->session->set_flashdata('error', 'Failed to delete Admin User');
            }
        }else{
            $this->session->set_flashdata('error', 'Invalid Request');
        }
        redirect($_SERVER["HTTP_REFERER"]);
    }
}