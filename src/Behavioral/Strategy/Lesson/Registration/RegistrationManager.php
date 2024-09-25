<?php

namespace DesignPatterns\Behavioral\Strategy\Lesson\Registration;

use DesignPatterns\Behavioral\Strategy\Lesson\Lesson;

class RegistrationManager
{
    public function register(Lesson $lesson)
    {
        // do something with the lesson

        // notifying
        $notifier = Notifier::getNotifier();
        $notifier->inform("new lesson: cost ({$lesson->cost()})");
    }
}