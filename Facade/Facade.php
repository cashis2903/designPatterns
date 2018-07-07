<?php

require_once 'Aggregate.php';
require_once 'Divide.php';

class Facade
{


    private $divide;
    private $aggregate;

    public function __construct(Divide $divide, Aggregate $aggregate)
    {
        $this->aggregate = $aggregate;
        $this->divide = $divide;

    }

    public function runDivAndAdd(){

        echo $this->divide->divideBy2();
        echo $this->aggregate->add100();

    }


}

$facade = new Facade(new Divide(10), new Aggregate(100));

$facade->runDivAndAdd();