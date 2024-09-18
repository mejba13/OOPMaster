<?php

class tostring
{
    private $name;
    private $age;


    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }

    public function __toString(){
        return 'Person Name '.$this->name . ' ' . $this->age;
    }
}

$tostring = new tostring("Engr Mejba Ahmed", "30");
echo $tostring;