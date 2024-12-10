<?php
declare(strict_types=1);

require_once __DIR__ . '/../../testGround/Toaster.php';
require_once __DIR__ . '/../../testGround/ToasterPro.php';
require_once __DIR__ . '/../../testGround/DocBlock.php';

use testGround\Toaster;
use testGround\ToasterPro;
use testGround\Transaction2;

$toaster = new ToasterPro();

$toaster->addSlice('bread');
$toaster->addSlice('bread');
$toaster->addSlice('bread');
$toaster->addSlice('bread');

foo($toaster);

// type hinting for base class allows for children classes to be passed
function foo(Toaster $toaster): void
{
    $toaster->toast();
}

$obj1 = new Transaction2();
$serObj = serialize($obj1);

$obj2 = unserialize($serObj);

echo $serObj . PHP_EOL;
var_dump($obj2);