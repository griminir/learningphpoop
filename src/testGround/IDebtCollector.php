<?php
declare(strict_types=1);
namespace testGround;

// can use extends to inherit from another interface
interface IDebtCollector
{
    // you can not define properties in an interface but you can define constants
    public const MY_CONSTANT = 'my constant';
    public function collectDebt(float $owedMoney): float;
}