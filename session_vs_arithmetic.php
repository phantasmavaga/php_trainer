<?php
session_start(); // Start the session

/*
    This code answers 2 questions:

    1️⃣ What is the result of $sayi += ABC?
    2️⃣ Why does the number stored in the session not reset on refresh?
*/

// Question 1: Addition with a constant
$sayi = 11;
define('ABC', 25); // Define a constant named ABC with value 25
$sayi += ABC; // $sayi = $sayi + 25 → $sayi = 36

echo "Question 1 → Result of \$sayi += ABC: $sayi\n"; // Output: 36

// New line
echo "\n\n";

// Question 2: Session-based counter and why it persists
// Initialize the session variable if it doesn't exist
if (!isset($_SESSION['sayac'])) {
    $_SESSION['sayac'] = 0;
}

// Demonstrate the difference between += and ++
$_SESSION['sayac'] += 1; // Increase by 1
$_SESSION['sayac']++;    // Increase by 1 more (total +2)

// Output the result
echo "Question 2 → Session counter: {$_SESSION['sayac']}\n";

/*
    Why is the number not forgotten?

    - $_SESSION stores data on the server.
    - The browser uses a cookie (PHPSESSID) to continue the same session.
    - Refreshing the page doesn't reset the session unless it expires or is destroyed.

    Difference between += and ++:

    - $x += 3 → Increases $x by 3
    - $x++ → Increases $x by only 1 (post-increment)
*/
?>
