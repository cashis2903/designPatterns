<?php

require_once 'Drink.php';

class DrinkIngridientDecorator {

    private $drink;

    public function __construct(Drink $drink)
    {
        $this->drink = $drink;
    }

    public function getCost(){
        return $this->drink->getCost();
    }
    public function getName(){
        return $this->drink->getName();
    }

}