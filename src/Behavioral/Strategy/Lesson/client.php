<?php

use DesignPatterns\Behavioral\Strategy\Lesson\CostStrategy\FixedCostStrategy;
use DesignPatterns\Behavioral\Strategy\Lesson\CostStrategy\TimedCostStrategy;
use DesignPatterns\Behavioral\Strategy\Lesson\Lecture;
use DesignPatterns\Behavioral\Strategy\Lesson\Registration\RegistrationManager;
use DesignPatterns\Behavioral\Strategy\Lesson\Seminar;

require_once "../../../../config.php";

$lessons[] = new Seminar(4, new TimedCostStrategy());
$lessons[] = new Lecture(4, new FixedCostStrategy());

$manager = new RegistrationManager();

foreach ($lessons as $lesson) {
    $manager->register($lesson);
}