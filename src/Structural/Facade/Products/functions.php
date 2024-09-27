<?php

use DesignPatterns\Structural\Facade\Products\Product;

function getProductFileLines($file)
{
    return file($file);
}
function getProductObjectFromId($id, $productName): Product
{
    // some kind of database lookup
    return new Product($id, $productName);
}
function getNameFromLine($line)
{
    if (preg_match("/.*-(.*)\s\d+/", $line, $array)) {
        return str_replace('_', ' ', $array[1]);
    }
    return '';
}
function getIDFromLine($line)
{
    if (preg_match("/^(\d{1,3})-/", $line, $array)) {
        return $array[1];
    }
    return -1;
}