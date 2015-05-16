<?php

class Animal
{

    public $prop1 = "I'm a class property!";

    public function __construct()
    {
        echo 'The class "', __CLASS__, '" was initiated!<br />';
    }

    public function voice($string)
    {
        return $string;
    }

}

class Dog extends Animal
{

    public function voice()
    {
        echo 'bowwow';
    }

}

class Cat extends Animal
{

    public function voice($string)
    {
        echo 'meauve';
    }

}

// Create a new object
$dog = new Dog;
// Output the object as a string
echo $dog->voice();
echo '<br>';
$cat = new Cat();
// Use a method from the parent class
echo $cat->voice();
echo '<br>';
die();
?>