
/* ===== INTERACCIÓN: MODO OSCURO ===== */

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

/* ===== FORMULARIO SIN ENVÍO REAL ===== */

const formulario = document.querySelector("#form-contacto");
const respuesta = document.querySelector("#respuesta-formulario");

formulario.addEventListener("submit", function (evento) {
    evento.preventDefault();

    respuesta.textContent =
        "Formulario de demostración: los datos no se han enviado.";

    formulario.reset();
});
