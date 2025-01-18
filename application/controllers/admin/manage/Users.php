<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends Admin_Controller {

    protected $_template = 'layouts/templates/';
    protected $_primary_view = 'admin/manage/';
	
	public function __construct()
    {
        parent::__construct();
        $this->load->model("Model_users", "m_users");
        $this->load->model("Model_user_progress", "m_progress");
    }
	
	public function index()
	{
        $data = &$this->data;
        $data['final_view'] = $this->_template.'_admin_template';
        $data['primary_view'] = $this->_primary_view.'_user_index';
        $data['users'] = $this->m_users->get_users();
		$this->load->view($data['final_view'], $data);   
	}

	public function create()
	{
        $data = &$this->data;
        $data['final_view'] = $this->_template.'_admin_template';
        $data['primary_view'] = $this->_primary_view.'_user_create';
		$this->load->view($data['final_view'], $data);   
	}

	public function update($id)
	{
        $data = &$this->data;
        $data['final_view'] = $this->_template.'_admin_template';
        $data['primary_view'] = $this->_primary_view.'_user_update';
        $data['user'] = $this->m_users->get_client_user_by_id($id);
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
            $save_data["is_admin"] = false;
            $save_data["is_verified"] = true;
            $save_data["information"] = empty($data['information']) ? null : $data['information'];
            $save_data["bio"] = empty($data['bio']) ? null : $data['bio'];
            if($this->m_users->save_client_user($save_data)){
                $this->session->set_flashdata('success', 'Client User Successfully Added');
            }else{
                $this->session->set_flashdata('error', 'Failed To Add Client User');
            }
        }else{
            $save_data["id"] = $data["id"];
            $save_data["first_name"] = $data["first_name"];
            $save_data["last_name"] = $data["last_name"];
            $save_data["email"] = strtolower($data["email"]);
            if(!empty($data["password"])){
                $save_data["password"] = password_hash($data["password"], PASSWORD_DEFAULT);
            }
            $save_data["is_admin"] = false;
            $save_data["is_verified"] = true;
            $save_data["information"] = empty($data['information']) ? null : $data['information'];
            $save_data["bio"] = empty($data['bio']) ? null : $data['bio'];
            if($this->m_users->update_client_user($save_data)){
                $this->session->set_flashdata('success', 'Client User Successfully Updated');
            }else{
                $this->session->set_flashdata('error', 'Failed To Update Client User');
            }  
        }

        redirect(base_url("admin/manage/users"));
    }

    public function delete($user_id)
    {
        if($user_id){
            $delete_progress = $this->m_users->delete_user_progress($user_id);
            if($delete_progress){
                if($this->m_users->delete_client_user($user_id)){
                    $this->session->set_flashdata('success', 'Client User Successfully Deleted');
                }else{
                    $this->session->set_flashdata('error', 'Failed to delete Client User');
                }
            }else{
                $this->session->set_flashdata('error', 'Failed to delete Client User');
            }
        }else{
            $this->session->set_flashdata('error', 'Invalid Request');
        }
        redirect($_SERVER["HTTP_REFERER"]);
    }

    public function view($id)
    {
        $data = &$this->data;
        $data['final_view'] = $this->_template.'_admin_template';
        $data['primary_view'] = $this->_primary_view.'_user_view';
        $data['user'] = $this->m_users->get_client_user_by_id($id);
        $data['libraries'] = $this->m_users->get_libraries();
        $data['progress'] = $this->_user_account_progress($id);
		$this->load->view($data['final_view'], $data);  
    }

    private function _user_account_progress($id)
    {
        $progress = [];
        $libraries = $this->m_users->get_libraries();
        foreach ($libraries as $key => $value) {
            $progress[$value["library_id"]] = [
                "modules" => $this->_get_modules_user_progress($value["library_id"], $id),
                "games" => $this->_get_games_user_progress($value["library_id"], $id),
                "videos" => $this->_get_video_user_progress($value["library_id"], $id),
                "quizzes" => $this->_get_quizzes_user_progress($value["library_id"], $id)
            ];
        }
        return $progress;
    }

    private function _get_modules_user_progress($library_id, $user_id): mixed
    {
        $progress = 0;

        $totalItems = count($this->m_progress->get_modules_by_library($library_id));
        $totalItems = ($totalItems * 100);

        $totalUserProgress = $this->m_progress->get_user_total_module_progress($library_id, $user_id);
        $totalUserProgress = $totalUserProgress ? $totalUserProgress['total'] : 0;

        $progress = (floatval($totalUserProgress) / floatval($totalItems));
        $progress = round(($progress * 100), 2);

        return $progress;
    }

    private function _get_quizzes_user_progress($library_id, $user_id): mixed
    {
        $progress = $this->m_progress->get_user_total_quizzes_progress($library_id, $user_id);
        if($progress){
            return floatval($progress['quiz_score']);
        }else{
            return 0;
        }
    }

    private function _get_games_user_progress($library_id, $user_id): mixed
    {
        $progress = 0;

        $totalItems = count($this->m_progress->get_games_by_library($library_id));
        $totalItems = ($totalItems * 100);

        $totalUserProgress = $this->m_progress->get_user_total_game_progress($library_id, $user_id);
        $totalUserProgress = $totalUserProgress ? $totalUserProgress['total'] : 0;

        $progress = (floatval($totalUserProgress) / floatval($totalItems));
        $progress = round(($progress * 100), 2);

        return $progress;
    }

    private function _get_video_user_progress($library_id, $user_id): mixed
    {
        $progress = 0;

        $totalUserProgress = $this->m_progress->get_user_total_video_progress($library_id, $user_id);
        $progress = $totalUserProgress ? $totalUserProgress['total'] : 0;

        return $progress;
    }
}
