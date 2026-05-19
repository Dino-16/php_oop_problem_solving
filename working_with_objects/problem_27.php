<?php

/*
Problem 3: The Product Matcher (Object Comparison)
Scenario: In an e-commerce inventory app, you need to check if two product objects are completely identical (same instance in memory) or just look alike (same properties and values).

Task: Create a Product class with $sku and $price.

The Challenge:

Instantiate $product1 with SKU "ABC" and price 10.

Instantiate $product2 with SKU "ABC" and price 10 (a separate instance with identical values).

Create a third variable, $product3 = $product1; (points to the exact same instance).

Use the loose comparison operator (==) and the strict identity operator (===) to compare them.

Demonstrate why $product1 == $product2 is true, but $product1 === $product2 is false.
*/

class Product {
    public $sku;
    public $price;

    public function __construct($sku, $price) {
        $this->sku = $sku;
        $this->price = $price;
    }
}

$product1 = new Product("ABC", 10);
$product2 = new Product("ABC", 10);
$product3 = $product1;

if ($product1 == $product2) {
    echo "product1 == product2 is TRUE" . PHP_EOL;
} else {
    echo "product1 == product2 is FALSE" . PHP_EOL;
}

if($product1 === $product2) {
    echo "product1 ==- product2 is TRUE" . PHP_EOL;
} else {
    echo "product1 === product2 is FALSE" . PHP_EOL;
}

if ($product1 === $product3) {
    echo "product1 === product3 is TRUE" . PHP_EOL;
}