
    <?php
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];
    $mensaje = $_POST["mensaje"];

    echo "<h2>¡Mensaje recibido!</h2>";
    echo "<p>Nombre: $nombre</p>";
    echo "<p>Correo: $correo</p>";
    echo "<p>Teléfono: $telefono</p>";
    echo "<p>Mensaje: $mensaje</p>";
    ?>
