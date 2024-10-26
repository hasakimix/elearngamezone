<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends Auth_Controller {

	protected $_template = 'admin/layouts/templates/';
	protected $_side_nav = 'admin/layouts/side_nav/';
	protected $_top_nav = 'admin/layouts/top_nav/';
    protected $_primary_view = 'admin/users/';
	
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model("Model_users","users");
    }

	public function index()
	{
        $data = &$this->data;
        $data['page_title'] 	= "Users";
        $data['final_view'] 	= $this->_template.'_admin_main_template';
		$data['top_navbar'] 	= $this->_top_nav.'_admin_default_top_nav';
		$data['side_navbar'] 	= $this->_side_nav.'_admin_default_side_nav';
        $data['primary_view'] 	= $this->_primary_view.'_main';
        $data['users_list'] 	= $this->users->get_user_and_spouse();
		$this->load->view($data['final_view'], $data);   
	}

    public function import(){
        $tmpName = $_FILES['file']['tmp_name'];
        $csvAsArray = array_map('str_getcsv', file($tmpName));

        $data = $this->_validate_columns($csvAsArray);
        if($data){
            foreach ($data as $key => $value) {

                $save_user = $this->users->save([
                    "sso_guid" => guid(),
                    "email" => make_string_safe($value['email'])
                ]);
    
                if($save_user){
                    $result = true;
    
                    $value['user_id'] = $save_user; 
    
                    if($this->user_personal_data($value)){
                        $result = true;
                    }else{
                        $result = false;
                    }
    
                    if($this->user_spouse_data($value)){
                        $result = true;
                    }else{
                        $result = false;
                    }
    
                }
            }
        }
        
        redirect(base_url('admin/users/'));
    }

    private function _validate_columns($data){
        $result_data = [];
        foreach ($data as $d_key => $d_value) {
            if($d_key !== 0){
                $result_data[$d_key]['first_name'] = $d_value[0];
                $result_data[$d_key]['last_name'] = $d_value[1];
                $result_data[$d_key]['email'] = $d_value[2];
                $result_data[$d_key]['date_of_birth'] = date('Y-m-d', strtotime(str_replace('-', '/', $d_value[3])));
                $result_data[$d_key]['zip_code'] = $d_value[4];
                $result_data[$d_key]['spouse_first_name'] = $d_value[5];
                $result_data[$d_key]['spouse_last_name'] = $d_value[6];
                $result_data[$d_key]['spouse_email'] = $d_value[7];
                $result_data[$d_key]['spouse_date_of_birth'] = date('Y-m-d', strtotime(str_replace('-', '/', $d_value[8])));
                $result_data[$d_key]['spouse_zip_code'] = $d_value[9];
            }
        }
        return $result_data;
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
