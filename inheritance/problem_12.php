<?php

/*
Problem 12: The Employee Hierarchy (HR System)
Scenario: Every person in a company is an "Employee," but "Managers" have extra responsibilities, like managing a team list.

Parent Class (Employee):

Properties: $name, $salary.

Method getDetails(): Returns "Name: [name], Salary: [salary]".

Child Class (Manager):

Inherits from Employee.

New Property: $team (an array of names).

New Method addTeamMember($name): Adds a name to the $team array.

Challenge: Create a Manager, set their salary, and add two team members to their list.
*/

class Employee {
    public $name;
    public $salary;

    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function getDetails()
    {
        return $this->name . " " . $this->salary;
    }
}

class Manager extends Employee {
    public $team = [];
    
    public function addTeamMember($name)
    {
        $this->team[] = $name;
    }

    public function __destruct()
    {
        echo "Manager Name: " . $this->getDetails();
        
        foreach($this->team as $member) {
            echo "Member name: $member";
        }
    }
}

// Create manager
$manager = new Manager("John", 50000);

// Add team members
$manager->addTeamMember("Alice");
$manager->addTeamMember("Bob");
