<?php

class HomeController {

	//Properties
	private $emailMessage;
	private $dbc;

	//Constructor
	public function __construct($dbc){


	}

	//Methods (functions)

	public function buildHTML() {

		//Instantiate (create instance of) Plates library
		$plates = new League\Plates\Engine('app/templates');

		echo $plates->render('home');
	}

}