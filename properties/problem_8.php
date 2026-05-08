<?php

/*
    Problem 8: The Smart Car Dashboard
    Scenario: You are coding the software for an electric vehicle. The car needs to track its fuel/battery level and mileage.
    Some properties should be updated automatically when the car "drives."

    Task: Create a SmartCar class.

    Properties:

    $model

    $mileage (starting at 0)

    $batteryLevel (starting at 100)

    Method drive($distance):

    Increase the $mileage by the distance.

    Decrease the $batteryLevel by 1% for every 5 units of distance.

    Goal: Manage multiple properties simultaneously within a single method.
*/

class SmartCar {
    public string $model;
    public int $mileage = 0;
    public int $batteryLevel = 100;

    public function __construct($model) 
    {
        $this->model = $model;
    }

    public function drive($distance) 
    {
        $this->mileage += $distance;

        $reduction = intdiv($distance, 5);
        $this->batteryLevel -= $reduction;

        if($this->batteryLevel < 0) {
            $this->batteryLevel = 0;
        }

        echo "Mileage: {$this->mileage}, Battery: {$this->batteryLevel}%" . PHP_EOL;
    }
    
}

$smartCar = new SmartCar("Ferrari");
$smartCar->drive(100);