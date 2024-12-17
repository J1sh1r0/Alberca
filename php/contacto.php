<?php
include('conexion.php');

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

// Insertar datos en la tabla 'contactos'
$sql = "INSERT INTO contactos (nombre, correo, telefono, mensaje)
        VALUES ('$nombre', '$correo', '$telefono', '$mensaje')";

if ($conexion->query($sql) === TRUE) {
    echo "Mensaje enviado. Nos pondremos en contacto contigo pronto.";
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}

$conexion->close();
?>
