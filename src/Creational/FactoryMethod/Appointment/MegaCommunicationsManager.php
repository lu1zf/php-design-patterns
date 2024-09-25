<?php

namespace DesignPatterns\Creational\FactoryMethod\Appointment;

class MegaCommunicationsManager extends CommunicationsManager
{

    public function getAppointmentEncoder(): AppointmentEncoder
    {
        return new MegaAppointmentEncoder();
    }

    public function getHeaderText(): string
    {
        return "Mega Header" . PHP_EOL;
    }

    public function getFooterText(): string
    {
        return "Mega Footer" . PHP_EOL;
    }
}