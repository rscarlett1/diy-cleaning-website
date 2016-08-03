<?php

class SignUpController {

	//Properties
	private $firstNameMessage;
	private $lastNameMessage;
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

		//var_dump($_POST);

		if( isset($_POST['signup-submit']) ) {
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

		//if the first name error
		if($this->firstNameMessage != '') {
			$data['firstNameMessage'] = $this->firstNamelMessage;
		}

		//if there is a last name error
		if($this->lastNameMessage != '') {
			$data['lastNameMessage'] = $this->lastNamelMessage;
		}


		// If there is an E-Mail error
		if($this->emailMessage != '') {
			$data['emailMessage'] = $this->emailMessage;
		}

		// If there is a message for password
		if($this->passwordMessage != '') {
			$data['passwordMessage'] = $this->passwordMessage;
		}
		var_dump($data);
		die();
		validateRegistrationForm();
		echo $plates->render('what-to-clean', $data);

	}

	public function validateRegistrationForm(){

		$totalErrors = 0;

		//start first name

		//Make sure First name is is valid
		if( strlen($_POST['first-name']) > 50 ) {
			$this->data['firstNameMessage'] = '<p>Must be at most 50 characters</p>';
			$totalErrors++;
		}

		if( strlen($_POST['first-name']) < 0 ) {
			$this->data['firstNameMessage'] = '<p>Please enter your first name</p>';
			$totalErrors++;
		}


		//start last name

		// Validate the last name
		if( strlen($_POST['last-name']) > 50 ) {
			$this->data['lastNameMessage'] = '<p>Must be at most 50 characters</p>';
			$totalErrors++;
		}

		if( strlen($_POST['last-name']) < 0 ) {
			$this->data['lastNameMessage'] = '<p>Please enter your last name</p>';
			$totalErrors++;
		}

		//make sure the email has been provided and is valid
		if( $_POST['email'] =='' ) {
			//E-mail is invalid
			$this->emailMessage = 'Invalid E-Mail';
			$totalErrors++;
		}

		// Make sure the E-Mail is not in use
		$filteredEmail = $this->dbc->real_escape_string( $_POST['email'] );

		$sql = "SELECT email
				FROM users
				WHERE email = '$filteredEmail'  ";

		// Run the query
		$result = $this->dbc->query($sql);

		// If the query failed OR there is a result
		if( !$result || $result->num_rows > 0 ) {
			$this->emailMessage = 'E-Mail in use';
			$totalErrors++;
		}

		if(strlen($_POST['password']) < 8) {
			$this->passwordMessage = 'Must be at least 8 characters';
			$totalErrors++;
		}


		if($totalErrors === 0){
			var_dump("you are good to procced");
		} else {
			var_dump("there are ".$totalErrors." Errors");
		}



		

			//Determine if this data is valid to go into the database		

			

			if( $totalErrors === 0 ) {

				//validation passed!

				//Hash the password
				$hash = password_hash($_POST['password'], PASSWORD_BCRYPT);

				//Prepare the password
				// Prepare the SQL
				$sql = "INSERT INTO users ( first_name, last_name, email, password)
						VALUES ('$filteredEmail', '$hash')";

				// Run the query
				$this->dbc->query($sql);

				// Check to make sure this worked


				// Log the user in
				$_SESSION['id'] = $this->dbc->insert_id;

				// Redirect the user to their stream page
				header('Location: index.php?page=what-to-clean');
			}		
		

	}























}
