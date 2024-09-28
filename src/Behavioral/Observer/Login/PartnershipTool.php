<?php

namespace DesignPatterns\Behavioral\Observer\Login;

use DesignPatterns\Behavioral\Observer\Login\LoginObserver;

class PartnershipTool extends LoginObserver
{

    public function doUpdate(Login $login)
    {
        $status = $login->getStatus();
        // check $ip address
        // set cookies if it matches a list
        print __CLASS__ . ": set cookie if it matches a list" . PHP_EOL;
    }
}