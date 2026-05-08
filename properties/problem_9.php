<?php

/*
Problem 3: The Employee Payroll System
Scenario: An HR system needs to store employee details. 
While most info is set at the start, the "salary" property needs to be handled carefully through a specific method to allow for raises.

Task: Create an Employee class.

Properties:

$fullName

$jobTitle

$monthlySalary

Method applyRaise($percentage):

Calculates the new salary based on the percentage (e.g., a 10% raise on 3000 becomes 3300).

Updates the $monthlySalary property.

Method getAnnualCost():

Multiplies $monthlySalary by 12 and returns the result.
*/

class Employee {
    public string $fullName;
    public string $jobTitle;
    private float $monthlySalary;

    public function __construct($fullName, $jobTitle, $monthlySalary) 
    {
        $this->fullName = $fullName;
        $this->jobTitle = $jobTitle;
        $this->monthlySalary = $monthlySalary;
    }

    public function applyRaise($percentage) 
    {
        // calculate raise
        $raiseAmount = $this->monthlySalary * ($percentage / 100);
        $this->monthlySalary += $raiseAmount;

        echo "Annual Salary after raise: " . $this->getAnnualCost() . PHP_EOL;
    }

    public function getAnnualCost()
    {
        return $this->monthlySalary * 12;
    }
}

$employee = new Employee("John", "Web Developer", 24000);
$employee->applyRaise(10); // Annual Salary after raise: 316800
