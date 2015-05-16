<?php

class Dog
{

    //attributes
    private $height;
    private $weight;

    public function __construct($height, $weight)
    {
        $this->height = $height;
        $this->weight = $weight;
    }

    private function walk()
    {

    }

    public function talk()
    {
        echo 'woof';
    }

    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function getHeight()
    {
        return $this->height;
    }

}

$animal = new Dog(10, '100KG');
$animal->setHeight(80);
echo $animal->getHeight();
echo $animal->talk();

echo '<pre>';
echo print_r($animal);

