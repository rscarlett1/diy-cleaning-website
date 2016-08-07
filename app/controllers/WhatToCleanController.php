<?php
//child controller
class WhatToCleanController{

	//Properties


	//Constructor

	//Methods (functions)

	public function buildHTML() {

		//Instantiate (create instance of) Plates library
		$plates = new League\Plates\Engine('what-to-clean/templates');

		echo $plates->render('what-to-clean');
	}
}