<?php

function findTheMedian($arr){
    // Write your code here
    $sizeOfArr = count($arr);
    sort($arr);
    
    if($sizeOfArr < 1 || $sizeOfArr > 1000001){
        return 0;
    }
    
    foreach($arr as $value){
        if($value < -10000 || $value > 10000){
            return 0;
        }
    }
    
    return $arr[(($sizeOfArr-1)/2)];
}

$arr = [5, 3, 2, 1, 4];
findTheMedian($arr);

/* 

Permasalahan

The median of a list of numbers is essentially its middle
element after sorting. The same number of elements occur
after it as before. Given a list of numbers with an odd 
number of elements, find the median.

Input ->
[5, 3, 1, 2, 4]
di sorting, jadi => [1, 2, 3, 4, 5]

Output ->
3
median dari array => 7-1/2

Limit ->
1 <= n <= 10000001, n is the size of arraySize
n must always be odd numbers
-10000 <= arr[i] <= 10000, arr[i] is the value of array

*/