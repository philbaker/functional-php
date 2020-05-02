<?php

require_once('./Product.php');

function reduce($items, $callback, $initial) {
    $accumulator = $initial;

    foreach ($items as $item) {
        $accumulator = $callback($accumulator, $item);
    }

    return $accumulator;
}

$totalPrice = reduce($products, function($totalPrice, $item) {
    return $totalPrice + ($item->getPrice() * $item->getStock());
}, 0);

var_dump($totalPrice);