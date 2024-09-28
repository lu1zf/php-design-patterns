<?php
namespace DesignPatterns\Behavioral\Observer\Login;

class GeneralLogger extends LoginObserver
{

    public function doUpdate(Login $login)
    {
        $status = $login->getStatus();
        print __CLASS__ . ": add login data to log" . PHP_EOL;
    }
}