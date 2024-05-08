<?php
// Incluir el archivo de conexión a la base de datos
include 'conexion.php';

// Verificar si se han enviado los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $usuario = $_POST['usuario'];
    $contrasenia = $_POST['contrasenia'];

    // Consulta SQL para verificar si el usuario y la contraseña son correctos
    $sql = "SELECT * FROM usuario_biblioteca WHERE usuario = '$usuario' AND contrasenia = '$contrasenia'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Si el usuario y la contraseña son correctos, redirigir a la página de inicio de sesión exitosa
        header("Location: http://localhost/redes/tp1/indexxx.html");
        exit();
    } else {
        // Si el usuario y la contraseña son incorrectos, redirigir de vuelta a la página de inicio de sesión con un mensaje de error
        header("Location: index.php?error=1");
        exit();
    }
}
?>
