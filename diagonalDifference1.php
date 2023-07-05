<?php

function diagonalDifference($arr) {
    // Write your code here
    $sizeOfArr = count($arr);
    $countLeft = 0;
    $countRight = 0;
    
    /* 
    Matris array :
    ij ij ij
   [00] 01 [02]
    10 [11] 12
   [20] 21 [22]
    
    Yang kita mau adalah :
    untuk silang kiri -> i++, j++, karena 00, 11, 22
    untuk silang kanan -> i++, j--, karena 02, 11, 20
    */

    //looping semua
    for($m = 0; $m < $sizeOfArr; $m++){ //untuk i
        for($n = 0; $n < $sizeOfArr; $n++){ //untuk j
            if($arr[$m][$n] < -100 || $arr[$m][$n] > 100){
                return 0;
            }
        }
    }

    //looping untuk kiri
    for($i = 0; $i < $sizeOfArr; $i++){ //untuk i
        for($j = $i; $j <= $i; $j++){ //untuk j
            $countLeft += $arr[$i][$j];
        }
    }

    //looping untuk kanan, agak big brain
    for($k = 0; $k <= 0; $k++){ // buat nahan biar cuma looping sekali
        for($l = ($sizeOfArr-1); $l >= 0; $l--){ // dibuat aja looping backwards
            $countRight += $arr[$k][$l];
            $k++; // dikasih biar pas nilai l nya turun, nilai k nya naik, biar jadi :
            // kl kl kl
            // 02 11 20
        }
    }

    $result = abs($countLeft - $countRight);
    return $result;
}

$arr = [[101, 2, 4], [4, 5, 6], [10, 8, -12]];
$result = diagonalDifference($arr);

/* 

Permasalahan

Given a square matrix, calculate the absolute difference 
between the sums of its diagonals.

Input ->
11 2  4
4  5  6
10 8 -12
=> Nyilang, jadi 11 + 5 + (-12) = 4
sama 4 + 5 + 10 =  19

Output ->
15
=> |4-19|

Limit ->
-100 <= arr[i][j] <= 100, 
arr[i][j] is the value of array ke i ke j

*/