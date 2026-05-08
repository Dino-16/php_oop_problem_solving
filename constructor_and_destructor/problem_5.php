<?php
/*
Problem 5: The Discounted Shopping CartScenario: An e-commerce site wants to apply a "Welcome Discount" automatically as
soon as a cart is created for a new user.
Task: Create a ShoppingCart class.
Properties: $total and $discount.
The Constructor:Accepts a $discountPercentage (e.g., 10 for 10%).
Sets the initial $total to 0.
Prints: "New cart initialized with a [X]% discount code.
"Method addItem($price):Adds the price to the $total.
The Destructor:Calculates the final price after the discount: $Final = Total \times (1 - \frac{Discount}{100})$.
Prints: "Final Checkout Amount: $[Final Price]."
*/
class ShoppingCart
{
    public $total = 0;
    public $discount;
    public function __construct($discountPercentage)
    {
        $this->discount = $discountPercentage;
        echo "New cart initialized with a $discountPercentage% discount code.";
    }
    public function addItem($price)
    {
        $this->total += $price;
    }

    public function __destruct()
    {
        $final = $this->total * (1 - ($this->discount / 100));
        echo "Final Checkout Amount: $" . number_format($final, 2) . "\n";
    }
}

$cart = new ShoppingCart(10);
$cart->addItem(100);
$cart->addItem(50);