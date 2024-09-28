<?php

namespace DesignPatterns\Behavioral\Strategy\Authentication\Repository;

use DateTime;

class InMemoryTokenRepository implements TokenRepository
{
    private $tokens = [];

    public function __construct()
    {
        $expiresAt = (new DateTime())->modify('+1 hour');
        $this->tokens = [
            1 => ["token" => "token_1", "expiresAt" => $expiresAt, "refresh_token" => "refresh_token_1"],
        ];
    }

    public function findTokenByUserId(int $userId)
    {
        print "searching for token for user {$userId}" . PHP_EOL;
        if(isset($this->tokens[$userId])){
            $tokenFound = $this->tokens[$userId]["token"];
            print "token found: {$tokenFound}" . PHP_EOL;
            return $tokenFound;
        }

        print "token not found" . PHP_EOL;
        return null;
    }

    public function update(int $userId, string $token, $refreshToken, DateTime $expiresAt)
    {
        print "updating token for user {$userId}" . PHP_EOL;
        $this->tokens[$userId] = ["token" => $token, "refresh_token" => $refreshToken, "expires_at" => $expiresAt];
    }
}