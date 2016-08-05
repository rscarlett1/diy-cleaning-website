<?php

session_start();
//make the vendor folder available to use
require 'vendor/autoload.php';

// load appripriate page

//Has the user requested a page?
if( isset($_GET['page']) ){

	//Requested page
	$page = $_GET['page'];

} else {

	//home page
	$page = 'home';
}



//Connect to the database
$dbc = new mysqli('localhost', 'root', '', 'diy_cleaning_website');

// Load appropriate files based on page
switch($page) {

	//Home page
	case 'home':
		require 'app/controllers/HomeController.php';
		$controller = new HomeController($dbc);
	break;

	//About us page
	case 'about-us':
		require 'app/controllers/AboutUsController.php';
		$controller = new AboutUsController($dbc);
	break;

	//what to clean page
	case 'what-to-clean':
		require 'app/controllers/WhatToCleanController.php';
		$controller = new WhatToCleanController($dbc);
	break;

	//contact
	case 'contact-us':
		require 'app/controllers/ContactUsController.php';
		$controller = new ContactUsController($dbc);
	break;

	case 'recipes':
		require 'app/controllers/ContactUsController.php';
		$controller = new ContactUsController($dbc);
	break;

	case 'login':
		require 'app/controllers/LoginController.php';
		$controller = new LoginController($dbc);
	break;

	case 'signup':
		require 'app/controllers/SignUpController.php';
		$controller = new SignUpController($dbc);
	break;

	default:
		echo $plates->render('error 404');
	break;
}

$controller->buildHTML();