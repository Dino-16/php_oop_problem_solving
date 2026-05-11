<?php

/*
Problem 10: The Multi-Role Banking System
Scenario: A bank has different types of accounts. All accounts have a balance and can deposit money, but a "Savings Account" behaves differently because it earns interest.

Parent Class (BankAccount):

Property: $balance.

Method deposit($amount): Adds to the balance.

Child Class (SavingsAccount):

Inherits everything from BankAccount.

New Method addInterest($rate): Calculates interest based on the balance and adds it to the total.

Challenge: Create a SavingsAccount, deposit $1000, and then apply a 5% interest.

*/

class BankAccount {
    public $balance;

    public function deposit($amount) 
    {
        $this->balance += $amount;
    }
}

class SavingAccount extends BankAccount {


    public function addInterest($rate) 
    {
        $this->balance += $this->balance * $rate;

        echo "Total $this->balance";
    }
}




$savingAccount = new SavingAccount();
$savingAccount->deposit(1000);
$savingAccount->addInterest(0.05);
