<?php

require_once "AbstractJSBook.php";

class UdemyJSBook extends AbstractJSBook
{

    private $title = "UdemyJSBook";

    function getTitle()
    {
        return $this->title;
    }
}