<?php 

class Employee {
    public $name;
    public $age;
    public $salary;

    function __construct($n , $a, $s)
    {
        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;
    }

    // function __construct()
    // {
    //     echo "Employye Construct";
    // }

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

    public $ta = 1000;
    public $phone = 300;
    public $totalSalary;
    // function __construct()
    // {
    //     echo "Manager Construct";
    // }

    function info()
    {
        $this->totalSalary = $this->salary + $this->ta + $this->phone;
        echo "<h3>Employee Profile</h3>";
        echo "Employee Name: " . $this->name . "<br>";
        echo "Employee Age: " . $this->age . "<br>";
        echo "Employee Salary: " . $this->totalSalary . "<br>";
    }
}

$e1 = new Employee("Employee", 25, 25000);
$e2 = new Manager("Manager", 30, 55000);
// $e1 = new Manager();
$e1->info();
$e2->info();