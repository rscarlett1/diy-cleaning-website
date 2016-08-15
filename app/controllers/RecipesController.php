<?php

class RecipesController extends PageController{


	public function __construct($dbc){

		//Run the parent constructer
		parent::__construct();
		
		$this->dbc = $dbc;

	
	}

	public function buildHTML() {
		//Instantiate (create instance of) Plates library
		$plates = new League\Plates\Engine('app/templates');

 		$allData = $this->getLatestRecipes();
		$data = [];

		$data['recipes'] = $allData;

		echo $this->plates->render('recipes', $data);
	}



	private function getLatestRecipes(){

		$type = $_GET['type'];

		//Prepare some SQL
		$sql = "SELECT * 
				FROM recipe_database
				WHERE category = '$type'";

		//Run the SQL and capture the result
		$result = $this->dbc->query($sql);		

		//Extract the results as an array
		$allData = $result->fetch_all(MYSQLI_ASSOC);

		return $allData;
	}

}