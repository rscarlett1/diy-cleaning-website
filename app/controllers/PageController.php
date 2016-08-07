<?php

//parent controller to children with common properties and everything all pages will use

//stops duplication 
abstract class PageController{

	//clild controllers can access these files when protected
	protected $title;
	protected $metaDesc;
	protected $dbc;

	//Force children classes to have the buildHTML function
	abstract public function buildHTML()

	

	public function logoff($dbc){

	//logoff has to be on all pages	



	}

























}