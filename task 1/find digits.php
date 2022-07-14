<?php

/*
 * Complete the 'findDigits' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER n as parameter.
function findDigits($n) {
    // Write your code here
    $temp = $n;
    $count = 0;
    while($temp > 0){
        $digit = $temp % 10;
        $temp = $temp / 10;
        if ($digit != 0 && $n % $digit == 0)
            $count++;
    }
    return $count;
}
 */

function findDigits($n) {
    // Write your code here
    $temp_str = (string)$n;
    $temp_arr = str_split($temp_str);
    $count = 0;
    foreach($temp_arr as $digit){
        if ($digit != 0 && $n % $digit == 0)
            $count++;
    }
    return $count;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$t = intval(trim(fgets(STDIN)));

for ($t_itr = 0; $t_itr < $t; $t_itr++) {
    $n = intval(trim(fgets(STDIN)));

    $result = findDigits($n);

    fwrite($fptr, $result . "\n");
}

fclose($fptr);
