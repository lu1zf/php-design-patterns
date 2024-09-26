<?php

namespace DesignPatterns\Structural\Decorator\Tile;

use DesignPatterns\Structural\Decorator\Tile\Tile;

abstract class TileDecorator extends Tile
{
    protected $tile;

    public function __construct(Tile $tile){
        $this->tile = $tile;
    }
}