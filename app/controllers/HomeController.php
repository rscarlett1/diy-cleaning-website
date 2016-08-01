<?php

class HomeController;

//Properties

//Constructor
public function __construct(){


}

//Methods (functions)

public function buildHTML() {

	//Instantiate (create instance of) Plates library
	$plates = new League\Plates\Engine('app/templates');

	echo $plates->render('home');
}