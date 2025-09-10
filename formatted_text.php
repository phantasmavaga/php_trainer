<?php
// printf: Ekrana yazdırır
printf("1. printf: Merhaba %s, yaşınız %d \n", "Ali", 30);

// sprintf: String olarak döndürür
$mesaj = sprintf("2. sprintf: Merhaba %s, yaşınız %d \n", "Ayşe", 25);
echo $mesaj;

// fprintf: Dosyaya yazma
$dosya = fopen("log.txt", "w");
fprintf($dosya, "3. fprintf: Log - Kullanıcı: %s, ID: %d\n", "Mehmet", 101);
fclose($dosya);

// vprintf: Argümanları dizi olarak alır ve ekrana yazdırır
vprintf("4. vprintf: Ad: %s, Yaş: %d\n", ["Zeynep", 22]);

// vsprintf: Argümanları dizi olarak alır ve string döndürür
$format = "5. vsprintf: %s - %s - %d\n";
$degerler = ["Ürün", "Kod123", 999];
echo vsprintf($format, $degerler);
?>
