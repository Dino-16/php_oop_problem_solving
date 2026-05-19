<?php

/*
Problem 26: The Notification Dispatcher (Object Type Hinting)
Scenario: You are building a system that sends out newsletters. You want to create a function that handles the dispatching, 
but you must ensure that the function only accepts valid User objects. Passing a string or an accidental array should cause an immediate error.

Task: Create a User class with an $email property.

The Challenge:

Create a standalone function outside the class called sendNewsletter($user).

Type Hint the argument so it strictly requires a User object: function sendNewsletter(User $user).

Inside the function, print: "Newsletter sent to: [user email]".

Test it by passing a valid User object, and then try passing a regular string to see how PHP protects your code.
*/

class User {
    public $email; 
    public function __construct($email) {
        $this->email = $email;
    }
}

function sendNewsletter(User $user) {
    echo "Newsletter sent to: $user->email";
}

$user1 = new User("Johndoe@gmail.com");

sendNewsletter($user1);

sendNewsletter("Johndoe@gmail.com");