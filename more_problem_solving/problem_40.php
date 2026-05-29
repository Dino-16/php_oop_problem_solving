<?php

/*
Problem 4: The Notification System (Polymorphism)
Scenario: You are building an automated alert system for a travel booking platform. When a flight is delayed, the system needs to notify users, 
but different users prefer different communication channels (Email, SMS, or Push Notifications).

Requirements:

Create a parent class called Notification. Give it a method called send($message).

Create a child class EmailNotification that extends Notification. Override the send($message) method to echo: "Sending Email: [Your message content]".

Create a second child class SmsNotification that also extends Notification. Override the send($message) method to echo: "Sending SMS: [Your message content]".

Write a separate, standalone function (outside of any class) called broadcastAlert($notificationObject, $message). This function should accept any 
type of Notification object and call its send() method.

Challenge: Create an array containing one EmailNotification object and one SmsNotification object. Use a foreach loop to pass each object into your 
broadcastAlert() function along with the message "Your flight has been delayed!" to see polymorphism in action.
*/

class Notification {
    public function send($message) {
        echo "Sending notification: $message";
    }
}

class EmailNotification extends Notification {
    public function send($message) {
        echo "Sending Email: $message";
    }
}

class SmsNotification extends Notification {
    public function send($message) {
        echo "Sending SMS: $message";
    }
}

function broadcastAlert($notificationObject, $message) {
    $notificationObject->send($message);
}

$notifications = [new EmailNotification(), new SmsNOtification];

foreach($notifications as $notification) {
    broadcastAlert($notification, "Your flight has been delayed!");
}