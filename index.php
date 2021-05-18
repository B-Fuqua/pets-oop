<?php
//Controller for the pets-oop site

//Turn on error-reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require necessary files
require_once ('vendor/autoload.php');

//Instantiate Fat-Free
$f3 = Base::instance();

//Define default route
$f3->route('GET /', function(){
    echo "<h1>Hello, pets!</h1>";
});

//Run Fat-Free
$f3->run();
