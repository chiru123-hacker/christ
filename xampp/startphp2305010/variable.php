<?php

$one=1;//integer
$text="i am a string";//String
$number=20;//integer
$numb=343.01;//float
define("GREETING","welcome to W3 schools.com");//constant

echo"Add html USING php";
echo"<table border='1'><tr>";
echo"<td>i am one:</td><td>".($one+1)."</td></tr><tr>";
echo"<td>i am a string:</td><td>".$text."</td></tr><tr>";
echo"<td>i am a number:</td><td>".$number."</td></tr><tr>";
echo"<td>i am a floating number:</td><td>".$numb."</td></tr><tr>";
echo"<td>i am a constant</td><td>".GREETING."</td></tr>";
echo"</table>";
?>
