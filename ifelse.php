<?php

$physics = 90;
$chemistry = 80;
$biology = 70;
$mathematics = 60;
$computer = 50;
$total = NULL;
$grade = NULL;

$total = $physics+$chemistry+$biology+$mathematics+$computer;
$percentage =($total/500.0)*100;

if($percentage>=90)
$grade ="A";
else if($percentage>=80 && $percentage<90)
$grade ="B";
else if($percentage>=70 && $percentage<80)
$grade ="C";
else if($percentage>=60 && $percentage<70)
$grade ="D";

else
$grade = "E";

echo "The percentage :".$percentage."<br>";
echo "The grade :".$grade;
?>