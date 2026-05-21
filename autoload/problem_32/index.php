<?php

/*
Problem 32: The PSR-4 Namespace Mapper
Scenario: You are moving your project up to modern standards. In the PSR-4 standard, namespaces match your directory paths exactly 
(e.g., the class App\Services\EmailService should live in the physical file location src/Services/EmailService.php).

Task: Build a path-converting autoloader.

The Logic: Your autoloader needs to:

Look for the prefix App\ in the class name.

Strip App\ away and replace it with your base directory name src/.

Convert the namespace backslashes (\) into directory slashes (/).

The Challenge: Write the string manipulation logic inside spl_autoload_register() to convert the class string "App\Utilities\Logger"
into the file path "src/Utilities/Logger.php" and load it.
*/

spl_autoload_register(function($className) {
    $prefix = "App\\";
    $baseDir = __DIR__ . "/src/";

    $len = strlen($prefix);
    if (strncmp($prefix, $className, $len) !== 0) {
        return;
    }

    $relativeClass = substr($className, $len);
    $file = $baseDir . str_replace("\\", "/", $relativeClass) . ".php";

    // Debugging output
    echo "Class name: $className\n";
    echo "File path: $file\n";

    if (file_exists($file)) {
        require $file;
        echo "Loaded: $file\n"; // Debugging output
    } else {
        echo "File not found: $file\n"; // Debugging output
    }
});

$logger = new App\Utilities\Logger();