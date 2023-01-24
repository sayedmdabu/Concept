<?php

class Base{
    public $name = "Parent Class";

    public function calc($a, $b){
        return $a * $b;
    }
}

class Derived extends Base{
    public $name = "Child Class";

    public function calc($a, $b){
        return $a + $b;
    }
}

$test = new Derived();

echo "Overriding Derived: " . $test->calc(5,10) . "<br>";