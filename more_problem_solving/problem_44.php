<?php

/*
Problem 44: The Ride-Sharing Fare Calculator (Classes & Objects)
Scenario: You are coding the backend for a new ride-sharing app (like Uber or Lyft). 
You need a standardized way to track individual trips and calculate how much to charge passengers.

Requirements:

Create a Trip class with properties for passengerName, distanceInMiles, and ratePerMile.

Create a constructor to initialize these three properties when a new trip starts.

Add a method called calculateTotalFare() that multiplies the distance by the rate and returns the total cost.

Challenge: Instantiate a trip for "John Doe" who traveled 12.5 miles at a rate of $1.50 per mile. Echo out a receipt showing his name and the total fare.
*/

class Trip {
    public $passengerName;
    public $distanceInMiles;
    public $ratePerMile;

    public function __construct($passengerName, $distanceInMiles, $ratePerMile) {
        $this->passengerName = $passengerName;
        $this->distanceInMiles = $distanceInMiles;
        $this->ratePerMile = $ratePerMile;
    }

    public function calculateTotalFare() {
        return $totalCosts = $this->distanceInMiles * $this->ratePerMile;
    }
}

$trip = new Trip("John Doe", 12.5, 1.50);
echo $trip->passengerName . PHP_EOL;
echo "Total Fare: " . $trip->calculateTotalFare();