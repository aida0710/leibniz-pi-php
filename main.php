<?php

function calculatePi($terms) : float|int {
    $pi = 0.0;
    for ($i = 0; $i < $terms; $i++) {
        $pi += 1 / (2 * $i + 1) * pow(-1, $i);
    }
    return 4 * $pi;
}

$start_time = microtime(true);
$pi = calculatePi(100000000);
$end_time = microtime(true);

echo "Results : " . $pi . "\n";
echo "Calculation time: " . ($end_time - $start_time) . " seconds\n";
//π = 4 * (1 - 1/3 + 1/5 - 1/7 + 1/9 - 1/11 + ...)
