<!DOCTYPE html>
<html lang="hi">
<head>
    <meta charset="UTF-8">
    <title>U Seva - वॉलेट रिचार्ज</title>
    <link rel="stylesheet" href="../public_html/css_js/style.css">
    <style>
        body { background: #050505; color: white; font-family: sans-serif; }
        .glass-card { max-width: 400px; margin: 50px auto; background: rgba(255,255,255,0.03); padding: 30px; border-radius: 20px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.1); text-align: center; }
        .bal-box { background: #001f3f; padding: 20px; border-radius: 15px; border: 1px solid #ff851b; margin-bottom: 20px; }
        .amt-input { width: 100%; padding: 15px; border-radius: 10px; border: none; font-size: 20px; text-align: center; }
        .pay-btn { width: 100%; padding: 15px; background: #ff851b; color: white; border: none; border-radius: 10px; margin-top: 20px; font-weight: bold; cursor: pointer; }
    </style>
</head>
<body>
    <div class="glass-card">
        <h2>U-SEVA <span style="color:#ff851b;">WALLET</span></h2>
        <div class="bal-box">
            <p style="margin:0; opacity:0.7;">Current Balance</p>
            <h1 style="margin:5px 0; color:#ff851b;">₹ <span id="val">0.00</span></h1>
        </div>
        <input type="number" id="amt" class="amt-input" placeholder="राशी भरें">
        <button class="pay-btn" onclick="recharge()">रिचार्ज सबमिट करें</button>
    </div>

    <script>
        function recharge() {
            let a = document.getElementById('amt').value;
            if(a < 100) return alert("कम से कम ₹100");
            alert("अनुरोध भेज दिया गया है!");
            document.getElementById('val').innerText = a;
        }
    </script>
</body>
</html>