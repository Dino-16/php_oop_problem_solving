/*
Problem 2: The Smart Thermostat System
Scenario: You’re developing software for a IoT home automation company. The thermostat needs to track the current
temperature and allow users to increase or decrease it, but it should never go above a "safety limit" of 30°C.

Task: Create a Thermostat class.

Requirements:

Property: $currentTemp (defaulting to 20).
Method increaseTemp($degrees): Adds degrees to the current temp but caps it at 30.
Method decreaseTemp($degrees): Subtracts degrees from the current temp.
Logic: If a user tries to set it to 35, the class should automatically stop at 30.
*/

<?php

class Thermostat
{
    public $currentTemp = 20;

    public function increaseTemp($degrees)
    {
        return $this->currentTemp += $degrees;
    }

    public function decreaseTemp($degrees)
    {
        return $this->currentTemp -= $degrees;
    }

    public function displayTemp()
    {
        if ($this->currentTemp > 30) {
            echo $this->currentTemp = 30;
        } elseif ($this->currentTemp < 20) {
            echo $this->currentTemp = 20;
        } else {
            echo $this->currentTemp;
        }
    }
}

$thermostat = new Thermostat();

$thermostat->increaseTemp(10);
$thermostat->decreaseTemp(5);

$thermostat->displayTemp();