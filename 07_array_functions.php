<?php  
    $fruits = ['apple', 'orange', 'pear'];

    //Get lenght
    //echo count($fruits);

    //Search array 
    //var_dump(in_array('apples', $fruits))

    //Add to aray
    $fruits[] = 'grape';
    //add last item
    array_push($fruits, 'blueberry', 'strawberry', 'pineapple', 'grape');
    //add firts item
    array_unshift($fruits, 'watermelon');

    //remove from array
    array_pop($fruits);
    array_shift($fruits);
    //unset($fruits[1]);

    //$chunked_array = array_chunk($fruits, 2);

    //print_r($chunked_array);

    //print_r($fruits);

    $arr1 = [1,2,3];
    $arr2 = [4,5,6];
    $arr3 = array_merge($arr1, $arr2);
    $arr4 = [...$arr1, ...$arr2];

    //print_r($arr4);

    $a = ['green', 'red', 'yellow'];
    $b = ['avocado', 'apple', 'banana'];

    $c = array_combine($a, $b);

    //print_r($c);

    $keys = array_keys($c);
    //print_r($keys);

    $flipped = array_flip($c);
    //print_r($flipped);

    $numbers = range(1, 30);

    //print_r($numbers);

    $newNumbers = array_map(function($number) {
        return "Number $number" ;
    }, $numbers);

    //print_r($newNumbers);

    $lessThan10 = array_filter($numbers, fn($number) => 
    $number <= 10);

    //print_r($lessThan10);

    $sum = array_reduce($numbers, fn($carry, $number) => 
    $carry + $number);

    var_dump($sum);
    ?>