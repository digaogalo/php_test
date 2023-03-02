<?php
// Simple array   
$numbers = [1,44,55,22];
$fruits = array('pineaple', 'strawberry', 'pear');

var_dump($numbers);
echo $fruits[1];

$colors = [
    1 => 'red',
    4 => 'blue',
    6 => 'green'
];

//echo $colors[6]

$hex = [
    'red' => '#f00',
    'blue' => '#00f',
    'green' => '#0f0',
];

echo $hex['blue'];

$person = [
    'first_name' => 'Rodrigo',
    'last_name' => 'Carvalho',
    'email' => 'digo@gmail.com'
];

echo $person['first_name'];

$people = [
    [
        'first_name' => 'Rodrigo',
        'last_name' => 'Carvalho',
        'email' => 'digo@gmail.com'
    ],
    [
        'first_name' => 'Marcos',
        'last_name' => 'Gonzalez',
        'email' => 'm21gonz@gmail.com'
    ],
    [
        'first_name' => 'Mário',
        'last_name' => 'Batista',
        'email' => 'mariobatista@email.com'
    ]
];

echo $people[0]['last_name'];
var_dump(json_encode($people))

?>