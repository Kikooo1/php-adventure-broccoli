<!-- 
    Write a program that takes a string as input and outputs the string with all vowels removed.
 -->
<?php

$string = "Allan Joseph D. Amon";
$vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U", " ");

$string = str_replace($vowels, "", $string);

echo $string;

?>