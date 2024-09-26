<?php

namespace DesignPatterns\Creational\Prototype\TerrainGenerator;

class Sea
{
    private $navigability = 0;
    private $fishResource;

    public function __construct(int $navigability, FishResource  $fishResource)
    {
        $this->navigability = $navigability;
        $this->fishResource = $fishResource;
    }

    public function __clone()
    {
        $this->fishResource = clone $this->fishResource;
    }
}