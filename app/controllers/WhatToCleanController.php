<?php
//child controller
class WhatToCleanController extends PageController{

	//Properties


	//Constructor

	//Methods (functions)

	public function __construct($dbc){

		//Run the parent constructer

		parent::__construct();
		
		$this->dbc = $dbc;

		//If you are not logged in (no id in the SESSION not logged in) 
		//Can be cipped to other pages thatthey have no access too
		// if(!isset($_SESSION['id']) ){
		// 	//Redirect the user to the login page
		// 	header('Location: index.php?page=home');
		// }



	}

	public function buildHTML() {
		//Instantiate (create instance of) Plates library
		$plates = new League\Plates\Engine('app/templates');

		echo $this->plates->render('what-to-clean');
	}




	
}