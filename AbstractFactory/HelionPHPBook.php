<?php

require_once "AbstractPHPBook.php";

class HelionPHPBook extends AbstractPHPBook
{

    private $title = "HelionPHPBook";

    public function getTitle()
    {
        return $this->title;
    }
}