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
		$this->mustBeLoggedIn();


	}

	public function buildHTML() {
		//Instantiate (create instance of) Plates library
		$plates = new League\Plates\Engine('app/templates');

		//Get latest recipes
		$this->getLatestRecipes();

		echo $this->plates->render('what-to-clean');
	}

	private function getLatestRecipes(){

		//Prepare some SQL
		$sql = "SELECT *
				FROM recipes";



		//Run the SQL and capture the result
		$result = $this->dbc->query($sql);		

		//Extract the results as an array
		//$allData = $result->fetch_all(MYSQLI_ASSOC);

		//print_r($allData);
		//die();

		//Return the results to the code that called this function
	}




	
}