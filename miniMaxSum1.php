<?php

function miniMaxSum($arr) {
    // Write your code here
    $sizeOfArray = count($arr);
    sort($arr);

    $minPlusNumber = 0;
    $maxPlusNumber = 0;

    if ($sizeOfArray != 5) {
        # code...
        return 0;
    }

    for ($i=0; $i < $sizeOfArray; $i++) { 
        # code...
        if($arr[$i] < 1 || $arr[$i] > 1000000000){
            return 0;
        }
    }
    
    for ($i=0; $i < $sizeOfArray-1; $i++) { 
        # code...
        $minPlusNumber = $minPlusNumber + $arr[$i];
    }    

    for ($i=1; $i < $sizeOfArray; $i++) { 
        # code...
        if($arr[$i] < 1 || $arr[$i] > 1000000000){
            return 0;
        }
        $maxPlusNumber = $maxPlusNumber + $arr[$i];
    }

    echo $minPlusNumber . " " . $maxPlusNumber;
}

$arr = [1, 3, 5, 7, 9];
miniMaxSum($arr);

/* 

Permasalahan

Given five positive integers, find the minimum and maximum values that can 
be calculated by summing exactly four of the five integers. 
Then print the respective minimum and maximum values as a single 
line of two space-separated long integers.

Input ->
[1, 3, 5, 7, 9]
Total length -> 5 (always be five)
Total min. plus numbers -> 1 + 3 + 5 + 7 = 16
Total max. plus numbers -> 3 + 5 + 7 + 9 = 24

Output ->
18 24

Limit ->
1 <= arr[i] <= 1.000.000.000, arr[i] adalah value array ke-i

*/