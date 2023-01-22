<?php

class Calculation {
    public $a, $b, $c;

    function sum(){
        $this->c = $this->a + $this->b;
        return $this->c;
    }

    function sub(){
        $this->c = $this->a - $this->b;
        return $this->c;
    }
}


// Object 1
$c1 = new Calculation();
$c1->a = 20;
$c1->b = 10;


// Object 2
$c2 = new Calculation();
$c2->a = 30;
$c2->b = 20;


echo "Sum Value of C1: ". $c1->sum() . "<br>";
echo "Sub Value of C2: ". $c2->sub() . "<br>";