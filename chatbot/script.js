function sendMessage() {
    const input = document.getElementById("user-input");
    const message = input.value.trim();
    if (message === "") return;

    addMessage(message, "user");
    input.value = "";

    setTimeout(() => {
        botReply(message);
    }, 400);
}

function addMessage(text, sender) {
    const chatBox = document.getElementById("chat-box");
    const msg = document.createElement("div");
    msg.className = "message " + sender;
    msg.innerText = text;
    chatBox.appendChild(msg);
    chatBox.scrollTop = chatBox.scrollHeight;
}

function botReply(userText) {
    const text = userText.toLowerCase();
    let reply = "";

/* ================= GREETINGS ================= */

    if (
        text.includes("hello") || text.includes("hi") || text.includes("hey") ||
        text.includes("ayubowan") || text.includes("ආයුබෝවන්") || text.includes("හෙලෝ")
    ) {
        reply =
        "👋 Hello / ආයුබෝවන්!\n" +
        "You can ask me about:\n" +
        "• Kandy city\n• Materials in buildings\n• Royal architecture\n• Height rules\n• Dalada Maligawa\n• Otherness";
    }

/* ================= KANDY CITY ================= */

    else if (
        text.includes("kandy") || text.includes("mahanuwara") ||
        text.includes("මහනුවර") || text.includes("නුවර")
    ) {
        reply =
        "Kandy (මහනුවර) is a sacred royal city.\n" +
        "Its buildings, materials, and height rules reflect religion, kingship, and cultural control.\n" +
        "This makes Kandy very different from other Sri Lankan cities.";
    }

/* ================= OTHERNESS ================= */

    else if (
        text.includes("otherness") || text.includes("difference") ||
        text.includes("වෙනස්") || text.includes("වෙනස් බව")
    ) {
        reply =
        "Otherness means feeling unfamiliar or different.\n" +
        "In Kandy, otherness appears through:\n" +
        "• Sacred vs ordinary buildings\n" +
        "• Royal materials vs modern materials\n" +
        "• Height restrictions\n" +
        "• Silence at night vs activity in daytime";
    }

/* ================= MATERIALS (GENERAL) ================= */

    else if (
        text.includes("material") || text.includes("materials") ||
        text.includes("ද්‍රව්‍ය") || text.includes("ඉදි කිරීම්")
    ) {
        reply =
        "Traditional Kandyan buildings used:\n" +
        "• Stone (ගල්)\n• Kabok stone (කබොක් ගල්)\n• Timber / wood\n" +
        "• Clay tiles\n• Lime plaster\n• Kithul Pati & Varicchi walls\n\n" +
        "Materials were chosen for meaning, not decoration.";
    }

/* ================= DALADA MALIGAWA ================= */

    else if (
        text.includes("dalada") || text.includes("tooth relic") ||
        text.includes("temple") || text.includes("දළදා") || text.includes("ශ්‍රී දළදා")
    ) {
        reply =
        "Sri Dalada Maligawa is the most sacred building in Kandy.\n" +
        "It uses stone, timber, clay tiles, gold, and traditional wall systems.\n" +
        "These materials express spiritual power and royal authority.";
    }

/* ================= PATHTHIRIPPUWA / HEIGHT ================= */

    else if (
        text.includes("height") || text.includes("tall") ||
        text.includes("paththirippuwa") || text.includes("පත්තිරිප්පුව") ||
        text.includes("උස")
    ) {
        reply =
        "No building in Kandy is taller than the Paththirippuwa.\n" +
        "This rule protects the visual and spiritual dominance of the Dalada Maligawa.\n" +
        "Even modern buildings like KCC follow this rule.";
    }

/* ================= ROYAL PALACE ================= */

    else if (
        text.includes("king") || text.includes("palace") ||
        text.includes("රජ") || text.includes("මාලිගාව")
    ) {
        reply =
        "Royal buildings such as:\n" +
        "• King’s Palace\n• Magul Maduwa\n• Ulpange\n• Sitha Maligaya\n\n" +
        "Used timber, stone, brick, plaster, and traditional walls.\n" +
        "They were symbolic, not monumental.";
    }

/* ================= MAGUL MADUWA ================= */

    else if (
        text.includes("magul") || text.includes("මගුල්")
    ) {
        reply =
        "Magul Maduwa was built mainly with timber pillars and stone bases.\n" +
        "It was a ceremonial space, showing royal rituals rather than power through height.";
    }

/* ================= ULPANGE ================= */

    else if (
        text.includes("ulpange") || text.includes("උල්පැන්ගේ")
    ) {
        reply =
        "Ulpange was designed around water.\n" +
        "It uses stone, kabok, plaster, and cooling materials.\n" +
        "This shows environmental intelligence in Kandyan architecture.";
    }

/* ================= SITHA MALIGAYA ================= */

    else if (
        text.includes("sitha") || text.includes("ශීත")
    ) {
        reply =
        "Sitha Maligaya used thick stone walls and ventilation.\n" +
        "Materials controlled temperature naturally, without modern technology.";
    }

/* ================= WALAWWA ================= */

    else if (
        text.includes("walawwa") || text.includes("වලව්ව")
    ) {
        reply =
        "Walawwa buildings used timber frames, clay tiles, and plaster.\n" +
        "They showed social hierarchy but remained lower than sacred buildings.";
    }

/* ================= MODERN BUILDINGS ================= */

    else if (
        text.includes("modern") || text.includes("new") ||
        text.includes("kcc") || text.includes("shopping")
    ) {
        reply =
        "Modern buildings in Kandy use concrete and glass.\n" +
        "However, height restrictions ensure they do not dominate sacred architecture.";
    }

/* ================= DAY / NIGHT ================= */

    else if (
        text.includes("night") || text.includes("රෑ")
    ) {
        reply =
        "At night, buildings feel silent.\n" +
        "Light, shadow, and emptiness increase the feeling of otherness.";
    }

    else if (
        text.includes("day") || text.includes("දවල්")
    ) {
        reply =
        "During the day, the same buildings become active and functional.\n" +
        "Otherness reduces as people occupy the space.";
    }

    /* ================= DEVENDRA MULACHARI ================= */
    else if (
        text.includes("devendra") ||
        text.includes("mulachari")
    ) {
        reply =
            "Devendra Mulachari was the master craftsman of the Kandyan period.\n" +
            "He designed the Paththirippuwa, Ulpange, Magul Maduwa, and Sitha Maligaya.\n" +
            "He mastered architecture, sculpture, painting, and material balance.";
    }

    /* ================= ROOF ================= */
    else if (
        text.includes("roof") ||
        text.includes("pitched roof") ||
        text.includes("වහල")
    ) {
        reply =
            "Traditional Kandyan roofs are pitched and tiled.\n" +
            "They control rainwater, reduce visual height, and soften monumentality.";
    }

    /* ================= HERITAGE ================= */
    else if (
        text.includes("heritage") ||
        text.includes("heritage area") ||
        text.includes("උරුම")
    ) {
        reply =
            "Kandy is a legally protected heritage city.\n" +
            "Building height, materials, and roof forms are strictly controlled.";
    }

    /* ================= KANDY LAKE ================= */
    else if (
        text.includes("kandy lake") ||
        text.includes("lake")
    ) {
        reply =
            "Kandy Lake is a sacred urban landscape.\n" +
            "It supports cooling, ritual purity, and symbolic balance in the city.";
    }

    /* ================= CLIMATE ================= */
    else if (
        text.includes("climate") ||
        text.includes("cooling") ||
        text.includes("temperature")
    ) {
        reply =
            "Kandyan buildings use passive climate control.\n" +
            "Stone walls, courtyards, ventilation, and shaded roofs regulate temperature naturally.";
    }

    /* ================= COURTYARD ================= */
    else if (
        text.includes("courtyard") ||
        text.includes("central courtyard") ||
        text.includes("මැද මළුව")
    ) {
        reply =
            "Courtyards allow daylight, ventilation, and rainwater drainage.\n" +
            "They balance openness with royal privacy.";
    }

    /* ================= CONSERVATION ================= */
    else if (
        text.includes("conservation") ||
        text.includes("archaeology") ||
        text.includes("restoration")
    ) {
        reply =
            "Kandyan buildings are conserved using original materials and techniques.\n" +
            "Cement replacement is avoided to preserve authenticity.";
    }

    /* ================= SYMBOLISM ================= */
    else if (
        text.includes("symbolism") ||
        text.includes("symbolic") ||
        text.includes("meaning")
    ) {
        reply =
            "Kandyan architecture communicates meaning through material, scale, and spatial hierarchy\n" +
            "rather than height or monumentality.";
    }

/* ================= DEFAULT ================= */

    else {
        reply =
        "You can ask about:\n" +
        "• Materials in Kandy buildings\n" +
        "• Royal vs modern architecture\n" +
        "• Height rules\n" +
        "• Dalada Maligawa\n" +
        "• Otherness in the city";
    }

    addMessage(reply, "bot");
}

/* ========== ENTER KEY SUPPORT ========== */
document.getElementById("user-input").addEventListener("keydown", function (event) {
    if (event.key === "Enter") {
        event.preventDefault();
        sendMessage();
    }
});
