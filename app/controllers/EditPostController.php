<?php

class EditPostController extends PageController{

	
	public function __construct($dbc){

		//Run the parent constructer
		parent::__construct();
		
		$this->dbc = $dbc;

		$this->mustBeLoggedIn();

		//Did the user submit the edit form?
		if( isset( $_POST['edit-post']) ){
			die($_POST['edit-post']);
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
		echo '<pre>';
		 print_r ($_POST);
		die('ready');
	}


}