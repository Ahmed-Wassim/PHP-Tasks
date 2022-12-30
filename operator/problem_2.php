<?php
    $a = "10";

    echo $a;
    echo "<br>";
    echo gettype(+$a);
    echo "<br>";
    echo $a;
    echo "<br>";
    echo gettype(-$a);
    echo "<br>";
    echo $a;
    echo "<br>";
    echo gettype($a * 1);
    echo "<br>";
    echo $a;
    echo "<br>";
    echo gettype(intval($a));
    echo "<br>";
    echo $a;
    echo "<br>";
    echo gettype((int)($a));

