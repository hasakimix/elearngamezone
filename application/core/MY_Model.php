<?php

use phpDocumentor\Reflection\Types\Boolean;

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model {

	// These get reset with each Model Load.
	protected $tables = [
		"users" => "users",
		"users_data" => "users_data",
		"users_spouse" => "users_spouse",
		"admin_users" => "admin_users"
	];

	public function __construct()
	{
		parent::__construct();
		$this->writeDB = $this->load->database('writer', TRUE, TRUE);

		 // Pass reference of database to the CI-instance
		 //  Assists with intellisense and profiler
		$CI =& get_instance();
		$CI->writeDB =& $this->writeDB;
	}

	public function table($table_name){
		return $this->tables[$table_name];
	}

}

/* End of file MY_Model.php */
