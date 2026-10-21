const formulario = document.querySelector("#form-horno");
const aviso = document.querySelector("#aviso-horno");

function validarPedido(event) {
    const nombre = document.querySelector("#nombre").value.trim();
    const correo = document.querySelector("#correo").value.trim();
    const pedido = document.querySelector("#pedido").value.trim();

    if (nombre === "") {
        event.preventDefault();
        aviso.textContent = "Por favor, ingresa tu nombre completo.";
        aviso.classList.add("error");
        aviso.classList.remove("exito");
        return;
    }

    

    aviso.textContent = "Pedido tomado - te atiende Rimer Cadima Fernandez";
    aviso.classList.add("exito");
    aviso.classList.remove("error");
}

formulario.addEventListener("submit", validarPedido);