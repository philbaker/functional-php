<?php

// Each doesn't return anythnig so it should be used to perform actions e.g. delete products, shipping orders, sending emails etc

function _each($items, $func) {
    foreach ($items as $item) {
        $func($item);
    }
}

$names = [
    'Barry',
    'Jo',
    'Anne',
    'Isabella'
];

$upperNames = _each($names, function ($value) {
    var_dump(strtoupper($value));
});
