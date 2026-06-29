<?php
session_start();
if(isset($_POST["btn_submit"])){
     $email= $_POST["email"];
     $password= $_POST["password"];

     if($email == "admin@gmail.com" && $password == "12345");
     $_SESSION["$email"]=$email;
     $_SESSION["name"]= "admin";
     header("location:index.php");
}else{
    echo "invalid email or password";
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <div>
            <label for="email">Email</label>
            <input type="text" name="email">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="text" name="password">
        </div>
        <div>
            
            <input type="submit" name="btn_submit">
        </div>

    </form>
</body>
</html>