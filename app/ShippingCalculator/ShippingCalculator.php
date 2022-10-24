<?php

namespace app\ShippingCalculator;

use app\ShippingCalculator\Strategies\StrategyInterface;

/**
 *
 */
class ShippingCalculator implements ShippingCalculatorInterface
{
    /**
     * @var StrategyInterface
     */
    private StrategyInterface $strategy;

    /**
     * @var ShipmentInterface
     */
    private ShipmentInterface $shipment;

    /**
     * @param ShipmentInterface $shipment
     * @param StrategyInterface $strategy
     */
    public function __construct(ShipmentInterface $shipment, StrategyInterface $strategy)
    {
        $this->shipment = $shipment;
        $this->strategy = $strategy;
    }

    /**
     * @return float
     */
    public function calculate(): float
    {
        return $this->strategy->calculate($this->shipment->getDistance());
    }

    /**
     * @param  StrategyInterface $strategy
     * @return void
     */
    public function setStrategy(StrategyInterface $strategy): void
    {
        $this->strategy = $strategy;
    }

    /**
     * @param  ShipmentInterface $shipment
     * @return void
     */
    public function setShipment(ShipmentInterface $shipment): void
    {
        $this->shipment = $shipment;
    }
}
