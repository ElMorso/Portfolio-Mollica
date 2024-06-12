<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $destino = "matiasmollica99@gmail.com";
    $email = $_POST["email"];
    $mensaje = $_POST["message"];
    $contenido = "De: $email\n\nMensaje:\n$mensaje";
    $asunto = "Mensaje del formulario de contacto";

    // Enviar el correo electrónico
    if (mail($destino, $asunto, $contenido)) {
        echo "<p>¡Message has been sent correctly!</p>";
    } else {
        echo "<p>Error, try later</p>";
    }
}
?>