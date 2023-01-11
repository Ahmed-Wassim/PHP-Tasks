<?php

function multiply(...$nums){
    $result = 1 ;
    foreach($nums as $num){
        if(is_numeric($num)){
            if(is_float($num)){
                $num = (int)$num;
                $result *= $num;
            }
            else{
                $result *= $num;
            }
        }
        else{
            continue;
        }
    }
    return $result;
}

echo multiply(10, 20); // 200
echo "<br>";
echo multiply("A", 10, 30); // 300
echo "<br>";
echo multiply(100.5, 10, "B"); // 1000