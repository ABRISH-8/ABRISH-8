<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$math = 21;
$english = 20;
$urdu = 57;
$computer = 87;

echo '<h1>Math:'.$math.'</h1>';
echo '<h1>english:'.$english.'</h1>';
echo '<h1>urdu:'.$urdu.'</h1>';
echo '<h1>computer:'.$computer.'</h1>';
$math + $english + $urdu + $computer;

echo '<h1>total:'.$math + $english + $urdu + $computer.'</h1>';

$total = $math + $english + $urdu + $computer;
$percent = $total*100/400;
echo '<h1>Percentage:'.$percent.'</h1>';


if($percent >= 90){
    echo '<h1>percent:'.$percent.'</h1>';
    echo '<h1>Status:A-ONE Grade</h1>';
   }
   if($percent >= 80){
    echo '<h1>percent:'.$percent.'</h1>';
    echo '<h1>Status: A Grade</h1>';
   }
   if($percent >= 70){
    echo '<h1>percent:'.$percent.'</h1>';
    echo '<h1>Status: B Grade</h1>';
   }
   if($percent >= 60){
    echo '<h1>percent:'.$percent.'</h1>';
    echo '<h1>Status:C Grade</h1>';
   }
   if($percent >= 50){
    echo '<h1>percent:'.$percent.'</h1>';
    echo '<h1>Status:C Grade</h1>';
   }
   if($percent >= 40){
    echo '<h1>percent:'.$percent.'</h1>';
    echo '<h1>Status:D Grade</h1>';
   }
   else{
    echo '<h1>percent:'.$percent.'</h1>';
    echo '<h1>Status:Fail</h1>';
   }
  if($percent >= "80" && $percent >= "80" && $percent >= "80" && $percent >= "80"){
    echo '<h1>You are pass</h1>';
  }
  if($percent >= "70" && $percent >= "70" && $percent >= "70" && $percent >= "70"){
    echo '<h1>You are pass</h1>';
  }
  if($percent >= "60" && $percent >= "60" && $percent >= "60" && $percent >= "60"){
    echo '<h1>You are pass</h1>';
  }
  if($percent >= "50" && $percent >= "50" && $percent >= "50" && $percent >= "50"){
    echo '<h1>You are pass</h1>';
  }
  if($percent >= "40" && $percent >= "40" && $percent >= "40" && $percent >= "40"){
    echo '<h1>You are pass</h1>';
  }

?>


</body>
</html>