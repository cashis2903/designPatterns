<?php

require_once "AbstractFactory.php";

class BookFactory extends AbstractFactory
{

    function createBook($book)
    {
        if ($book == "PHP") {
            return new PHPBook();
        } else if ($book == "JS") {
            return new JSBook();
        }
    }
}