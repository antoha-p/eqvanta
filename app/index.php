<?php

use app\ShippingCalculator\Price\Price;
use app\ShippingCalculator\Shipment;
use app\ShippingCalculator\ShippingCalculator;
use app\ShippingCalculator\Strategies\TaskStrategy;

require '../vendor/autoload.php';

$taskStrategy = new TaskStrategy(100);
$taskStrategy->addPrice(new Price(100, 80));
$taskStrategy->addPrice(new Price(300, 70));

$calc = new ShippingCalculator(
    new Shipment(305),
    $taskStrategy
);

echo $calc->calculate() . "\n";
