<?php

namespace DesignPatterns\Structural\Facade\Products;

class ProductFacade
{
    private $products = [];

    public function __construct(string $file)
    {
        $this->file = $file;
        $this->compile();
    }

    private function compile(){
        $lines = getProductFileLines($this->file);
        foreach ($lines as $line) {
            $id = getIDFromLine($line);
            $name = getNameFromLine($line);
            $this->products[$id] = getProductObjectFromId($id, $name);
        }
    }

    public function getProducts(): array
    {
        return $this->products;
    }

    public function getProduct(string $id)
    {
        if(isset($this->products[$id])) {
            return $this->products[$id];
        }

        return null;
    }

}