<?php

// Map is used to transform each item in an array into something else.

// There is a 'mapping' between each item in the old array and the new array

// Map is a great tool for extracting a field from an array of objects (e.g. customer email address)

function map($items, $func) {
    $results = [];

    foreach ($items as $item) {
        $results[] = $func($item);
    }
    
    return $results;
}

$customers = (object) [
    (object) [
        'name' => 'Frank',
        'email' => 'frank@example.com'
    ],
    (object) [
        'name' => 'Georgia',
        'email' => 'georgia@example.com'
    ],
    (object) [
        'name' => 'Alexa',
        'email' => 'alexa@example.com'
    ]
];


$customerEmails = map($customers, function ($customer) {
    return $customer->email;
});

var_dump($customerEmails);
