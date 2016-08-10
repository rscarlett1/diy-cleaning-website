<?php

class LoginController extends PageController{


	public function __construct($dbc){

		//Make sure the PageControllers constructer still runs
		parent::__construct();
		
		//Save database connection
		$this->dbc = $dbc;

	}

	public function buildHTML() {
		//Instantiate (create instance of) Plates library
		$plates = new League\Plates\Engine('app/templates');

		echo $this->plates->render('login');
	}

	
}