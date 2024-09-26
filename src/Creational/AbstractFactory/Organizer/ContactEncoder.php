<?php

namespace DesignPatterns\Creational\AbstractFactory\Organizer;

abstract class ContactEncoder implements Encoder
{

    abstract public function encode(): string;
}