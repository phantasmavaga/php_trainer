<?php
session_start();

/* 
  $_SESSION: Sunucuda saklanır, güvenlidir, büyük veri tutabilir.
  $_COOKIE: Tarayıcıda saklanır, kullanıcı görebilir, 4KB sınırı vardır.
*/

// Oturum bilgisi atama ve yazdırma
$_SESSION['kullanici'] = 'Ahmet';
echo "Session kullanici: " . $_SESSION['kullanici'] . "<br>";

// Cookie örneği (yorumda)
// setcookie("kullanici", "Ahmet", time() + 3600); // 1 saatlik cookie
// echo $_COOKIE['kullanici'];

// Çalışan PHP dosyasının adı
echo "Çalışan dosya: " . $_SERVER['SCRIPT_NAME'] . "<br>";
?>
