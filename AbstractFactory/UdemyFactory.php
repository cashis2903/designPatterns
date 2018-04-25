<?php

require_once "BookFactory.php";
require_once "UdemyJSBook.php";
require_once "UdemyPHPBook.php";

class UdemyFactory extends BookFactory
{

    function createJSBook()
    {
        return new UdemyJSBook();
    }

    function createPHPBook()
    {
        return new UdemyPHPBook();
    }
}