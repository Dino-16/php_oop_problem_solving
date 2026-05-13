<?php

/*
Problem 15: The Notification System (Alerts)
Scenario: A website needs to send alerts to users. Some users want an Email, others want an SMS, and others want a Push Notification.

Task: Create a Abstract Class Notifier.

Requirements:

Method send($message).

Child Class EmailNotifier: Prints "Sending Email: [message]".

Child Class SMSNotifier: Prints "Sending Text Message: [message]".

Challenge: Imagine you have a "New Order" alert. Write a script that can take a list of different notifier objects and send the same message through all of them at once.
*/

abstract class Notifier {
    abstract public function send($message);
}

class EmailNotifier extends Notifier {
    public function send($message) {
        echo "Sending Email: $message";
    }
}

class SMSNotifier extends Notifier {
    public function send($message) {
        echo "Sending Text Message: $message";
    }
}

$notifiers = [
    new EmailNotifier(),
    new SMSNotifier()
];

$message = "New Order";

foreach($notifiers as $notifier) {
    $notifier->send($message);
}