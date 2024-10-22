<?php


class Person {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName() {
        return $this->name;
    }
    public function getAge() {
        return $this->age;
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        echo "I am destructor";
    }
}

$Person = new Person("John", "Doe");
echo $Person->getName();
echo $Person->getAge();