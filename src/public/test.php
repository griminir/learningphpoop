<?php
declare(strict_types=1);
require_once __DIR__ . '/../testGround/Transaction.php';
require_once __DIR__ . '/../App/Enums/Status.php';


use test\Transaction as namedTransaction; // this is a way of importing a namespace
use App\Enums\Status;

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

// classes & objects
// chaining is better for building objects dont use it on everything
$transaction1 = (new test\Transaction(100, 'Transaction 1'))
    ->addTax(8)
    ->applyDiscount(10);

// test\ shows that the transaction class is in the test namespace
$transaction2 = (new namedTransaction(200, 'Transaction 2'))
    ->addTax(8)
    ->applyDiscount(15);

var_dump($transaction1->getAmount(), $transaction2->getAmount());
echo '<br>';


$paddleTransaction = new NamedTransaction(110);
$paddleTransaction->setStatus(Status::PAID);

var_dump($paddleTransaction);