<?php
function printFibonacci($num)
{
    $first = 0;
    $second = 1;
    $fibonacciSeries = "";

    for ($i = 0; $i < $num; $i++) {
        if ($i <= 1) {
            $next = $i;
        } else {
            $next = $first + $second;
            $first = $second;
            $second = $next;
        }
        $fibonacciSeries .= $next . " ";
    }

    return $fibonacciSeries;
}

$numberOfNumbers = 15;
$fibonacciSeries = printFibonacci($numberOfNumbers);

echo "The first $numberOfNumbers Fibonacci numbers are: $fibonacciSeries";
