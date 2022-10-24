<?php

namespace app\ShippingCalculator;

/**
 *
 */
interface ShipmentInterface
{
    /**
     * @return int
     */
    public function getDistance(): int;
}
