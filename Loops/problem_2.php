<?php
    // use each code seperatly
    $index = 0;
    // for loop
    for ($index ; $index <= 20; $index ++){
        if ($index % 2 == 0){
            echo $index;
            echo "<br>";
        }
    }
    
    // for loop another solution
    for ($index ; $index < 20; $index +=2){
        if ($index != 0){
            echo $index ;
            echo "<br>";
        }
    }

    // while loop

    while ($index <= 20 ){
        if ($index != 0){
            echo $index ;
            echo "<br>";
            $index += 2;
        }
        $index ++;
    }
    

    // do while
    do {
        if ($index != 0){
            echo $index ;
            echo "<br>";
            $index += 2;
        }
    }while($index <= 20) ;

