<?php

namespace DesignPatterns\Behavioral\Command\Web;

class CommandContext
{
    private $params = [];
    private $error;

    public function __construct(){
        $this->params = $_REQUEST;
    }

    public function addParam(string $key, $value)
    {
        $this->params[$key] = $value;
    }

    public function get(string $key)
    {
        if(isset($this->params[$key])){
            return $this->params[$key];
        }
        return null;
    }

    public function setError($error)
    {
        $this->error = $error;
    }

    public function getError()
    {
        return $this->error;
    }
}