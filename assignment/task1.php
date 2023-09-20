<?php
// Using a for loop
function printEvenNumbersFor($start, $end, $step)
{
    for ($i = $start+1; $i <= $end; $i += $step) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
    }
}

// Using a while loop
function printEvenNumbersWhile($start, $end, $step)
{
    $i = $start+1;
    while ($i <= $end) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
        $i += $step;
    }
}

// Using a do-while loop
function printEvenNumbersDoWhile($start, $end, $step)
{
    $i = $start+1;
    do {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
        $i += $step;
    } while ($i <= $end);
}

// Call the functions
echo "Using for loop: ";
printEvenNumbersFor(1, 20, 2);
echo "<br>";

echo "Using while loop: ";
printEvenNumbersWhile(1, 20, 2);
echo "<br>";

echo "Using do-while loop: ";
printEvenNumbersDoWhile(1, 20, 2);
?>