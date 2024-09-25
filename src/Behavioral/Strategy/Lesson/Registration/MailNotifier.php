<?php

namespace DesignPatterns\Behavioral\Strategy\Lesson\Registration;

class MailNotifier extends Notifier
{

    public function inform(string $message)
    {
        print "Mail notification: $message" . PHP_EOL;
    }
}