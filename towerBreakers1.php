<?php

function towerBreakers($n, $m) {
    // Write your code here
    // n adalah jumlah tower
    // m adalah besar tinggi tiap tower

    $player1 = [];
    $player2 = 0;
    $maxValue = 0;    

    //buat tiap tower
    while($m != 1){
        $maxValue = calculateFactor($m);
        // echo $maxValue. " ";

        $m = $m - $maxValue; // player satu main
            array_push($player1, "-".$maxValue);
        // array_push($player1, 1);
         //2
        //array_push($result); // dpt poin -> 1
        // echo $player1 . " ";   
    }

    // echo count($player1);
    if((count($player1)%2) == 0){ // player 1 kalah
        echo 2;
    } else{
        echo 1; //player 1 menang
    }

    print_r($player1);

}

function calculateFactor($m){
    //cari faktor dari tinggi tower
    $factor_array = [];
    for($i = 1; $i < $m; $i++){
        if($m%$i == 0){
            array_push($factor_array, $i);
        }
    }
    // print_r($factor_array);
    return max($factor_array);
}

$n = 2;
$m = 11;

$result = towerBreakers($n, $m);
// towerBreakers(1, 8);

/* 

Permasalahan

Two players are playing a game of Tower Breakers! Player 1 
always moves first, and both players always play optimally.
The rules of the game are as follows:

- Initially there are n towers.
- Each tower is of height m.
- The players move in alternating turns.
- In each turn, a player can choose a tower of height x 
and reduce its height to y, where 1 <= y < x and y 
evenly divides .
If the current player is unable to make a move, they lose 
the game.
Given the values of n and m, determine which player 
will win. If the first player wins, return 1. 
Otherwise, return 2.

Example:
n = 2
m = 6
There are 2 towers, each 6 units tall. Player 1 has a choice
of two moves:
- remove 3 pieces from a tower to leave 3 as 6%3 = 0
- remove 5 pieces to leave 1

Let Player 1 remove 3. Now the towers are 3 and 6 units tall.

Player 2 matches the move. Now the towers are both 3 
units tall.

Now Player 1 has only one move.

Player 1 removes 2 pieces leaving 1. Towers are 1 and 2 
units tall.
Player 2 matches again. Towers are both 1 unit tall.

Player 1 has no move and loses. Return 2.

Input ->
2
1 7
3 7

Output ->
1
1

Limit ->
1 <= t <= 100, t represents the number of test cases
1 <= n, m <= 1000000, n => number of towers, m => height
*/