<?php
namespace DesignPatterns\Behavioral\Strategy\Quiz;

class MarkLogicMarker extends Marker
{
    private $engine;

    public function __construct(string $test)
    {
        parent::__construct($test);
        $this->engine = new MarkParse($test);
    }

    public function mark(string $response): bool
    {
        $this->engine->evaluate($response);
    }
}