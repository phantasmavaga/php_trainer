<?php
$b = "hello";
$result = $b ?? "no variable";
echo $result;

$message = $a ? "variable exists" : "variable does not exist";
echo $message;

$message = $a ?? "variable does not exist";
echo $message;
?>
