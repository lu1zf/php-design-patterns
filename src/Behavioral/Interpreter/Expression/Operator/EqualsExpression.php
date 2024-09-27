<?php

namespace DesignPatterns\Behavioral\Interpreter\Expression\Operator;

use DesignPatterns\Behavioral\Interpreter\Expression\Operator\OperatorExpression;
use DesignPatterns\Behavioral\Interpreter\InterpreterContext;

class EqualsExpression extends OperatorExpression
{

    protected function doInterpret(
        InterpreterContext $context,
        $resultLeft,
        $resultRight
    ) {
        $context->replace($this, $resultLeft == $resultRight);
    }
}