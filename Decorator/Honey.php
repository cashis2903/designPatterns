<?php

require_once 'DrinkIngridientDecorator.php';


class Honey extends DrinkIngridientDecorator {

    private $drink;

    public function __construct(DrinkIngridientDecorator $drink){
        $this->drink = $drink;
    }

    public function name()
    {
        return $this->drink->getName(). ' Honey';
    }

    public function cost()
    {
        return $this->drink->getCost() + 2;
    }
}