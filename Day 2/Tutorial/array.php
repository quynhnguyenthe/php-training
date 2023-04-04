<?php
    // Declare an array
    $array1 = array(1,2,3);
    $array2 = [1,2,3];
    $array3 = [3,2,1];
//    var_dump($array1,$array1 === $array2, $array2 === $array3);
//    echo $array1[0]; // Return first element of array1

    // Index array
    $indexArray = ['a' => 1, 5 => 'Hello', 'Duy' => true];
//    echo $indexArray['b']; // Print 'Hello'

    // Multidimensional array
    $items = ['fruit' => ['banana', 'grape', 'orange'], 'car' => ['Toyota', 'Ford', 'Mercedes']];
//    var_dump($items['fruit'][1]); // Return second fruit

    // Add items to array
    $items['fruit'][] = 'mango';
    $items['number'] = [0,1,2,3];

    // Count - get the number of elements of an array
    $array = [1, 'a', 2];
    $count = count($array); // = 3

    // implode/explode
    $string = '1,2,3,4,5';
    $array = explode(',', $string); // $array = [1,2,3,4,5]
    $string = implode('-', $array); // $string = '1-2-3-4-5'

    // in_array
    $element1 = 3;
    $element2 = 4;
    $array = [1,2,4,6];
//    var_dump(in_array($element1, $array)); // bool(false)
//    var_dump(in_array($element2, $array)); // bool(true)

    $element = '5';
    $indexArray = ['a' => 4, 'c' => 5, 'e' => 10];
 //   var_dump(in_array($element, $indexArray)); // bool(true)
//    var_dump(in_array('c', $indexArray)); // bool(false) : Cannot search for index

    // array_push/array_pop/array_shift/array_unshift
    $array = [1,2,3,4,5];
    $res = array_push($array, 8,9); // $array = [1,2,3,4,5,8,9]
    $array[4] = 6; // $array = [1,2,3,4,6,8,9]
    array_pop($array); // $array = [1,2,3,4,6,8]
    $res2 = array_shift($array); // $array = [2,3,4,6,8]
    $array[] = 10; // $array = [2,3,4,6,8,10]
    $res3 = array_unshift($array, 0); // $array = [0,2,3,4,6,8,10];
//    var_dump($array);


