const botonTema = document.querySelector("#btn-tema");

botonTema.addEventListener("click", function () {
    document.body.classList.toggle("oscuro");

    const modoOscuroActivo = document.body.classList.contains("oscuro");

    if (modoOscuroActivo) {
        botonTema.textContent = "☀️";
        botonTema.setAttribute("aria-label", "Activar modo claro");
        botonTema.setAttribute("aria-pressed", "true");
    } else {
        botonTema.textContent = "🌙";
        botonTema.setAttribute("aria-label", "Activar modo oscuro");
        botonTema.setAttribute("aria-pressed", "false");
    }
});

const botonMenu = document.querySelector("#btn-menu");
const menuPrincipal = document.querySelector("#menu-principal");

function alternarMenu() {
    menuPrincipal.classList.toggle("abierto");

    if (menuPrincipal.classList.contains("abierto")) {
        botonMenu.textContent = "✕";
    } else {
        botonMenu.textContent = "☰";
    }
}


function cerrarMenu() {
    menuPrincipal.classList.remove("abierto");
    botonMenu.textContent = "☰";
}

botonMenu.addEventListener("click", alternarMenu);

menuPrincipal.querySelectorAll("a").forEach(function (enlace) {
    enlace.addEventListener("click", cerrarMenu);
});


