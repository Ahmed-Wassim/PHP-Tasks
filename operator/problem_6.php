<?php

$a = "Elzero";
$b = "Web";
$c = "School";

// Method One
$d = "$a $b $c";
echo $d;
echo "<br>";

// Method Two
$d = $a . " " . $b . " " . $c;
echo $d;
echo "<br>";

// Method Three

$d = "{$a} {$b} {$c}";
echo $d;
echo "<br>";