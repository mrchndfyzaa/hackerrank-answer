<?php

function countingSort($arr) {
    // Write your code here
    $sizeOfArr = count($arr);
    $placeForTheArray = [];

    if($sizeOfArr < 100 || $sizeOfArr > 1000000){
        return 0;
    }

    // sort($arr);
    // foreach($arr as $value){
    //     echo $value . " ";
    // }
    // echo max($arr);

    for($i = 0; $i < 100; $i++){
        if($arr[$i] < 0 || $arr[$i] > 100){
            return 0;
        }
        array_push($placeForTheArray, 0);
    }

    $countArr = array_count_values($arr);
    // print_r($countArr);

    foreach($countArr as $key=>$value){
        $placeForTheArray[$key] = $value;
    }
    
    return $placeForTheArray;
    // foreach ($placeForTheArray as $value) {
    //     echo $value . " ";
    // }
    // print_r($placeForTheArray);
}

//$arr = [1, 1, 3, 2, 1];
$arr = [63,25,73,1,98,73,56,84,86,57,16,83,8,25,81,56,9,53,98,67,99,12,83,89,80,91,39,86,76,85,74,39,25,90,59,10,94,32,44,3,89,30,27,79,46,96,27,32,18,21,92,69,81,40,40,34,68,78,24,87,42,69,23,41,78,22,6,90,99,89,50,30,20,1,43,3,70,95,33,46,44,9,69,48,33,60,65,16,82,67,61,32,21,79,75,75,13,87,70,33];
$inputArray = "63 54 17 78 43 70 32 97 16 94 74 18 60 61 35 83 13 56 75 52 70 12 24 37 17 0 16 64 34 81 82 24 69 2 30 61 83 37 97 16 70 53 0 61 12 17 97 67 33 30 49 70 11 40 67 94 84 60 35 58 19 81 16 14 68 46 42 81 75 87 13 84 33 34 14 96 7 59 17 98 79 47 71 75 8 27 73 66 64 12 29 35 80 78 80 6 5 24 49 82";

$inputArray2 = explode(" ", $inputArray);
foreach ($inputArray2 as $value){
    $value = intval($value);
}
// print_r($inputArray2);

$result = countingSort($inputArray2);

/* 

Permasalahan

==Comparison Sorting==
Quicksort usually has a running time of n x log(n), 
but is there an algorithm that can sort even faster? 
In general, this is not possible. Most sorting algorithms 
are comparison sorts, i.e. they sort a list just by 
comparing the elements to one another. A comparison sort 
algorithm cannot beat n x log(n) (worst-case) running time,
since n x log(n)  represents the minimum number of 
comparisons needed to know where to place each element. 

==Alternative Sorting==
Another sorting method, the counting sort, 
does not require comparison. Instead, you create an 
integer array whose index range covers the entire range
of values in your array to sort. Each time a value occurs 
in the original array, you increment the counter at that 
index. At the end, run through your counting array, 
printing the value of each non-zero valued index that 
number of times.

Input ->
[63,25,73,1,98,73,56,84,86,57,16,83,8,25,81,56,9,53,98,67,99,12,83,89,80,91,39,86,76,85,74,39,25,90,59,10,94,32,44,3,89,30,27,79,46,96,27,32,18,21,92,69,81,40,40,34,68,78,24,87,42,69,23,41,78,22,6,90,99,89,50,30,20,1,43,3,70,95,33,46,44,9,69,48,33,60,65,16,82,67,61,32,21,79,75,75,13,87,70,33];

Output ->
0 3 1 1

Limit ->
100 <= n <= 1000000, n represents the array size
0 <= arr[i] < 100, arr[i] represents the value of array ke-i

*/