<?php


require_once "db_config.php";
include_once("Student.php");


$founddata=(object)[];
if(isset($_GET["btn_submit"])){
    $id= $_GET["sid"];
    $founddata="";
    if($id != ""){
        $founddata = Student::find($id) ?? []; 
    }
}

// if(isset($_GET["deleteid"])){
//     $id= $_GET["deleteid"];
//     $delete= Student::delete($id);
//     echo $delete;
// }


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css" integrity="sha512-Ez0cGzNzHR1tYAv56860NLspgUGuQw16GiOOp/I2LuTmpSK9xDXlgJz3XN4cnpXWDmkNBKXR/VDMTCnAaEooxA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js" integrity="sha512-EKWWs1ZcA2ZY9lbLISPz8aGR2+L7JVYqBAYTq5AXgBkSjRSuQEGqWx8R1zAX16KdXPaCjOCaKE8MCpU0wcHlHA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Document</title>
</head>

<body>

             <div class="col-md-4">
                  <h3>Search Student</h3>
                 <form action="#" method="get">
                     <input type="text" name="sid" id="id">
                     <input type="submit" name="btn_submit" id="">
                 </form>

               
                  <?php echo  is_object($founddata) ? "" :"Data Not found" ?>
                  <table class="table">
                      <tr> 
                         <th>ID</th>
                         <th> <?php echo $founddata->id?? "" ?></th>
                      </tr>
                      <tr> 
                         <th>Name</th>
                         <th><?php echo  $founddata->name?? "" ?></th>
                      </tr>
                      <tr> 
                         <th>Batch</th>
                         <th><?php echo $founddata->batch?? "" ?></th>
                      </tr>
                  </table>
             </div>
        </div>

    </div>






</body>

</html>