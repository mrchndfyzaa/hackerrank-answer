<?php

function twoSum($nums, $target){
    $result = [0,0];
    $storedArray = [];
    $minusResult = 0;

    foreach($nums as $key=>$value){
        $minusResult = $target - $value;
        if(in_array($minusResult, $storedArray)){
            //jika ada
            $result[0] = array_search($minusResult, $storedArray);
            $result[1] = $key;
            print_r($result);
        }
        array_push($storedArray, $value);
        // echo $value;
    }
    // print_r($storedArray);
    // return $result;
}

// $nums = [2, 7, 11, 15];
// $target = 9;
$nums = [2, 6, 5, 8, 11];
$target = 14;
twoSum($nums, $target);