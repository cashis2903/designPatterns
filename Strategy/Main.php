<?php

require('ITax.php');
require('TaxGB');
require('TaxPL.php');

class Main
{
    private $tax;

    public function setTax(ITax $tax)
    {
        $this->tax = $tax;
    }

    public function getTax()
    {
        return $this->tax;
    }

    public function run()
    {
        $tax = new Main();
        $tax->setTax(new TaxGB());
        echo $tax->getTax()->count(100);
        $tax->setTax(new TaxPL());
        echo $tax->getTax()->count(100);

    }


}


$main = new Main();
$main->run();