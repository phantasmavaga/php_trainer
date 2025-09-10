<?php
session_start();

/* 
  $_SESSION: Stored on the server, secure, can hold large data.
  $_COOKIE: Stored in the browser, visible to the user, has a 4KB limit.
*/

// Assigning and printing session information
$_SESSION['kullanici'] = 'Ahmet';
echo "Session kullanici: " . $_SESSION['kullanici'] . "<br>";

// Cookie example
// setcookie("kullanici", "Ahmet", time() + 3600); // for 1 hour cookie
// echo $_COOKIE['kullanici'];

// Name of executing php file
echo "Çalışan dosya: " . $_SERVER['SCRIPT_NAME'] . "<br>";
?>
