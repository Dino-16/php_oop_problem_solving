<?php

/*
Problem 23: The Debuggable User Object (__toString)
Scenario: When logging errors or debugging code, developers often try to directly print an entire object (e.g., echo $user;). 
Normally, PHP will throw a fatal error if you do this. You want your object to gracefully turn itself into a readable JSON string when printed.

Task: Create a User class.

Properties: $name, $email, and $role.

The Magic Method:

__toString(): Triggered automatically whenever the object is treated as a string (like in an echo statement). 
It should return a cleanly formatted string or a JSON-encoded string of the user's data using json_encode().

Challenge: Create a user and run echo $user; to see the JSON output directly.
*/

class User {
    public $name;
    public $email;
    public $role;

    public function __construct($name, $email, $role) {
        $this->name = $name;
        $this->email = $email;
        $this->role = $role;
    } 
    public function __toString() {
        return json_encode([
            "name" => $this->name,
            "email" => $this->email,
            "role" => $this->role
        ]);
    }
}

$user = new User(
    "John Doe",
    "john@example.com",
    "Admin"
);

echo $user;