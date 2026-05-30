<?php

/*
Problem 6: The E-Commerce Audit Log (Traits)
Scenario: You are building an enterprise e-commerce platform. For security and debugging, the store owner wants to log every time a customer updates their profile, 
and also every time an administrator changes a product's price. Since these two classes are completely unrelated and don't share a parent class, you need a way to share 
logging functionality without copying and pasting code.

Requirements:

Create a Trait called Loggable. Inside it, define a method called logMessage($message) that echos: "[LOG - " . date('Y-m-d H:i:s') . "]: " . $message.

Create a UserProfile class that uses the Loggable trait. Add an updateEmail($newEmail) method that updates a property and uses the trait to log the change.

Create a ProductManager class that also uses the Loggable trait. Add a changePrice($product, $newPrice) method that uses the trait to log the price update.

Challenge: Instantiate both a UserProfile and a ProductManager object. Call updateEmail() on the profile and changePrice() on the manager to see both unrelated classes 
seamlessly using the exact same logging tool.
*/

trait Loggable {
    public function logMessage($message) {
        echo "[LOG - " . date('Y-m-d H:i:s') . "]: " . $message;
    }
}

class UserProfile {
    use Loggable;

    public function updateEmail($newEmail) {
        echo "$newEmail";
        echo $this->logMessage("new email is created");
    }
}

class ProductManager {
    use Loggable;

    public function changePrice($product, $newPrice) {
        echo "Product: $product, Price: $newPrice";
        echo $this->logMessage("Product and Price has been changed");
    }
}


$userProfile = new UserProfile();
$userProfile->updateEmail('John@gmail.com');

$productManager = new ProductManager();
$productManager->changePrice("Laptop", 999);