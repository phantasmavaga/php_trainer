<?php

$product_price = 20;
$vat = 18;
if ($vat > 0) {
    $vat = $product_price * ($vat / 100);
}
$total = $product_price + $vat;
echo "$total TRY";
?>
