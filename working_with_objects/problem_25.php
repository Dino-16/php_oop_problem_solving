<?php

/*
Problem 1: The Booking Clone System (Object Cloning)
Scenario: You run a hotel booking platform. A customer wants to book a room for Monday, and then create an identical booking for Tuesday without re-entering all their preferences 
(room type, guest names, amenities). However, if you modify the second booking's date, it shouldn't change the first booking!

Task: Create a Booking class.

Properties: $roomNumber, $guestName, $date.

The Challenge:

Instantiate a booking for "Room 101" on "2026-06-01".

Use the clone keyword to create a copy of this object for the next day.

Change the $date property on the cloned object to "2026-06-02".

Print both objects to verify that the original booking's date remained unchanged.
*/

class Booking {
    private $roomNumber;
    private $guestName;
    private $date;

    public function __construct($roomNumber, $guestName, $date) {
        $this->roomNumber = $roomNumber;
        $this->guestName = $guestName;
        $this->date = $date;
    }

    public function __toString() {
        return "Room number: $this->roomNumber " . PHP_EOL . "Guest: $this->guestName" . PHP_EOL . "Date: $this->date";
    }

    public function setDate($date) {
        return $this->date = $date;
    }
}

$booking = new Booking(1, "John", "2026-06-01");
$cloneBooking = clone $booking;
$cloneBooking->setDate("2026-06-02");

echo $booking . PHP_EOL;
echo $cloneBooking;


