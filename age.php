<?php
$yas =17;
if ($yas==15 || $yas==16 ||$yas==17||$yas==18) {
    echo "Artık genç sayılırsın";
}
elseif ($yas>18 && $yas <=25) {
    echo "Erişkin olma yolundasın";
}
elseif ($yas>25 && $yas <=30) {
    echo "Erişkinsin";
}
elseif ($yas>30) {
    echo "Yaşlanıyorsun";
}
else {
    echo "Daha Çocuksun";
}
?>