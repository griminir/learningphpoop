<?php
declare(strict_types=1);
require_once '../Transaction.php';

// classes & objects
// chaining is better for building objects dont use it on everything
$transaction1 = (new Transaction(100, 'Transaction 1'))
    ->addTax(8)
    ->applyDiscount(10);

$transaction2 = (new Transaction(200, 'Transaction 2'))
    ->addTax(8)
    ->applyDiscount(15);

var_dump($transaction1->getAmount(), $transaction2->getAmount());
echo '<br>';


// std class
$jsonString = '{"name": "John", "age": 22}';

$arr = json_decode($jsonString, true);
$obj = json_decode($jsonString);

var_dump($arr);
echo '<br>';
var_dump($obj);
echo '<br>';

$obj2 = new stdClass();
$obj2->name = 'timmy';
$obj2->age = 12;
var_dump($obj2);
echo '<br>';

// casting
$arr2 = [1,2,3];
$objCasted = (object) $arr2;
var_dump($objCasted->{1}); // 2
// casting null to object will return an empty object
// casting scalar to object will return an object with a single property named scalar