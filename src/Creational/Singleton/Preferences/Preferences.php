<?php

namespace DesignPatterns\Creational\Singleton\Preferences;

class Preferences
{
    private $props = [];
    private static $instance;
    private function __construct(){
    }

    public static function getInstance(): Preferences
    {
        if(empty(self::$instance)){
            self::$instance = new Preferences();
        }

        return self::$instance;
    }

    public function setProperty(string $key, string $value)
    {
        $this->props[$key] = $value;
    }

    public function getProperty(string $key){
        return $this->props[$key];
    }
}