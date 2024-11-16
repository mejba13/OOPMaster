<?php

class Shape {
    public function draw()
    {
        return "Drawing s shape.";
    }
}

class Circle extends Shape {
    public function draw(){
        return "Drawing a circle.";
    }
}

class Rectangle extends Shape {
    public function draw(){
        return "Drawing a rectangle.";
    }
}

function drawShape(Shape $shape) {
    echo $shape->draw()."<br>";
}

$circle = new Circle();
$rectangle = new Rectangle();

drawShape($circle);
drawShape($rectangle);

