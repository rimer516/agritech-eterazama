const formularioContacto = document.querySelector("#form-contacto");
const respuestaFormulario = document.querySelector("#respuesta-formulario");

function revisarContacto(event) {


    const nombre = document.querySelector("#nombre").value.trim();
    const correo = document.querySelector("#correo").value.trim();
    const telefono = document.querySelector("#telefono").value.trim();
    const mensaje = document.querySelector("#mensaje").value.trim();

    if (nombre === "") {
        event.preventDefault();
        respuestaFormulario.textContent = "Por favor, ingresa tu nombre completo.";
        respuestaFormulario.classList.add("error");
        respuestaFormulario.classList.remove("exito");

    } else if (correo.includes("@") === false) {
        event.preventDefault();
        respuestaFormulario.textContent = "El correo electrónico no es válido. Debe contener @.";
        respuestaFormulario.classList.add("error");
        respuestaFormulario.classList.remove("exito");

    } else if (telefono === "") {
        event.preventDefault();
        respuestaFormulario.textContent = "Por favor, ingresa tu número de teléfono.";
        respuestaFormulario.classList.add("error");
        respuestaFormulario.classList.remove("exito");

    } else if (mensaje === "") {
        event.preventDefault();
        respuestaFormulario.textContent = "Por favor, escribe tu mensaje.";
        respuestaFormulario.classList.add("error");
        respuestaFormulario.classList.remove("exito");

    } else {
       
        respuestaFormulario.textContent = "🌱 ¡Gracias por comunicarte con Agritech S.R.L.! Nos pondremos en contacto contigo lo antes posible.";
        respuestaFormulario.classList.add("exito");
        respuestaFormulario.classList.remove("error");

    }
}

formularioContacto.addEventListener("submit", revisarContacto);
