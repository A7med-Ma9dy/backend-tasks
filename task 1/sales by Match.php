<?php

/*
 * Complete the 'sockMerchant' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER n
 *  2. INTEGER_ARRAY ar
 */

function sockMerchant($n, $ar) {
    // Write your code here
    $pairs = 0;
    for($i = 0; $i < $n; $i++){
        if($ar[$i] != 0){
            for($j = $i + 1; $j < $n; $j++){
                if($ar[$i] == $ar[$j]){
                    $pairs++;
                    $ar[$j] = 0;
                    break;
                }
            }
        }
    }
    return $pairs;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$ar_temp = rtrim(fgets(STDIN));

$ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = sockMerchant($n, $ar);

fwrite($fptr, $result . "\n");

fclose($fptr);