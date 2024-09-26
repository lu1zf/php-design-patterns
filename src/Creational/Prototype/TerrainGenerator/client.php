<?php

include_once "../../../../config.php";

use DesignPatterns\Creational\Prototype\TerrainGenerator\Earth\EarthFishResource;
use DesignPatterns\Creational\Prototype\TerrainGenerator\Earth\EarthPlains;
use DesignPatterns\Creational\Prototype\TerrainGenerator\Earth\EarthSea;
use DesignPatterns\Creational\Prototype\TerrainGenerator\Mars\MarsForest;
use DesignPatterns\Creational\Prototype\TerrainGenerator\TerrainFactory;


$factory = new TerrainFactory(
    new EarthSea(5, new EarthFishResource()),
    new MarsForest(),
    new EarthPlains()
);

print_r($factory->getSea());
print_r($factory->getForest());
print_r($factory->getPlains());