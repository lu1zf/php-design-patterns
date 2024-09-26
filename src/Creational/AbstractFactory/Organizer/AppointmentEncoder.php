<?php

namespace DesignPatterns\Creational\AbstractFactory\Organizer;

abstract class AppointmentEncoder implements Encoder
{
    abstract public function encode(): string;
}