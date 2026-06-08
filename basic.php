<?php

echo"Hello World";

print "Hello Print";

print_r("Hello Print r");

// variabble declair
$firstName= "Sheikh";
$lastName= "Raihan";
echo "<br>";
echo"$firstName $lastName";

echo "<br>";
// number variable declare
$num1= 10;
$num2= 5;
$sum= $num1 + $num2;
$sub= $num1 - $num2;
$mul= $num1 * $num2;
$div= $num1 / $num2;
$mod= $num1 % $num2;

echo "Sum is $sum <br>";
echo "Sub is $sub <br>";
echo "Multification is $mul <br>";
echo "Divition is $div <br>";
echo "Modulas is $mod <br>";

// constrant declar 
const PI= 3.1416;
define("PI2", 3.1416);
echo PI;
echo "<br>";
echo PI2;
echo "<br>";

// array 
$students= ["jahid", "Karim", "Rafsan", "Hasib"];

echo $students[2];
echo "<br>";
// associative array 
$jahid= ["name" => "Jahid Hasan", "age" => 22, "address" => "Gulshan, Dhaka"];
print_r($jahid);


?>

<!-- shorthand -->
 <?= "Hi"?>