<?php

class ControllerName extends PageController{


	public function __construct($dbc){

		//Run the parent constructer
		parent::__construct();
		
		$this->dbc = $dbc;

		$this->mustBeLoggedIn();

	}

	public function buildHTML() {
		//Get latest kitchen recipes
		$allKitRecipes = $this->getKitchenRecipes();

		$data = [];

		$data['$allKitchenRecipes'] = $allData;

		//Instantiate (create instance of) Plates library
		$plates = new League\Plates\Engine('app/templates');

		echo $this->plates->render('recipes');
	}

	
	private function getKitchenRecipes(){

		//Prepare some SQL
		$sql = "SELECT *
				FROM recipes";



		//Run the SQL and capture the result
		$result = $this->dbc->query($sql);		

		//Extract the results as an array
		$allKitRecipes = $result->fetch_all(MYSQLI_ASSOC);

		print_r($allData);
		die();

		//Return the results to the code that called this function
		Return $allData;
	}

	
}