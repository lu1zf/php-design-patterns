<?php
require_once __DIR__ . "/../../../vendor/autoload.php";

use DesignPatterns\Behavioral\Interpreter\Expression\LiteralExpression;
use DesignPatterns\Behavioral\Interpreter\Expression\Operator\BooleanOrExpression;
use DesignPatterns\Behavioral\Interpreter\Expression\Operator\EqualsExpression;
use DesignPatterns\Behavioral\Interpreter\Expression\VariableExpression;
use DesignPatterns\Behavioral\Interpreter\InterpreterContext;

$context = new InterpreterContext();
$input = new VariableExpression("input");
$statement = new BooleanOrExpression(
    new EqualsExpression($input, new LiteralExpression("four")),
    new EqualsExpression($input, new LiteralExpression("4"))
);

foreach (["four", "4", "52"] as $value){
    $input->setValue($value);
    print "$value:" . PHP_EOL;
    $statement->interpret($context);
    if($context->lookup($statement)){
        print "OK" . PHP_EOL . PHP_EOL;
    } else {
        print "NOT OK" . PHP_EOL . PHP_EOL;
    }
}