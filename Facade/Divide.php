<?php

class Divide
{

    private $number;

    public function __construct($number)
    {

        $this->number = $number;

    }

    public function divideBy2()
    {

        return $this->number / 2;
    }


}