<?php

class Singleton
{
    private static $instance;
    private $test;

    private function __construct(){}

    private function __clone(){} /// avoid cloning instance of Singleton

    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new Singleton();
        }

        return self::$instance;
    }

    /**
     * @param mixed $test
     */
    public function setTest($test): void
    {
        $this->test = $test;
    }

    /**
     * @return mixed
     */
    public function getTest()
    {
        return $this->test;
    }
}

$instance1 = Singleton::getInstance();
$instance1->setTest("1");
echo $instance1->getTest();
$instance2 = Singleton::getInstance();
echo $instance1->getTest();

