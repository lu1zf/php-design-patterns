<?php

namespace DesignPatterns\Behavioral\Interpreter\Expression;

use DesignPatterns\Behavioral\Interpreter\InterpreterContext;

class LiteralExpression extends Expression
{
    private $value;
    public function __construct($value)
    {
        $this->value = $value;
    }

    public function interpret(InterpreterContext $context)
    {
        $context->replace($this, $this->value);
    }
}