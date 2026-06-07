<?php

/*
The Vehicle Rental Fleet (Inheritance)
Scenario: You are managing the inventory system for a vehicle rental company that rents out both standard Cars and heavy-duty Trucks. 
Both vehicles share basic properties, but their rental terms are different.

Requirements:

Create a parent class Vehicle with properties for make model, and baseDailyRate.

Create a child class Car that extends Vehicle. It should add a method getRentalCost($days) that simply multiplies baseDailyRate by the number of days.

Create a child class Truck that extends Vehicle. It should add a loadCapacity property. 
Override the getRentalCost($days) method so that it adds an extra $20 "heavy-duty fee" per day to the final total.

Challenge: Create a Car (Toyota Corolla, $40/day) and a Truck (Ford F-150, $70/day). Calculate and echo the rental cost for renting both vehicles for 5 days.
*/

class Vehicle {
    public $make;
    public $model;
    public $baseDailyRate;

    public function __construct($make, $model, $baseDailyRate) {
        $this->make = $model;
        $this->model = $model;
        $this->baseDailyRate = $baseDailyRate;
    }

}

class Car extends Vehicle {
    public function getRentalCost($days) {
        return $this->baseDailyRate * $days;
    }
}

class Truck extends Vehicle {
    public $loadCapacity = 20;

    public function getRentalCost($days) {
        return ($this->baseDailyRate * $days) + ($this->loadCapacity * $days);
    }
}

$car = new Car("Toyota", "Corolla", 40);
echo "Car Rental Cost: $" . $car->getRentalCost(5) . PHP_EOL;

$truck = new Truck("Ford", "F-150", 70);
echo "Truck Rental Cost: $" . $truck->getRentalCost(5) . PHP_EOL;