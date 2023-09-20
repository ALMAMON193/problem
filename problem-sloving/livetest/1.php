<?php


function printEvenNumbersFor($start, $end, $step)
{
    for ($i = $start; $i <= $end; $i += $step) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
    }
}
printEvenNumbersFor(1, 20, 2);
