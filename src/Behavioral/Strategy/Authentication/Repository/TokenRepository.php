<?php

namespace DesignPatterns\Behavioral\Strategy\Authentication\Repository;

use DateTime;

interface TokenRepository
{
    public function findTokenByUserId(int $userId);
    public function update(int $userId, string $token, $refreshToken, DateTime $expiresAt);
}