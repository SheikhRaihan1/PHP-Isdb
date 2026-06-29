<?php

if(isset($_POST["btn_submit"])){

    $name = $_FILES["files"]["name"];
    $tmp_name = $_FILES["files"]["tmp_name"];
    $type = $_FILES["files"]["type"];
    $size = $_FILES["files"]["size"];

    echo $size . "<br>";

    if($size <= 1024 * 1024){

        move_uploaded_file($tmp_name, "upload/" . $name);

        echo "<img src='upload/$name' width='300'>";

    }else{
        echo "Allowed file size is 1 MB";
    }
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
    <form action="" method="post" enctype="multipart/form-data">
      <label for="files">Image</label>
      <input type="file" name="files">
      <input type="submit" name="btn_submit">
    </form>
</body>
</html>