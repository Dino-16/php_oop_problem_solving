<?php

/*
Problem 34: The Secure Login Guard (Basic try/catch)
Scenario: You are building a user authentication system. If a user enters an incorrect password, you want to stop the login process immediately by throwing an exception, 
catching it, and displaying a clean alert message.

Task: Create an auth function that uses exception handling.

Requirements:

Create a function called attemptLogin($username, $password).

Logic: If the password does not equal "secret123", throw a standard PHP Exception with the message "Invalid credentials provided."

The Challenge: Wrap the function call inside a try/catch block. If an exception is caught, print: "Login Failed: [Exception Message]".
*/

class Login {
    public $email;
    public $password;

    public function __construct($email, $login) {
        $this->email;
        $this->password;
    }

    public function attemptLogin() {

        if ($this->password !== "secret123") {
            throw new Exception("Invalid credentials provided.");
        }

        return "Login Successfully";
    }
}

$login = new Login("johndoe@gmail.com", "1234567");

try {
    echo $login->attemptLogin();
} catch (Exception $e) {
    echo "Login Failed: " . $e->getMessage();
}