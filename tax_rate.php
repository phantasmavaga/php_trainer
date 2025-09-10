<?php
$base_price = 2;        // Price without tax (2 TL)
$tax_rate = 0.08;       // 8% tax rate

$total_price = $base_price * (1 + $tax_rate);  // Total price including tax

echo "Total price (including tax): " . number_format($total_price, 2) . " TL";
?>
