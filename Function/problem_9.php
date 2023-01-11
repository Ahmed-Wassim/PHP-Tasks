<?php

// Anonymous Function
$greet = function($username){
    return "hello $username";
};

//Arrow Function
$greet = fn($username) => "hello $username";

echo $greet("Osama");