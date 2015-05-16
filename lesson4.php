<?php

abstract class Laptop
{

    protected $weight;
    protected $type = 'Normal Laptop';

    public function turnOn()
    {
        $this->bootOs();
        $this->loadBios();
        $this->checkHardWareStatus();
    }

    protected function bootOs()
    {
        echo 'OK booted';
    }

    abstract protected function loadBios();

    protected function checkHardWareStatus()
    {

    }

}

class Probook extends Laptop
{

    protected $type = 'Probook Laptop';

    public function turnOn()
    {
        parent::turnOn();
        $this->checkNetWorkConnStatus();
    }

    protected function loadBios()
    {
        echo '</br> ProBook.';
    }

    private function checkNetWorkConnStatus()
    {
        echo '<br> Checked Network connection status on Pro book';
    }

}

$pavilion = new Probook();
$pavilion->turnOn();
