<?php
//child controller

//echo 'pre';
//print_r( $_POST );
//echo '</pre>';

//var_dump($_POST);


class SignUpController extends PageController {

	//Properties
	private $firstNameMessage;
	private $lastNameMessage;
	private $emailMessage;
	private $passwordMessage;
	private $dbc;

	//Constructor

	public function __construct($dbc){

		//Save the database connnection for later
		$this->dbc = $dbc;	

		//If the user has submmitted the registration form
		if( isset($_POST['signup-submit']) ) {
			$this->validateRegistrationForm();
		}
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
		
		validateRegistrationForm();
		
		echo $plates->render('what-to-clean', $data);

	}

	public function validateRegistrationForm(){

		// Make sure the E-Mail is not in use
		$filteredEmail = $this->dbc->real_escape_string( $_POST['email'] );

		$sql = "SELECT email
				FROM users
				WHERE email = '$filteredEmail'  ";

		// Run the query
		$result = $this->dbc->query($sql);

		// If the query failed OR there is a result
		if( !$result || $result->num_rows > 0 ) {
			$this->emailMessage = 'E-Mail is in use';
			$totalErrors++;
		}

		//if($totalErrors === 0){
		//	var_dump("you are good to procced");
		//} 	else {
		//	var_dump("there are ".$totalErrors." Errors");
		//}

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

					// Check to make sure this worked on database

			// Log the user in
			$_SESSION['id'] = $this->dbc->insert_id;

			// Redirect the user to the what to clean page
			header('Location: index.php?page=what-to-clean');
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























}
