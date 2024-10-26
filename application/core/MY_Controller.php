<?php
defined('BASEPATH') or exit('No direct script access allowed');

//* The HACKY way of providing multiple customer controller classes is to just define multiple classes in this file.

/**
 * MY_CONTROLLER
 *
 * This class overloads the CI_CONTROLLER Class permitting us to use it as the
 * BASE controller class.
 *
 */
class MY_Controller extends CI_Controller
{
	/**
	 * @var array $data
	 *
	 * Provides the base array for all information passed to the templated view.
	 *
	 * 		pageTitle
	 * 		templateStyle
	 * 		primaryView
	 * 		pageFunction
	 * 		pageClass
	 *
	 *  reference object &$data that can be passed to sub views
	 *
	 * 		embededData
	 */
	public $data = [];
	public $cache_redis = null;
	public $logger = [];

	function __construct()
	{
		parent::__construct();
        $this->load->library('session');

		$this->data['csrf'] = array(
			'name' => $this->security->get_csrf_token_name(),
			'hash' => $this->security->get_csrf_hash()
		);
	}

}

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 *
 */
class Base_Controller extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        // Do not load session library in home screen to prevent erroneous sessions from AWS WAF
        $this->load->library('session');
    }
}

/**
 * Extend this controller class when you want to ensure the user is logged before
 * they access the resource
 */
class Auth_Controller extends Base_Controller
{
    public function __construct()
    {
        parent::__construct();
		$this->load->library("Authentication/Auth_session");
        // // validate user is logged in, if not reroute
        if (!$this->input->is_ajax_request()) {
            if (($this->auth_session->isLoggedIn() || $this->auth_session->hasActiveSession()) === FALSE) {
                // info :temporary Logging to debug
                log_message('debug', "SESSION NOT FOUND, Navigated to: " . $this->router->fetch_class() . "::" . $this->router->fetch_method());
               
				// redirect('session_expired');
				redirect(base_url('/'));
            }
        }
    }
}

class MY_Api extends CI_Controller{
    protected $request_data 	= [];
	protected $response_data 	= [];
	
    public function __construct(){

        parent::__construct();
		$this->response_data 	= array(
			"message"       => "Request Successfully Process!",
			"data"          => array(),
			"alert_type"    => "success",
			"status_code"   => 200
		);

		// Check if it's same origin and has cookie
		if( !isset( getallheaders()['Cookie'] ) ){
			//Check valid authkey in header
			if (!isset(getallheaders()['Auth-Key'])){
				http_response_code(401);
				exit(json_encode(['errors' => 'unauthorized']));
			}elseif(getallheaders()['Auth-Key'] != getenv('AUTH_TOKEN')){
				http_response_code(401);
				exit(json_encode(['errors' => 'unauthorized']));
			}

			//Get Request Data.
			$this->request_data = json_decode(file_get_contents('php://input'), true);

			//Check valid secret key in payload
			if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
				if(!isset($this->request_data['token']))
				{
					http_response_code(401);
					exit(json_encode(['errors' => 'unauthorized']));
				}elseif($this->request_data['token'] != getenv('API_SECRET_TOKEN')){
					http_response_code(401);
					exit(json_encode(['errors' => 'unauthorized']));
				}
			}
		}else{
			//Check valid content type
			if (getallheaders()['Content-Type'] != 'application/json'){
				if(!isset($_FILES['file']) && empty($_FILES['file'])){
					http_response_code(415);
					exit(json_encode(['errors' => 'Content type not valid', 'file'=> $_FILES, 'post' => $_POST  ]));
				}
			}

			//Get Request Data.
			$this->request_data 	= json_decode(file_get_contents('php://input'), true);
		}
        
    }
}


