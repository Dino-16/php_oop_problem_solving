<?php

/*
Problem 41: The Smart Home Device Controller (Interfaces)
Scenario: You are developing the backend software for a smart home hub. The hub needs to be able to control all kinds of devices (lights, thermostats, 
security cameras) from different manufacturers. To ensure every device can be turned on and off seamlessly, you need a strict contract that all device drivers must follow.

Requirements:

Create an interface called TurnableOn (or Switchable). It should declare two methods: turnOn() and turnOff().

Create a class SmartLight that implements your interface. It should track whether the light is on or off using a boolean property and echo status messages like "Light turned on".

Create a class SmartThermostat that also implements your interface. It should do the same but echo messages specific to a thermostat.

Challenge: Create an array holding a SmartLight and a SmartThermostat. Loop through the array and call turnOn() on each device to verify that your hub can control 
completely different devices using the exact same method calls.
*/

interface Turnable {
    public function turnOn();
    public function turnOff();
}

class SmartLight implements Turnable {
    private $isOn = false;

    public function turnOn() {
        $this->isOn = true;
        echo "Light turned on" . PHP_EOL;
    }

    public function turnOff() {
        $this->isOn = false;
        echo "Light turned off" . PHP_EOL;
    }
}

class SmartThermostat implements Turnable {
    private $isOn = false;

    public function turnOn() {
        $this->isOn = true;
        echo "Thermostat turned on" . PHP_EOL;
    }

    public function turnOff() {
        $this->isOn = false;
        echo "Thermostat turned off" . PHP_EOL;
    }
}

$turnables = [new SmartLight(true), new SmartThermostat(true)];


foreach($turnables as $turnable) {
    $turnable->turnOn();
}

