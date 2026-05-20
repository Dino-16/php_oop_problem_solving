<?php

namespace App\Payment\Stripe;

class Transaction {
    public function charge() {
        echo "Stripe charged processed" . PHP_EOL;
    }
}