<?php

/*
Scenario: You are building the checkout logic for an online clothing store. The cart needs to keep track of items added by the customer, 
calculate the total price, and apply a discount code if they have one.

Requirements:

Create a class called ShoppingCart.

Give it two properties: items (an associative array where the key is the item name and the value is the price) and discountApplied (a boolean, starting as false).

Create a method addItem($itemName, $price). This should add the item and its price into the items array.

Create a method applyDiscountCode($code). If the code is "SAVE10", change discountApplied to true and return "10% discount applied!". If it's any other code, 
return "Invalid coupon!".

Create a method calculateTotal(). This method needs to loop through the items array, sum up all the prices, and if discountApplied is true, take 10% off the final total.
Finally, it should return the total price.

Challenge: 1. Initialize a new ShoppingCart.
2. Add a "T-Shirt" ($20) and "Jeans" ($50).
3. Calculate the total (it should be $70).
4. Apply the discount code "SAVE10".
5. Calculate the total again to verify it successfully dropped to $63!
*/


class ShoppingCart {
    public $items = [];
    public $discountApplied = false;

    public function addItem($itemName, $price) {
        $this->items[$itemName] = $price;
    }

    public function applyDiscountCode($code) {
        if($code === "SAVE10") {
            $this->discountApplied = true;

            return "10% discount applied!";
        } else {
            return "Invalid coupon!";
        }
    }

    public function calculateTotal() {
        $total = array_sum($this->items);

        if($this->discountApplied) {
            $total *= 0.9;
        }

        return $total;
    }
}

// Challenge test
$cart = new ShoppingCart();
$cart->addItem("T-Shirt", 20);
$cart->addItem("Jeans", 50);

echo $cart->calculateTotal(); // 70
echo "\n";

echo $cart->applyDiscountCode("SAVE10"); // "10% discount applied!"
echo "\n";

echo $cart->calculateTotal(); // 63