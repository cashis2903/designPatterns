<?php

require_once "Book.php";

class PHPBook extends Book
{
    private $title = "PHP";

    public function getTitle()
    {
        return $this->title;
    }
}