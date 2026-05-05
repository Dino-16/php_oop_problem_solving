/*
Problem 3: Digital Wallet Transaction
Scenario: A fintech app needs a way to manage user balances.
Users should be able to add money (deposit) and spend money (withdraw). The system must prevent the balance from going
negative.
Task: Create a Wallet class.

Requirements:

Property: $balance.
Method deposit($amount): Increases the balance.
Method withdraw($amount): Deducts from the balance only if there are sufficient funds. If not, it should print
"Insufficient funds."
Method getBalance(): Returns the current balance formatted as currency (e.g., "$100.00").
*/

<?php

class Wallet
{
    public $balance;

    public function deposit($amount)
    {
        $this->balance += $amount;
    }

    public function withdraw($amount)
    {
        $this->balance -= $amount;
    }

    public function getBalance()
    {
        echo "balance : $" . $this->balance;
    }
}

$wallet = new Wallet();
$wallet->deposit(200);
$wallet->withdraw(100);
$wallet->getBalance();