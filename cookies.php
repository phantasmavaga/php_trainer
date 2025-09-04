<?php 

/* Kullanıcı siteye geri döndüğünde saklanılıp tekrar kullanılabilen global değişken 
$_COOKIE() dir */

/*$_SERVER[REMOTE_ADDR] Erişen kullanıcının ipadresini elde ettiğimiz global değişkendir */

/* $_SERVER['REMOTE_ADDR'] Siteye erişen Kullanıcının IP Adresidir */
 /*PHP'de bir programın (veya betiğin) çalıştığı dizini elde etmek için kullanabileceğin birkaç "sihirli" değişken 
 ve sabit vardır. En yaygın olanı: __DIR__ 
 
 Alternatif: dirname(__FILE__)
 Eski PHP sürümlerinde yaygındır:
 __FILE__: Dosyanın tam yolu ve adıdır.
 dirname() fonksiyonu, dizin kısmını alır.
*/

echo $_SERVER['SCRIPT_NAME']; // Çalışan PHP dosyasının adını verir

session_start(); // Sayfanın en üstünde, HTML'den önce olmalı

$_SESSION['kullanici'] = 'Ahmet';

echo $_SESSION['kullanici'];

// ------------------ SESSION vs COOKIE ------------------

/*
SESSION:
- $_SESSION sunucuda saklanır.
- Kullanıcıya sadece session ID gönderilir.
- Daha güvenlidir çünkü kullanıcı veriye erişemez.
- Daha büyük veri saklanabilir.
- Tarayıcı kapanınca oturum genelde sona erer.
- Kullanmak için session_start() zorunludur.
*/

session_start();
$_SESSION['kullanici'] = "Ahmet";
// echo $_SESSION['kullanici'];
/*
COOKIE:
- $_COOKIE tarayıcıda saklanır.
- Kullanıcı veriyi görebilir ve silebilir.
- 4KB ile sınırlıdır.
- Süresi belirlenebilir (örneğin 1 saat).
- Kullanmak için setcookie() kullanılır.
*/

setcookie("kullanici", "Ahmet", time() + 3600); // 1 saatlik cookie
//echo $_COOKIE['kullanici'];

?>