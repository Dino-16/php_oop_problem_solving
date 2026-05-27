<?php

/*
Problem 38: The Digital Bank Account (Encapsulation)
Scenario: You are writing the core module for a fintech startup. For security reasons, a user's bank balance must never be directly accessible or editable from outside the class.

Requirements:

Create a BankAccount class with a private property for balance and a public property for accountHolder.

Create a constructor to set the accountHolder and an initial balance.

Provide a public method called getBalance() to safely view the balance.

Provide deposit($amount) and withdraw($amount) methods to safely modify the balance, ensuring nobody can withdraw more than they own or deposit a negative amount.
*/

class BankAccount {
    private $balance;
    public $accountHolder;

    public function __construct($accountHolder, $balance) {
        $this->accountHolder = $accountHolder;
        $this->balance = $balance;
    }

    public function getBalance() {
        return $this->balance;
    }

    public function deposit($amount) {
        if($amount > 0) {
            return $amount = $amount + $this->getBalance();
        } else {
            return "Error";
        }
    }

    public function withdraw($amount) {
        if($amount < 0) {
            return $amount = $this->getBalance() - $amount;
        } else {
            return "Error";
        }
    }
}

$bankAccount = new BankAccount("John", 200);

echo $bankAccount->deposit(100);