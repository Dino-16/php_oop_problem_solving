<?php

/*
Problem 3: The HR Employee Payroll (Inheritance)
Scenario: Your company has different types of employees. All employees have names, but full-time staff get a fixed monthly salary, while contractors get paid by the hour.

Requirements:

Create a parent class called Employee with a property for name.

Create a child class FullTimeEmployee that extends Employee and adds a monthlySalary property.

Create another child class Contractor that extends Employee and adds hourlyRate and hoursWorked properties.

Give both child classes a method called calculatePay(), but write different logic for each to calculate their respective earnings.

Challenge: Create a full-time employee earning $4,000/month and a contractor working 40 hours at $50/hour. Loop through both and print out their names alongside their calculated pay.
*/

class Employee {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }
}

class FullTimeEmployee extends Employee {
    public $monthlySalary;

    public function calculatePay() {
        return $this->monthlySalary;
    }
}

class Contractor extends Employee {
    public $hourlyRate;
    public $hoursWorked;

    public function calculatePay() {
        return $this->hourlyRate * $this->hoursWorked;
    }
}

$fullTime = new FullTimeEmployee('John');
$fullTime->monthlySalary = 4000;

$contractor = new Contractor("Bob");
$contractor->hourlyRate = 50;
$contractor->hoursWorked = 40;

$employees = [$fullTime, $contractor];

foreach ($employees as $employee) {
    echo "Name: $employee->name" . PHP_EOL . "Earning:"  . $employee->calculatePay() . PHP_EOL;
}