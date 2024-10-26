<?php
/**
 * Inculde header for api
 */
include(APPPATH.'controllers/api/header.php');

class Users extends MY_Api
{
    /**
     * constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Model_users","users");
    }

    public function index(){
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $users = $this->users->get();
            http_response_code(200);
            echo json_encode([
                'success' => true,
                'message' => 'Success request',
                'data' => $users
            ]);
        } else {
            http_response_code(400);
            echo json_encode([
                'success' => false,
                'message' => 'Bad Request.'
            ]);
        }
    }

    public function create(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = $this->request_data;

            $save_user = $this->users->save([
                "sso_guid" => guid(),
                "email" => make_string_safe($data['email'])
            ]);

            if($save_user){
                $result = true;

                $data['user_id'] = $save_user; 

                if($this->user_personal_data($data)){
                    $result = true;
                }else{
                    $result = false;
                }

                if($this->user_spouse_data($data)){
                    $result = true;
                }else{
                    $result = false;
                }

                if($result){
                    http_response_code(200);
                    echo json_encode([
                        'success' => true,
                        'message' => 'User Created Successfully'
                    ]);
                }else{
                    http_response_code(500);
                    echo json_encode([
                        'success' => false,
                        'message' => 'Internal Error'
                    ]);  
                }

            }else{
                http_response_code(500);
                echo json_encode([
                    'success' => false,
                    'message' => 'Internal Error'
                ]);
            }

            
        } else {
            http_response_code(400);
            echo json_encode([
                'success' => false,
                'message' => 'Bad Request.'
            ]);
        }
    }

    private function user_personal_data($data)
    {
        $save_user_data = true;
        if( isset($data['first_name']) || 
            isset($data['last_name']) || 
            isset($data['date_of_birth']) || 
            isset($data['zip_code']) 
        ){
            $save_user_data = $this->users->save_user_data([
                "user_id" => $data['user_id'],
                "first_name" => make_string_safe($data['first_name']),
                "last_name" => make_string_safe($data['last_name']),
                "date_of_birth" => $data['date_of_birth'],
                "zip_code" => make_string_safe($data['zip_code']),
                "email" => make_string_safe($data['email'])
            ]);
        }
        return $save_user_data ? true : false;
    }

    private function user_spouse_data($data)
    {
        $save_user_spouse = true;
        if( isset($data['spouse_first_name']) || 
            isset($data['spouse_last_name']) || 
            isset($data['spouse_date_of_birth']) || 
            isset($data['spouse_zip_code']) || 
            isset($data['spouse_email']) 
        ){
            $save_user_spouse = $this->users->save_user_spouse([
                "user_id" => $data['user_id'],
                "first_name" => make_string_safe($data['spouse_first_name']),
                "last_name" => make_string_safe($data['spouse_last_name']),
                "date_of_birth" => $data['spouse_date_of_birth'],
                "zip_code" => make_string_safe($data['spouse_zip_code']),
                "email" => make_string_safe($data['spouse_email'])
            ]);           
        }

        return $save_user_spouse ? true : false;
    }
    
}