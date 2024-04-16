<?php
// Verificar si se han enviado datos
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar los datos del formulario
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"]; // Corregí el nombre del campo de contraseña

    // Aquí puedes realizar la validación del usuario y la contraseña en tu base de datos
    // Por ahora, simplemente imprimimos los datos para verificar
    echo "Usuario: " . $usuario . "<br>";
    echo "Contraseña: " . $contrasena;
} else {
    // Si no se enviaron datos por POST, redirigir al formulario de inicio de sesión
    header("Location: index.html");
    exit;
}
?>
