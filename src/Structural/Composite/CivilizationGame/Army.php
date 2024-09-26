<?php

namespace DesignPatterns\Structural\Composite\CivilizationGame;

class Army extends Unit
{
    /** @var $units Unit[]*/
    private $units = [];

    public function addUnit(Unit $unit)
    {
        if(in_array($unit, $this->units, true)) {
            return;
        }

        $this->units[] = $unit;
    }
    public function removeUnit(Unit $unit)
    {
        $unityIndex = array_search($unit, $this->units, true);
        if(is_int($unityIndex)) {
            array_splice($this->units, $unityIndex, 1, []);
        }
    }

    public function bombardStrength(): int
    {
        $ret = 0;
        foreach ($this->units as $unit) {
            $ret += $unit->bombardStrength();
        }
        return $ret;
    }

}