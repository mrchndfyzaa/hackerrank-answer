<?php

function lonelyinteger($a) {
    // Write your code here
    $sizeOfA = count($a);
    $aWithValue = array_count_values($a);

    if($sizeOfA < 1 || $sizeOfA > 100){
        return 0;
    }

    foreach($a as $value){
        if($value < 0 || $value > 100){
            return 0;
        }
    }

    foreach($aWithValue as $key=>$value){
        if($value == 1){
            return $key;
        }
    }

}

$a = [1, 2, 3, 4, 3, 2, 1];
$result = lonelyinteger($a);

/* 

Permasalahan

Given an array of integers, where all elements but one 
occur twice, find the unique element.

Input ->
[1, 2, 3, 4, 3, 2, 1]

Output ->
4

Limit ->
1 <= n < 100, n is the size of arraySize
n must always be odd numbers
0 <= arr[i] <= 100, arr[i] is the value of array
0 <= i < n

*/