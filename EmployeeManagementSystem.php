<?php


class Employee
{
    protected $name;
    protected $salary;
    public function __construct($name, $salary){
        $this->name = $name;
        $this->salary = $salary;
    }

    public function getDetails()
    {
        echo "Name : " . $this->name . " Salary : " . $this->salary ."<br>";
    }

    public function calculateBouns(){
        echo "Bouns :".$this->salary*0.10 ."<br>";
    }

    public function FestivalBouns() {
        echo "All employees will get Festival Bouns<br>";
    }
}

class Manager extends Employee {
    public function calculateBouns(){
        parent::FestivalBouns();
        echo "Bouns :". $this->salary*0.20 ."<br>";
    }
}

class Developer extends Employee
{
    protected $TourCost;

    public function __construct($name, $salary, $tourCost)
    {
        parent::__construct($name, $salary);
        $this->TourCost = $tourCost;
    }
    public function calculateBouns(){
        echo "Bouns :". $this->salary*0.30 ."<br>";
    }

    public function getTourCost(){
        echo "Tour Amount :".$this->TourCost."<br>";
    }


}

class Designer extends Employee{
    public function calculateBouns(){
        echo "Bouns :". $this->salary*0.40."<br>";;
    }
}


$Employee = new Employee("John Doe", "100.00");
$Employee->getDetails();
$Employee->calculateBouns();

$Manager = new Manager("Mejba", "50.00");
$Manager->getDetails();
$Manager->calculateBouns();

$Developer = new Developer("Maha", "100.00","50,000");
$Developer->getDetails();
$Developer->calculateBouns();
$Developer->getTourCost();

$Designer = new Designer('Martin','6000');
$Designer->getDetails();
