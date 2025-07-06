<?php
// Injecte du JS dans la page NBDesigner (frontend modern)
?>
<script>
const tryStyleProcessBtn = setInterval(() => {
    const btn = document.querySelector('.item-process');
    if (btn && btn.querySelector("span")) {
        console.log("✅ Bouton stylisé depuis custom-ui.php");
        btn.style.background = "linear-gradient(to right, #ff0066, #ffcc00)";
        btn.style.borderRadius = "12px";
        btn.style.padding = "12px";
        const span = btn.querySelector("span");
        span.style.color = "#fff";
        span.style.fontWeight = "bold";
        span.innerText = "Finaliser";
        clearInterval(tryStyleProcessBtn);
    }
}, 500);
</script>
