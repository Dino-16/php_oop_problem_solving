<?php

/*
Scenario: You are developing a digital wallet app. To prevent fraud, the wallet's balance and the user's pin code must be locked down tight so 
external code cannot accidentally overwrite or maliciously change them.

Requirements:

Create a DigitalWallet class with a private property for balance (starting at 0) and a private property for pinCode.

Create a constructor that requires a pinCode to be set when the wallet is created.

Create a method deposit($amount) that adds money to the balance, but only if the amount is greater than 0.

Create a method spend($amount, $enteredPin) that deducts money from the balance only if the $enteredPin matches the wallet's pinCode and the wallet has enough funds.

Challenge: Create a wallet with the PIN 1234. Deposit $50. Try to spend $20 using the wrong PIN 9999 to see it fail, then successfully spend $20 using the correct PIN 1234.
*/

class DigitalWallet {
    private $balance = 0;
    private $pinCode;

    public function __construct($pinCode) {
        $this->pinCode = $pinCode;
    }

    public function deposit($amount) {
        if($amount > 0) {
            return $this->balance += $amount;
        } else {
            return "Make the amount at least more than 0";
        }
    }

    public function spend($amount, $enteredPin) {
        if($enteredPin == $this->pinCode) {
            return $this->balance -= $amount;
        } else {
            return "Incorrect Pin";
        }
    }
}

$digitalWallet = new DigitalWallet(1234);
echo $digitalWallet->deposit(50) . PHP_EOL;
echo $digitalWallet->spend(20, 123) . PHP_EOL;
echo $digitalWallet->spend(20, 1234);