<?php

/*
Problem 18: The Logger Utility
Scenario: During development, you want to log messages to the console from various classes like DatabaseConnector, FileUploader, and PaymentProcessor.

Task: Create a Trait called DebugLogger.

The Trait:

Method logError($msg): Prints "[ERROR]: " . $msg.

Method logWarning($msg): Prints "[WARNING]: " . $msg.

The Classes:

Class FileUploader: Uses the trait to log an error if a file is too large.

Class DatabaseConnector: Uses the trait to log a warning if the connection is slow.

Challenge: Demonstrate how one class can "borrow" these logging tools without needing to be a "type of" Logger.
*/

trait DebugLogger {
    public function logError($msg) {
        echo "Error: $msg" . PHP_EOL;
    }

    public Function logWarning($msg) {
        echo "Warning: $msg" . PHP_EOL;
    }
}

class FileUploader {
    use DebugLogger;

    public $fileSize;

    public function __construct($file) {
        $this->fileSize = $file;

        if ($this->fileSize > 10) {
            $this->logError("File size {$this->fileSize}MB exceeds limit!");
        } else {
            echo "File size {$this->fileSize}MB is acceptable." . PHP_EOL;
        }
    }

}

class DatabaseConnector {
    use DebugLogger;

    public $connectionSpeed;

    public function __construct($speed) {
        $this->connectionSpeed = $speed;

        if ($this->connectionSpeed > 2) {
            $this->logWarning("Connection is slow ({$this->connectionSpeed} seconds).");
        } else {
            echo "Connection established quickly ({$this->connectionSpeed} seconds)." . PHP_EOL;
        }
    }
}

$fileUploader = new FileUploader(12); 
$dbConnector = new DatabaseConnector(3);