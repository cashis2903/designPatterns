<?php


class Aggregate
{


    private $number;

    public function __construct($number)
    {
        $this->number = $number;
    }


    public function add100()
    {

        return $this->number + 100;
    }

}