<?php

namespace DesignPatterns\Creational\FactoryMethod\Appointment;

abstract class AppointmentEncoder
{
    abstract public function encode(): string;
}