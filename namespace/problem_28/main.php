<?php

/*
Problem 28: The Multi-Provider Payment Gateway
Scenario: Your e-commerce store integrates with both Stripe and PayPal. Both services require a Transaction class to handle payments. 
Without namespaces, PHP won't allow both classes to exist in your app at the same time.

Task: Create two separate Transaction classes using namespaces.

Requirements:

Place the first class inside the namespace App\Payment\Stripe. It should have a method charge() that prints "Stripe Charge Processed."

Place the second class inside the namespace App\Payment\PayPal. It should have a method charge() that prints "PayPal Charge Processed."

Challenge: In your main script, instantiate both transaction classes and run their charge() methods back-to-back.
*/


require_once 'App/Payment/stripeTransaction.php';
require_once 'App/Payment/payPalTransaction.php';

use App\Payment\Stripe\Transaction as StripeTransaction;
use App\Payment\PayPal\Transaction as PayPalTransaction;

$stripe = new StripeTransaction();
$stripe->charge();

$paypal = new PayPalTransaction();
$paypal->charge();