<?php
// declare(strict_types=1);

require_once __DIR__ . '/../testGround/DebtColletionService.php';
require_once __DIR__ . '/../testGround/CollectionAgency.php';
require_once __DIR__ . '/../testGround/IDebtCollector.php';
require_once __DIR__ . '/../testGround/Rocky.php';

use testGround\DebtCollectionService;
use testGround\Rocky;
use testGround\CollectionAgency;

$service = new DebtCollectionService();
$service2 = new DebtCollectionService();

echo $service->collect(new CollectionAgency());
echo $service2->collect(new Rocky());