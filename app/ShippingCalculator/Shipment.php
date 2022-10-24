<?php

namespace app\ShippingCalculator;

use app\ShippingCalculator\Exceptions\DistanceException;
use app\ShippingCalculator\Validators\DistanceValidator;

class Shipment implements ShipmentInterface
{
    /**
     * @var int
     */
    private int $distance;

    /**
     * @param  int $distance
     * @throws DistanceException
     */
    public function __construct(int $distance)
    {
        if (!DistanceValidator::validate($distance)) {
            throw new DistanceException('Distance value not valid');
        }

        $this->distance = $distance;
    }

    /**
     * @return int
     */
    public function getDistance(): int
    {
        return $this->distance;
    }
}
