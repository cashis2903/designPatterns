<?php

require_once "AbstractFactory.php";
require_once "Book.php";
require_once "BookFactory.php";
require_once "JSBook.php";
require_once "PHPBook.php";


$bookFactory = new BookFactory();
$book = $bookFactory->createBook("PHP");

echo $book->getTitle();

$book = $bookFactory->createBook("JS");

echo $book->getTitle();