<?php 
echo "Emmanuel";
echo "<h1> God </h1>";
print 2 + 3;
echo "<br> <br>";
$age = 25;
echo ("$age");
echo "<br> <br>";
print_r($age);
echo "<br> <br>";
var_dump($age);
echo "<br> <br>";

// Data Types
// Strings
//integar
//Boolean
//Float
//Array
 $name = "Taleat Emmanuel";
 echo $name;
 echo "<br>";
 echo strlen($name);
 echo "<br>";
 echo str_word_count($name);
 echo "<br>";
 echo strpos($name, "Emmanuel");
 echo "<br>";
 echo "Emmanuel" . "Temitope";

 //Reasearch: 5 other functions to perform with string
//read about array
echo "<br>";
echo str_replace("Emmanuel", "Marvellous", "Taleat Emmanuel");
echo "<br>";
echo substr("Taleat Emmanuel", 7, 8);
echo "<br>";
echo strtolower("TALEAT EMMANUEL");
echo "<br>";
echo strtoupper("taleat marvellous");
echo "<br>";
echo str_repeat("name", 3);
echo "<br>";
echo trim($name);
echo "<br>";
$explode = explode(" ", $name);
print_r($explode);



//DAY2
echo "<br> <br>";
//integer
$int = 43;
var_dump($int);
echo "<br> <br>";
//float
$float = 43.5;
var_dump($float);
echo "<br> <br>";
//Boolean
$Bool = TRUE;
var_dump($Bool);
echo "<br> <br>";
//String
$name = "Emmanuel";
var_dump($name);


echo "<br> <br>";
//Array
$names = array("Emmanuel", "Esteri", "Sunday", "Quadri", "Ruqoyyah", "Favour");
echo $names[2];
echo "<br> <br>";
var_dump ($names);
echo "<br> <br>";
$info = array("Emmanuel", "Computer Science", 202379, "Male", 17, 4.99);
var_dump ($info);
echo "<br> <br>";
print_r ($info[2]);

echo "<br> <br>";
//multidimensional array
$list = array(
    array("Esther", "Computer Science", "Married"),
    array("Rose", "Computer Science", "Relationship"),
    array("Sunday", "Agricultural Science", "Complicated"),
    array("Quadri", "Graduate", "Flirting"),
    array("Matthew", "Computer Science", "Single") ,
    array("Emmanuel", "Fine Art", "Rev'd Father"),
    array("Olasunkanmi", "Computer Science", "Happily Married with lovely kids")
);
var_dump ($list);
echo "<br> <br>";
print_r($list[6]);
echo "<br> <br>";
print_r($list[3][2]);

echo "<br> <br>";
$Student = array(
    array("Favour", 2023000886, array(4.96, 5.00)),
    array("Sunday", 2021004334, array(4.05, 4.55)),
    array("Emmanuel", 202154516, array(4.17, 4.88)),
    array("Prosper", 2021000343, array(3.99, 4.54))
);
print_r($Student[2][2][0]);


echo "<br> <br>";
//Associative
$profiles = array(
    "name" => "Roseline",
    "Department" => "Computer Science",
    "Matric No" => "2023434",
    "Relationship Status" => "Dating"
);
print_r($profiles["Department"]);

echo "<br> <br>";

echo($profiles["Matric No"]);

//Assignment: create an array, telling us about urself/anyone

echo "<br> <br>";
$me = array(
    "Name" => "Emmanuel",
    "Age" => 25,
    "School" => "LAUTECH",
    "Gender" => "Male",
    "Hobby" => "Coding",
    "Religion" => "Christianity",
    "Best-Friend" => "Somebody",
    "Occupation" => "Developer"
);
$fullMe = "My name is {$me["Name"]}" . "," . "i am {$me["Age"]} years old" . "," . "The name of my school is {$me["School"]}";
print_r($me);
echo "<br> <br>";
echo($fullMe);
echo "<br> <br>";
//Arithmetic Operations
$aa = 9;

echo($aa++);
$bb = 2;
$Sum = $aa + $bb;
echo $Sum;
echo "<br>";
var_dump($Sum);
echo "<br> <br>";
$minus = $aa - $bb;
echo $minus;
echo "<br>";
var_dump ($minus);
echo "<br> <br>";
$mul = $aa * $bb;
echo $mul;
echo "<br>";
var_dump ($mul);
echo "<br> <br>";
$div = $aa / $bb;
echo $div;
echo "<br>";
var_dump ($div);
echo "<br> <br>";
$exp = $aa ** $bb;
echo $exp;
echo "<br>";
var_dump ($exp );
echo "<br> <br>";
$mod = $aa % $bb;
echo $mod;
echo "<br>";
var_dump ($mod);
echo "<br> <br>";
$inc = $aa++;
echo $inc;
echo "<br>";
var_dump ($inc);
echo "<br> <br>";
$dec = $bb--;
echo $dec;
echo "<br>";
var_dump ($dec);
echo "<br> <br>";

//Comparison Operator
$cc = 10;
$dd = 20;
var_dump ($cc == $dd);
echo "<br> <br>";
echo ($cc === $dd);
echo "<br> <br>";
var_dump ($cc > $dd);
echo "<br> <br>";
var_dump ($cc < $dd);
echo "<br> <br>";
var_dump ($cc <= $dd);
echo "<br> <br>";
var_dump ($cc >= $dd);
echo "<br> <br>";
var_dump ("3" == 3);
echo "<br> <br>";

//Logical Operator
$ee = true;
$ff = false;
var_dump ($ee && $ff);
echo "<br> <br>";
var_dump ($ee || $ff);
echo "<br> <br>";
var_dump (!$ee);
echo "<br> <br>";
var_dump (!$ff);
echo "<br> <br>";

//Assignment operators
$Ass = 5;
echo ($Ass += 2);
echo "<br> <br>";
echo ($Ass -= 5);
echo "<br> <br>";
echo ($Ass *= 2);
echo "<br> <br>";
echo ($Ass /= 2);
echo "<br> <br>";
echo "<br> <br>";
echo "<br> <br>";

//Opeations on arrays and operations on strings

//Operations on array
$array = array(1, 2, 3, 4, 5);
echo $array[0];
echo "<br> <br>";
$array[0] = 10;
echo $array[0];
echo "<br> <br>";
$array[] = 6;
print_r ($array);
echo "<br> <br>";
array_push($array, 7);
print_r($array);
echo "<br> <br>";
array_pop($array);
print_r($array);
unset($array[5]);




echo "<br> <br>";
//operations of strings
$strings = "Taleat Emmanuel";
echo $strings;
echo "<br> <br>";
//concatenation
$conc_str = "Taleat" . "Emmanuel";
echo $conc_str;
echo "<br> <br>";
//Accessing strings characters
echo $conc_str[0];
echo "<br> <br>";
echo $conc_str[10];
echo "<br> <br>";
$conc_str[13] = "a";
echo $conc_str;


echo "<br> <br>";
//Control Structures

//if-else statement
$var = null;

if ($var) {
    echo "true";
}else{
    echo "false";
}
echo "<br> <br>";
$var1 = 5;

if (!$var1) {
    echo "true";
}else{
    echo "false";
}

echo "<br> <br>";
//continuation on if statement
$good = 10;
if($good < 30){
    echo "good is less than 20";
}elseif($good == 30){
    echo "good is equal to 30";
}else{
    echo "good is greater than 30";
}

//Assignment: read about nested about nested if statement
echo "<br> <br>";
//loop statements;
//1: for loop;

for($val = 0; $val < 15; $val++){
    echo "the value of val is $val <br>";
}
echo "<br> <br>";
for($val2 = 15; $val2 > 0; $val2--){
    echo "the value of val is $val2 <br>";
}

echo "<br> <br>";
//while loop
$var3 = 12;
while($var3 < 15){
    echo "$var3 <br>";
    $var3++;
}
echo "<br> <br>";
$var4 = 15;
while($var4 > 12){
    echo "$var4 <br>";
    $var4--;
}

echo "<br> <br>";
//do-while
$var5 = 10;
do{
    echo "$var5 <br>";
    $var5++;
}while($var5 < 20);
echo "<br> <br>";
//for each
$fruits = array("Apple", "Orange", "Melon", "Pineapple", "Mango");
foreach($fruits as $value){
    echo "$value <br>";
}


echo "<br> <br>";echo "<br> <br>";
//Assignment: read about nested about nested if statement

$nestedIf = 10;
if($nestedIf < 20){
    echo "this is correct"; 
    if($nestedIf == 10){
        echo  " and super much correct";
    }
}elseif($nestedif == 20){
    echo "this migh still be correect";
}else{
    echo "you are wrong!";
}


echo "<br> <br>";echo "<br> <br>";
//Assignmen2: foreach loop with associative array
$cgpa = array(
    "Roheemah" => 3.80,
    "Rose" => 3.58,
    "Sunday" => 4.56,
    "Emmanuel" => 5.00,
    "Miracle" => 4.05 
);
foreach($cgpa as $key => $value1){
     echo "$key : $value1 <br>";
}
//function: 
// simple functions without parameters,
// functions with parameters,
// functions with default parameters,
// function with variable length argument,
// functions retutning an array
// using a function inside another function(recursive function)

// simple functions without parameters,
function greetUser(){
    echo "hello dev. esther!";
}
greetUser();

echo "<br> <br>";
//function with a parameter
function greetUser1($name){
    echo "hello " . $name;
}
greetUser1("dev.esther!");


echo "<br> <br>";
//function with a parameter
function addnum($funsum){
    echo $funsum;
    // addnum(2 + 3);
}
addnum(6);
addnum(60);
echo "<br> <br>";
function addnum2($ba, $bb){
    return($ba + $bb);
}
echo (addnum2(3, 5));

echo "<br> <br>";
//functiona with default parameter
function addnum3($bc = 5, $bd = 13){
    return($bc + $bd);
};
echo addnum3();
echo "<br>";
echo addnum3(8, 12);

echo "<br> <br>";
function mulsum($be = 5, $bf = 13){
    return($bf * $be);
}
echo mulsum();

echo "<br> <br>";
//classwork
function class1($num1 = 5, $num2 = 10){
    if($num1 < $num2){
        echo "$num1 is less than $num2";
    }elseif($num1  == $num2){
        echo "$num1 is equal to $num2 ";
    }else{
        echo "$num1 is greater than $num2";
    }
}
class1();
echo "<br> <br>";
class1(10, 5);
echo "<br> <br>";
class1(10, 10);
echo "<br> <br>";


function sumAll(...$numbers){
    $sum = 0;
    foreach($numbers as $number){
        $sum += $number;
    }
    return($sum);
}
echo sumAll(1, 2, 3, 4);

// functions retutning an array

echo "<br> <br>";
//Assignment: even and odd checker
function evenOdd($num1){
    if($num1 % 2 == 0){
        echo "$num1 is an even number";
    }else{
        echo "$num1 is an odd number";
    }
}
evenOdd(10);
echo "<br> <br>";
evenOdd(13);
echo "<br> <br>";
evenOdd(45);
echo "<br> <br>";


?>