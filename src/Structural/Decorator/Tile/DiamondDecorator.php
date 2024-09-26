<?php

namespace DesignPatterns\Structural\Decorator\Tile;

class DiamondDecorator extends TileDecorator
{

    public function getWealthFactor(): int
    {
        return $this->tile->getWealthFactor() + 2;
    }
}