<?php

require_once "AbstractJSBook.php";

class HelionJSBook extends AbstractJSBook
{

    private $title = "HelionJSBook";

    function getTitle()
    {
        return $this->title;
    }
}