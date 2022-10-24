<?php

namespace app\ShippingCalculator\Price;

class Price implements PriceInterface
{
    /**
     * @var int
     */
    private int $fromKm;
    /**
     * @var float
     */
    private float $priceKm;

    /**
     * @param int   $fromKm
     * @param float $priceKm
     */
    public function __construct(int $fromKm, float $priceKm)
    {
        $this->fromKm = $fromKm;
        $this->priceKm = $priceKm;
    }

    /**
     * @return int
     */
    public function getFromKm(): int
    {
        return $this->fromKm;
    }

    /**
     * @return float
     */
    public function getPriceKm(): float
    {
        return $this->priceKm;
    }
}
