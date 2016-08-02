<?php

class LoginController;

//Properties
private $emailMessage;
private $passwordMessage;
private $dbc;

//Constructor
	public function __construct($dbc){

	//Save the database comnnection for later
	$this->dbc = $dbc;	

	//If the user has submmitted the registration form

	//To see if the post array is working  and every input has a nome if not working	
	
	//echo 'pre';
	//print_r( $_POST );
	//echo '</pre>';

		if( isset($_POST['new-account']) ) {
			$this->validateRegistrationForm();
		}

	}

	//Methods (functions)
	public function registerAccount() {

	//Validate the users data

	//check the database to see if emails is in use

	//check the strength of the password

	//Register the account OR show error messages

	//If successful, log user in and redirect to recipes pages


	}

	public function buildHTML() {
		//Instantiate (create instance of) Plates library
	$plates = new League\Plates\Engine('app/templates');

	//Prepare the container for data
	$data = [];

	if($this->emailMessage != ''){
		$data['emailMessage'] = $this->emailMessage; 
	}

	echo $plates->render('login', $data);

	}

	private function validateRegistrationForm(){

		$totalErrors = 0;

		//make sure the eail has been provided and is valid
		if( $_POST['email'] =='' ) {
			//E-mail is invalid
			$this->emailMessage = 'Invalid E-Mail'
		}

		if(strlen($_POST['password']) < 8) {
			$this->passwordMessage = 'Must be at least 8 characters';
			$totalErrors++;
		}

		if( $totalErrors == 0 ) {

			//validation passed!

			//Filter user data before using it in a query
			$filteredEmail = $this->dbc->real_escape_string($_POST['email'] );


		}


	}

}

