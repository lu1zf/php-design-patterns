<?php

namespace DesignPatterns\Behavioral\Interpreter\Expression\Operator;

use DesignPatterns\Behavioral\Interpreter\Expression\Expression;
use DesignPatterns\Behavioral\Interpreter\InterpreterContext;

abstract class OperatorExpression extends Expression
{
    protected $leftOperator;
    protected $rightOperator;

    public function __construct(Expression $leftOperator, Expression $rightOperator)
    {
        $this->leftOperator = $leftOperator;
        $this->rightOperator = $rightOperator;
    }

    public function interpret(InterpreterContext $context)
    {
        $this->leftOperator->interpret($context);
        $this->rightOperator->interpret($context);
        $resultLeft = $context->lookup($this->leftOperator);
        $resultRight = $context->lookup($this->rightOperator);
        $this->doInterpret($context, $resultLeft, $resultRight);
    }

    abstract protected function doInterpret(
        InterpreterContext $context,
        $resultLeft,
        $resultRight
    );
}