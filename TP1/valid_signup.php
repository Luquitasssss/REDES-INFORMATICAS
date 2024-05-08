<?php
// Incluir el archivo de conexión
include 'conexion.php';

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$dni = $_POST['dni'];
$email = $_POST['email'];
$celular = $_POST['celular'];
$usuario = $_POST['usuario'];
$contrasenia = $_POST['contrasenia'];

// Preparar la consulta SQL para insertar datos en la tabla
$sql = "INSERT INTO usuario_biblioteca (nombre, dni, email, celular, usuario, contrasenia)
        VALUES ('$nombre', '$dni', '$email', '$celular', '$usuario', '$contrasenia')";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    echo "Usuario registrado correctamente";
} 
else {
    echo "Error al registrar el usuario: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
