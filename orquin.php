<?php

$count = 0;
$largest = null;
$smallest = null;

// Outer loop: from 100 down to 1
for ($num = 100; $num >= 1; $num--) {

    // Inner loop: check if any i * i equals num
    for ($i = 1; $i <= $num; $i++) {
        if ($i * $i == $num) {

            echo $num . "<br>"; // display perfect square
            $count++;

            // Update largest and smallest
            if ($largest === null || $num > $largest) {
                $largest = $num;
            }

            if ($smallest === null || $num < $smallest) {
                $smallest = $num;
            }

            break; // stop checking once perfect square is found
        }
    }
}

echo "<br>Total perfect squares found: " . $count;
echo "<br>Largest perfect square: " . $largest;
echo "<br>Smallest perfect square: " . $smallest;

?>
