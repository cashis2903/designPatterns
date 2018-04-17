<?php

require_once 'Drink.php';

class Smoothie extends Drink {

    private $name = "Smoothie";
    public function name()
    {
        return $this->name;
    }

    public function cost()
    {
       return 2.99;
    }
}