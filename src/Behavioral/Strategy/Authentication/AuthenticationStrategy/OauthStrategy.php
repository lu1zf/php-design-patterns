<?php
namespace DesignPatterns\Behavioral\Strategy\Authentication\AuthenticationStrategy;

use DateInterval;
use DateTime;
use DesignPatterns\Behavioral\Strategy\Authentication\Repository\TokenRepository;

class OauthStrategy implements AuthenticationStrategy
{
    private $clientId;
    private $clientSecret;
    private $tokenEndpoint;
    private $tokenRepository;

    public function __construct($clientId, $clientSecret, $tokenEndpoint, TokenRepository $tokenRepository)
    {
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
        $this->tokenEndpoint = $tokenEndpoint;
        $this->tokenRepository = $tokenRepository;
    }

    public function authenticate(int $userId): string
    {
        print "authenticating..." . PHP_EOL;
        $token = $this->tokenRepository->findTokenByUserId($userId);
        if($token){
            return $token;
        }

        return $this->generateNewToken($userId);
    }


    private function generateNewToken($userId): string
    {
        // token request logic using cURL
        print "generating new token...";
        $response = [
            "access_token" => "newToken" . md5(date("Y-m-d") . $userId),
            "expires_in" => 3600,
            "refresh_token" => "refreshToken" . md5(date("Y-m-d") . $userId),
        ];

        $newToken = $response["access_token"];
        $refreshToken = $response["refresh_token"];
        $expiresAt = new DateTime();
        $expiresAt->add(new DateInterval("PT" . $response["expires_in"] . "S"));

        $this->tokenRepository->update($userId, $newToken, $refreshToken, $expiresAt);

        return $newToken;
    }
}