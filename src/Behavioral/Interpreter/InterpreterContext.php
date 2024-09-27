<?php

namespace DesignPatterns\Behavioral\Interpreter;

use DesignPatterns\Behavioral\Interpreter\Expression\Expression;

class InterpreterContext
{
    private $expressionStore = [];

    public function replace(Expression $expression, $value)
    {
        $this->expressionStore[$expression->getKey()] = $value;
    }

    public function lookup(Expression $expression)
    {
        return $this->expressionStore[$expression->getKey()];
    }
}