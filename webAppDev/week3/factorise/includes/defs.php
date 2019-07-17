<?php
/* 
 * factors($n) returns an array of prime factors of valid integer $n. 
 * Precondition: 2 <= n <= MAHP_MAX_INT = 2^31-1.
 * Note that it is executed for its _value_ not for its _effect_.
 */
define("FACTORS", "previousFactors.txt");

function factors($n) {
    $factors = array(); # initialise $factors to be an empty array
    $cand = 2;
    while ($n > 1 && $cand*$cand <= $n) {
        while ($n > 1 && $n % $cand == 0) {
            $factors[] = $cand; # append $cand to the array $factors
            $n = $n / $cand;
        }
        $cand++;
    }
    if ($n > 1) {
        $factors[] = $n; # append $n to the array $factors
    }
    return $factors;
}

// Saves factors that have been found.
function saveFactor($factor) {
    $file = fopen(FACTORS, "a");
    fwrite($file, "$factor\n");
    fclose($file);
}

function retrieveFactors() {
    $file = fopen(FACTORS, "r");
    $factors = [];
    while(!feof($file)) {
        $factor = fgets($file, 4096);
        $factor = htmlspecialchars($factor);
        $factors[] = $factor;
    }
    fclose($file);
    return $factors;
}

function clearPreviousFactors() {
    $file = fopen(FACTORS, "w");
    fwrite($file, "");
    fclose($file);
}
?>
