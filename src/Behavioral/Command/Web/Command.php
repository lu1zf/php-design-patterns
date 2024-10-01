<?php

namespace DesignPatterns\Behavioral\Command\Web;

abstract class Command
{
    abstract public function execute(CommandContext $context): bool;
}