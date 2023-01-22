<?php

class Person {
    public $name;
    public $age;

    function __construct($name = "No Name", $age = 0){
        $this->name = $name;
        $this->age = $age;
    }

    function show(){
        echo $this->name . " - " . $this->age . "<br>";
    }
}


$p1 = new Person();
$p1 = new Person("Ram Kumar", 15);
$p1 = new Person("Salman Khan", 22);