<?php

if(isset($_POST['btn_submit'])){
    $firstnumber = trim(intval($_POST['first']));
    $secondnumber = trim(intval($_POST['second']));
    $thirdnumber = trim(intval($_POST['third']));


if ($firstnumber >= $secondnumber && $firstnumber >= $thirdnumber) {
    echo "Largest Number = " . $firstnumber;
} else if ($secondnumber >= $firstnumber && $secondnumber >= $thirdnumber) {
    echo "Largest Number = " . $secondnumber;
} else {
    echo "Largest Number = " . $thirdnumber;
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Largest Number</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
    <div class="bg-light">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between" style="min-height: 100vh;">
                <div class="bg-white rounded-4 shadow-sm p-4">
                    <form action="" method="post">
                        <div class="mb-3">
                            <input type="number" class="form-control" name="first" required placeholder="Enter first number" >
                        </div>
                        <div class="mb-3">
                            <input type="number" class="form-control" name="second" required placeholder="Enter second number" >
                        </div>
                        <div class="mb-3">
                            <input type="number" class="form-control" name="third" required placeholder="Enter third number" >
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="btn_submit">Check number</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>