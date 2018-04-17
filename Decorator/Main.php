<?php

require 'Drink.php';
require 'DrinkIngridientDecorator.php';
require 'Honey.php';
require 'Smoothie.php';


$drink = new Drink('Smoothie', 4);


$drink = new Honey(new DrinkIngridientDecorator($drink));
echo $drink->cost(). '$ ';
echo $drink->name();

