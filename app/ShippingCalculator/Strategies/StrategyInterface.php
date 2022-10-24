<?php

namespace app\ShippingCalculator\Strategies;

use app\ShippingCalculator\Price\Price;

/**
 *
 */
interface StrategyInterface
{
    /**
     * @param  Price $price
     * @return void
     */
    public function addPrice(Price $price): void;

    /**
     * @param  int $distance
     * @return float
     */
    public function calculate(int $distance): float;
}
