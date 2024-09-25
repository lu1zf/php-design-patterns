<?php

namespace DesignPatterns\Behavioral\Strategy\Lesson\CostStrategy;

use DesignPatterns\Behavioral\Strategy\Lesson\Lesson;

abstract class CostStrategy
{
    abstract public function cost(Lesson $lesson): int;
    abstract public function chargeType(): string;
}