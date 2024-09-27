<?php
namespace DesignPatterns\Behavioral\Strategy\Quiz;

class MatchMarker extends Marker
{

    public function mark(string $response): bool
    {
        return ($this->test == $response);
    }
}