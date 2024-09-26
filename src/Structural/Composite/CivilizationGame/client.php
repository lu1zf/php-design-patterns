<?php
include_once "../../../../config.php";

use DesignPatterns\Structural\Composite\CivilizationGame\Archer;
use DesignPatterns\Structural\Composite\CivilizationGame\Army;
use DesignPatterns\Structural\Composite\CivilizationGame\LaserCannonUnit;


$mainArmy = new Army();

$mainArmy->addUnit(new Archer());
$mainArmy->addUnit(new LaserCannonUnit());

$subArmy = new Army();
$subArmy->addUnit(new Archer());
$subArmy->addUnit(new Archer());
$subArmy->addUnit(new Archer());

$mainArmy->addUnit($subArmy);

print "attacking with strength: {$mainArmy->bombardStrength()}" . PHP_EOL;
