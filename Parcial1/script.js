
function confirmarEncargo() {
    const mensaje = document.querySelector("#mensaje");

    mensaje.textContent =
        "Encargo recibido - te atiende Rimer Cadima Fernandez";

    mensaje.classList.remove("oculto");
}
const boton = document.querySelector("#btn-confirmar");

boton.addEventListener("click", confirmarEncargo);
