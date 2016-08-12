<?php

class AccountController extends PageController{

	private $firstNameMessage;
	private $lastNameMessage;
	private $emailMessage;



	public function __construct($dbc){

		//Run the parent constructer
		parent::__construct();
		
		$this->dbc = $dbc;

		$this->mustBeLoggedIn();

		// Did the user submit new contact details?
		if( isset( $_POST['update-contact'] ) ) {
			$this->processNewContactDetails();
		}

		//Did the user submit a new recipe
		if( isset($_POST['submit-recipe']) ){
			$this->processNewRecipe();
		}

	}

	public function buildHTML() {

		//Instantiate (create instance of) Plates library
		$plates = new League\Plates\Engine('app/templates');

		echo $this->plates->render('account', $this->data);
	}

	private function processNewContactDetails() {

		// Validation
		$totalErrors = 0;

		// Validate the first name
		if( strlen($_POST['first-name']) > 50 ) {
			var_dump($_POST);
			$this->data['firstNameMessage'] = '<p>Must be at most 50 characters</p>';
			$totalErrors++;
		}

		// Validate the last name
		if( strlen($_POST['last-name']) > 50 ) {
			$this->data['lastNameMessage'] = '<p>Must be at most 50 characters</p>';
			$totalErrors++;
		}

		// If totalErrors is still 0 (yay!)
		if( $totalErrors == 0 ) {
			// Form validation passed!
			// Time to update the database
			$firstName = $this->dbc->real_escape_string($_POST['first-name']);
			$lastName = $this->dbc->real_escape_string($_POST['last-name']);

			$userID = $_SESSION['id'];


			// Prepare the SQL
			$sql = "UPDATE users
					SET first_name = '$firstName',
						last_name = '$lastName'
					WHERE id = $userID  ";

			// Run the query
			$this->dbc->query( $sql );
		}
	}

	private function processNewRecipe() {

		//Count errors
		$totalErrors = 0

		$title = trim($_POST['title']);

		if ( strlen (trim ( $title) ) == 0 ){
			$this->data['titleMessage'] = 'Required' ;
			$totalErrors++;
		} elseif( strlen( $title ) > 100){
			$this->data['titleMessage'] = 'Cannot be more than 100 Characters';
			$totalErrors++;
		}

	}
	



}