<?php


function check_status($a , $b ,$c){
    if(is_string($a)){
        if (is_numeric($b)){
            if($c == true){
                return "Hello $a, Your Age Is $b, You Are Available For Hire";
            }
            else {
                return "Hello $a, Your Age Is $b, You Are Not Available For Hire";
            }
        }else if (is_bool($b)){
            if($b == true){
                return "Hello $a, Your Age Is $c, You Are Available For Hire";
            }
            else{
                return "Hello $a, Your Age Is $c, You Are Not Available For Hire";
            }
        }

    }else if (is_numeric($a)){
        if (is_string($b)){
            if($c == true){
                return "Hello $b, Your Age Is $a, You Are Available For Hire";
            }
            else {
                return "Hello $b, Your Age Is $a, You Are Not Available For Hire";
            }
        }else if (is_bool($b)){
            if($b == true){
                return "Hello $c, Your Age Is $a, You Are Available For Hire";
            }
            else{
                return "Hello $c, Your Age Is $a, You Are Not Available For Hire";
            }
        }

    }else if (is_bool($a)){
        if (is_string($b)){
            if($a == true){
                return "Hello $b, Your Age Is $c, You Are Available For Hire";
            }
            else {
                return "Hello $b, Your Age Is $c, You Are Not Available For Hire";
            }
        }else if (is_numeric($b)){
            if($a == true){
                return "Hello $c, Your Age Is $b, You Are Available For Hire";
            }
            else{
                return "Hello $c, Your Age Is $b, You Are Not Available For Hire";
            }
        }
    }
}

echo check_status("Osama" , 38 , false);
echo "<br>";
echo check_status("Osama" , true , 38);
echo "<br>";
echo check_status(38 , "Ahmed" , true);
echo "<br>";
echo check_status(38 , false , "Ahmed");
echo "<br>";
echo check_status(true, 38, "Osama"); 
echo "<br>";
echo check_status(false, "Osama", 38);
