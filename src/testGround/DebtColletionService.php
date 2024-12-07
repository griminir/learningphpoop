<?php
// declare(strict_types=1);
namespace testGround;

class DebtCollectionService
{
    public function collect(IDebtCollector $collector): void
    {
        $owedAmount = mt_rand(100, 1000);
        $collectedAmount = $collector->collectDebt($owedAmount);

        echo 'collected: $' . $collectedAmount . ' out of $' . $owedAmount . PHP_EOL;
    }
}