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
    
}
