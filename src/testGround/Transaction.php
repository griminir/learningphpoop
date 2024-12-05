<?php
declare(strict_types=1);
// https://www.php.net/manual/en/language.namespaces.php
// https://www.php.net/manual/en/language.namespaces.rules.php
namespace test;

use App\Enums\Status;

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

    private string $status;
    // constructor shorthand 8.0 php
    public function __construct(private float $amount, private ?string $description = null)
    {

        $this->setStatus(Status::PENDING);
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

    public function setStatus(string $status): self
    {
        if(! isset(Status::ALL_STATUSES[$status])) {
            throw new \InvalidArgumentException('Invalid status');
        }
        $this->status = $status;
        return $this;
    }

    // not really used
    // public function __destruct()
    // {
    //     echo "destructor {$this->description} completed" . '<br>';
    // }
}