<?php
$browser = $_SERVER["HTTP_USER_AGENT"];
$msie = strpos($browser, "MSIE") ? true : false;
$google = strpos($browser, "Chrome") ? true : false;
$librewolf = strpos($browser, "Librewolf") ? true : false;
$firefox = strpos($browser, "Firefox") ? true : false;
$safari = strpos($browser, "Safari") && !strpos($browser, "Chrome") ? true : false;  
$edge = strpos($browser, "Edg") ? true : false; 
echo ($msie) ? 'Internet Explorer kullanıyorsun' : null;
echo ($google) ? "Chrome kullanıyorsun" : null;
echo ($librewolf) ? "Librewolf kullanıyorsun" : null;
echo ($firefox) ? "Firefox kullanıyorsun" : null;
echo ($safari) ? "Safari kullanıyorsun" : null;
echo ($edge) ? "Edge kullanıyorsun" : null;
?>
