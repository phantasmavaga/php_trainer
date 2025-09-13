<?php

$day = 6;
$month = "October"; 

if (($day >= 23 && $month == "September") || ($day <= 22 && $month == "October")) {
    echo "Your zodiac sign is Libra.";
}
elseif (($day >= 23 && $month == "October") || ($day <= 21 && $month == "November")) {
    echo "Your zodiac sign is Scorpio.";
}
elseif (($day >= 22 && $month == "November") || ($day <= 21 && $month == "December")) {
    echo "Your zodiac sign is Sagittarius.";
}
elseif (($day >= 22 && $month == "December") || ($day <= 19 && $month == "January")) {
    echo "Your zodiac sign is Capricorn.";
}
elseif (($day >= 20 && $month == "January") || ($day <= 18 && $month == "February")) {
    echo "Your zodiac sign is Aquarius.";
}
else {
    echo "Day or month was entered incorrectly.";
}

?>
