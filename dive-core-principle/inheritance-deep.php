<?php

class Animal {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function eat() {
        return "{$this->name} is eating.";
    }
}

class Dog extends Animal {
    public function brak(){
        return "{$this->name} is braking.";
    }
}

class Cat extends Animal {
    public function meow(){
        return "{$this->name} is meow.";
    }
}

$dog = new Dog("Buddy");
echo $dog->eat();
echo $dog->brak();

echo "<br>";

$cat = new Cat("Cat");
echo $cat->meow();
echo $cat->meow();