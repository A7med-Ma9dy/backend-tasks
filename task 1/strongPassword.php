<?php
function minimumNumber($n, $s) {
    // Return the minimum number of characters to make the password strong

       for ($i = 0; $i < $n; $i++) {
        if ($s[$i] >= '0' && $s[$i] <= '9') $a = 1;
        else if ($s[$i] >= 'a' && $s[$i] <= 'z') $b = 1;
        else if ($s[$i] >= 'A' && $s[$i] <= 'Z') $c = 1;
        else $d = 1;
    }
    
    return max(6 - $n, 4 - $a - $b - $c - $d);

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$password = rtrim(fgets(STDIN), "\r\n");

$answer = minimumNumber($n, $password);

fwrite($fptr, $answer . "\n");

fclose($fptr);

/*
 * Complete the 'minimumNumber' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER n
 *  2. STRING password
function minimumNumber ($n, $password) {
    $password = str_split ($password);
    $numbers_needed = 1 - min (1, count (
        array_intersect ($password, str_split ("0123456789"))));
    $lower_case_needed = 1 - min (1, count (
        array_intersect ($password, str_split ("abcdefghijklmnopqrstuvwxyz"))));
    $upper_case_needed = 1 - min (1, count (
        array_intersect ($password, str_split ("ABCDEFGHIJKLMNOPQRSTUVWXYZ"))));
    $special_characters_needed = 1 - min (1, count (
        array_intersect ($password, str_split ("!@#$%^&*()-+"))));
    $sum_needed = $numbers_needed + $lower_case_needed +
        $upper_case_needed + $special_characters_needed;
    return max ($sum_needed, 6 - $n);
}

 */