<?php

/*
The Problem: The Office Coffee Assistant
Scenario: You are upgrading the software for a busy office coffee machine. To prevent the machine from breaking down, 
it now has strict maximum capacity limits for its tanks, and it needs a way for office managers to safely refill it.

Requirements:

Create a class called PremiumCoffeeMachine.

Give it two properties: waterAmount and coffeeBeans (both starting at 0).

Add two class constants (or fixed properties) for the maximum limits: Max Water is 500ml and Max Beans is 100g.

Create a method refill($water, $beans). This method should add the new ingredients to the current amounts. However, 
if a refill would overflow either tank, cap it exactly at the maximum limit and echo a warning.

Create a method makeEspresso(). A single shot requires 50ml of water and 10g of beans. If there are enough ingredients, deduct them and return "Enjoy your espresso!". 
If not, return "Error: Refill required!".

Challenge: Initialize a new machine (starts empty). Call refill(600, 50)—your code should cap the water at 500ml. Then, 
simulate a busy morning by trying to make 6 espressos in a row using a loop, and see if it successfully stops and warns you when the water runs out.
*/

class PremiumCoffeeMachine {
    public int $waterAmount = 0;
    public int $coffeeBeans = 0;

    const MAX_WATER = 500;
    const MAX_BEANS = 100;

    public function refill($water, $beans) {

        $this->waterAmount += $water;
        $this->coffeeBeans += $beans;

        if ($this->waterAmount > self::MAX_WATER) {
            $this->waterAmount = self::MAX_WATER;
            echo "Warning: Water capped at " . self::MAX_WATER . "ml\n";
        }

        if ($this->coffeeBeans > self::MAX_BEANS) {
            $this->coffeeBeans = self::MAX_BEANS;
            echo "Warning: Beans capped at " . self::MAX_BEANS . "g\n";
        }
    }

    public function makeEspresso() {

        // CHECK FIRST (important)
        if ($this->waterAmount < 50) {
            return "Water needs refill!";
        }

        if ($this->coffeeBeans < 10) {
            return "Coffee Beans needs refill!";
        }

        // THEN DEDUCT
        $this->waterAmount -= 50;
        $this->coffeeBeans -= 10;

        return "Enjoy Your espresso!";
    }
}


// ===== SIMULATION =====

$coffeeMachine = new PremiumCoffeeMachine();

// refill (will be capped to 500ml water)
$coffeeMachine->refill(600, 50);

echo "Starting espresso simulation...\n\n";

for ($i = 1; $i <= 100; $i++) {

    $result = $coffeeMachine->makeEspresso();
    echo "Shot $i: " . $result . PHP_EOL;

    // stop when machine can't continue
    if ($result !== "Enjoy Your espresso!") {
        echo "\nMachine stopped. Needs refill.\n";
        break;
    }
}