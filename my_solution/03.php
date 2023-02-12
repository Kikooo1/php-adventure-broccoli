<!-- 
    Write a program that takes a string as input and outputs the frequency of each character in the string.
-->

<?php
$string = "Allan Amon"
;
foreach (count_chars($string, 1) as $i => $val) {
   echo "$val = \"" , chr($i) , "\"<br>";
}
?>