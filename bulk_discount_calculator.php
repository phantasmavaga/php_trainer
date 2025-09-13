<?php
$product = "Square Notebook";
$product_price = 4.50;
$product_quantity = 20;

if ($product_quantity < 15) {
    $discount = 0;
}
elseif ($product_quantity >= 15 && $product_quantity <= 59) {
    $discount = 5;
}
elseif ($product_quantity >= 60 && $product_quantity <= 99) {
    $discount = 10;
}
elseif ($product_quantity >= 100) {
    $discount = 15;
}

$total_price = $product_price * $product_quantity;

$final_price = $discount ? $total_price - ($total_price * ($discount / 100)) : $total_price;

$total_price = sprintf('%0.2f', $final_price);

$status = $discount ? "%$discount discount applied <s>$total_price</s> TL instead of" : "";

echo "<div>$product_quantity Units of <b>$product</b> $status $final_price TL</div>";
?>
