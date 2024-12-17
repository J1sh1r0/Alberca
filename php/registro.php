<?php
include('conexion.php');

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Encriptar contraseña

// Insertar datos en la tabla 'usuarios'
$sql = "INSERT INTO usuarios (nombre, correo, telefono, password)
        VALUES ('$nombre', '$correo', '$telefono', '$password')";

if ($conexion->query($sql) === TRUE) {
    echo "Registro exitoso. Ahora puedes iniciar sesión.";
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}

$conexion->close();
?>
