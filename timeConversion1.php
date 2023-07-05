<?php

function timeConversion($s) {
    // Write your code here
    $arrOfS = preg_split('/:/', $s);

    $hours = $arrOfS[0];
    $minutes = $arrOfS[1];
    $secondsTemp = $arrOfS[2]; // masih ada PM nya
    $seconds = $secondsTemp[0] . $secondsTemp[1];
    $formats = $secondsTemp[2] . $secondsTemp[3];

    if($formats == 'AM'){
        if($hours == '12'){
            $hours = '00';
        }
        
    } else if($formats == 'PM'){
        if($hours != '12'){
            $hours = strval(intval($hours+12));
        }
    }

    return $hours . ":" . $minutes . ":" . $seconds;
}

$s = "04:05:45AM";
$result = timeConversion($s);

/* 

Permasalahan

Given a time in -hour AM/PM format, convert it to military (24-hour) time.

Note: - 12:00:00AM on a 12-hour clock is 00:00:00 on a 24-hour clock.
- 12:00:00PM on a 12-hour clock is 12:00:00 on a 24-hour clock.

Input ->
07:05:45PM
that's on a AM/PM format

Output ->
19:05:45
that's on a 24-hour time

Limit ->
None

*/