<?php
// printf: prints to the screen
printf("1. printf: Merhaba %s, yaşınız %d \n", "Ali", 30);

// sprintf: Turns a string 
$mesaj = sprintf("2. sprintf: Merhaba %s, yaşınız %d \n", "Ayşe", 25);
echo $mesaj;

// fprintf: Writes to file
$dosya = fopen("log.txt", "w");
fprintf($dosya, "3. fprintf: Log - Kullanıcı: %s, ID: %d\n", "Mehmet", 101);
fclose($dosya);

// vprintf:Takes arguments as a string and prints them to the screen
vprintf("4. vprintf: Ad: %s, Yaş: %d\n", ["Zeynep", 22]);

// vsprintf: Takes arguments as an array and returns a string
$format = "5. vsprintf: %s - %s - %d\n";
$degerler = ["Ürün", "Kod123", 999];
echo vsprintf($format, $degerler);
?>
