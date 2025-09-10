<?php 
session_start();
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

 // Sayfanın en üstünde, HTML'den önce olmalı

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

#setcookie("kullanici", "Ahmet", time() + 3600); // 1 saatlik cookie
//echo $_COOKIE['kullanici'];
#$1 ="Bir sayısı";
#echo $1  hatalı
echo "\n<div>Selam</div>";
#echo 'Php'de değişkenler ' hatalı

// printf: Biçimlendirilmiş stringi doğrudan ekrana yazdırır
printf("\n1. printf: Merhaba %s, yaşınız %d\n", "Ali", 30); # %s string tutucu %d decimal tutucu \n kaçış karakteri yani alt satır

// sprintf: Biçimlendirilmiş stringi döndürür (ekrana yazmaz)
$mesaj = sprintf("2. sprintf: Merhaba %s, yaşınız %d\n", "Ayşe", 25);
echo $mesaj;

// fprintf: Biçimlendirilmiş stringi dosyaya yazar
$dosya = fopen("log.txt", "w");
fprintf($dosya, "3. fprintf: Log - Kullanıcı: %s, ID: %d\n", "Mehmet", 101);
fclose($dosya); // log.txt dosyasına yazar

// vprintf: printf'in dizili versiyonu (argümanları dizi olarak alır)
vprintf("4. vprintf: Ad: %s, Yaş: %d\n", ["Zeynep", 22]);

// vsprintf: sprintf'in dizili versiyonu (sonucu string olarak döndürür)
$format = "5. vsprintf: %s - %s - %d\n";
$degerler = ["Ürün", "Kod123", 999];
$sonuc = vsprintf($format, $degerler);
echo $sonuc;


$sayi = 12.78;

// floor(): Aşağı yuvarlar (12.78 → 12)
// Yani küsuratı atar, ama tam sayıdan küçük olanı alır
$alt = floor($sayi);

// ceil(): Yukarı yuvarlar (12.78 → 13)
$ust = ceil($sayi);

// round(): En yakın tam sayıya yuvarlar (12.78 → 13)
$yuvarla = round($sayi);

// (int) veya intval(): Küsuratı atar, sadece tam kısmı alır (12.78 → 12)
$kes = (int)$sayi; // veya intval($sayi)

echo "floor: $alt\n";
echo "ceil: $ust\n";
echo "round: $yuvarla\n";
echo "int: $kes\n";

#echo (7%2);


// Kullanıcıdan sayı girişi al
$sayi = 20 ;

// % 2 ile kalanı al, 0 ise çift, değilse tek
echo ($sayi % 2 == 0) ? "Çift\n" : "Tek\n";

$sayi = 1599;

// number_format(number, decimals, decimal_separator, thousands_separator)
$formatlanmis = number_format($sayi, 2, ',', '.');

echo $formatlanmis; // Çıktı: 1.599,00
 $sayi3100=3100;
 printf("\n%08d", $sayi3100); // Çıktı: 00003152
?>