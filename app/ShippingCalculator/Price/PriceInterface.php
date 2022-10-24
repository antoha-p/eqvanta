<?php

namespace app\ShippingCalculator\Price;

interface PriceInterface
{
    /**
     * @return int
     */
    public function getFromKm(): int;

    /**
     * @return float
     */
    public function getPriceKm(): float;
}
