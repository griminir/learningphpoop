<?php
declare(strict_types=1);
require_once '../Transaction.php';

// chaining is better for building objects dont use it on everything
$transaction1 = (new Transaction(100, 'Transaction 1'))
    ->addTax(8)
    ->applyDiscount(10);

$transaction2 = (new Transaction(200, 'Transaction 2'))
    ->addTax(8)
    ->applyDiscount(15);

var_dump($transaction1->getAmount(), $transaction2->getAmount());