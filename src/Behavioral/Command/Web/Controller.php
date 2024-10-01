<?php

namespace DesignPatterns\Behavioral\Command\Web;

class Controller
{
    private $context;

    public function __construct()
    {
        $this->context = new CommandContext();
    }

    public function getContext(): CommandContext
    {
        return $this->context;
    }

    public function proccess()
    {
        $action = $this->context->get('action');
        $action = (is_null($action)) ? 'default' : $action;
        $cmd = CommandFactory::getCommand($action);

        if(!$cmd->execute($this->context)) {
            // handle failure
        } else {
            // success
            // dispatch view
        }
    }
}