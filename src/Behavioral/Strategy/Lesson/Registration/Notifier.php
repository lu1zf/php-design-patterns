<?php

namespace DesignPatterns\Behavioral\Strategy\Lesson\Registration;

abstract class Notifier
{
    public static function getNotifier(): Notifier
    {
        if (rand(1, 2) === 1){
            return new MailNotifier();
        }

        return new TextNotifier();
    }

    abstract public function inform(string $message);
}