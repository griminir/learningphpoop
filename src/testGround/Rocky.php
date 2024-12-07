<?php
declare(strict_types=1);

namespace testGround;
require_once __DIR__ . '/IDebtCollector.php';

class Rocky implements IDebtCollector
{
    public function collectDebt(float $owedMoney): float
    {
        $collectedAmount = $owedMoney * 0.65;
        return $collectedAmount;
    }
}