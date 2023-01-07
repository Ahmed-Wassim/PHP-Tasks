<?php

$start = 0;
$mix = [1, 2, 3, "A", "B", "C", 4];

for ($start;$start < 7;$start++){
    if ($start == 0){
        continue;
    }
    else{
        if(is_numeric($mix[$start])){
            echo $mix[$start] . "<br>";
        }
    }
}