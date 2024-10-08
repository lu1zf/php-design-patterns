<?php

namespace DesignPatterns\Behavioral\Observer\Login;

interface Observable
{
    public function attach(Observer $observer);

    public function detach(Observer $observer);
    public function notify();
}