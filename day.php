<?php
$myHour=date("H");
if($myHour <=5){
    echo"Afternight";
}
elseif($myHour>22){
echo "Night";
}
elseif ($myHour>=18) {
echo    "Evening";
}
elseif ($myHour>12) {
echo "Afternoon";
}
elseif ($myHour>6) {
echo "Morning";
}
?>