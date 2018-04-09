<?php

class PageObserver implements Observer {

    private $temp;

    public function update($change)
    {
        $this->temp = $change;
        echo ' | Change temp '. $this->temp. '  C <== Page ==>';
    }
}