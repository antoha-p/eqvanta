<?php

namespace app\ShippingCalculator\Validators;

/**
 *
 */
class DistanceValidator
{
    /**
     * @param  float $value
     * @return bool
     */
    public static function validate(float $value): bool
    {
        return $value >= 0;
    }
}
