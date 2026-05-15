<?php

/*
Problem 21: The Secure Password Validator
Scenario: Your app needs to check if passwords meet security requirements (e.g., at least 8 characters long). This is a pure "utility" function that doesn't depend on any specific user data.

Task: Create a Validator class.

The Static Method: isSecure($password).

Logic: Check the length of the string. Return true if it’s 8 or more, false otherwise.

Challenge: Use an if statement to check a password using Validator::isSecure("12345") without ever instantiating the class.
*/

class Validator {
    public static function isSecure($password) {
        if(strlen($password) < 8) {
            return true;
        } else {
            return false;
        }
    }
}

echo Validator::isSecure("12345");