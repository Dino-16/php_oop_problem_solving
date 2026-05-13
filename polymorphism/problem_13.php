<?php

/*
Problem 13: The Multi-Method Payment Gateway
Scenario: An online store accepts different payment methods: Credit Card, PayPal, and Crypto. 
Each payment method processes a transaction differently, but the checkout system shouldn't need a separate piece of code for every single one.

Task: Create an Interface (or Parent Class) called PaymentMethod.

Requirements:

It must have a method processPayment($amount).

Create a class CreditCard that prints: "Processing $[amount] via Secure Card Gateway."

Create a class PayPal that prints: "Redirecting to PayPal for $[amount] payment."

Challenge: Create a function called checkout($method, $amount) that accepts any PaymentMethod and calls the processPayment() method without knowing which one it is.
*/

interface PaymentMethod {
    public function processPayment($amount);
}

class CreditCard implements PaymentMethod {
    public function processPayment($amount) {
        echo "Processing $$amount via secure card gateway";
    }
}

class PayPal implements PaymentMethod {
    public function processPayment($amount) {
        echo "Redirecting to Paypal for $$amount payment";
    }
}

$card = new CreditCard();
$paypal = new PayPal();

function checkout($method, $amount) {
    $method->processPayment($amount);
}

checkout($card, 200);
checkout($paypal, 500);