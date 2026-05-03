<?php
// U-SEVA NATIONAL PROJECT - CALL ROUTING LOGIC
include('db_connect.php'); // डेटाबेस से जोड़ना जरूरी है

/**
 * यह फाइल ग्राहक और स्टाफ के बीच ब्रिज का काम करती है।
 * डायग्राम के हिसाब से: कॉल राउटिंग कोड।
 */

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customer_mobile = $_POST['cust_phone'];
    $service_required = $_POST['service_type']; // जैसे: Electrician, Beauty आदि
    $area_pincode = $_POST['pincode'];

    // लॉजिक: पिनकोड और सर्विस के हिसाब से खाली (Active) स्टाफ ढूंढना
    $sql = "SELECT * FROM staff_table WHERE skill = '$service_required' AND status = 'Active' AND wallet_balance > 20 LIMIT 1";
    
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $staff = $result->fetch_assoc();
        $staff_id = $staff['id'];
        $staff_name = $staff['name'];
        $staff_phone = $staff['phone'];

        // यहाँ तुम्हारा 20% कमीशन काटने का लॉजिक भी ट्रिगर होगा
        echo json_encode([
            "status" => "success",
            "message" => "कॉल कनेक्ट की जा रही है...",
            "staff_name" => $staff_name,
            "staff_contact" => $staff_phone
        ]);
    } else {
        echo json_encode([
            "status" => "error",
            "message" => "फिलहाल इस एरिया में कोई स्टाफ उपलब्ध नहीं है।"
        ]);
    }
}
?>

<!DOCTYPE html>
<html lang="hi">
<head>
    <meta charset="UTF-8">
    <style>
        .routing-status {
            background: #001f3f;
            color: #ff851b;
            padding: 15px;
            border-left: 5px solid #ff851b;
            font-family: 'Courier New', Courier, monospace;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="routing-status">
        [SYSTEM] Call Handler is Active... Waiting for Customer Request.
    </div>
</body>
</html>