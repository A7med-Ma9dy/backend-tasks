<?php

/*
 * Complete the getMoneySpent function below.
 */
function getMoneySpent($keyboards, $drives, $b) {
    /*
     * Write your code here.
    rsort($keyboards);
    sort($drives);
    $max = -1;
    $k = count($keyboards);
    $d = count($drives);
    for($i = 0, $j = 0; $i < $k; $i++){
        for(;$j < $d; $j++){
            if($keyboards[$i] + $drives[$j] > $b)
                break;
            if($keyboards[$i] + $drives[$j] > $max)
                $max = $keyboards[$i] + $drives[$j];
        }
    }
    return $max;
}
     */

function getMoneySpent($keyboards, $drives, $b) {
    /*
     * Write your code here.
     */
    $keylength = count($keyboards);
    $drivelength = count($drives);
    $max = -1;
    for($i = 0; $i < $keylength; $i++){
        $temp = 0;
        for($j = 0; $j < $drivelength; $j++){
            if(($keyboards[$i] + $drives[$j]) <= $b ){
                $temp = ($keyboards[$i] + $drives[$j]);
                $max = $temp > $max ? $temp : $max;
            }
        }
    }
    return $max;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $bnm_temp);
$bnm = explode(' ', $bnm_temp);

$b = intval($bnm[0]);

$n = intval($bnm[1]);

$m = intval($bnm[2]);

fscanf($stdin, "%[^\n]", $keyboards_temp);

$keyboards = array_map('intval', preg_split('/ /', $keyboards_temp, -1, PREG_SPLIT_NO_EMPTY));

fscanf($stdin, "%[^\n]", $drives_temp);

$drives = array_map('intval', preg_split('/ /', $drives_temp, -1, PREG_SPLIT_NO_EMPTY));

/*
 * The maximum amount of money she can spend on a keyboard and USB drive, or -1 if she can't purchase both items
 */

$moneySpent = getMoneySpent($keyboards, $drives, $b);

fwrite($fptr, $moneySpent . "\n");

fclose($stdin);
fclose($fptr);