<?php

    $num = 2;
    while ($num < 520){
        if ($num == 2){
            echo 1 . "<br>";
            $num += $num;
        }
        else {
            $num += $num +2;
            echo $num . "<br>";
            if ($num == 382){
                break;
            }
        }
    }