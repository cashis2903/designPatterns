<?php

class TaxPL implements ITax
{

    public function count($netto)
    {
        return $netto * 0.17;
    }
}