<?php

namespace DesignPatterns\Creational\AbstractFactory\Organizer;

abstract class ThingsToDoEncoder implements Encoder
{

    abstract public function encode(): string;
}