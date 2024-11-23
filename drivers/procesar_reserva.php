<?php
include '../db/db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir datos del formulario
    $tipo_habitacion_id = $_POST['tipo_habitacion'];
    $fecha_llegada = $_POST['fecha_llegada'];
    $fecha_salida = $_POST['fecha_salida'];
    $adultos = $_POST['adultos'];
    $ninos = $_POST['ninos'];
    $nombre_cliente = $_POST['nombre_cliente'];
    $email_cliente = $_POST['email_cliente'];
    $sql = "INSERT INTO reservas (habitacion_id, fecha_llegada, fecha_salida, adultos, ninos, nombre_cliente, email_cliente) 
            VALUES ('$tipo_habitacion_id', '$fecha_llegada', '$fecha_salida', '$adultos', '$ninos', '$nombre_cliente', '$email_cliente')";
    if ($conexion->query($sql) === TRUE) {
        echo "Reserva exitosa";
    } else {
        echo "Error al realizar la reserva: " . $conexion->error;
    }
    $conexion->close();
} else {
    echo "No se han recibido datos del formulario";
}
?>

