<?php

/**
* Basic Controller
*/
class ManageCompany extends Controller
{
	private $company;

	function __construct() {
		parent::__construct();

		$this->load('Company'); // loads Model

		$this->company = new Company_Model;
	}

	public function index($value='')
	{
		$this->view->HiCompanies = $this->company->read('HI');
		$this->view->MiCompanies = $this->company->read('MI');
		$this->view->LiCompanies = $this->company->read('LI');
		$this->view->render('company/index', 'auditorLayout'); // loads view with indexLayout
	}

	public function add($value='')
	{

		if (isset($_POST['company'])) {
			
			extract($_POST);

			$this->company->C_Name = $C_Name;
			$this->company->C_Address = $C_Address;
			$this->company->C_Country = $C_Country;
			$this->company->C_Email = $C_Email;
			$this->company->C_ContactNum = $C_ContactNum;
			$this->company->C_BusinessType = $C_BusinessType;
			$this->company->C_IntensityType = $C_IntensityType;

			if ($this->company->save()) {
				Flash::Set(['New Company has been saved'], 'success');
			} else {
				Flash::Set(['Unknown error occured, Please try again later.'], 'fail');
			}

			$this->redirect(URL . 'company'); // redirect to index
		}

		$this->view->render('company/add', 'auditorLayout'); // loads view with indexLayout
	}

	public function edit($C_ID)
	{
		if (isset($_POST['update'])) {

			extract($_POST);
			$this->company->C_ID = $C_ID;

			$this->company->C_Name = $C_Name;
			$this->company->C_Address = $C_Address;
			$this->company->C_Country = $C_Country;
			$this->company->C_Email = $C_Email;
			$this->company->C_ContactNum = $C_ContactNum;
			$this->company->C_BusinessType = $C_BusinessType;
			$this->company->C_IntensityType = $C_IntensityType;
			
			if ($this->company->update()) {
				Flash::Set(['Existing Company has been updated'], 'success');
			} else {
				Flash::Set(['Unknown error occured, Please try again later.'], 'fail');
			}

			$this->redirect(URL . 'company'); // redirect to index
		}

		$this->view->company = $this->company->getById($C_ID);
		$this->view->render('company/edit', 'auditorLayout'); // loads view with indexLayout
	}

	public function delete($C_ID)
	{
		$this->company->C_ID = $C_ID;

		if ($this->company->delete()) {
			Flash::Set(['Existing Company has been removed'], 'success');
		}

		$this->redirect(URL . 'company'); // redirect to index
	}
}