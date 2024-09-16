<?php

class EMAProduct {

    public $title;
    public $number;

    public function __construct($theTitle , $theNumber) {
        $this->title = $theTitle;
        $this->number = $theNumber;
        echo "Constructor has been called. Title: $theTitle, Number: $theNumber<br>";
    }

    public function getTutorial(){
        echo "Ramlit Limited provide " .$this->number. " tutorial on " . $this->title ."<br>";
    }

     //Destructor
    public function __destruct() {
        echo "Object of EMAProduct is being destroyed. Clean-up done.<br>";
    }
}

$EMAProduct = new EMAProduct("Aws Cloud", 10);
$EMAProduct->getTutorial();