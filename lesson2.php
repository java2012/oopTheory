<?php

class Lamp
{

    //attributes
    private $on = false;

    public function turnOn()
    {
        $this->on = true;
        $this->enableColor();
        $this->turnPowerIndicatorOn();
    }

    public function turnOff()
    {
        $this->on = false;
    }

    public function checkLight()
    {
        echo 'Light is ' . (($this->on) ? 'on' : 'off') . '<br/>';
    }

    private function enableColor()
    {
        //enable color after 15 min
    }

    private function turnPowerIndicatorOn()
    {
        //turn on power indicator when 50 celsius
    }

}

$lamp = new Lamp();
$lamp->turnOn();
$lamp->checkLight();
$lamp2 = new Lamp();
$lamp2->checkLight();
$lamp3 = new Lamp();
$lamp3->checkLight();

