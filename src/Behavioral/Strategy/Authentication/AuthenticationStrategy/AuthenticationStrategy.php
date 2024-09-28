<?php

namespace DesignPatterns\Behavioral\Strategy\Authentication\AuthenticationStrategy;

interface AuthenticationStrategy
{
    public function authenticate(int $userId): string;
}