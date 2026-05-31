<?php

/*
Problem 7: The Game Character System (Abstract Classes)
Scenario: You are developing a fantasy role-playing game (RPG). You have different types of characters like Warriors and Mages. 
Every character has a name and a basic walk() movement, but their attack() mechanism is completely unique to their class. 
You want a template class that cannot be instantiated on its own, but forces all character types to define their own attack behavior.

Requirements:

Create an abstract class called GameCharacter. Give it a protected property for name and a constructor to set it.

Add a regular method to GameCharacter called walk() that echos: "[Name] walks forward.".

Define an abstract public function attack(); inside GameCharacter (with no body/code).

Create a child class Warrior that extends GameCharacter and implements attack() to echo: "[Name] swings a mighty sword!".

Create a child class Mage that extends GameCharacter and implements attack() to echo: "[Name] casts a blazing fireball!".

Challenge: Try to instantiate the GameCharacter class directly to see the PHP error. Then, successfully create a Warrior named "Thorin" and a Mage named "Gandalf". 
Have both characters walk() and then attack().
*/

abstract class GameCharacter {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function walk() {
        echo $this->name . " walks forward.\n";
    }

    // Abstract method forces child classes to define their own attack
    abstract public function attack();
}

// Warrior class
class Warrior extends GameCharacter {
    public function attack() {
        echo $this->name . " swings a mighty sword!\n";
    }
}

class Mage extends GameCharacter {
    public function attack() {
        echo $this->name . " casts a blazing fireball!\n";
    }
}

$warrior = new Warrior("Thorin");
$mage = new Mage("Gandalf");

$characters = [$warrior, $mage];

foreach($characters as $character) {
    $character->walk();
    $character->attack();
}