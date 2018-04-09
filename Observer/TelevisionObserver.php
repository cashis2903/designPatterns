<?php


class TelevisionObserver implements Observer {

    private $temp;

    public function update($change)
    {
        $this->temp = $change;
        echo '| Change temp '. $this->temp. '  C <== Television ==>' ;
    }
}