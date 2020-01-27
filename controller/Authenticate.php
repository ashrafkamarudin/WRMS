<?php

/**
* Basic Controller
*/
class Authenticate extends Controller
{

	function __construct() {
		parent::__construct();
	}

	public function index($value='')
	{
		$this->view->render('sign-in');
	}

	public function doLogin($value='')
	{
		if ($_POST['username'] == USERNAME && $_POST['password'] == PASSWORD ) {
			$_SESSION['username'] = 'auditor';
			$_SESSION['user_login_status'] = 1;

			Flash::Set(['You have logged In Successfully'], 'success');

			$redirect = 'company';
		} else {
			Flash::Set(['Wrong Username or Password. Please try again'], 'fail');

			$redirect = 'authenticate';
		}

		$this->redirect(URL . $redirect); // redirect
	}

	public function doLogout($value='')
	{
		// delete the session of the user
        $_SESSION = array();
        session_destroy();
        // return a little feeedback message
        //$this->messages[] = "You have been logged out.";

        $this->redirect(URL . 'authenticate');
	}
}