<?php

include_once "../../../../config.php";

use DesignPatterns\Creational\FactoryMethod\Appointment\BloggsCommunicationManager;
use DesignPatterns\Creational\FactoryMethod\Appointment\MegaCommunicationsManager;

$manager = new BloggsCommunicationManager();
print $manager->getHeaderText();
print $manager->getAppointmentEncoder()->encode();
print $manager->getFooterText();

$megaManager = new MegaCommunicationsManager();
print $megaManager->getHeaderText();
print $megaManager->getAppointmentEncoder()->encode();
print $megaManager->getFooterText();