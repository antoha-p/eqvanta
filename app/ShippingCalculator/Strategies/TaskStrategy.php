<?php

namespace app\ShippingCalculator\Strategies;

use app\ShippingCalculator\Price\Price;

/**
 *
 */
class TaskStrategy implements StrategyInterface
{
    /**
     * @var Price[]
     */
    private array $prices = [];

    /**
     * @param float $startPricePerKm
     */
    public function __construct(float $startPricePerKm)
    {
        $this->prices[] = new Price(0, $startPricePerKm);
    }

    /**
     * @param  Price $price
     * @return void
     */
    public function addPrice(Price $price): void
    {
        $this->prices[] = $price;

        usort(
            $this->prices,
            static function (Price $price1, Price $price2) {
                return ($price1->getFromKm() < $price2->getFromKm()) ? -1 : 1;
            }
        );
    }

    /**
     * @param  int $distance
     * @return float
     */
    public function calculate(int $distance): float
    {
        $totalPrice = 0;

        foreach ($this->prices as $key => $price) {
            $nextPrice = $this->prices[$key + 1] ?? new Price($distance, $price->getPriceKm());

            if ($price->getFromKm() < $distance) {
                $totalPrice += (min($nextPrice->getFromKm(), $distance) - $price->getFromKm()) * $price->getPriceKm();
            } else {
                break;
            }
        }

        return $totalPrice;
    }
}
