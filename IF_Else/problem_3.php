<?php

    $admins = ["Osama", "Ahmed", "Sayed"];  

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        echo "The Request Method Is Post And Username Is ". $_POST["user"];
        echo "<br>";
        if ($_POST["user"] == $admins[0] || $_POST["user"] == $admins[1] || $_POST["user"] == $admins[2]){
            echo "This Username ". $_POST["user"]." Is Admin";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
    <input type="text" name="user">
    <input type="submit" value="Send">
    </form>
</body>
</html>