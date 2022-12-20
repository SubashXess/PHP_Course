<?php

/*** PHP Data Types **
 * String   $x = "Hello World!";
 * Integer  $x= 25; (positive or negative)
 * Float    $x = 30.50; (positive or negative)
 * Boolean  $x = true;   (true or false)
 * Array    $x = array("HTML","CSS","JS");
 * Object   $x = new MyClass();
 * NULL     $x = null;
 * Resource
 */

$a = "Hello World!";
$b = 250;
$c = "250";
$d = 250.50;
$e = "250.50";
$f = false;
$g = null;
$arr = array("HTML", "CSS", "JS");

echo $g . "<br>";
// echo $arr . "<br>";  // array error
// echo $arr[1];   // array error
echo "<br>";
var_dump($g);   //find datatype
