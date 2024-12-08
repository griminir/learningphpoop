<?php
declare(strict_types=1);

require_once __DIR__ . '/../../testGround/Toaster.php';
require_once __DIR__ . '/../../testGround/ToasterPro.php';

use testGround\Toaster;
use testGround\ToasterPro;

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