<?php

namespace DesignPatterns\Behavioral\Observer\Login;

interface Observer
{
    public function update(Observable $observable);
}