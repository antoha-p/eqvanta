<?php

namespace app\ShippingCalculator;

/**
 *
 */
interface ShippingCalculatorInterface
{
    /**
     * @return float
     */
    public function calculate(): float;
}
