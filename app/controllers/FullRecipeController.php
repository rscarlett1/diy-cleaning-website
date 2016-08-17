<?php

class FullRecipeController extends PageController{


	public function __construct($dbc){

		//Run the parent constructer
		parent::__construct();
		
		$this->dbc = $dbc;

		$this->getFullRecipeData();

	}

	public function buildHTML() {
		//Instantiate (create instance of) Plates library
		$plates = new League\Plates\Engine('app/templates');

		echo $this->plates->render('fullrecipepage', $this->data);
	}

	private function getFullRecipeData(){

		//Filter the id

		$fullrecipeID = $this->dbc->real_escape_string($_GET['recipe_id']);

		//Get info about this recipe

		$sql = "SELECT recipe_id, title, description, method, image, first_name, last_name
				FROM recipe_database
				JOIN users
				ON recipe_database.user_id = users.user_id
				WHERE recipe_id = '$fullrecipeID'";

		//Run the SQL
		$result = $this->dbc->query($sql);

		//make sure the query worked		
		if( !$result || $result->num_rows == 0 ){ 
			//Redirect user to 404 page
			header('Location: index.php?page=404');
		} else {
			//yay all good
			$this->data['fullrecipepage'] = $result->fetch_all(MYSQLI_ASSOC);
			
		}
	}

	private function getRecipePage(){

		$fullrecipeID = $this->dbc->real_escape_string( $_GET['fullrecipeid'] );

		//Prepare some SQL
		$sql = "SELECT recipe_id, title, description, category, method 
				FROM recipe_database
				JOIN users
				ON recipe_database
				WHERE recipe.id = recipe_id";

		//Run the SQL and capture the result
		$result = $this->dbc->query($sql);		


		// If the query failed
		if( !$result || $result->num_rows == 0 ) {
			// Redirect user to 404 page
			header('Location: index.php?page=404');
		} else {
			// Yay!
			$this->data['recipes'] = $result->fetch_all(MYSQLI_ASSOC);
		}

	}

	
}