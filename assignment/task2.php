<?php
$number = 50;
$i = 0;
for ($i; $i <= $number; $i++) {
    if ($i % 5 == 0) {
        continue;
    }
    echo $i . " ";
}
