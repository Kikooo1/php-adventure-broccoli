<!-- 
    Write a program that takes an array of numbers as input and outputs the average of the numbers.
-->

<?php

$array = array(1, 7, 9, 3, 20, 12, 2, 9);


$average = array_sum($array) / count($array);


echo $average;

?>