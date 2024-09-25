<?php

use DesignPatterns\Behavioral\Strategy\Lesson\CostStrategy\FixedCostStrategy;
use DesignPatterns\Behavioral\Strategy\Lesson\CostStrategy\TimedCostStrategy;
use DesignPatterns\Behavioral\Strategy\Lesson\Lecture;
use DesignPatterns\Behavioral\Strategy\Lesson\Seminar;

require_once "../../../../config.php";

$lessons[] = new Seminar(4, new TimedCostStrategy());
$lessons[] = new Lecture(4, new FixedCostStrategy());

foreach ($lessons as $lesson) {
    print "lesson charge: {$lesson->cost()}. ";
    print "Charge type: {$lesson->chargeType()}" . PHP_EOL;
}