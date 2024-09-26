<?php

namespace DesignPatterns\Creational\Prototype\TerrainGenerator\Earth;

use DesignPatterns\Creational\Prototype\TerrainGenerator\Sea;

class EarthSea extends Sea
{
    public function __clone()
    {
        parent::__clone();
    }
}