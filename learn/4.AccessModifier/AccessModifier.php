<?php 

class Base {
    // public $name;
    protected $name;
    // private $name;

    public function __construct($n){
        $this->name = $n;
    }

    // public function show(){
    //     echo "Your Name : " . $this->name . "<br>";
    // }
    
    protected function show(){
        echo "Your Name : " . $this->name . "<br>";
    }
}

class Derived extends Base{
    public function get(){
        echo "Your Name : " . $this->name . "<br>";
    }
}

// $test = new Base("Base Class");
$test = new Derived("Derived Class");
// $test->show();
$test->get();