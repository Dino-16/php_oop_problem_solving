<?php

/* 
Problem 1: The Character Stat Tracker (RPG Game)
Scenario: You are developing a role-playing game. Each character has a name, a level, and health points (HP). You need to ensure that when a character takes damage, their HP property updates correctly.

Task: Create a Character class.

Properties:

$name (string)

$level (integer)

$hp (integer)

Method takeDamage($amount):

Subtracts the amount from the $hp property.

Logic: If $hp falls below 0, set it to 0 and print "Character has fainted."

Goal: Practice accessing and modifying internal properties using $this->.
*/

class Character {
    public string $name;
    public int $level;
    public int $hp;

    public function __construct($name, $level, $hp)
    {
        $this->name = $name;
        $this->level = $level;
        $this->hp = $hp;
    }

    public function takeDamage($amount)
    {
        $reduceDamage = $this->applyDamageReduction($amount);
        $this->hp -= $reduceDamage;

        if ($this->hp <= 0) {
            $this->hp = 0; // clamp to zero
            echo "Character has fainted." . PHP_EOL;
        } else {
            echo "Character HP reduced to {$this->hp}" . PHP_EOL;
        }
    }

    public function applyDamageReduction($amount)
    {
        if ($this->level == 1) {
            return (int)($amount * 0.9);
        } elseif ($this->level == 2) {
            return (int)($amount * 0.8);
        } elseif ($this->level == 3) {
            return (int)($amount * 0.7);
        } else {
            return (int)$amount;
        }
    }
}

$character = new Character("John", 1, 100);

$character->takeDamage(10);  // HP reduced to 91
$character->takeDamage(99);  // Character has fainted.
$character->takeDamage(10);   // Character has fainted.
