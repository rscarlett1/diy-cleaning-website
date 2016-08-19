<?php

use Intervention\Image\ImageManager;

class AccountController extends PageController{

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

			$userID = $_SESSION['user_id'];


			// Prepare the SQL
			$sql = "UPDATE users
					SET first_name = '$firstName',
						last_name = '$lastName'
					WHERE id = $userID  ";

			// Run the query
			$this->dbc->query( $sql );

			if( $this->dbc->affected_rows ) {
				$this->data['postMessage'] = 'Success!';
			} else {
				$this->data['postMessage'] = 'Something went wrong!';
			}
		}
	}

	private function processNewRecipe() {

		//echo '<pre>';
		//print_r($_POST);
		//die();

		//Count errors
		$totalErrors = 0;

		$recipetitle = trim($_POST['recipe-title']);
		$recipedesc = trim($_POST['recipe-desc']);
		$recipemethod = trim($_POST['recipe-methods']);

		
		
		


		//Title
		if( strlen(  $recipetitle  ) == 0 ) {
			$this->data['titleMessage'] = '<p>Required field</p>' ;
			$totalErrors++;
		} elseif( strlen( $recipetitle ) > 100){
			$this->data['titleMessage'] = '<p>Cannot be more than 100 Characters</p>';
			$totalErrors++;
		}

		//Description
		if ( strlen ( $recipedesc )  == 0 ){
			$this->data['descMessage'] = '<p>Required field</p>' ;
			$totalErrors++;
		} elseif( strlen( $recipedesc) > 1000 ){
			$this->data['descMessage'] = '<p>Cannot be more than 100 Characters</p>';
			$totalErrors++;
		}

		//Method
		if ( strlen ( $recipemethod ) == 0 ){
			$this->data['methodMessage'] = '<p>Required field</p>' ;
			$totalErrors++;
		} 

	//If there are no errors
	if( $totalErrors ==0 ){

			//Instance of interventiommImage
			$manager = new ImageManager(array('driver' => 'imagick'));

			

			$recipetitle = $this->dbc->real_escape_string($recipetitle);
			$recipedesc = $this->dbc->real_escape_string($recipedesc);
			$recipemethod = $this->dbc->real_escape_string($recipemethod);

			// Get the ID of logged in user
			$userID = $_SESSION['user_id'];

			// SQL (INSERT)
			$sql = "INSERT INTO recipe_database (user_id, title, description, method)
					VALUES ($userID, '$recipetitle', '$recipedesc', '$recipemethod') ";

			$this->dbc->query( $sql );

			//Make sure it worked
			$this->dbc->query( $sql );

			// Make sure it worked
			if( $this->dbc->affected_rows ) {
				$this->data['postMessage'] = 'Success!';
			} else {
				$this->data['postMessage'] = 'Something went wrong!';
			}


			// Success message! (or error message)

		}



	}
}