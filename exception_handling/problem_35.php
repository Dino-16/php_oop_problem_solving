<?php

/*
Problem 35: The E-commerce Checkout Safety Net (Custom Exceptions)
Scenario: Standard exceptions are fine for general problems, but in a large e-commerce application, you want a specific type of exception for inventory issues. 
This allows you to handle stock errors differently than database or network errors.

Task: Create and use a custom exception class.

Requirements:

Create a custom exception class named OutOfStockException that extends PHP's native Exception class.

Create an Item class with properties $name and $stock.

Create a method purchase($quantity) inside the Item class. If the requested quantity is greater than the available stock, 
throw new OutOfStockException("Not enough stock for {$this->name}").

The Challenge: Write a script that attempts to buy 5 items when only 2 are in stock, and explicitly catch the OutOfStockException.
*/

// Custom Exception
class OutOfStockException extends Exception {

}

// Item Class
class Item {
    public $name;
    public $stock;

    public function __construct($name, $stock) {
        $this->name = $name;
        $this->stock = $stock;
    }

    public function purchase($quantity) {

        // Check if requested quantity exceeds stock
        if ($quantity > $this->stock) {
            throw new OutOfStockException(
                "Not enough stock for {$this->name}"
            );
        }

        // Deduct stock
        $this->stock -= $quantity;

        return "Purchase successful!";
    }
}

// Create item with only 2 stocks
$item = new Item("Laptop", 2);

try {

    // Attempt to buy 5 items
    echo $item->purchase(5);

} catch (OutOfStockException $e) {

    echo "Purchase Failed: " . $e->getMessage();

}