<?php

/*
Problem 36: The API Data Fetcher (finally block)
Scenario: You are building a system that opens a heavy network connection to an external API to download data. 
No matter whether the download succeeds or fails with an exception, you must close the network connection at the very end to prevent memory leaks and server slowdowns.

Task: Implement a process that guarantees cleanup using finally.

Requirements:

Create an ApiLoader class.

Method fetchData($url): Simulates opening a connection by printing "Connecting to API...".

Logic: If the $url is empty, throw an exception: "Invalid URL."

Method closeConnection(): Prints "Connection safely closed."

The Challenge: Use a try/catch/finally structure. Ensure that closeConnection() runs inside the finally block so that it executes even if the URL is empty and an exception is thrown.
*/

class ApiLoader {
    public function fetchData($url) {
        echo "Connecting to API...\n";

        if (empty($url)) {
            throw new Exception("Invalid URL provided. Cannot fetch data.");
        }

        echo "Data downloaded successfully from: $url\n";
    }

    public function closeConnection() {
        echo "Connection safely closed and memory cleared.\n";
    }
}

$loader = new ApiLoader();

echo "--- TEST 1: Sending an empty URL (Should Fail) ---\n";
try {
    $loader->fetchData(""); 
} catch (Exception $e) {
    echo "Caught Exception: " . $e->getMessage() . "\n";
} finally {
    $loader->closeConnection();
}

echo "\n------------------------------------------------\n\n";

echo "--- TEST 2: Sending a valid URL (Should Succeed) ---\n";
try {
    $loader->fetchData("https://api.example.com/v1/users"); 
} catch (Exception $e) {
    echo "Caught Exception: " . $e->getMessage() . "\n";
} finally {
    $loader->closeConnection();
}