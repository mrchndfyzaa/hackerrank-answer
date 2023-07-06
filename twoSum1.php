<?php

function twoSum($nums, $target){
    $result = [0,0];
    $storedArray = [];
    $minusResult = 0;
    $sizeOfNums = count($nums);

    if($sizeOfNums < 2 || $sizeOfNums > 10000){
        return 0;
    }

    if($target < -1000000000 || $target > 1000000000){
        return 0;
    }

    foreach($nums as $key=>$value){
        if($value < -1000000000 || $value > 1000000000){
            return 0;
        }
        $minusResult = $target - $value;
        if(in_array($minusResult, $storedArray)){
            //jika ada
            $result[0] = array_search($minusResult, $storedArray);
            $result[1] = $key;
            return $result;
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

/*

Permasalahan
Given an array of integers nums and an integer target, 
return indices of the two numbers such that they add up 
to target.

You may assume that each input would have exactly one 
solution, and you may not use the same element twice.

You can return the answer in any order.

Input: nums = [2,7,11,15], target = 9
Output: [0,1]
Explanation: Because nums[0] + nums[1] == 9, we return [0, 1].

Limit:
2 <= nums.length <= 10000
-1000000000 <= nums[i] <= 1000000000
-1000000000 <= target <= 1000000000

*/