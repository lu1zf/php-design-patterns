<?php

namespace DesignPatterns\Behavioral\Interpreter\Expression;

use DesignPatterns\Behavioral\Interpreter\InterpreterContext;

class VariableExpression extends Expression
{
    private $name;
    private $value;

    public function __construct($name, $value = null)
    {
        $this->name = $name;
        $this->value = $value;
    }

    public function interpret(InterpreterContext $context)
    {
        if(!is_null($this->value)) {
            $context->replace($this, $this->value);
            $this->value = null;
        }
    }

    public function setValue($value)
    {
        $this->value = $value;
    }

    public function getKey()
    {
        return $this->name;
    }
}