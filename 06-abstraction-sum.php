<?php

require_once('./Product.php');
require_once('./05-reduce.php');

// Readability can be improved by creating a more abstract function
function sum($items, $callback) {
    return reduce($items, function($total, $item) use ($callback) {
        return $total + $callback($item);
    }, 0);
}

$totalPrice = sum($products, function($item) {
    return $item->getPrice();
});