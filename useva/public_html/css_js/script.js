// U-SEVA NATIONAL PROJECT - FRONTEND LOGIC

// 1. होम पेज पर स्टेट सिलेक्ट करके आगे बढ़ने का फंक्शन
function goToServices() {
    const state = document.getElementById('stateSelector').value;
    if (state === "") {
        alert("भाई, पहले अपना राज्य (State) तो चुनो!");
    } else {
        // डायग्राम के हिसाब से सर्विसेज पेज पर ले जाएगा
        window.location.href = "services.html";
    }
}

// 2. सर्विस बुक करने का फंक्शन (यह call_handler.php से बात करेगा)
function bookService(serviceType) {
    alert(serviceType + " के लिए बुकिंग प्रोसेस शुरू हो रही है। कृपया कॉल का इंतज़ार करें।");
    
    // भविष्य में यहाँ AJAX कोड आएगा जो सीधा तुम्हारे डेटाबेस से स्टाफ उठाएगा
    console.log("Service Requested: " + serviceType);
}

// 3. 3D Glassmorphism इफेक्ट के लिए छोटा सा लॉजिक
document.querySelectorAll('.service-card').forEach(card => {
    card.addEventListener('mousemove', (e) => {
        let x = e.pageX - card.offsetLeft;
        let y = e.pageY - card.offsetTop;
        card.style.setProperty('--x', x + 'px');
        card.style.setProperty('--y', y + 'px');
    });
});