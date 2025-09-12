<?php
$product_quantity=1;$product_price=10.00;
$product_vat=18;$product_shipping=5.00;
$product_total=$product_price*$product_quantity;
if ($product_vat>0) {
    $vat_amount=$product_total*($product_vat/100);
} else {
    $vat_amount=0;
}
if ($product_shipping>0) {
    $total=$product_total+$vat_amount+$product_shipping;
    $shipping="Shipping +";
} else {
    $total=$product_total+$vat_amount;
    $shipping="Free Shipping.";
}
$total=number_format($total,2,',',".");
echo "<div>$product_quantity item(s) Picture Frame(s) for <em> $product_total TL </em>";
echo "<br>(<b> $shipping VAT Included</b>) Total <b>$total</b> TL </div>";
?>
