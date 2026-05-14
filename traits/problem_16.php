<?php
/*
Problem 1: The "Timestampable" Trait
Scenario: In a large application, many different types of data (Users, Posts, Products, Invoices) need to track when they were created. Instead of rewriting the logic in every class, you can create a Trait.

Task: Create a Trait called Timestampable.

The Trait:

Property: $createdAt.

Method initTimestamp(): Sets $createdAt to the current date and time.

Method getCreatedDate(): Returns the formatted date.

Requirement: Apply this trait to a User class and a BlogPost class. Show that both can now track their creation time without sharing a parent class.
*/

trait Timestampable {
    public $createdAt;

    public function initTimestamp() {
        $this->createdAt = date("Y-m-d H:i:s");
    }

    public function getCreatedDate() {
        return date("l, F j, Y g:i A", strtotime($this->createdAt));
    }
}

class User {
    use Timestampable;

    public $name;

    public function __construct($name) {
        $this->name = $name;
        $this->initTimestamp();
    } 
}

class BlogPost {
    use Timestampable;

    public $title;

    public function __construct($title) {
        $this->title = $title;
        $this->initTimestamp();
    }
}

$user = new User("John");
echo "User '{$user->name}' created at: " . $user->getCreatedDate() . PHP_EOL;

$post = new BlogPost("My First Blog");
echo "BlogPost '{$post->title}' created at: " . $post->getCreatedDate() . PHP_EOL;