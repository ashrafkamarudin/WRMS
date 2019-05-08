<?php

/**
* Basic Controller
*/
class ManageSubmission extends Controller
{
	private $company;
	private $submission;
	private $report;

	function __construct() {
		parent::__construct();

		$this->load('Company'); // loads Model
		$this->load('Submission');
		$this->load('report');

		$this->company = new Company_Model;
		$this->submission = new Submission_Model;
		$this->report = new Report_Model;
	}

	public function index($value='')
	{
		if (!isset($_POST['year'])) {
			$this->view->render('submission/year', 'auditorLayout'); // loads view with indexLayout
		} else{

			if ($this->submission->checkYear($_POST['year']) == false) {
				Flash::Set(['The Year you enter is already recorded in the database. Please select different year.'], 'fail');

				$this->view->render('submission/year', 'auditorLayout'); // loads view with indexLayout
			} else {
				$this->view->HiCompanies = $this->company->read('HI');
				$this->view->MiCompanies = $this->company->read('MI');
				$this->view->LiCompanies = $this->company->read('LI');

				$this->view->render('submission/index', 'auditorLayout'); // loads view with indexLayout
			}
		}
	}

	public function add($value='')
	{

		if (isset($_POST['submission'])) {

			extract($_POST);

			//foreach ($C_ID as $id) {
			foreach (array_combine($C_ID, $C_IntensityTypes) as $id => $C_IntensityType){

				$total_score = 0; // initialize var and reset score

				// assign choices from S1-[CompanyID] until S8-[CompanyID] to S1 until S8
				for ($i=1; $i < 9 ; $i++) { 
					${"S{$i}"} = $_POST['S' . $i . '-' . $id];

					$total_score += $_POST['S' . $i . '-' . $id];
				}

				$this->submission->R_C_ID = $id;
				$this->submission->R_Year = $R_Year;
				$this->submission->R_TotalWithdrawal = $S1;
				$this->submission->R_WaterAffected = $S2;
				$this->submission->R_RecycleReused = $S3;
				$this->submission->R_WaterRisk = $S4;
				$this->submission->R_Facility = $S5;
				$this->submission->R_Governance = $S6;
				$this->submission->R_Compliance = $S7;
				$this->submission->R_Target = $S8;
				$this->submission->setRisk($total_score, $C_IntensityType);

				$this->submission->save();
			}

			$_SESSION['year'] = $R_Year;
			$this->redirect(URL . 'report'); // redirect to index
		}
	}
}