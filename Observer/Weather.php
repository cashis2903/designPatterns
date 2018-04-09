<?php

require_once 'Subject.php';
require_once 'TelevisionObserver.php';
require_once 'PageObserver.php';

class Weather implements Subject
{

    private $observerList = [];
    private $temp;

    public function registerObserver(Observer $observer)
    {
        $this->observerList[spl_object_hash($observer)] = $observer;
    }

    public function unregisterObserver(Observer $observer)
    {
        unset($this->observerList[spl_object_hash($observer)]);
    }

    public function notify()
    {
        foreach ($this->observerList as $observer) {
            $observer->update($this->temp);
        }
    }

    public function change($temp)
    {
        $this->temp = $temp;
        $this->notify();
    }


}


$weather = new Weather();
$weather->registerObserver(new TelevisionObserver());
$weather->registerObserver(new PageObserver());
$weather->change(10);

