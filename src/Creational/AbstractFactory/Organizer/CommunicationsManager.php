<?php

namespace DesignPatterns\Creational\AbstractFactory\Organizer;

abstract class CommunicationsManager
{
    abstract public function getHeaderText(): string;
    abstract public function getAppointmentEncoder(): AppointmentEncoder;
    abstract public function getThingsToDoEncoder(): ThingsToDoEncoder;
    abstract public function getContactEncoder(): ContactEncoder;
    abstract public function getFooterText(): string;
}