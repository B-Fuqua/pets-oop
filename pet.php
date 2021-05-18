<?php

//pet.php

class Pet
{
    private $_name;
    private $_color;

    //Parameterized constructor
    function __construct($name="Unknown", $color="Unknown")
    {
        $this->_name = $name;
        $this->_color = $color;
    }

    function getName(): string
    {
        return $this->_name;
    }

    function setName($name)
    {
        $this->_name = $name;
    }

    function eat()
    {
        echo "$this->_name is eating<br>";
    }

    function talk()
    {
        echo "$this->_name is talking<br>";
    }

    function sleep()
    {
        echo "$this->_name is sleeping<br>";
    }
}
