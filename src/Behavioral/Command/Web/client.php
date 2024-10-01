<?php

use DesignPatterns\Behavioral\Command\Web\Controller;

$controller = new Controller();
$context = $controller->getContext();

$context->addParam('action', 'login');
$context->addParam('username', 'bob');
$context->addParam('password', 'tiddles');

$controller->proccess();

print $context->getError();
