<?php

require_once 'Book.php';

class BookAdapter
{

    private $book;

    public function __construct(Book $book)
    {
        $this->book = $book;
    }

    public function getTitleAndAuthor()
    {
        return $this->book->getTitle() . ' - '. $this->book->getAuthor();
    }

}

$book = new Book('Title', 'Author');
$adapter = new BookAdapter($book);
echo $adapter->getTitleAndAuthor();


