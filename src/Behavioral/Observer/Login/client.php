<?php

use DesignPatterns\Behavioral\Observer\Login\GeneralLogger;
use DesignPatterns\Behavioral\Observer\Login\Login;
use DesignPatterns\Behavioral\Observer\Login\PartnershipTool;
use DesignPatterns\Behavioral\Observer\Login\SecurityMonitor;

include_once "../../../../vendor/autoload.php";

$login = new Login();
new SecurityMonitor($login);
new GeneralLogger($login);
new PartnershipTool($login);

$loggedIn = $login->handleLogin("test@test.com", "test", "127.0.0.1");
print $loggedIn;