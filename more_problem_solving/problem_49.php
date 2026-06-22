<?php

/*
Problem 1: The Gym Membership Tracker
Scenario: You are writing the management software for a local fitness center. The system needs to track a member's 
check-ins and automatically warn them if their membership card has expired.

Requirements:

Create a class called GymMembership.

Give it three properties: memberName, totalCheckIns (integer starting at 0), and expiryDate (a string date like "2026-12-31").

Create a constructor to set the memberName and expiryDate when a new member signs up.

Create a method called checkIn().

First, it should check if the current date has passed the expiryDate. (Hint: You can compare dates in PHP using standard string comparisons like
date('Y-m-d') > $this->expiryDate).

If expired, return "Access Denied: Membership expired!".

If valid, increment totalCheckIns by 1 and return "Welcome, [Name]! Check-in #[Count].".

Challenge: Create a membership for "Alex" with an expiry date in the past (e.g., "2025-01-01"). Try to check in to see the denial. 
Then, create a membership for "Sam" with a future expiry date (e.g., "2027-01-01") and call checkIn() twice to see the counter increase.
*/

class GymMembership {
    public $memberName;
    public int $totalCheckIns = 0;
    public string $expiryDate;

    public function __construct($memberName, $expiryDate) {
        $this->memberName = $memberName;
        $this->expiryDate = $expiryDate;
    } 

    public function checkIn()
    {   
        $this->totalCheckins++;
        if(date("Y-m-d") > $this->expiryDate) {
            return "Access Denied: Membership expired!";
        } else {
            return "Welcome, $this->memberName ! Check-in #$this->totalCheckins.";
        }
    }
}

$member = new GymMembership('Alex', date("2025-01-01"));
$member = new GymMembership('Sam', date("2027-01-01"));

echo $member->checkIn();