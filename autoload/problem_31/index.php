<?php

/*
Problem 31: The Homemade Autoloader (spl_autoload_register)
Scenario: You are building a lightweight PHP micro-framework from scratch. Before jumping into external tools,
you want to build a basic, native autoloader that automatically looks inside a folder called classes/ whenever a class is instantiated.

Task: Create a native PHP autoloader.

Setup: Imagine you have a file at classes/Controller.php and another at classes/Model.php.

The Challenge:

Write a script that uses PHP's built-in spl_autoload_register() function.

The callback function should take the missing class name, append .php to it, check if the file exists inside the classes/ folder, and require it.

Test it by simply writing $c = new Controller(); without using any manual require statements.
*/

spl_autoload_register(function($className) {
    $file = __DIR__ . "/classes/" . $className . ".php";

    if(file_exists($file)) {
        require $file;
    } else {
        throw new Exception("Unable to load class: $className");
    }
});

$c = new Controller();
$m = new Model();