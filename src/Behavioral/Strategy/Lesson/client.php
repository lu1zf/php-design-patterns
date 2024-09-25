<?php

use DesignPatterns\Behavioral\Strategy\Lesson\Lecture;
use DesignPatterns\Behavioral\Strategy\Lesson\Lesson;
use DesignPatterns\Behavioral\Strategy\Lesson\Seminar;

require_once "../../../../config.php";

$lecture = new Lecture(5, Lesson::FIXED);
print "{$lecture->cost()} ({$lecture->chargeType()})" . PHP_EOL;

$seminar = new Seminar(3, Lesson::TIMED);
print "{$seminar->cost()} ({$seminar->chargeType()})" . PHP_EOL;
