<?php

    $start = 10;
    $end = 0;
    $stop = 3;
    
    for($start; $start >= $stop; $start--){
        if ($start == 10){
            echo $start;
            echo "<br>";
        }
        else{
            echo $end . $start ."<br>";
        }
    }