<?php

namespace DesignPatterns\Behavioral\Strategy\Authentication;

use DesignPatterns\Behavioral\Strategy\Authentication\AuthenticationStrategy\AuthenticationStrategy;

class ApiConsumer
{
    private $authStrategy;

    public function __construct(AuthenticationStrategy $authStrategy)
    {
        $this->authStrategy = $authStrategy;
    }

    public function makeRequest($userId, $apiUrl)
    {
        $token = $this->authStrategy->authenticate($userId);
        $headers = [
            "Authorization: Bearer {$token}"
        ];

        $strategy = get_class($this->authStrategy);

        // make request with the token
        $response = [
            "message" => "successful request with token {$token} using strategy {$strategy} in url {$apiUrl}",
        ];

        print "response: {$response['message']}" . PHP_EOL;

        return $response;
    }
}