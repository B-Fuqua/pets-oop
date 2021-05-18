<?php

/**
 * Class Pet
 * Represents a pet object with a name and a color
 * @author Ben Fuqua
 * @copyright 2021
 */
class Pet
{
    private $_name;
    private $_color;

    /**
     * Pet constructor.
     * @param string $name The name of the pet object, default: Unknown
     * @param string $color The color of the pet object, default: Unknown
     */
    function __construct($name="Unknown", $color="Unknown")
    {
        $this->_name = $name;
        $this->_color = $color;
    }

    /**
     * getName() function
     * @return string The pet's name
     */
    function getName(): string
    {
        return "Name: $this->_name<br>";
    }

    /**
     * setName() function
     * @param String $name The pet's new name
     * @return void
     */
    function setName($name)
    {
        $this->_name = $name;
    }

    /**
     * getColor() function
     * @return string The pet's color
     */
    function getColor(): string
    {
        return "Color: $this->_color<br>";
    }

    /**
     * setColor() function
     * @param String $color The pet's new color
     */
    function setColor($color)
    {
        $this->_color = $color;
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
