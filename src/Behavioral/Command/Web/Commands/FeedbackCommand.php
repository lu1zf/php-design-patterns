<?php

namespace DesignPatterns\Behavioral\Command\Web\Commands;

use DesignPatterns\Behavioral\Command\Web\Command;
use DesignPatterns\Behavioral\Command\Web\CommandContext;
use DesignPatterns\Behavioral\Command\Web\Registry;

class FeedbackCommand extends Command
{

    public function execute(CommandContext $context): bool
    {
        $msgSytem = Registry::getMessageSystem();
        $email = $context->get('email');
        $msg = $context->get('msg');
        $topic = $context->get('topic');
        $result = $msgSytem->send($email, $msg, $topic);
        if (!$result) {
            $context->setError($msgSytem->getError());
            return false;
        }

        return true;
    }
}