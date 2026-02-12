<?php
// A simple script for Adil in Sunamganj
$name = "Adil"; 
$location = "Sunamganj";
$current_hour = date("H");

if ($current_hour < 12) {
    $greeting = "Good Morning";
} elseif ($current_hour < 18) {
    $greeting = "Good Afternoon";
} else {
    $greeting = "Good Evening";
}

echo "--- Local Report ---\n";
echo "$greeting, $name!\n";
echo "I hope the weather at Moynar Point is great for coding.\n";
echo "Current Server Time: " . date("h:i A") . "\n";
?>