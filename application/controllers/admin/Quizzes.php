<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quizzes extends Admin_Controller {

    protected $_template = 'layouts/templates/';
    protected $_primary_view = 'admin/quizzes/';
	
	public function __construct()
    {
        parent::__construct();
        $this->load->model("Model_quiz", "m_quiz");
    }
	
	public function index()
	{
        $data = &$this->data;
        $data['final_view'] = $this->_template.'_admin_template';
        $data['primary_view'] = $this->_primary_view.'_index';
        $data['quizzes'] = $this->m_quiz->get_quizzes_with_library();
		$this->load->view($data['final_view'], $data);   
	}

    public function manage($method, $method_id)
    {
        if($method == "create"){
            $data = &$this->data;
            $data['final_view'] = $this->_template.'_admin_template';
            $data['primary_view'] = $this->_primary_view.'_create';
            $data['libraries'] = $this->m_quiz->get_libraries();
            $this->load->view($data['final_view'], $data);
        }else if($method == "update"){
            $data = &$this->data;
            $data['final_view'] = $this->_template.'_admin_template';
            $data['primary_view'] = $this->_primary_view.'_update';
            $data['libraries'] = $this->m_quiz->get_libraries();
            $data['quiz'] = $this->m_quiz->get_quiz_by_quiz_id($method_id);
            $this->load->view($data['final_view'], $data);
        }else if($method == "delete"){
            $this->quiz_cascade_delete($method_id);
            redirect($_SERVER["HTTP_REFERER"]);
        }else{
            $this->session->set_flashdata('error', 'Invalid Request');
            redirect($_SERVER["HTTP_REFERER"]);
        }
    }

    public function save($method)
    {
        $data = $this->input->post();
        if($method == "create"){
            $save_data["library_id"] = $data["library_id"];
            $save_data["quiz_name"] = $data["quiz_name"];
            $save_data["created_at"] = UTC_NOW();
            if($this->m_quiz->save_quiz($save_data)){
                $this->session->set_flashdata('success', 'Quiz Successfully Added');
            }else{
                $this->session->set_flashdata('error', 'Failed To Add Quiz');
            }
        }else{
            $save_data["quiz_id"] = $data["quiz_id"];
            $save_data["library_id"] = $data["library_id"];
            $save_data["quiz_name"] = $data["quiz_name"];
            $save_data["updated_at"] = UTC_NOW();
            if($this->m_quiz->update_quiz($save_data)){
                $this->session->set_flashdata('success', 'Quiz Successfully Updated');
            }else{
                $this->session->set_flashdata('error', 'Failed To Update Quiz');
            }
        }

        redirect(base_url("admin/quizzes"));
    }

	public function questions($quiz_id)
	{
        $data = &$this->data;
        $data['final_view'] = $this->_template.'_admin_template';
        $data['primary_view'] = $this->_primary_view.'_question_index';
        $data['quiz'] = $this->m_quiz->get_quiz_by_quiz_id($quiz_id);
        $data['questions'] = $this->m_quiz->get_questions_by_quiz_id($quiz_id);
		$this->load->view($data['final_view'], $data);   
	}

    public function question_manage($method, $method_id)
    {
        if($method == "create"){
            $data = &$this->data;
            $data['final_view'] = $this->_template.'_admin_template';
            $data['primary_view'] = $this->_primary_view.'_question_create';
            $data['quiz'] = $this->m_quiz->get_quiz_by_quiz_id($method_id);
            $this->load->view($data['final_view'], $data);
        }else if($method == "update"){
            $data = &$this->data;
            $data['final_view'] = $this->_template.'_admin_template';
            $data['primary_view'] = $this->_primary_view.'_question_update';
            $data['question'] = $this->m_quiz->get_question_by_solution_id($method_id);
            $data['answers'] = $this->m_quiz->get_answers_by_solution_id($data['question']['solution_id']);
            $this->load->view($data['final_view'], $data);
        }else if($method == "delete"){
            $this->question_cascade_delete($method_id);
            redirect($_SERVER["HTTP_REFERER"]);
        }else{
            $this->session->set_flashdata('error', 'Invalid Request');
            redirect($_SERVER["HTTP_REFERER"]);
        }
    }

    public function question_save($method)
    {
        $data = $this->input->post();
        if($method == "create"){
            $save_data["quiz_id"] = $data["quiz_id"];
            $save_data["query"] = $data["query"];
            $save_data["created_at"] = UTC_NOW();
            $solution_id = $this->m_quiz->save_question($save_data);
            if($solution_id){
                $options = json_decode($data["answers_data"], true);
                $this->answers_batch_save($solution_id, $options);
            }else{
                $this->session->set_flashdata('error', 'Failed To Add Question');
            }
        }else{
            $save_data["solution_id"] = $data["solution_id"];
            $save_data["query"] = $data["query"];
            $save_data["updated_at"] = UTC_NOW();
            if($this->m_quiz->update_question($save_data)){
                $delete_options = $this->m_quiz->delete_question_options($data["solution_id"]);
                if($delete_options){
                    $options = json_decode($data["answers_data"], true);
                    $this->answers_batch_save($data["solution_id"], $options);
                }else{
                    $this->session->set_flashdata('error', 'Failed To Update Answers');
                }
                $this->session->set_flashdata('success', 'Quiz Successfully Updated');
            }else{
                $this->session->set_flashdata('error', 'Failed To Update Quiz');
            }
        }

        redirect(base_url("admin/quizzes/questions/".$data["quiz_id"]));
    }

    private function answers_batch_save($solution_id, $options)
    {
        if($options){
            $save_batch = [];
            foreach ($options as $key => $value) {
                array_push($save_batch,[
                    "solutions_id" => $solution_id,
                    "answer" => $value["answer"],
                    "is_correct" => to_boolean($value["is_correct"])
                ]);
            }
            if($save_batch){
                $save_options_result = $this->m_quiz->save_batch_answers($save_batch);
                if($save_options_result){
                    $this->session->set_flashdata('success', 'Question Successfully Added');
                }else{
                    $this->session->set_flashdata('error', 'Failed To Add Answers');
                }
            }else{
                $this->session->set_flashdata('error', 'There are no answers to add.');
            }
        }else{
            $this->session->set_flashdata('error', 'There are no answers to add.');
        }
    }

    private function question_cascade_delete($solution_id)
    {
        if($solution_id){
            $delete_options = $this->m_quiz->delete_question_options($solution_id);
            if($delete_options){
                if($this->m_quiz->delete_question($solution_id)){
                    $this->session->set_flashdata('success', 'Question Successfully Deleted');
                }else{
                    $this->session->set_flashdata('error', 'Failed to delete Question');
                }
            }else{
                $this->session->set_flashdata('error', 'Failed to delete Question'); 
            }
        }else{
            $this->session->set_flashdata('error', 'Invalid Request');
        }
    }

    private function quiz_cascade_delete($quiz_id)
    {
        if($quiz_id){
            if($this->m_quiz->delete_quiz($quiz_id)){
                $questions = $this->m_quiz->get_questions_by_quiz_id($quiz_id);
                if($questions){
                    foreach ($questions as $key => $value) {
                        $this->question_cascade_delete($value["solution_id"]);
                    }
                    $this->session->set_flashdata('success', 'Quiz Successfully Deleted');
                }else{
                    $this->session->set_flashdata('success', 'Quiz Successfully Deleted');
                }
            }else{
                $this->session->set_flashdata('error', 'Failed to delete Quiz');
            }
        }else{
            $this->session->set_flashdata('error', 'Invalid Request');
        }
    }
}
