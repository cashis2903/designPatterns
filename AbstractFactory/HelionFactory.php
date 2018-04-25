<?php

require_once "BookFactory.php";
require_once "HelionJSBook.php";
require_once "HelionPHPBook.php";

class HelionFactory extends BookFactory
{


    function createJSBook()
    {
        return new HelionJSBook();
    }

    function createPHPBook()
    {
        return new HelionPHPBook();
    }
}