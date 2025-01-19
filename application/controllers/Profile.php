<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends Auth_Controller {

    protected $_template = 'layouts/templates/';
    protected $_primary_view = 'main/profile/';
	
	public function __construct()
    {
        parent::__construct();
        $this->load->model("Model_users", "m_users");
        $this->load->model("Model_user_progress", "m_progress");
    }
	public function index()
	{
        $session = $this->session->get_userdata();
        $user_id = $session["id"];
        
        $data = &$this->data;
        $data['final_view'] = $this->_template.'_main_template';
        $data['primary_view'] = $this->_primary_view.'_index';
        $data['user'] = $this->m_users->get_client_user_by_id($user_id);
        $data['libraries'] = $this->m_users->get_libraries();
        $data['progress'] = $this->_user_account_progress($user_id);
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

    public function save($method)
    {
        $data = $this->input->post();
        if($method == "update"){
            $save_data["id"] = $data["id"];
            $save_data["first_name"] = $data["first_name"];
            $save_data["last_name"] = $data["last_name"];
            $save_data["information"] = empty($data['information']) ? null : $data['information'];
            $save_data["bio"] = empty($data['bio']) ? null : $data['bio'];
            $this->m_users->update_client_user($save_data);
        }
        redirect($_SERVER["HTTP_REFERER"]);
    }
}

