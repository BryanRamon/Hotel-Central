<?php
include 'db.php';

function conectar_bd() {
    global $server, $user, $pass, $db;
    
    // Crear conexión
    $conexion = new mysqli($server, $user, $pass, $db);

    // Verificar conexión
    if ($conexion->connect_error) {
        die("Conexión fallida: " . $conexion->connect_error);
    }

    return $conexion;
}
?>
