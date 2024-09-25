<?php

namespace DesignPatterns\Behavioral\Strategy\Lesson\CostStrategy;

use DesignPatterns\Behavioral\Strategy\Lesson\Lesson;

class TimedCostStrategy extends CostStrategy
{

    public function cost(Lesson $lesson): int
    {
        return ($lesson->getDuration() * 5);
    }

    public function chargeType(): string
    {
        return "hourly rate";
    }
}