<?php
// declare(strict_types=1);
namespace testGround;

require_once __DIR__ . '/IDebtCollector.php';

// can implement multiple interfaces with a comma
class CollectionAgency implements IDebtCollector
{
    public function collectDebt(float $owedMoney): float
    {
        $guaranteed = $owedMoney * 0.5;

        return mt_rand($guaranteed, $owedMoney);
    }
}