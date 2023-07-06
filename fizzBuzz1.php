<?php

/*
 * Cetak angka baris demi baris dari 1 hingga 100. Namun, untuk angka yang merupakan kelipatan tiga, cetak "Fizz",
 * dan untuk angka yang merupakan kelipatan lima, cetak "Buzz".
 * Apabila angka merupakan kelipatan tiga dan lima, cetak "FizzBuzz".
 * */

function fizzBuzz($n) {
    // Write your code here

    if ($n > 0 && $n < 200000){
        for ($i = 0; $i < $n; $i++){
            $value = $i+1;
            if ($value % 3 == 0 && $value % 5 == 0){
                $value = "FizzBuzz";
            } else if ($value % 5 == 0){
                $value = "Buzz";
            } else if ($value % 3 == 0){
                $value = "Fizz";
            }
            echo $value . "\n";
        }
    }
}

echo fizzBuzz(15);
// Output :
/*
1
2
Fizz
4
Buzz
Fizz
7
8
Fizz
Buzz
11
Fizz
13
14
FizzBuzz
 * */
