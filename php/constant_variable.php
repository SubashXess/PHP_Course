<?php

/** PHP Constant Variable
 * syntax ->    define(name, value, case-insensitive)
 *  Can't use $ sign with constant variable name.
 *  Constant Variables are Global Variables.
 */

define("test", 50);
define("x", 60, true);
// define("test", 10); // error

echo test;
// echo Test;  // error
echo "<br>";
echo x;
echo "<br>";

$sum = test + 20;
echo $sum;
