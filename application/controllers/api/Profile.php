<?php
/**
 * Inculde header for api
 */
include(APPPATH.'controllers/api/header.php');

class Profile extends MY_Api
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
		$this->load->model("Model_users", "m_users");
    }

    public function upload_image(int $user_id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = $this->request_data;

            $image = false;
            if(!empty($data['old_image'])){
                $image = $data['old_image'];
                $image = explode("/", $image);
                $image = $image[(count($image)-1)];
            }
            
            if($image){
                $filePath = 'assets/img/avatars/'.$image;
                if (file_exists($filePath)) {
                    unlink($filePath);
                }
            }

            $uploaded_img           = $this->_local_image_upload($data['image']);
           
            if($uploaded_img){
                $save_data["id"] = $user_id;
                $save_data["profile"] = base_url($uploaded_img);
                if($this->m_users->update_client_user($save_data)){
                    http_response_code(200);
                    exit(json_encode([
                        'success' => true,
                        'message' => "Profile Image Successfully Uploaded!",
                        'data' => $uploaded_img
                    ]));
                }else{
                    http_response_code(401);
                    exit(json_encode([
                        'success' => false,
                        'message' => "Unable To Save Profile Image",
                        'data' => $uploaded_img
                    ]));  
                }  
               
            }else{
                http_response_code(401);
                exit(json_encode([
                    'success' => false,
                    'message' => "Unable To Save Profile Image",
                    'data' => $uploaded_img
                ]));              
            }
        } else {
            http_response_code(400);
            exit(json_encode([
                'success' => false,
                'message' => "Bad Request."
            ]));
        }
    }

    private function _local_image_upload($img){
        $fileName =  md5(uniqid(rand(), true)).'.jpg';
        $base64Image = trim($img);
        $base64Image = str_replace('data:image/png;base64,', '', $base64Image);
        $base64Image = str_replace('data:image/jpg;base64,', '', $base64Image);
        $base64Image = str_replace('data:image/jpeg;base64,', '', $base64Image);
        $base64Image = str_replace('data:image/gif;base64,', '', $base64Image);
        $base64Image = str_replace(' ', '+', $base64Image);
        $imageData = base64_decode($base64Image);
        //Set image whole path here 
        $filePath = 'assets/img/avatars/'.$fileName;
        file_put_contents($filePath, $imageData);

        return $filePath;

    }
    
}
