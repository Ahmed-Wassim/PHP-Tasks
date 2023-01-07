<?php

$mix = [1, 2, "A", "B", "C", 3, 4];
$int = 0;
$str = 0;

for($i = 0 ; $i < 7 ; $i++){
    if(is_numeric($mix[$i])){
        echo $mix[$i]. "<br>";
        $int++;
    }
    else{
        $str++;
    }
}

echo "\"$int Number Printed\"" . "<br>" . "\"$str Letters Ignored\"" ;