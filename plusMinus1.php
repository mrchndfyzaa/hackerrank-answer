<?php

function plusMinus($arr) {
    // Write your code here
    $sizeOfArray = count($arr);
    $positiveValue = 0;
    $negativeValue = 0;
    $zeroValue = 0;

    if(($sizeOfArray <= 0) || ($sizeOfArray > 100)){
        return 0;
    }

    for ($i=0; $i < $sizeOfArray; $i++) {
        if ($arr[$i] >= -100 && $arr[$i] <= 100) {
            # code...
            if ($arr[$i]>0) {
                # code...
                $positiveValue++;
            } elseif ($arr[$i]<0) {
                # code...
                $negativeValue++;
            } elseif ($arr[$i]==0) {
                # code...
                $zeroValue++;
            }
        } 
        else{
            return 0;
        }
    }

    echo number_format($positiveValue/$sizeOfArray, 6) . "\n";
    echo number_format($negativeValue/$sizeOfArray, 6) . "\n";
    echo number_format($zeroValue/$sizeOfArray, 6);
}

// $arr = [1, 1, 0, -1, -1];
$arr = [0, 100, 35, 0, 94, 40, 42, 87, 59, 0];
// $arr = [101];

plusMinus($arr);

/* 

Permasalahan

Given an array of integers, calculate the ratios of its 
elements that are positive, negative, and zero. 
Print the decimal value of each fraction on a new line 
with 6 places after the decimal.

Input ->
[1, 1, 0, -1, -1]
Total length -> 5
Total positive numbers -> 2
Totla negative numbers -> 2
Total zero -> 1 

Output ->
0.400000 ==> didapatkan dari 2/5 [positive]
0.400000 ==> didapatkan dari 2/5 [negative]
0.200000 ==> didapatkan dari 1/5 [zero]

Limit ->
0 < n < 100, n adalah array length
-100 <= arr[i] <= 100, arr[i] adalah value array ke-i

*/