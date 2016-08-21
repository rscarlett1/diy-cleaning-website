<?php

class EditPostController extends PageController{


	public function __construct($dbc){

		//Run the parent constructer
		parent::__construct();
		
		$this->dbc = $dbc;

		$this->mustBeLoggedIn();

		//get info aboutb the post
		$this->getPostInfo();

	}

	public function buildHTML() {
		//Instantiate (create instance of) Plates library
		$plates = new League\Plates\Engine('app/templates');

		echo $this->plates->render('edit-post');
	}

	private function getPostInfo(){

		//Get the recipe id fron the Get array
		$postID = $this->dbc->real_escape_string($_GET['user_id']);

		//Get the User ID
		$userID = $_SESSION['user_id'];

		$sql = "SELECT ";



	}



}