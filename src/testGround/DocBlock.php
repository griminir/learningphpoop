<?php
declare(strict_types=1);
namespace testGround;

class Transaction2
{
    /**@var Customer */
    private $customer;

    /**@var float */
    private $amount;
    /**
     * Process the transaction
     *
     * @param Customer $customer
     * @param float $amount
     * 
     * @throws \RuntimeException
     * @throws \InvalidArgumentException
     * 
     * @return bool
     */
    public function process($customer, $amount)
    {
        // process the transaction

        // if failed, return false

        // otherwise, return true
        return true;
    }
}