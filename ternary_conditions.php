<?php
// 1 - Compare two numbers using ternary operator
$a = 3;
$b = 4;
$result1 = ($a < $b) ? 'Less than' : 'Not less than';
echo $result1;
// 2 - Generate a random number and evaluate
$number = rand(0, 9);
$result2 = ($number > 5 ? 'Greater than 5' : 'Less than or equal to 5');
echo $result2;
?>
