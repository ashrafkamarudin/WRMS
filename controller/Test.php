<?php

/**
* Basic Controller
*/
class Test extends Controller
{
	private $company;

	function __construct() {
		parent::__construct();

		//$this->load('Company'); // loads Model

		//$company = new Company_Model;$company = new Company_Model;
	}

	public function test($value='')
	{
		
	}
}