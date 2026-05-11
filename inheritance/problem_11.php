<?php

/*
Problem 11: The E-commerce Shipping Logic
Scenario: You have a general "Order" in your system. However, "International Orders" require an extra customs fee that regular orders don't have.

Parent Class (Order):

Properties: $orderId, $subtotal.

Method calculateTotal(): Returns the subtotal + a flat $5 shipping fee.

Child Class (InternationalOrder):

Overrides the calculateTotal() method.

Logic: It should call the parent’s total but add an additional $20 for customs.

Challenge: Use the parent:: keyword to access the original calculation before adding the extra fee.
*/

class Order {
    public $orderId;
    public $subTotal;

    public function __construct($orderId, $subTotal)
    {
        $this->orderId = $orderId;
        $this->subTotal = $subTotal;
    }

    public function calculateTotal() {
        return $this->subTotal + 5;
    }

    public function __destruct() {
        echo "Regular order $" . $this->calculateTotal() . "\n";
        
    }
}

class InternationalOrder extends Order {

    public function calculateTotal() {
        $total = parent::calculateTotal();

        return $total += 20;
    }

    public function __destruct() {
        echo "International order $". $this->calculateTotal();
    }
}

$order = new Order(1, 200);
$internationalOrder = new InternationalOrder(2, 300);