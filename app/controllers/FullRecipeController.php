<?php

class FullRecipeController extends PageController{


	public function __construct($dbc){

		//Run the parent constructer
		parent::__construct();
		
		$this->dbc = $dbc;

		//Did the user add a comment
		if( isset( $_POST['new-comment'])){
			$this->processNewComment();

		}

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

		//Get all the comments
		$sql = "SELECT comment, CONCAT(first_name, ' ' last_name) AS author
		FROM comments
		JOIN users
		ON comments.user_id = users.user_id
		WHERE recipe_id = $recipeID
		ORDER BY created_at DESC";

		$result = $this->dbc->query($sql);

		//Extract the data as an associative array
		
		$this->data['allComments'] = $result->fetch_all(MYSQLI_ASSOC);
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

	private function processNewComment(){

		$totalErrors = 0;

		// Validate the comment
		//validate the minimum length	
		if( strlen($_POST['comment']) > 50 ) {
			var_dump($_POST);
			$this->data['commentMessage'] = '<p>Must be at most 50 characters</p>';
			$totalErrors++;
		}

		// Validate the maximum length
		if( strlen($_POST['comment']) > 2000 ) {
			$this->data['commentMessage'] = '<p>Must be at most 2000 characters</p>';
			$totalErrors++;
		}

		if( $totalErrors == 0 ) {

			//Filter the comment
			$comment = $this->dbc->real_escape_string($_POST['comment']);

			$userID = $_SESSION['user_id'];

			$recipeID = $this->dbc->real_escape_string($_GET['recipe_id']);

			"INSERT INTO comments (comment, user_id, recipe_id)
			VALUES ('$comment', $userID, $recipeID)";

			$this->dbc->query($sql);

			//Make sure query worked
			if( $this->dbc->affected_rows ) {
				$this->data['recipeCommentMessage'] = 'Success!';
			} else {
				$this->data['recipeCommentMessage'] = 'Something went wrong!';
			}
		}
	}

}



