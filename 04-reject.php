<?php

require_once './Product.php';

function reject($items, $func) {
    $result = [];

    foreach ($items as $item) {
        if (!$func($item)) {
            $result[] = $item;
        }
    }

    return $result;
}

$inStockProducts = reject($products, function($product){
    return $product->isOutOfStock();
});

var_dump($inStockProducts);