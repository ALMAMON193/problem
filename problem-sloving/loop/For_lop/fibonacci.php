<?php
function fibonacci($num)
{
    $fib = array(0, 1);
    for ($i = 2; $i < $num; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
    }
    return $fib;
}


function printFibonacci()
{
    $fibonacciSeries = fibonacci(10);
    foreach ($fibonacciSeries as $number) {
        echo $number . "  ";
    }
}


printFibonacci();
