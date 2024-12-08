<?php
declare(strict_types=1);
require_once __DIR__ . '/../../testGround/Invoice.php';

$invoice = new testGround\Invoice(15);

// var_dump(isset($invoice->amount));

echo $invoice->amount . PHP_EOL;
echo $invoice;
$invoice();
var_dump($invoice);