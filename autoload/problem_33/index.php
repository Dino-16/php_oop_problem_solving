<?php

/*
Problem 33: The Production Standard (Composer Setup)
Scenario: In real-world development, PHP developers almost never write their own autoloaders from scratch. 
They let Composer (PHP's package manager) handle it automatically via a configuration file called composer.json.

Task: Structure a professional composer.json file for PSR-4 autoloading.

The Scenario: You want the namespace Core\ to map directly to a physical folder named app/.

The Challenge: Write out the raw JSON structure for a composer.json file that instructs Composer to map the Core\ namespace to the app/ directory.

Bonus question: What is the command-line command you run in your terminal to actually generate the autoloader file once that JSON is written?
*/

require_once __DIR__ . '/vendor/autoload.php';

use Core\Services\UserServices;

$user = new UserServices();
$user->greet();
