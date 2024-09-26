<?php

namespace DesignPatterns\Creational\AbstractFactory\Organizer\Bloggs;

use DesignPatterns\Creational\AbstractFactory\Organizer\ThingsToDoEncoder;

class BloggsThingsToDoEncoder extends ThingsToDoEncoder
{

    public function encode(): string
    {
        return "Bloggs Things to Do Encoded" . PHP_EOL;
    }
}