<?php

namespace DesignPatterns\Creational\Prototype\TerrainGenerator;

class TerrainFactory
{
    private $sea;
    private $forest;
    private $plains;

    public function __construct(Sea $sea, Forest $forest, Plains $plains)
    {
        $this->sea = $sea;
        $this->forest = $forest;
        $this->plains = $plains;
    }

    public function getSea(): Sea
    {
        return clone $this->sea;
    }

    public function getForest(): Forest
    {
        return clone $this->forest;
    }

    public function getPlains(): Plains
    {
        return clone $this->plains;
    }
}