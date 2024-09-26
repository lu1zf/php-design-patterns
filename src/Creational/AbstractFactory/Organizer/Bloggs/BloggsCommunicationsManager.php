<?php

namespace DesignPatterns\Creational\AbstractFactory\Organizer\Bloggs;

use DesignPatterns\Creational\AbstractFactory\Organizer\AppointmentEncoder;
use DesignPatterns\Creational\AbstractFactory\Organizer\CommunicationsManager;
use DesignPatterns\Creational\AbstractFactory\Organizer\ContactEncoder;
use DesignPatterns\Creational\AbstractFactory\Organizer\ThingsToDoEncoder;

class BloggsCommunicationsManager extends CommunicationsManager
{

    public function getHeaderText(): string
    {
        return "BloggsCal header" . PHP_EOL;
    }

    public function getAppointmentEncoder(): AppointmentEncoder
    {
        return new BloggsAppointmentEncoder();
    }

    public function getThingsToDoEncoder(): ThingsToDoEncoder
    {
        return new BloggsThingsToDoEncoder();
    }

    public function getContactEncoder(): ContactEncoder
    {
        return new BloggsContactEncoder();
    }

    public function getFooterText(): string
    {
        return "BloggsCal footer" . PHP_EOL;
    }
}