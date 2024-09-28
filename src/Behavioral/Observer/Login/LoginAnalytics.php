<?php
namespace DesignPatterns\Behavioral\Observer\Login;

class LoginAnalytics implements Observer
{

    public function update(Observable $observable)
    {
        $status = $observable->getStatus();
        print __CLASS__ . ': doing something with status info' . PHP_EOL;
    }
}