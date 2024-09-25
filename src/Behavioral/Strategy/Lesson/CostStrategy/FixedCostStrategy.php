<?php

namespace DesignPatterns\Behavioral\Strategy\Lesson\CostStrategy;

use DesignPatterns\Behavioral\Strategy\Lesson\Lesson;

class FixedCostStrategy extends CostStrategy
{

    public function cost(Lesson $lesson): int
    {
        return 30;
    }

    public function chargeType(): string
    {
        return "fixed rate";
    }
}