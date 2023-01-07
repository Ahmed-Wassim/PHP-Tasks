<?php   

$help_num = 4;
$nums = [2, 4, 5, 6, 10];

foreach ($nums as $key => $value){
    echo $nums[$key] . "+" . $nums[$help_num] . "=" . $nums[$key] + $nums[$help_num--] . "<br>";
}