<?php

use DesignPatterns\Behavioral\Strategy\Authentication\ApiConsumer;
use DesignPatterns\Behavioral\Strategy\Authentication\AuthenticationStrategy\ApiKeyStrategy;
use DesignPatterns\Behavioral\Strategy\Authentication\AuthenticationStrategy\OauthStrategy;
use DesignPatterns\Behavioral\Strategy\Authentication\Repository\InMemoryTokenRepository;

include_once __DIR__ . '/../../../../vendor/autoload.php';

$authStrategy = new OauthStrategy(
    "test@test.com",
    "test",
    "localhost/token/new",
    new InMemoryTokenRepository()
);


$apiConsumer = new ApiConsumer($authStrategy);
$apiConsumer->makeRequest(1, "someurl.test.local");

print PHP_EOL . "===================" . PHP_EOL;

$apiKeyStrategy = new ApiKeyStrategy("123456789");
$apiConsumerWithKey = new ApiConsumer($apiKeyStrategy);
$apiConsumerWithKey->makeRequest(1, "otherurl.test.local");
