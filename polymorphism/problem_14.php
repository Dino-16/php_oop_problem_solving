<?php

/*
Problem 14: The Universal Shape CalculatorScenario: You are building a drawing application. 
You have different shapes (Circles, Squares, Triangles), and you need to calculate the area for all of them. 
Since the formula for each shape is different, polymorphism is the perfect solution.

Task: Create a Parent Class Shape.
Requirements:Method getArea() (returns 0 by default).
Child Class Square: Takes side in the constructor; getArea() returns $side \times side$.
Child Class Circle: Takes radius in the constructor; getArea() returns $\pi \times radius^2$.
Challenge: Create an array containing a Square and a Circle. Loop through the array and print
*/

class Shape {
    public function getArea() {
        return 0;
    }
}

class Square extends Shape {
    private $side;

    public function __construct($side) {
        $this->side = $side;
    }

    public function getArea() {
        return $area = $this->side * $this->side;
    }
}

class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }
    public function getArea() {
        return pi() * ($this->radius ** 2);
    }
}

$shapes = [
    new Square(4),
    new Circle(5),
];

foreach($shapes as $shape) {
    echo "area:" . $shape->getArea() . "\n"; 
}