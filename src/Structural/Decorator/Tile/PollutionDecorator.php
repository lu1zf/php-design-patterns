<?php

namespace DesignPatterns\Structural\Decorator\Tile;

use DesignPatterns\Structural\Decorator\Tile\TileDecorator;

class PollutionDecorator extends TileDecorator
{
    public function getWealthFactor(): int
    {
        return $this->tile->getWealthFactor() - 4;
    }
}