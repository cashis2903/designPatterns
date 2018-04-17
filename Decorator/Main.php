<?php

require 'Drink.php';
require 'DrinkIngridientDecorator.php';
require 'HoneyDecorator.php';
require 'Smoothie.php';


$drink = new Drink('Smoothie', 4);


$drink = new HoneyDecorator(new DrinkIngridientDecorator($drink));
echo $drink->cost(). '$ ';
echo $drink->name();

