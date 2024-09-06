<?php 
$First_name = "Emmanuel";
$Last_name = "Taleat";
$Full_name = $First_name . " " . $Last_name;
$Full_name2 = "$First_name $Last_name";
echo $Full_name;
echo ("<br> <br>");
echo $Full_name2;
echo substr($Full_name, -5, 3);

echo ("<br> <br>");
//cast float to int
$a = 23456.789;
$int_cast = (int)$a;
echo $int_cast;

echo ("<br> <br>");
//cast string to int
$b = "1234678";
$str_cast = (int)$b;
var_dump ($b);
var_dump ($str_cast);

echo ("<br> <br>");
//conversions
$c = 5; //integer
$d = 5.34; //float
$e = "hello"; //string
$f = true; //boolean
$g = NULL; //NULL

$c = (string)$c;
$d = (string)$d;
$f = (string)$f;
$g = (string)$g;

var_dump($c);
var_dump($d);
var_dump($e);
var_dump($f);
var_dump($g);



echo ("<br> <br>");
//MATH
echo pi();
echo ("<br> <br>");
echo min(1, 20, 20, 49, 49, 50);
echo ("<br> <br>");
echo max(1, 20, 20, 49, 49, 50);
echo ("<br> <br>");
echo abs(-10);
echo ("<br> <br>");
echo sqrt(16);
echo ("<br> <br>");
echo round(0.60);
echo ("<br> <br>");
echo round(0.49);
echo ("<br> <br>");
echo rand(1,10);

echo ("<br> <br>");
//const
define("NAME", "Taleat Emmanuel");
echo NAME;
echo ("<br> <br>");
define("SUM", 2 + 3);
echo SUM;
echo ("<br> <br>");
const name = "Taleat Emmanuel";
echo name;
echo ("<br> <br>");
define("cars", array("lambo","bugatthi", "volvo", "toyota") );
echo cars[2];
echo ("<br> <br>");
const cars2 = ["lambo", "bughatti", "volvo", "toyota"];
echo cars2[2];


echo ("<br> <br>");
//if statement
$h = 7;
if(5 > 3){
    echo "This is correct!";
}
echo ("<br> <br>");
if($h < 12){
    echo "Lovely!!";
}
echo ("<br> <br>");
$i = 200;
$j = 33 ;
$k = 500;
if($i > $j && $i < $k){
    echo "Both conditions are true";
}
echo ("<br> <br>");
$l = 5;

if($l = 2 || $l = 3 || $l = 4 || $l = 5 || $l = 6 || $l = 7){
    echo "$l is a number between 2 and 7";
}
echo ("<br> <br>");
if($h < 5){
    echo "Lovely!!";
}else{
    echo "Rubbish!!";
}
echo ("<br> <br>");
if($h < 5){
    echo "Lovely!!";
}else if($h = 7){
    echo "Better!!";
}else{
    echo "Rubbish!!";
}
echo ("<br> <br>");
if($h < 10){
    echo "You pass!";
    if($h < 20){
        echo "you still pass!";
    }
}
else{
    echo "you failed!";
}
echo ("<br> <br>");
switch($h){
    case 5:
        echo "this is wrong";
        break;
    case 6:
        echo "this is not correct";
        break;
    case 9:
        echo "this is correct";
        break;
    case 8:
        echo "this is also wrong/not correct";
        break;
    default:
        echo "this is the default";
}

echo ("<br> <br>");
//While loop
$m = 1;
while($m <= 6){
    $m++;
    if($m == 3) continue;
    echo $m;
}
echo ("<br> <br>");
$n = 1;
while($n <= 60){
    echo $n;
    $n+=2;
}

echo ("<br> <br>");
//do-while loop
$o = 8;
do{
    echo $o;
    $o++;
}while($o < 6);
echo ("<br> <br>");
$p = 0;

do{
    $p++;
    if($p == 3) continue;
    echo $p;
}while($o < 6);

echo ("<br> <br>");
//Assignment: sum of number from 1 - 10
function sumOf($num1, $num2){
    $sum = 0;
for($n = $num1; $n <= $num2; $n++ ){
$sum += $n;
}
return $sum;
}
echo "this sum is:" . sumOf(1, 10);
echo ("<br> <br>");
echo "this sum is:" . sumOf(2, 10);
echo ("<br> <br>");
echo "this sum is:" . sumOf(2, 10);











?>