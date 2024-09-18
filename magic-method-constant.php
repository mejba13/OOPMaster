<?php


class MegicMethodConstant {

    private $data = [];

    public function __get($name) {
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        } else {
            return "Property $name does not exist";
        }
    }

    public function __set($name, $value) {
        $this->data[$name] = $value;
    }
}

$MegicMethodConstant = new MegicMethodConstant();
$MegicMethodConstant->name = "Engr Mejba Ahmed";
$MegicMethodConstant->age  = 30;


echo $MegicMethodConstant->name ."<br>";
echo $MegicMethodConstant->age ."<br>";
echo $MegicMethodConstant->address;
