<!DOCTYPE html>
<html lang="hi">
<head>
    <meta charset="UTF-8">
    <title>U Seva - मास्टर अप्रूवल पोर्टल</title>
    <link rel="stylesheet" href="../public_html/css_js/style.css">
    <style>
        :root { --navy: #001f3f; --orange: #ff851b; --green: #2ecc71; --red: #ff4136; }
        body { background: #050505; color: white; font-family: 'Segoe UI', sans-serif; }
        
        .vault-container { max-width: 1000px; margin: 40px auto; padding: 20px; }
        
        .glass-table-card {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 25px;
            margin-bottom: 30px;
        }

        h2 { color: var(--orange); border-bottom: 2px solid var(--orange); display: inline-block; padding-bottom: 5px; }

        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th { text-align: left; padding: 15px; background: rgba(0, 31, 63, 0.8); color: var(--orange); }
        td { padding: 15px; border-bottom: 1px solid rgba(255,255,255,0.05); }

        .btn { padding: 8px 15px; border: none; border-radius: 5px; cursor: pointer; font-weight: bold; transition: 0.3s; }
        .btn-approve { background: var(--green); color: white; }
        .btn-reject { background: var(--red); color: white; margin-left: 5px; }
        .btn:hover { opacity: 0.8; transform: scale(1.05); }

        .status-badge { padding: 4px 10px; border-radius: 20px; font-size: 12px; background: #555; }
    </style>
</head>
<body>

<div class="vault-container">
    <h1>U-SEVA <span style="color:var(--orange)">MASTER VAULT</span></h1>
    <p style="opacity:0.6;">Welcome back, Saurav. Everything is under your control.</p>

    <div class="glass-table-card">
        <h2>पेंडिंग स्टाफ <span style="color:white;">अप्रूवल</span></h2>
        <table>
            <thead>
                <tr>
                    <th>फोटो</th>
                    <th>नाम</th>
                    <th>स्किल</th>
                    <th>डिस्ट्रीब्यूटर</th>
                    <th>एक्शन</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img src="../public_html/assets/images/beauty_pink.png" width="40" style="border-radius:50%;"></td>
                    <td>संगीता कुमारी</td>
                    <td>Beauty</td>
                    <td>Patna_Dist_01</td>
                    <td>
                        <button class="btn btn-approve">APPROVE</button>
                        <button class="btn btn-reject">REJECT</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="glass-table-card">
        <h2>वॉलेट रिचार्ज <span style="color:white;">अनुरोध</span></h2>
        <table>
            <thead>
                <tr>
                    <th>स्टाफ ID</th>
                    <th>राशी</th>
                    <th>कमीशन (20%)</th>
                    <th>तारीख</th>
                    <th>एक्शन</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>US-ST-502</td>
                    <td>₹ 2,000</td>
                    <td style="color:var(--green);">+ ₹ 400</td>
                    <td>03 May 2026</td>
                    <td>
                        <button class="btn btn-approve">ADD MONEY</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>