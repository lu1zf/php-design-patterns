<?php

namespace DesignPatterns\Behavioral\Strategy\Authentication\AuthenticationStrategy;

class ApiKeyStrategy implements AuthenticationStrategy
{
    private $apiKey;

    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function authenticate(int $userId): string
    {
        return $this->apiKey;
    }
}