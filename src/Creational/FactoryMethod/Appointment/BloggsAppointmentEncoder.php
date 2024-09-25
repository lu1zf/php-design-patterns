<?php

namespace DesignPatterns\Creational\FactoryMethod\Appointment;

class BloggsAppointmentEncoder extends AppointmentEncoder
{

    public function encode(): string
    {
        return "Appointment data encoded in BloggsCal format" . PHP_EOL;
    }
}