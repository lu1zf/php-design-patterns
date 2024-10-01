<?php

namespace DesignPatterns\Behavioral\Command\Web\Commands;

use DesignPatterns\Behavioral\Command\Web\Command;
use DesignPatterns\Behavioral\Command\Web\CommandContext;
use DesignPatterns\Behavioral\Command\Web\Registry;

class LoginCommand extends Command
{

    public function execute(CommandContext $context): bool
    {
        $manager = Registry::getAcessManager();
        $user = $context->get('username');
        $password = $context->get('password');
        $userObj = $manager->login($user, $password);

        if(is_null($userObj)) {
            $context->setError($manager->getError());
        }

        $context->addParam('user', $userObj);
        return true;
    }
}