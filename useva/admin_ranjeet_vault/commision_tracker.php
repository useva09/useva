<!DOCTYPE html>
<html lang="hi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>U Seva - मास्टर कमीशन ट्रैकर</title>
    <link rel="stylesheet" href="../public_html/css_js/style.css">
    <style>
        :root { --navy: #001f3f; --orange: #ff851b; --glass: rgba(255, 255, 255, 0.05); }
        body { background: #020202; color: white; font-family: 'Segoe UI', sans-serif; margin: 0; }

        .vault-wrapper { max-width: 1100px; margin: 40px auto; padding: 20px; }
        
        /* 3D Glassmorphism Stats */
        .stats-row {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin-bottom: 40px;
        }

        .stat-box {
            background: var(--glass);
            padding: 30px;
            border-radius: 25px;
            border: 1px solid rgba(255,255,255,0.1);
            backdrop-filter: blur(20px);
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
        }

        .stat-box h3 { color: var(--orange); font-size: 14px; text-transform: uppercase; letter-spacing: 2px; }
        .stat-box .amount { font-size: 35px; font-weight: bold; margin: 10px 0; }
        .stat-box .sub { font-size: 12px; opacity: 0.5; }

        /* Profit Table */
        .history-card {
            background: var(--glass);
            border-radius: 20px;
            padding: 25px;
            border: 1px solid rgba(255,255,255,0.1);
        }

        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th { text-align: left; padding: 15px; color: var(--orange); border-bottom: 2px solid var(--orange); }
        td { padding: 15px; border-bottom: 1px solid rgba(255,255,255,0.05); }

        .profit-text { color: #2ecc71; font-weight: bold; }
        .distributor-tag { background: var(--navy); padding: 4px 10px; border-radius: 5px; font-size: 12px; }
    </style>
</head>
<body>

    <div class="vault-wrapper">
        <h1 style="border-left: 6px solid var(--orange); padding-left: 20px;">U-SEVA <span style="color:var(--orange)">PROFIT VAULT</span></h1>
        <p style="opacity:0.6; margin-left:26px;">सिर्फ सौरव कुमार के लिए - गुप्त कमीशन रिपोर्ट</p>

        <div class="stats-row">
            <div class="stat-box">
                <h3>कुल बिजनेस (Gross)</h3>
                <p class="amount">₹ 1,24,500</p>
                <p class="sub">सभी डिस्ट्रीब्यूटर्स का कुल काम</p>
            </div>
            
            <div class="stat-box" style="border: 1px solid var(--orange);">
                <h3>शुद्ध लाभ (20% Commission)</h3>
                <p class="amount" style="color: var(--orange);">₹ 24,900</p>
                <p class="sub">सीधा आपके अकाउंट में जमा होने वाली राशी</p>
            </div>
        </div>

        <div class="history-card">
            <h3>कमीशन हिस्ट्री (डिस्ट्रीब्यूटर वार)</h3>
            <table>
                <thead>
                    <tr>
                        <th>तारीख</th>
                        <th>डिस्ट्रीब्यूटर</th>
                        <th>स्टाफ</th>
                        <th>कुल राशी</th>
                        <th>आपका मुनाफा (20%)</th>
                   </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>03-05-2026</td>
                        <td><span class="distributor-tag">Patna_West</span></td>
                        <td>अमित (Electrician)</td>
                        <td>₹ 1,500</td>
                        <td class="profit-text">+ ₹ 300</td>
                    </tr>
                    <tr>
                        <td>03-05-2026</td>
                        <td><span class="distributor-tag">Gaya_Center</span></td>
                        <td>संगीता (Beauty)</td>
                        <td>₹ 4,000</td>
                        <td class="profit-text">+ ₹ 800</td>
                    </tr>
                    <tr>
                        <td>02-05-2026</td>
                        <td><span class="distributor-tag">Patna_East</span></td>
                        <td>राहुल (Plumber)</td>
                        <td>₹ 800</td>
                        <td class="profit-text">+ ₹ 160</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>