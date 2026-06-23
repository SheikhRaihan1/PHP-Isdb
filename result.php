<?php
  if(isset($_POST['marks'])){

    $marks = $_POST['marks'];

    if ($marks >= 80 && $marks <= 100) {
        $grade = "A+";
    } elseif ($marks >= 70) {
        $grade = "A";
    } elseif ($marks >= 60) {
        $grade = "A-";
    } elseif ($marks >= 50) {
        $grade = "B";
    } elseif ($marks >= 40) {
        $grade = "C";
    } elseif ($marks >= 33) {
        $grade = "D";
    } else {
        $grade = "F";
    }

    echo "<h3>Grade: $grade</h3>";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greading system</title>
</head>
<body>
    <div class="bg-light">
        <div  class="container">
            <div style="min-height: 100vh;" class="d-flex align-items-center justify-content-center">
                <div class="bg-white rounded-4 p-4 shadow-sm w-50">
                    <h4 class="mb-3">Greading system</h4>
                  <div >
                    <form action="" method="post">
                        <div class="d-flex align-items-center gap-3">
                            <input type="number" name="marks" id="">
                            <button type="submit">Result</button>
                        </div>
                    </form>
                  </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>