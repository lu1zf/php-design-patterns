<?php

namespace DesignPatterns\Creational\AbstractFactory\Organizer\Bloggs;

use DesignPatterns\Creational\AbstractFactory\Organizer\AppointmentEncoder;

class BloggsAppointmentEncoder extends AppointmentEncoder
{
    public function encode(): string
    {
        return "Bloggs Appointment Encoded" . PHP_EOL;
    }
}