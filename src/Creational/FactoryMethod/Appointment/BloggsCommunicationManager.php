<?php

namespace DesignPatterns\Creational\FactoryMethod\Appointment;

class BloggsCommunicationManager extends CommunicationsManager
{

    public function getAppointmentEncoder(): AppointmentEncoder
    {
        return new BloggsAppointmentEncoder();
    }

    public function getHeaderText(): string
    {
        return "BloggsCal Header" . PHP_EOL;
    }

    public function getFooterText(): string
    {
        return "BloggsCal Footer" . PHP_EOL;
    }
}