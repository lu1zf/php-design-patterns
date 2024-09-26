<?php

namespace DesignPatterns\Structural\Composite\CivilizationGame;

use DesignPatterns\Structural\Composite\CivilizationGame\CompositeUnit;

class TroopCarrier extends CompositeUnit
{

    public function addUnit(Unit $unit)
    {
        if ($unit instanceof Calvary) {
            throw new UnitException("Can't get a horse on the vehicle");
        }

        parent::addUnit($unit);
    }
    public function bombardStrength(): int
    {
        return 0;
    }
}