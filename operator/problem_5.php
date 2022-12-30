<?php

$points = 10;
$pre = $points;

$points += true + !($points <=> $points) + !($points <> $points);
echo $points;
echo "<br>";
$points = $pre;
$points -= true + !($points <=> $points);
echo $points ;

