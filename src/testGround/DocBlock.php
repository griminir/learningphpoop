<?php
declare(strict_types=1);
namespace testGround;

class Transaction2
{
    /**@var Customer */
    private $customer;

    /**@var float */
    private $amount;
    private $description;
    private $creditCardNumber;
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

    public function __construct($customer=null, $amount=15, $description=null, $creditCardNumber='0000-0000-0000-0000')
    {
        $this->customer = $customer;
        $this->amount = $amount;
        $this->description = $description;
        $this->creditCardNumber = $creditCardNumber;
    }

    public function process($customer, $amount)
    {
        // process the transaction

        // if failed, return false

        // otherwise, return true
        return true;
    }

    public function __sleep()
    {
        // return the properties that need to be serialized
        return ['amount'];
    }

    public function __wakeup()
    {
        // re-initialize the object
        // this method is called after the object is unserialized
        // can be used to restore any resource or re-establish a database connection etc.
    }

    public function __serialize(): array
    {
        // more control over the serialization process
        // precedence over __sleep()
        return [
            'customer' => $this->customer,
            'amount' => $this->amount,
            'description' => $this->description,
            'creditCardNumber' => base64_encode($this->creditCardNumber),
        ];
    }

    public function __unserialize(array $data): void
    {
        // precedence over __wakeup()
        $this->customer = $data['customer'];
        $this->amount = $data['amount'];
        $this->description = $data['description'];
        $this->creditCardNumber = base64_decode($data['creditCardNumber']);
        var_dump($data);
    }
}