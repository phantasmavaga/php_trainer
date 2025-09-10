<?php
/*
    FILE: ping_ip_linux.php
    PURPOSE: Use backtick operator to ping an IP address on Linux

    Note: The command 'ping -a' might differ based on Linux distribution.
    Usually, 'ping -a' resolves addresses and beeps on response.
    Adjust the command if necessary.
*/

$ip = '192.168.1.2';

// Execute ping command using backtick operator
// -c 4 : send 4 ping requests (to avoid infinite ping)
// -a   : enable audible ping (beep) if supported
// Note: '-a' might not be supported on all ping versions
$output = `ping -c 4 -a $ip`;

// Print the output
echo "Ping result for IP $ip:\n";
echo $output;
?>
