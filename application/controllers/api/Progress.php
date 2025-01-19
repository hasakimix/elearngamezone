<?php
/**
 * Inculde header for api
 */
include(APPPATH.'controllers/api/header.php');

class Progress extends MY_Api
{
	protected $http_code = 400;
    protected $is_success = false;
    protected $message = "Bad Request";

    /**
     * constructor
     */
    public function __construct()
    {
        parent::__construct();
		$this->load->model("Model_videos", "m_vid");
		$this->load->model("Model_games", "m_games");
		$this->load->model("Model_modules", "m_module");
		$this->load->model("Model_quiz", "m_quizzes");
    }

	public function video()
	{
		$data = $this->request_data;
		$method = strtolower($_SERVER['REQUEST_METHOD']);
		if($method == "post"){
			$save_data["user_id"] = $data["user_id"];
			$save_data["video_id"] = $data["video_id"];
			$save_data["progress"] = round(floatval($data["progress"]), 2);

			$get_existing_progress = $this->m_vid->get_user_progress(
				$save_data["user_id"], 
				$save_data["video_id"]
			);
			
			if($get_existing_progress){
				$save_data["progress_id"] = $get_existing_progress["progress_id"];
				$save_result = $this->m_vid->update_progress($save_data);
			}else{
				$save_result = $this->m_vid->save_progress($save_data);
			}

			if($save_result){
				$this->http_code = 200;
				$this->is_success = true;
				$this->message = "Video Progress Successfully Saved!";
			}else{
				$this->http_code = 500;
				$this->is_success = false;
				$this->message = "Failed to save video progress!";
			}
		}
		
		http_response_code($this->http_code);
		echo json_encode([
			'success' => $this->is_success,
			'message' => $this->message,
			'data' => $this->request_data
		]);  
	}

	public function game()
	{
		$data = $this->request_data;
		$method = strtolower($_SERVER['REQUEST_METHOD']);
		if($method == "post"){
			$save_data["user_id"] = $data["user_id"];
			$save_data["game_id"] = $data["game_id"];
			$save_data["progress"] = round(floatval($data["progress"]), 2);

			$get_existing_progress = $this->m_games->get_user_progress(
				$save_data["user_id"], 
				$save_data["game_id"]
			);
			
			if($get_existing_progress){
				$save_data["progress_id"] = $get_existing_progress["progress_id"];
				$save_result = $this->m_games->update_progress($save_data);
			}else{
				$save_result = $this->m_games->save_progress($save_data);
			}

			if($save_result){
				$this->http_code = 200;
				$this->is_success = true;
				$this->message = "Game Progress Successfully Saved!";
			}else{
				$this->http_code = 500;
				$this->is_success = false;
				$this->message = "Failed to save game progress!";
			}
		}
		
		http_response_code($this->http_code);
		echo json_encode([
			'success' => $this->is_success,
			'message' => $this->message,
			'data' => $this->request_data
		]);  
	}

	public function module()
	{
		$data = $this->request_data;
		$method = strtolower($_SERVER['REQUEST_METHOD']);
		if($method == "post"){
			$save_result = false;
			$user_id = $data["user_id"];
			$chapter_id = $data["chapter_id"];

			$module_data = $this->m_module->get_module_by_chapter_id($chapter_id);
			if($module_data){
				$module_id = $module_data["module_id"];
				$module_progress = $this->m_module->get_user_module_progress($module_id, $user_id);
				$chapters = $this->m_module->get_chapters_by_module_id($module_id);
				$progress_scoring = $chapters ? round(floatval(100 / count($chapters)), 2) : 0;
				if($module_progress){
					$progress_scoring = (floatval($progress_scoring) + floatval($module_progress["progress"]));
					$progress_scoring = round($progress_scoring, 2);
					$progress_scoring = ($progress_scoring > 100) ? 100 : $progress_scoring;
					$save_data["progress_id"] = $module_progress["progress_id"];
					$save_data["progress"] = $progress_scoring;
					$save_result = $this->m_module->update_module_progress($save_data);
				}else{
					$save_data["user_id"] = $user_id;
					$save_data["module_id"] = $module_id;
					$save_data["progress"] = $progress_scoring;
					$save_result = $this->m_module->save_module_progress($save_data);
				}
			}

			if($save_result){
				$this->http_code = 200;
				$this->is_success = true;
				$this->message = "Module Progress Successfully Saved!";
			}else{
				$this->http_code = 500;
				$this->is_success = false;
				$this->message = "Module to save video progress!";
			}
		}
		
		http_response_code($this->http_code);
		echo json_encode([
			'success' => $this->is_success,
			'message' => $this->message,
			'data' => $this->request_data
		]);
	}

	public function quiz()
	{
		$data = $this->request_data;
		$method = strtolower($_SERVER['REQUEST_METHOD']);
		if($method == "post"){
			$save_result = false;
			$user_id = $data["user_id"];
			$quiz_id = $data["quiz_id"];
			$score = $data["score"];

			$quiz_data = $this->m_quizzes->get_quiz_by_quiz_id($quiz_id);
			if($quiz_data){
				$library_id = $quiz_data["library_id"];
				$modules = $this->m_module->get_modules($library_id);
				$module_id = array_map(function($data){ 
					return $data["module_id"]; 
				},$modules);
				if($module_id){
					$module_id = implode(",", $module_id);
					$module_progress = $this->m_quizzes->get_module_progress_by_module_ids($module_id);
					if($module_progress){
						foreach ($module_progress as $k => $m) {
							$save_data["progress_id"] = $m["progress_id"];
							$save_data["quiz_score"] = $score;
							$save_result = $this->m_module->update_module_progress($save_data);
						}
					}else{
						foreach ($modules as $k => $m) {
							$save_data["user_id"] = $user_id;
							$save_data["module_id"] = $m['module_id'];
							$save_data["quiz_score"] = $score;
							$save_result = $this->m_module->save_module_progress($save_data);
						}
					}
				}
			}

			if($save_result){
				$this->http_code = 200;
				$this->is_success = true;
				$this->message = "Quiz Progress Successfully Saved!";
			}else{
				$this->http_code = 500;
				$this->is_success = false;
				$this->message = "Failed to save quiz progress!";
			}
		}
		
		http_response_code($this->http_code);
		echo json_encode([
			'success' => $this->is_success,
			'message' => $this->message,
			'data' => $this->request_data
		]);
	}

    
}
