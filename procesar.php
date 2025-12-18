<?php
// Procesar el formulario solo si se recibe el método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $nombre = htmlspecialchars($_POST['nombre']);
    $apellidos = htmlspecialchars($_POST['apellidos']);
    $email = htmlspecialchars($_POST['email']);
    $telefono = htmlspecialchars($_POST['telefono']);
    $altura = htmlspecialchars($_POST['altura']);
    $peso = htmlspecialchars($_POST['peso']);

    // Aquí puedes hacer lo que desees con los datos:
    // 1. Guardarlos en una base de datos
    // 2. Enviar un correo electrónico
    // 3. Mostrar los datos en la pantalla

    // Mostrar los datos recibidos
    echo "<h1>Datos Registrados</h1>";
    echo "<p><strong>Nombre:</strong> $nombre</p>";
    echo "<p><strong>Apellidos:</strong> $apellidos</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Teléfonos:</strong> $telefono</p>";
    echo "<p><strong>Altura:</strong> $altura cm</p>";
    echo "<p><strong>Peso:</strong> $peso kg</p>";
} else {
    echo "<p>El formulario no se ha enviado correctamente.</p>";
}
?>
