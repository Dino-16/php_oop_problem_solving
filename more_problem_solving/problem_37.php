<?php

/*
Problem 37: The E-Commerce Product Catalog
Scenario: You are building the backend for an online tech store. You need a systemized way to represent products in your catalog so you don't rely on messy, unorganized arrays.

Requirements:

Create a Product class with properties for name, price, and stockQuantity.

Use a constructor (__construct) to assign these values when a product is created.

Add a method called sellProduct($quantity) that reduces the stockQuantity by the given amount.

Prevent a sale if there isn't enough stock, and echo an error message instead.

Challenge: Instantiate a "Laptop" object costing $999 with a stock of 5. Simulate selling 3 of them, then try to sell 3 more to test your out-of-stock logic.
*/

class Product {
    public $name;
    public $price;
    public $stockQuantity;

    public function __construct($name, $price, $stockQuantity) {
        $this->name = $name;
        $this->price = $price;
        $this->stockQuantity = $stockQuantity;
    }

    public function sellProduct($quantity) {
        if($this->stockQuantity >= $quantity) {
            return $this->stockQuantity = $this->stockQuantity - $quantity . PHP_EOL;
        } else {
            return "Out of stock";
        }
    }
}

$product = new Product("Laptop", "$999", 5);
echo $product->sellProduct(3);
echo $product->sellProduct(3);
