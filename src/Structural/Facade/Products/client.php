<?php
require_once "../../../../vendor/autoload.php";
require_once __DIR__ . "/functions.php";

use DesignPatterns\Structural\Facade\Products\ProductFacade;


$facade = new ProductFacade(__DIR__ . "/products.txt");
$object = $facade->getProduct(234);
print_r($object);