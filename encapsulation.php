<?php

class Encapsulation {
    public $tutorial = "Fronted Development";
    private $resource = "Forum images";
    protected $profile = "Engr Mejba Ahmed";

    public function codeTester()
    {
        echo $this->tutorial."<br/>";
        echo $this->resource."<br/>";
        echo $this->profile."<br/>";
    }
}

$encapsulation = new Encapsulation();
$encapsulation->codeTester();
echo $encapsulation->profile;