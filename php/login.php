<?php
include('conexion.php');

// Obtener datos del formulario
$correo = $_POST['correo'];
$password = $_POST['password'];

// Verificar el correo en la base de datos
$sql = "SELECT * FROM usuarios WHERE correo = '$correo'";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    $usuario = $result->fetch_assoc();
    // Verificar la contraseña
    if (password_verify($password, $usuario['password'])) {
        echo "Inicio de sesión exitoso. Bienvenido, " . $usuario['nombre'];
    } else {
        echo "Contraseña incorrecta.";
    }
} else {
    echo "Usuario no encontrado.";
}

$conexion->close();
?>
