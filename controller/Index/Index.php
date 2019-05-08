<?php

/**
* Basic Controller
*/
class Index extends Controller
{
	function __construct() {
		parent::__construct();

		$this->load('Index'); // loads Model
	}

	public function index($value='')
	{
		$this->view->render('index', 'indexLayout'); // loads view with indexLayout
	}
}