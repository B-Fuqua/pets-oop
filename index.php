<?php
//Controller for the pets-oop site

//Turn on error-reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require necessary files
require_once ('vendor/autoload.php');

//Require the file that defines the pet class
require('pet.php');

//Instantiate Fat-Free
$f3 = Base::instance();

//Define default route
$f3->route('GET /', function(){
    echo "<h1>Hello, pets!</h1>";

    //Instantiate a new pet object
    $pet1 = new Pet("Fido", "pink");

    //Invoke the eat method
    $pet1->eat();

    //Invoke the talk method
    $pet1->talk();

    //Invoke the sleep method
    $pet1->sleep();

    $pet1->setName("Joe");

    echo $pet1->getName();

    $pet1->setColor("Red");

    echo $pet1->getColor();
});

//Run Fat-Free
$f3->run();
