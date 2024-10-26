<?php defined('BASEPATH') or exit('No direct script access allowed');


//TODO: RateLimiting
//TODO: Blacklisting
//TODO: Captcha

final class Auth_session {

	protected $model = null;
	protected $CI = null;


    public function __construct()
    {
		$this->CI = &get_instance();
    }

	/**
	 * returns the currently logged in user
	 *
	 */
	public function current_user()
	{
		return (isset($_SESSION['user_id'])) ? $this->_getUser($_SESSION['user_id']) : null ;
	}

	/**
	 * Checks if the users session is truly active
	 *
	 * @return bool
	 */
    public function hasActiveSession()
    {
	   return ( ( isset($_SESSION['user_id'])) && is_numeric($_SESSION['user_id']));
    }

	/**
	 * Validates is the user is authenticated and logged in
	 *
	 * @return bool
	 */
    public function isLoggedIn()
    {
		return (isset($_SESSION['logged_in']) && (to_boolean($_SESSION['logged_in']) == true) );
    }

}
