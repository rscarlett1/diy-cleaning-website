<?php

class EditPostController extends PageController{

	
	public function __construct($dbc){

		//Run the parent constructer
		parent::__construct();
		
		$this->dbc = $dbc;

		$this->mustBeLoggedIn();

		//Did the user submit the edit form?
		if( isset( $_POST['edit-post']) ){
			$this->processPostEdit();
		}

		//get info about the post
		$this->getPostInfo();

	}

	public function buildHTML() {


		echo $this->plates->render('edit-post', $this->data);
	}

	private function getPostInfo(){

		//Get the recipe id from the Get array
		$recipeID = $this->dbc->real_escape_string($_GET['id']);

		//Get the User ID
		$userID = $_SESSION['user_id'];

		//Prepare the query
		$sql = "SELECT user_id, title, description, method, image 
				FROM recipe_database 
				WHERE recipe_id = $recipeID
				AND user_id = $userID";

		$result = $this->dbc->query($sql);

		//If the query failed
		if(!$result || $result->num_rows == 0 ){
			//Send the user back to the post page
			//OR the post was deleted
			header('Location: index.php?page=fullrecipepage&id=$recipeID');

		} else {
			$this->data['post'] = $result->fetch_assoc();
		}

	}

	private function processPostEdit() {

			// Validation
			$totalErrors = 0;
			
			$title = $_POST['title'];
			$desc = $_POST['description'];
			$method = $_POST['method'];

			// Title
			if( strlen($title) > 100 ) {
				$totalErrors++;
				$this->data['titleError'] = '<p>At must be less than 100 characters</p>';
			}

			// Description
			if( strlen($desc) > 1000 ) {
				$totalErrors++;
				$this->data['descError'] = '<p>At most less than 1000 chatacters</p>';
			}

			if( strlen( $method ) == 0){
				$totalErrors++;
				$this->data['methodError'] = "<p>This is a required field</p>";
			}


			//If there are no errors
			if( $totalErrors == 0 ) {

				//Filter the data
				$title = $this->dbc->real_escape_string($title);
				$desc = $this->dbc->real_escape_string($desc);
				$method = $this->dbc->real_escape_string($method);
				$recipeID = $this->dbc->real_escape_string($_GET['id']);

				//Prepare the SQL
				$sql = "UPDATE recipe_database
						SET title = '$title',
							description = '$desc',
							method = '$method'
						WHERE recipe_id = '$recipeID
						AND user_id = $userID'";

			
				$this->dbc->query($sql);

				//Redirect the user to the post page
				header("Location: index.php?page=fullrecipepage&recipe_id=$recipeID");

				//what if user 
				if( isset($_POST['edit-post']) ){

				$this->data['post'] = $_POST;

				//Use the original
				$result = $result->fetch_assoc();

				$this->data['originalTitle'] = $result['title'];
				
					
				} else{
					//use the original title
					$result = $result->fetch_assoc();

					$this->data['post'] = $result;

					$this->data['originalTitle'] = $result['title'];
				}	
			}

	}
}









