<?php

include_once "../../../../config.php";

use DesignPatterns\Creational\Singleton\Preferences\Preferences;

$pref = Preferences::getInstance();
$pref->setProperty("name", "Luiz");
unset($pref);
$pref2 = Preferences::getInstance();
print $pref2->getProperty("name") . PHP_EOL;