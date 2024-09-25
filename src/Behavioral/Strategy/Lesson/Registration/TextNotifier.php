<?php

namespace DesignPatterns\Behavioral\Strategy\Lesson\Registration;

class TextNotifier extends Notifier
{

    public function inform(string $message)
    {
        print "Text Notification: $message" . PHP_EOL;
    }
}