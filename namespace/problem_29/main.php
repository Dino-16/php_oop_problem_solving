<?php

/*
Problem 29: The Core vs. Third-Party User Conflict (Using Aliases)
Scenario: You have your own internal application User class. However, you just imported an email marketing library that also contains a User class.
You need to use both classes inside the exact same file to sync user profiles.

Task: Use the as keyword to resolve a name clash.

Requirements:

Assume a class exists at App\Core\User.

Assume another class exists at Mailchimp\API\User.

In a new script, use the use statement to import both.

Challenge: Alias the Mailchimp class as MailchimpUser so you can write:
*/

require_once "App/Core/User.php";
require_once "Mailchimp/API/User.php";

use App\Core\User as AppUser;
use Mailchimp\API\User as MailchimpUser;

$appUser = new AppUser();
echo $appUser->syncProfile();

$mailChimpUser = new MailChimpUser();
echo $mailChimpUser->syncProfile();