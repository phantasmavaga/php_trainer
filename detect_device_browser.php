<?php
$userAgent = $_SERVER["HTTP_USER_AGENT"];

if (strpos($userAgent, "Android") && strpos($userAgent, "mobile")) {
    echo "You're using an Android phone.";
}
elseif (strpos($userAgent, "Android")) {
    echo "You're using an Android tablet.";
}
elseif (strpos($userAgent, "iPod")) {
    echo "You're using an iPod or iPhone.";
}
elseif (strpos($userAgent, "iPhone")) {
    echo "You're using an iPhone.";
}
elseif (strpos($userAgent, "iPad")) {
    echo "You're using an iPad.";
}
elseif (strpos($userAgent, "BlackBerry")) {
    echo "You're using a BlackBerry.";
}
elseif (strpos($userAgent, "RIM Tablet")) {
    echo "You're using a RIM/BlackBerry tablet.";
}
elseif (strpos($userAgent, "MSIE")) {
    echo "You're using Internet Explorer.";
}
elseif (strpos($userAgent, "Firefox")) {
    echo "You're using Firefox.";
}
elseif (strpos($userAgent, "Safari")) {
    echo "You're using Safari.";
}
elseif (strpos($userAgent, "Chrome")) {
    echo "You're using Chrome.";
}
?>
