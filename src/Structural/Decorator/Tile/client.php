<?php
include_once "../../../../vendor/autoload.php";

use DesignPatterns\Structural\Decorator\Tile\DiamondDecorator;
use DesignPatterns\Structural\Decorator\Tile\PollutionDecorator;
use DesignPatterns\Structural\Decorator\Tile\Plains;


$tile = new DiamondDecorator(new PollutionDecorator(new Plains()));
print $tile->getWealthFactor() . PHP_EOL;