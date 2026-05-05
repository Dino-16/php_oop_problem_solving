/*
Problem 1: The E-commerce Product Display
Scenario: You are building a catalog for an online store. Each product has a name, a price, and a stock quantity. 
You need a way to display the product details and check if an item is "In Stock."

Task: Create a Product class.

Requirements:

Properties: $name, $price, $quantity.

Method displayDetails(): Returns a formatted string with the name and price.

Method isAvailable(): Returns true if quantity is greater than 0, otherwise false.
*/

<?php

class Product
{
    public $name;
    public $price;
    public $quantity;

    public function __construct($name, $price, $quantity)
    {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function displayDetails()
    {
        return "$this->name" . " | " . "$this->price";
    }

    public function isAvailable()
    {
        if ($this->quantity <= 0) {
            return $this->displayDetails() . " | " . "Out of Stock";
        }
        else {
            return $this->displayDetails() . " | " . "In Stock";
        }
    }
}

$products = [
    new Product("Phone", 699, 0),
    new Product("Laptop", 1200, 5),
    new Product("Tablet", 400, 2)
];

foreach ($products as $product) {
    echo $product->isAvailable() . "<br>";
}
