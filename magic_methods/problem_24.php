<?php

/*
Problem 24: The Flexible API Client (__call)
Scenario: You are building a wrapper for an external API. The API has dozens of data endpoints (like fetchUsers(), fetchOrders(), fetchProducts()). 
Instead of writing a separate PHP method for every single endpoint, you can intercept the method call, extract the name, and dynamically map it to an API request.

Task: Create an ApiClient class.

The Magic Method:

__call($methodName, $arguments): Triggered when a method is called that does not exist in the class.

Logic: Look at the $methodName. If it starts with the word "fetch" (e.g., fetchTweets), extract the remaining part of the string ("Tweets") and print: 
"Requesting data from endpoint: /api/v1/tweets".

Challenge: Call $api->fetchInvoices() and watch the magic method handle it dynamically.
*/

class ApiClient {

    public function __call($methodName, $arguments) {

        if (strpos($methodName, "fetch") === 0) {
            $endpoint = substr($methodName, 5);
            $endpoint = lcfirst($endpoint);

            echo "Requesting data from endpoint: /api/v1/" . $endpoint;
        } else {
            echo "Method not allowed";
        }
    }
}

$api = new ApiClient();

$api->fetchInvoices();

