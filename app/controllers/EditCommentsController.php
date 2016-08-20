<?php

class EditCommentsController extends PageController{


	public function __construct($dbc){

		//Run the parent constructer
		parent::__construct();
		
		$this->dbc = $dbc;

		$this->mustBeLoggedIn();

	}

	public function buildHTML() {
		//Instantiate (create instance of) Plates library
		$plates = new League\Plates\Engine('app/templates');

		echo $this->plates->render('edit-comments');
	}

	
}