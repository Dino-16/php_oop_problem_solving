<?php

/*
Problem 20: The Currency Converter Utility
Scenario: You are building a financial app. You need a tool to convert USD to EUR. Since the exchange rate is the same for every transaction, you don't need to create a new "Converter" object every time.

Task: Create a CurrencyConverter class.

The Static Property: $exchangeRate (set it to 0.92 for EUR).

The Static Method: convertToEur($usdAmount).

Logic: Multiply the amount by the static exchange rate.

Challenge: Call CurrencyConverter::convertToEur(100) directly in your script.
*/

class CurrencyConverter {
    public static $exchangeRate = 0.92;

    public static function convertToEur($usdAmount) {
        return self::$exchangeRate * $usdAmount;
    }
}

echo CurrencyConverter::convertToEur(100);