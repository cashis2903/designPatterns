<?php

require_once "AbstractPHPBook.php";

class UdemyPHPBook extends AbstractPHPBook
{

    private $title = "UdemyPHPBOOK";

    function getTitle()
    {
        return $this->title;
    }
}