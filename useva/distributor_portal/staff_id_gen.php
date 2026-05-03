<!DOCTYPE html>
<html lang="hi">
<head>
    <meta charset="UTF-8">
    <title>U Seva - स्टाफ आईडी जनरेटर</title>
    <link rel="stylesheet" href="../public_html/css_js/style.css">
    <style>
        body { background: #0a0a0a; color: white; font-family: sans-serif; }
        .admin-box { max-width: 500px; margin: 40px auto; background: rgba(255,255,255,0.05); padding: 30px; border-radius: 20px; backdrop-filter: blur(15px); border: 1px solid rgba(255,255,255,0.1); }
        .form-group { margin-bottom: 15px; }
        label { display: block; color: #ff851b; font-weight: bold; margin-bottom: 5px; }
        input, select { width: 100%; padding: 10px; border-radius: 8px; border: none; }
        .id-card { display: none; margin-top: 25px; padding: 20px; border-radius: 15px; text-align: center; border: 2px solid white; }
        #outputImg { width: 120px; height: 120px; border-radius: 50%; border: 3px solid white; object-fit: cover; }
    </style>
</head>
<body>
    <div class="admin-box">
        <h2 style="text-align:center;">Staff <span style="color:#ff851b;">Registration</span></h2>
        <form id="idForm">
            <div class="form-group"><label>नाम:</label><input type="text" id="name" required></div>
            <div class="form-group">
                <label>कैटेगरी:</label>
                <select id="role">
                    <option value="Electrician">Electrician (Navy)</option>
                    <option value="Beauty">Beauty (Pink)</option>
                    <option value="Kitchen">Kitchen (Dark)</option>
                </select>
            </div>
            <div class="form-group"><label>फोटो:</label><input type="file" id="photo" accept="image/*" required></div>
            <button type="button" onclick="genID()" style="width:100%; padding:12px; background:#ff851b; border:none; color:white; font-weight:bold; cursor:pointer;">जेनरेट करें</button>
        </form>

        <div id="idCard" class="id-card">
            <img src="../public_html/assets/images/useva_logo.png" style="width:60px;">
            <div style="margin:15px 0;"><img src="" id="outputImg"></div>
            <h3 id="dispName"></h3>
            <p id="dispRole" style="font-weight:bold;"></p>
            <p style="font-size:10px; color:#2ecc71;">MASTER APPROVED</p>
        </div>
    </div>

    <script>
        function genID() {
            const name = document.getElementById('name').value;
            const role = document.getElementById('role').value;
            const photo = document.getElementById('photo').files[0];
            if(!name || !photo) return alert("सब भरो!");

            document.getElementById('dispName').innerText = name;
            document.getElementById('dispRole').innerText = role;
            const card = document.getElementById('idCard');
            card.style.background = (role === 'Beauty') ? "#e91e63" : "#001f3f";
            
            const reader = new FileReader();
            reader.onload = (e) => { document.getElementById('outputImg').src = e.target.result; card.style.display = "block"; }
            reader.readAsDataURL(photo);
        }
    </script>
</body>
</html>