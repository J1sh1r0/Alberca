<?php
// Datos de conexión
$host = "localhost";
$usuario = "root";
$password = "";
$baseDatos = "albercas_db";

// Crear conexión
$conexion = new mysqli($host, $usuario, $password, $baseDatos);

// Verificar conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>