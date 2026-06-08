<?php

$errors=[];

if(isset($_POST["btn_submit"])){
    // print_r($_POST);
    $name= $_POST["name"] ?? "";
    $email= $_POST["email"] ?? "";
    $city= $_POST["city"] ?? "";
    $subjects = $_POST["subject"] ?? [];
    $subject = implode("|", $subject);
    $address= $_POST["address"] ?? "";
    $gender= $_POST["gender"] ?? "";


    $pattern_name= "/^[a-zA-Z _]{4,}$/";
    if ($name == "") {
        $errors["name"] = "Name field is required !";  
    }else if(!preg_match($pattern_name, $name)){
        $errors["name"] = "Invalid Name ! Give at list 4 charecter  !";
    }


    $pattern_email= "/^[a-zA-Z0-9_]{3,}[@][a-z]{2,}[.][a-z]{2,}$/";
     if ($name == "") {
        $errors["email"] = "Email field is required !";
    }else if(!preg_match( $pattern_email, $email)){
        $errors["email"] = " Invalid Email  !";
    }


     if ($name == "") {
        $errors["city"] = "City field is required !";
    }
     if ($name == "") {
        $errors["address"] = "Address field is required !";
    }
     if ($name == "") {
        $errors["gender"] = "Gender field is required !";
    }
     if ($name == "") {
        $errors["subject"] = "Subject field is required !";
    }
    







    echo "$name $email $city $address $gender";

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container py-5">
        <div class="w-50 mx-auto">
            <h4>Form</h4>
            <div class="row">
            <form action="" method="post" class="mb-3 col-12 col-md-6">

             <!-- <div> -->
                <label for="name">User Name</label>
                <input type="text" name="name" id="name"> <br>
                <?php echo isset($errors["name"]) ? "<p style='color:red'>{$errors["name"]}</p>" : "" ?>
             <!-- </div>  -->
             <!-- <div> -->
                <label for="email">User Email</label>
                <input type="text" name="email" id="email"> <br>
                <?php echo isset($errors["email"]) ? "<p style='color:red'>{$errors["email"]}</p>" : "" ?>
                
             <!-- </div> -->
             <!-- <div> -->
                <label for="city">City</label> <br>
                 <select name="city" id="city">
                    <option value="Dhaka">Dhaka</option>
                    <option value="Noakhali">Noakhali</option>
                    <option value="Feni">Feni</option>
                    <option value="Khulna">Khulna</option>
                 </select>
                 <?php echo isset($errors["city"]) ? "<p style='color:red'>{$errors["city"]}</p>" : "" ?>
             <!-- </div> -->
             <!-- <div> -->
                <label for="gender">Gender</label> <br>
                <input <?= $gender == "male" ? "checked":"" ?> type="radio" name="gender" id="male" value="male">Male
                <input <?= $gender == "female" ? "checked":"" ?> type="radio" name="gender" id="female" value="female">Female
                <?php echo isset($errors["gender"]) ? "<p style='color:red'>{$errors["gender"]}</p>" : "" ?>
             <!-- </div>  -->
             <!-- <div> -->
                <label for="subject">Subject</label> <br>
                <input <?= in_array("PHP", $subjects) ? "checked":"" ?> type="checkbox" name="subject[]" id="PHP" value="PHP">PHP
                <input <?= in_array("CSS", $subjects) ? "checked":"" ?> type="checkbox" name="subject[]" id="CSS" value="CSS">CSS
                <input <?= in_array("Boostrap", $subjects) ? "checked":"" ?> type="checkbox" name="subject[]" id="Boostrap" value="Boostrap">Boostrap
                <input <?= in_array("MySQL", $subjects) ? "checked":"" ?> type="checkbox" name="subject[]" id="MySQL" value="MySQL">MySQL
                <input <?= in_array("Javascript", $subjects) ? "checked":"" ?> type="checkbox" name="subject[]" id="Javascript" value="Javascript">Javascript
                <?php echo isset($errors["subject"]) ? "<p style='color:red'>{$errors["subject"]}</p>" : "" ?>

             <!-- </div>    -->
             <!-- <div> -->
                <label for="address">Address</label> <br>
                <textarea name="address" id="address"></textarea> <br>
                <?php echo isset($errors["address"]) ? "<p style='color:red'>{$errors["address"]}</p>" : "" ?>
             <!-- </div>     -->
             <!-- <div> -->
                <button type="submit" name="btn_submit">Submit</button>
             <!-- </div>       -->
            </form>
            </div>
        </div>    
    </div>
</body>
</html>


