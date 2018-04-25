<?php

require_once "HelionFactory.php";
require_once "UdemyFactory.php";

$helion = new HelionFactory();

$phpBook = $helion->createPHPBook();

$jsBook = $helion->createJSBook();

echo $phpBook->getTitle();
echo $jsBook->getTitle();

$udemy = new UdemyFactory();

$phpBook = $udemy->createPHPBook();
$jsBook = $udemy->createJSBook();

echo $phpBook->getTitle();
echo $jsBook->getTitle();