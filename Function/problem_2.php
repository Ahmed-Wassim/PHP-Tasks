<?php

function get_arguments(...$nums){
    $result = " ";
    foreach($nums as $num){
        $result .= $num . " ";
    }
    return $result;
}

// the second way with function func_get_args search about it

echo get_arguments("Hello", "Elzero", "Web", "School"); // Hello Elzero Web School
echo "<br>";
echo get_arguments("I", "Love", "PHP");