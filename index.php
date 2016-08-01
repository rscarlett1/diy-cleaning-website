<?php
//make the vendor folder available to use
require 'vendor/autoload.php';

//Instantiate (create instance of) Plates library
$plates = new League\Plates\Engine('app/templates');

echo $plates->render('master');