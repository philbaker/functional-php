<?php

class Product {
    private $name;
    private $price;

    function __construct($name, $price, $stock)
    {
        $this->name = $name;
        $this->price = $price;
        $this->stock = $stock;
    }

    function getName() {
        return $this->name;
    }

    function getPrice() {
        return $this->price;
    }

    function getStock() {
        return $this->stock;
    }
    
    function isOutOfStock() {
        return $this->stock == 0;
    }
}

$products = [
    $wrench = new Product('Wrench', 105, 5),
    $spanner = new Product('Spanner', 55, 0),
    $hammer = new Product('Hammer', 5, 0)
];
