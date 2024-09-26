<?php
include_once "../../../../config.php";
use DesignPatterns\Creational\AbstractFactory\Organizer\Bloggs\BloggsCommunicationsManager;

$bloggsManager = new BloggsCommunicationsManager();

print "bloggs header: {$bloggsManager->getHeaderText()}";
print $bloggsManager->getAppointmentEncoder()->encode();
print $bloggsManager->getThingsToDoEncoder()->encode();
print $bloggsManager->getContactEncoder()->encode();
print "bloggs footer: {$bloggsManager->getFooterText()}";
