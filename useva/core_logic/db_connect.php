<?php
// U-SEVA DATABASE CONNECTION
$host = "localhost";
$user = "root";
$pass = ""; // अगर पासवर्ड रखा है तो डालो, नहीं तो खाली रहने दो
$db   = "useva_db";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("डेटाबेस कनेक्शन फेल हो गया: " . $conn->connect_error);
}

// हिंदी और अन्य भाषाओँ के सपोर्ट के लिए
$conn->set_charset("utf8");
?>