<?php


class EMAProduct
{
    public $title = "Object Oriented Programming";
    public $length;

    public function getTutorial($name)
    {
        echo "Tutorial " . $this->title = $name . "<br>";
    }
}

$EMAProduct = new EMAProduct();
echo $EMAProduct->title = " Laravel Development Course ".'<br/>';
$EMAProduct->getTutorial('Android Development');