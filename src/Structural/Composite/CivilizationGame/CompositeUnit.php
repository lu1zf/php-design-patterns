<?php

namespace DesignPatterns\Structural\Composite\CivilizationGame;

abstract class CompositeUnit extends Unit
{
    private $units = [];

    public function getComposite()
    {
        return $this;
    }

    public function addUnit(Unit $unit)
    {
        if(in_array($unit, $this->units, true)) {
            return;
        }

        $this->units[] = $unit;
    }

    public function removeUnit(Unit $unit)
    {
        $unitIndex = array_search($unit, $this->units, true);
        if(is_int($unitIndex)) {
            array_splice($this->units, $unitIndex, 1, []);
        }
    }

    public function getUnits(): array
    {
        return $this->units;
    }
}