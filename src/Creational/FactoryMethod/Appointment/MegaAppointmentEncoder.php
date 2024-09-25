<?php

namespace DesignPatterns\Creational\FactoryMethod\Appointment;

class MegaAppointmentEncoder extends AppointmentEncoder
{

    public function encode(): string
    {
        return "Appointment data encoded in MegaCal format" . PHP_EOL;
    }
}