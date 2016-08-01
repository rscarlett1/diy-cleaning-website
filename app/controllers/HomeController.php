<?php

class HomeController;

//Properties

//Constructor

//Methods (functions)

public function buildHTML() {

	//Instantiate (create instance of) Plates library
	$plates = new League\Plates\Engine('app/templates');

	echo $plates->render('home');
}