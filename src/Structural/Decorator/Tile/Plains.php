<?php

namespace DesignPatterns\Structural\Decorator\Tile;

use DesignPatterns\Structural\Decorator\Tile\Tile;

class Plains extends Tile
{
    private $wealthFactor = 2;

    public function getWealthFactor(): int
    {
        return $this->wealthFactor;
    }
}