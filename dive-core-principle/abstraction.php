<?php

abstract class Vehicle {
    protected $speed;
    public function __construct($speed) {
        $this->speed = $speed;
    }
    abstract public function drive();

    public function getSpeed() {
        return $this->speed;
    }
}

class Car extends Vehicle {
    public function drive() {
        echo "Driving a car at {$this->speed} km/h.<br>";
    }
}

class Motor extends Vehicle {
    public function drive() {
        echo "Motor at {$this->speed} km/h.<br>";
    }
}

class Bicycle extends Vehicle {
    public function drive() {
        echo "Bicycle at {$this->speed} km/h.";
    }
}

$car = new Car(150);
$car->drive();
$motor = new Motor(150);
$motor->drive();
$bicycle = new Bicycle(150);
$bicycle->drive();