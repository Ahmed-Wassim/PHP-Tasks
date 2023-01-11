<?php

function calculate($a , $b , $c = "add"){
    if ($c === "a" || $c === "add"){
        return $a + $b;
    }else if ($c === "s" || $c === "subtract"){
        return $a - $b;
    }else if ($c === "m" || $c === "multiply"){
        return $a * $b;
    }else {
        return "This operation is not exist";
    }
}

echo calculate(10, 20); // 30
echo "<br>";
echo calculate(10, 20, "a"); // 30
echo "<br>";
echo calculate(10, 20, "s"); // -10
echo "<br>";
echo calculate(10, 20, "subtract"); // -10
echo "<br>";
echo calculate(10, 20, "multiply"); // 200
echo "<br>";
echo calculate(10, 20, "m");

