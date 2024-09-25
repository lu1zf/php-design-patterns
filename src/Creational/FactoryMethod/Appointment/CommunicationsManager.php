<?php

namespace DesignPatterns\Creational\FactoryMethod\Appointment;

abstract class CommunicationsManager
{
    abstract public function getAppointmentEncoder(): AppointmentEncoder;
    abstract public function getHeaderText(): string;
    abstract public function getFooterText(): string;
}