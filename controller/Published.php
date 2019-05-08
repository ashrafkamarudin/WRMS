<?php

/**
* Basic Controller
*/
class Published extends Controller
{
	private $report;

	function __construct() {
		parent::__construct();

		$this->load('Report'); // loads Model
		$this->load('Submission');

		$this->report = new Report_Model;
	}

	public function index($value='')
	{
		$submission = new Submission_Model;

		if (isset($_SESSION['year'])) {
			$_POST['year'] = $_SESSION['year'];

			unset($_SESSION['year']);
		}

		if (!isset($_POST['year'])) {
			$this->view->render('index', 'indexLayout'); // loads view with indexLayout
		} else{
			if ($submission->checkYear($_POST['year']) == false) {
				$this->view->reports = $this->report->read($_POST['year']);
				$this->view->render('index', 'indexLayout'); // loads view with indexLayout
			} else {
				Flash::Set(['The Year you enter is not recorded in the database. Please select different year.'], 'fail');

				$this->view->render('index', 'indexLayout'); // loads view with indexLayout
			}
		}
	}
}