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
		require 'app/controllers/HomeController.php';
		$controller = new HomeController();
	break;

	//About us page
	case 'about-us':
		require 'app/controllers/AboutUsController.php';
		$controller = new AboutUsController();
	break;

	//what to clean page
	case 'what-to-clean':
		require 'app/controllers/WhatToCleanController.php';
		$controller = new WhatToCleanController();
	break;

	//contact
	case 'contact-us':
		require 'app/controllers/ContactUsController.php';
		$controller = new ContactUsController();
	break;

	case 'recipes':
		require 'app/controllers/ContactUsController.php';
		$controller = new ContactUsController();
	break;

	case 'login':
		require 'app/controllers/LoginController.php';
		$controller = new LoginController();
	break;

	case 'sign-up':
		require 'app/controllers/SignUpController.php';
		$controller = new SignUpController();
	break;

	default:
		echo $plates->render('error 404');
	break;
}

$controller->buildHTML();