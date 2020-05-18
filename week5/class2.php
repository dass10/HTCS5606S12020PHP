<?php

$grating = "hello"; // $ is the syntax for variable in php
$who = "shweta";

echo  $grating;

echo  $who;

echo "<p>" .$grating. " ".$who."</p>"; // means merge strings in php

$x = 4;
$y = 5;

echo "x = ".$x;
echo  "y = ".$y;
echo "z = x + y = ".($x + $y);

$grating = "Hello world";

//length of string
echo  strlen($grating). "<br>";
// word count --count number of words in that string

echo str_word_count($grating). "<br>";
// string reverse
echo strrev($grating). "string reverse<br>";
// string string position
echo strpos($grating, "hello")."word position<br>";
//string replace
echo  str_replace($grating, "hello", "byebye")."word replace<br>";
// to uppercase
echo strtoupper($grating)."To Uppercase<br>";
//to lower
echo strtolower($grating). "To lower case<br>";
