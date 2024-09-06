<?php
echo " <h1> Hello World </h1>";
echo "<br>";
print_r ("Hello World");
echo "<br>";
var_dump("Hello World");
echo "<br>";
var_dump(3);
echo "<br>";
var_dump (3 + 2);

echo "<br>";
//Data types
//strings
$name = "Rodiat Waris";
echo $name;

echo "<br>";
//integers
$age = 58;
echo $age;
echo "<br>";
//Booleans
$bool = true;
echo $bool;
echo "<br>";
//floats
$cgpa = 3.56;
echo $cgpa;


echo "<br>";
//array
//index array
//associative array: keys n values
//multidimentional array
$array = array("rodiat", "Waris", 12, 3.0);
print_r ($array);
echo "<br>";
echo $array[2];
echo "<br>";
var_dump ($array);
echo "<br>";
$array2 = ["rodiat", "Waris", 12, 3.0];
print_r ($array2);

echo "<br>";
//associative
$array3 = array(
    "name" => "Rodiat",
    "age" => 70,
    "school" => "LAUTECH"
);
print_r ($array3["school"]);
echo "<br>";
//multi-dimentional array
$array4 = array(
    array("rodiat", "Waris", "Emmanuel"),
    array(70, 40, 10),
    array("rice")
);
print_r ($array4[1][2]);
        
echo "<br>";
$array5 = array(
    array("name1" => "rodiat","name2" => "Waris", "name3"=> "Emmanuel"),
    array(70, 40, 10),
    array("rice")
);
print_r ($array5[0]["name3"]);
?>
