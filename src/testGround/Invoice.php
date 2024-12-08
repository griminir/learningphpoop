<?php
declare(strict_types=1);
namespace testGround;

class Invoice
{
    protected float $amount;
    protected array $data = [];
    private int $id = 1;
    private string $accountNumber = '2223-2313-5555';

    public function __construct(float $amount)
    {
        $this->amount = $amount;
    }

    public function __get($name)
    {
        if (property_exists($this, $name)) {
            return $this->$name;
        }
        return null; 
    }

    // not really good use of the __set magic method because it breaks the encapsulation
    public function __set($name, $value)
    {
        if (property_exists($this, $name)) {
            return $this->$name = $value;
        }
    }

    public function __isset($name)
    {
        return array_key_exists($name, $this->data);
    }

    public function __unset($name)
    {
        unset($this->data[$name]);
    }

    public function __toString(): string
    {
        return 'hello';
    }

    // can be used of you want to call the object as a function
    // if you only have one purpose for the object
    public function __invoke()
    {
        var_dump('Invoked');
    }

    // can be used to specify what to return and how to return it
    public function __debugInfo(): ?array
    {
        return [
            'id' => 'secret',
            'accountNumber' => '****-****-' . substr($this->accountNumber, -4),
        ];
    }   
}