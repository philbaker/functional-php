<?php

require_once './Product.php';

// Filter is used to filter out any elements of an array that you don't want
// It does not change or transform any items in an array - just removes the ones you don't want
function filter($items, $func) {
    $result = [];

    foreach ($items as $item) {
        if ($func($item)) {
            $result[] = $item;
        }
    }

    return $result;
}

$outOfStockProducts = filter($products, function($product) {
    return $product->isOutOfStock();
});

$expensiveProducts = filter($products, function($product) {
    return $product->getPrice() > 100;
});

var_dump($outOfStockProducts);
var_dump($expensiveProducts);