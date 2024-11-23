<?php
include '../db/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST["registro"])) {
        if (!empty($_POST["nombres"]) && !empty($_POST["apellidos"]) && !empty($_POST["dni"]) && !empty($_POST["correo"]) && !empty($_POST["contraseña"])) {
            $nombres = $conexion->real_escape_string($_POST["nombres"]);
            $apellidos = $conexion->real_escape_string($_POST["apellidos"]);
            $dni = $conexion->real_escape_string($_POST["dni"]);
            $correo = $conexion->real_escape_string($_POST["correo"]);
            $contraseña = $conexion->real_escape_string($_POST["contraseña"]); // Eliminar la función password_hash

            $sql = "INSERT INTO usuario (nombres, apellidos, correo, contraseña, dni) VALUES ('$nombres', '$apellidos', '$correo', '$contraseña', '$dni')";

            if ($conexion->query($sql) === TRUE) {
                echo '<div class="alert mb-1" style="color: green;">Registro Exitoso.</div>';
            } else {
                echo "Error: " . $sql . "<br>" . $conexion->error;
            }
        } else {
            echo '<div class="alert mb-1" style="color: red;">Por favor, complete todos los campos.</div>';
        }
    }
}
?>

