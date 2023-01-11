<?php


function greeting($Name , $Gender = ""){
    if ($Gender == "Male"){
        echo "Hello Mr $Name";
    }
    else if ($Gender == "Female"){
        echo "Hello Miss $Name";
    }
    else{
        echo "Hello $Name";
    }
}

echo greeting("Osama", "Male"); 
echo "<br>";
echo greeting("Eman", "Female"); 
echo "<br>";
echo greeting("Sameh");