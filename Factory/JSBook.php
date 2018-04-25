<?php

require_once "Book.php";

class JSBook extends Book
{

    private $title = "JSBOOK";

    function getTitle()
    {
        return $this->title;
    }
}