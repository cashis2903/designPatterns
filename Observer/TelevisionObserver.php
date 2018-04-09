<?php


class TelevisionObserver implements Observer {

    private $temp;

    public function update($change)
    {
        $this->temp = $change;
        echo '| Zmiana prognozy na '. $this->temp. ' stopni C <== Television ==>' ;
    }
}