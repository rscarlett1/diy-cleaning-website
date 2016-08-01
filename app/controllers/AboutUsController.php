<?php

class AboutUsController;

//Properties

//Constructor

//Methods (functions)

public function buildHTML() {

	//Instantiate (create instance of) Plates library
	$plates = new League\Plates\Engine('about-us/templates');

	echo $plates->render('about-us');
}