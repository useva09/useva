<?php

$name = $_GET['name'];
$phone = $_GET['phone'];
$service = $_GET['service'];

// Unique Booking ID
$booking_id = "USEVA" . rand(1000,9999);

echo "<h2>Booking Confirmed</h2>";
echo "Booking ID: <b>$booking_id</b><br>";
echo "Name: $name <br>";
echo "Service: $service <br>";

// WhatsApp message
$message = "Hello $name, Your booking ($booking_id) for $service is confirmed - USEVA.in";
$link = "https://wa.me/$phone?text=" . urlencode($message);

echo "<br><br>";
echo "<a href='$link'><button>Send WhatsApp Confirmation</button></a>";

?>