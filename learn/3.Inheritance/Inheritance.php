<?php 

class Employee {
    public $name;
    public $age;
    public $salary;

    // function __construct($n , $a, $s)
    // {
    //     $this->name = $n;
    //     $this->age = $a;
    //     $this->salary = $s;
    // }

    function __construct()
    {
        echo "Employye Construct";
    }

    function info()
    {
        echo "<h3>Employee Profile</h3>";
        echo "Employee Name: " . $this->name . "<br>";
        echo "Employee Age: " . $this->age . "<br>";
        echo "Employee Salary: " . $this->salary . "<br>";
    }
}


class Manager extends Employee
{
    function __construct()
    {
        echo "Manager Construct";
    }
}

// $e1 = new Employee("Ram", 25, 25000);
$e1 = new Employee();
$e1->info();