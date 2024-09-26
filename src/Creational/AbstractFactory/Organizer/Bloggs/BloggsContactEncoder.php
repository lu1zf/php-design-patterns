<?php

namespace DesignPatterns\Creational\AbstractFactory\Organizer\Bloggs;

use DesignPatterns\Creational\AbstractFactory\Organizer\ContactEncoder;

class BloggsContactEncoder extends ContactEncoder
{

    public function encode(): string
    {
        return "Bloggs Contact Encoded" . PHP_EOL;
    }
}