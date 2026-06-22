<?php

/*
Problem 2: The Smart Thermostat (State Management)
Scenario: You are coding the backend logic for a smart home device. The thermostat maintains a target temperature, but to protect the HVAC machinery, 
it shouldn't allow users to change temperatures drastically all at once.

Requirements:

Create a class called SmartThermostat.

Give it a property for currentTemperature (starting at 72) and a boolean property isEcoMode (starting as false).

Create a method setTemperature($target).

If isEcoMode is true, the thermostat should refuse to go above 75 degrees or below 68 degrees, returning "Eco Mode active: Temperature restricted!".

If isEcoMode is false, it should accept the new temperature and update currentTemperature.

Create a method toggleEcoMode() that flips the boolean property to its opposite state (if it's true, make it false, and vice versa).

Challenge: Create a thermostat. Turn on Eco Mode. Try to set the temperature to 80 degrees to see it get blocked. Toggle Eco Mode off, 
set the temperature to 80 degrees again, and verify that the target temperature successfully changes.
*/

class SmartThermostat {
    public $currentTemperature = 72;
    public $isEcoMode = false;

    public function setTemperature($target) {
        if($this->isEcoMode) {
            if($target > 75 || $target < 68) {
                return "Eco Mode active: Temperature restricted!";
            }
        } 

        $this->currentTemperature = $target;
        return "Temperature set to {$this->currentTemperature}°";
    }

    public function toggleEcoMode() {
        $this->isEcoMode != $this->isEcoMode;
        return "Eco Mode is now " . ($this->isEcoMode ? "ON" : "OFF");
    }
}

$thermostat = new SmartThermostat();
echo $thermostat->toggleEcoMode() . PHP_EOL;
echo $thermostat->setTemperature(80) . PHP_EOL;
echo $thermostat->toggleEcoMode() . PHP_EOL;
echo $thermostat->setTemperature(80) . PHP_EOL;