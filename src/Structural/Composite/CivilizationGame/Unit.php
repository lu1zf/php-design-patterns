<?php
namespace DesignPatterns\Structural\Composite\CivilizationGame;

abstract class Unit
{
    public function getComposite()
    {
        return null;
    }
    abstract public function bombardStrength(): int;
}