<?php
  echo "This is home page";
  echo "<h1>php Basics</h1>";
  echo "<br>";

//   1. Echo, print and comments
echo "Hello, World!<br>";
print "This is printed using print.<br>";

// 2. echo simple output 
echo "<h2> 1. echo</h2>";
echo "Hello with echo <br>";
echo " Multiple ", "strings", "with echo.<br>";
$result = print "print result a value:<br>";
echo $result . "<br>";
$array = ["Apple","Banana", "Cherry"];
print_r($array);

echo "<br>As string:<br><pre>" .print_r ($array, true) . "</pre>";

$val = 42.5;
var_dump($val);

$complexArray = [1, "two", 3.14];
var_dump($complexArray);
echo "<br>";

// die(); 
$data = ["name" => "John", "age" => 30];
var_export($data);

echo "<br>";

$number = 10;
printf("Formated number: %b<br>", $number);
echo "<br>";
printf("Formated number: %o<br>", $number);

echo "<br>";

$name = "Alice";
printf("Hello, %s<br>", $name);

echo "<br>";
$msg = sprintf("Welcome, %s. You have %.1f points.", "Bob", 85.76);
echo $msg . "<br>";

$name = "Hasan";
echo "<p> His name is {$name}</p>";

$text = " Hello Php World ";
echo "Length: " . strlen($text) ."<br>";
echo "Word count:" . str_word_count($text) ."<br>";
echo "Uppercase:" . strtoupper($text) ."<br>";
echo "Lowercase:" . strtolower($text) ."<br>";
$trim= trim($text);
echo strlen($trim) ."<br>";
echo "Replace:" . str_replace("Php", "Laravel",$text) ."<br>";

$val = "100.335";
$intVal = (int) $val;
$floatVal = (float) $val;
$student = (object) ["name" => "Hasan", "age" => 30 ];
var_dump($student);
echo "<br>";
printf("My int Number is %d", $intVal);
echo "<br>";
echo ($floatVal);
echo "<br>";

echo "==========STRING FUNCTION===========";
echo "<br>";
$functionTaxt = "I Love PHP. ";
echo "String: ". $functionTaxt . '<br>';
echo "String Length: ". strlen($functionTaxt) . '<br>';
echo "String Reverse: ". strrev($functionTaxt) . '<br>';
echo "String Position of PHP: ". strpos($functionTaxt, "PHP") . '<br>';


echo "==========Control Sturture========" . '<br>';



$isLogin= true;
echo $isLogin ? "Welcome to our site":"Pls login";
if($isLogin){
  echo "Welcome";
}else{
  echo "Pls Login";
}
echo "<br>";



$color="purple";
switch($color){
  case"red" :
    echo "$color is my favorite color";
    break;

  case"yeliow" :
    echo "$color is my favorite color";
    break;
  default :
    echo "$color is not my favorite color";
    break;
}
echo "<br>";

// 1. int
// 2. condition
// 3. inc/dec

for($i=1 ; $i<=5; $i++ ){
  echo "I Love Bangladesh <br>";
}

$i=1;
while($i <= 3){
  echo "This is batch 71" . '<br>';
  $i++;
}

$i=1;
do{

  echo "{$i}. I love Football" . '<br>';
  if($i >= 10){
    break;
  }
  $i++;
}while(true);

for($i=1; $i<=10; $i++){
  if($i == 5){
    // break;
    continue;
  }
  echo "{$i}";
}

echo "<br>";

echo "======== (PHP Function)========" . '<br>';
 $name= "Mokshed";
function Hello($name){
  echo "Hello {$name}!";
}
Hello($name);

echo "<br>";
echo "========== (Array) ========" . '<br>';
$fruitsArray = ["Apple", "Mango", "Banana", "Jackfruit"];
$fruitsAssosiative = ["Apple" => 200, "Mango" => 300, "Banana" => 20, "Jackfruit" => 250];
$studentArray =[
   ["Name"=>"Raihan", "age"=>24, "Gender"=>"Male", "Hobby"=>"Wacthing Football"],
   ["Name"=>"Afrid", "age"=>24, "Gender"=>"Male", "Hobby"=>"Playing Cricket"],
   ["Name"=>"Siam", "age"=>24, "Gender"=>"Male", "Hobby"=>"Play boy"],
   ["Name"=>"Fahim", "age"=>24, "Gender"=>"Male", "Hobby"=>"Playing With Bhabi"],
];
echo "Fruits Array:";
print_r($fruitsArray);
echo "<br> Array length: ";
print_r(count ($fruitsArray));
echo "<br> Array items: ";
foreach ($fruitsArray as $key => $fruit) {
    echo "{$key}: {$fruit} ";
}
echo "<br> Fruits assosiative array: ";
print_r($fruitsAssosiative);

echo "<br> Fruits assosiative array: ";
foreach ($fruitsAssosiative as $key => $fruit) {
   echo "{$key}: {$fruit}tk, ";
}

echo "<br> Student Array: ";
// print_r($studentArray[0]['Hobby']);
foreach($studentArray as $student){
  // print_r($student);
  // echo "<br>";

  foreach($student as $key => $value){
    echo "{$key}: {$value}";
    echo "<br>";
  }
  echo "<br>";
  echo "<br>";
}
foreach($studentArray as $student){
  echo "Name:{$student["Name"]}<br>";
  echo "Age:{$student["age"]}<br>";
  echo "Hobby:{$student["Hobby"]}<br>";
  echo "<br>";
  echo "<br>";
}
$studentobjectArray =[
   (object)["Name"=>"Mahi", "age"=>24, "Gender"=>"Male", "Hobby"=>"Wacthing Football"],
   (object)["Name"=>"Tusher", "age"=>22, "Gender"=>"Male", "Hobby"=>"Playing Cricket"],
   (object)["Name"=>"Aimon", "age"=>21, "Gender"=>"Male", "Hobby"=>"Play boy"],
   (object)["Name"=>"Fahim", "age"=>20, "Gender"=>"Male", "Hobby"=>"Playing With Bhabi"],
];
echo "<br> Students Object array: ";
  foreach($studentobjectArray as $student){
  echo "Name:{$student->Name}<br>";
  echo "Age:{$student->age}<br>";
  echo "Hobby:{$student->Hobby}<br>";
  echo "<br>";
  echo "<br>";
}

echo "<br> Array of object to JSON:<br> ";
$json = json_encode($studentobjectArray);
echo $json;
echo "<br> JSON to array of object:<br> ";
print_r(json_encode($json));

echo "<br>";

echo "========== (Array Methods) ========" . '<br>';
$fruitsArray = ["Apple", "Mango", "Banana", "Jackfruit"];
$fruitsAssosiative = ["Apple" => 200, "Mango" => 300, "Banana" => 20, "Jackfruit" => 250]; 

$fruitsArray[3]="Orange";
$fruitsArray[0]="Watermelon";
print_r($fruitsArray);

$fruitsAssosiative["Mango"]="150";
$fruitsAssosiative["Banana"]="10";
print_r($fruitsAssosiative);

echo "<br>";
$studentArray =[
   ["Name"=>"Raihan", "age"=>24, "Gender"=>"Male", "Hobby"=>"Wacthing Football"],
   ["Name"=>"Afrid", "age"=>24, "Gender"=>"Male", "Hobby"=>"Playing Cricket"],
];
$studentArray[1]["Name"]="mahi";
$studentArray[0] = ["Name"=>"Faisal", "age"=>24, "Gender"=>"Male", "Hobby"=>"Wacthing Bollyball"];
print_r($studentArray);
echo "<br>";
$player1["name"]= "Hamza";
$player1["age"]= 28;
$player1["club"]= "Lester_City";
$player1["address"]= "Sylhet";

$player2["name"]= "Morchalin";
$player2["age"]= 23;
$player2["club"]= "Bashundra kings";
$player2["address"]= "Dhaka";

$players[] = $player1;
$players[] = $player2;
print_r($players);

echo "<br>";
echo "==========Array Function========" ."<br>";

?>   