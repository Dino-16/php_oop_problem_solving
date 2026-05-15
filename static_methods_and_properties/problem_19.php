<?php

/*
Problem 19: The Global Visitor Counter
Scenario: You want to track how many total User objects have been created during a script's execution. Each time a new user is born, the counter should go up.

Task: Create a User class.

The Static Property: $userCount (starts at 0).

The Constructor: Increment the static $userCount every time a new instance is created.

The Static Method: getCount() which returns the current total.

Challenge: Create 3 different user objects, then call User::getCount() to see the total without referencing a specific user.
*/

class User {
    public static $userCount = 0;

    public function __construct() {
        self::$userCount++;
    }

    public static function getCount() {
        return self::$userCount;
    }
}

$user1 = new User();
$user2 = new User();
$user3 = new User();

echo User::getCount();