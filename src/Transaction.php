<?php
declare(strict_types=1);

class Transaction
{
    // older/another way of doing constructor
    // private float $amount;
    // private string $description;

    // public function __construct(float $amount, string $description)
    // {
    //     $this->amount = $amount;
    //     $this->description = $description;
    // }

    // constructor shorthand 8.0 php
    public function __construct(private float $amount, private ?string $description = null)
    {
    }

    public function addTax(float $tax): Transaction
    {
        $this->amount += $this->amount * $tax / 100;
        return $this;
    }

    public function applyDiscount(float $discount): Transaction
    {
        $this->amount -= $this->amount * $discount / 100;
        return $this;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }

    // not really used
    // public function __destruct()
    // {
    //     echo "destructor {$this->description} completed" . '<br>';
    // }
}