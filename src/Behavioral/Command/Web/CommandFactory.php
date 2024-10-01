<?php

namespace DesignPatterns\Behavioral\Command\Web;

class CommandFactory
{
    private static $dir = 'commands';

    public static function getCommand(string $action = "Default"): Command
    {
        if(preg_match("/\W/", $action)) {
            throw new \Exception("illegal characters in action");
        }

        $class = __NAMESPACE__ . "\\Commands\\" . ucfirst(strtolower($action)) . "Command";
        if(!class_exists($class)) {
            throw new \Exception("action '$action' not found");
        }

        return new $class();
    }
}