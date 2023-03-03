<?php   

function registerUser($email) {
    echo "$email registered";
}

//registerUser('Rodrigo');

function sum($n1 = 9, $n2 = 8) {
    return $n1 + $n2;
}

$number = sum ();
//echo $number;


/* $subtract = function($n1, $n2) {
    return $n1 - $n2;
};

echo $subtract(10, 2); */

$multiply = fn($n1, $n2) => $n1 * $n2;

echo $multiply(90, 10)
?>