<?php
//make the vendor folder available to use
require 'vendor/autoload.php';

//Instantiate (create instance of) Plates library
$plates = new League\Plates\Engine('app/templates');

// load appripriate page

//Has the user requested a page?
if( isset($_GET['page']) ){

	//Requested page
	$page = $_GET['page'];

} else {

	//home page
	$page = 'home';
}

//Load appropriate files based on page
switch($page {

	//Home page
	case 'home':
		echo $plates->render('home');
	break;

	//About us page
	case 'about-us':
		echo $plates->render('about-us');
	break;

	//what to clean page
	case 'what-to-clean':
		echo $plates->render('what-to-clean');
	break;

	//contact
	case 'contact-us':
		echo $plates->render('contact-us');
	break;

	case 'recipes':
		echo $plates->render('recipes');
	break;

	case 'login':
		echo $plates->render('recipes');
	break;

	case 'sign-up':
		echo $plates->render('recipes');
	break;

	default:
		echo $plates->render('error 404');
	break;
}