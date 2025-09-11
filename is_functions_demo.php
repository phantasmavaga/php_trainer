<?php
// is_functions_demo.php
// Demonstrates common PHP is_... functions and isset/empty using ternary syntax
echo "=== PHP Variable Type Checks Using is_... Functions ===\n\n";
// 1. is_int — Integer check
$var1 = 10;
$result1 = is_int($var1) ? 'It is an integer' : 'It is not an integer';
echo "is_int: $result1\n";
// 2. is_float — Float/Double check
$var2 = 3.14;
$result2 = is_float($var2) ? 'It is a float' : 'It is not a float';
echo "is_float: $result2\n";
// 3. is_string — String check
$var3 = "Hello";
$result3 = is_string($var3) ? 'It is a string' : 'It is not a string';
echo "is_string: $result3\n";
// 4. is_bool — Boolean check
$var4 = true;
$result4 = is_bool($var4) ? 'It is a boolean' : 'It is not a boolean';
echo "is_bool: $result4\n";
// 5. is_array — Array check
$var5 = [1, 2, 3];
$result5 = is_array($var5) ? 'It is an array' : 'It is not an array';
echo "is_array: $result5\n";
// 6. is_null — Null check
$var6 = null;
$result6 = is_null($var6) ? 'It is null' : 'It is not null';
echo "is_null: $result6\n";
// 7. is_numeric — Numeric (number or numeric string) check
$var7 = "123.45";
$result7 = is_numeric($var7) ? 'It is numeric' : 'It is not numeric';
echo "is_numeric: $result7\n";
// 8. is_callable — Function or method is callable check
$var8 = 'strlen';
$result8 = is_callable($var8) ? 'It is callable' : 'It is not callable';
echo "is_callable: $result8\n";
// 9. is_object — Object check
$var9 = new stdClass();
$result9 = is_object($var9) ? 'It is an object' : 'It is not an object';
echo "is_object: $result9\n";
// 10. is_resource — Resource check
$var10 = fopen(__FILE__, 'r');// or fopen('example.txt', 'w'); // 'w' = write mode r =readonly
$result10 = is_resource($var10) ? 'It is a resource' : 'It is not a resource';
echo "is_resource: $result10\n";
fclose($var10); // Close resource
// 11. isset — Check if variable is set and not null
$var11 = "Defined";
$result11 = isset($var11) ? 'It is set' : 'It is not set';
echo "isset: $result11\n";
// 12. empty — Check if variable is empty (like "", 0, null, false, [])
$var12 = 0;
$result12 = empty($var12) ? 'It is empty' : 'It is not empty';
echo "empty: $result12\n";
?>
