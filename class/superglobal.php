<?php

$x = 5;
$y = 3;


function multiNumber(){
    $GLOBALS ['z'] = $GLOBALS['x'] * $GLOBALS['y'];
}
multiNumber();
echo $z;


function sumNum(){
    $GLOBALS['sum'] = $x + $y;
}
?>

