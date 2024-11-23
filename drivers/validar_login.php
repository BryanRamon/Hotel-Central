<?php

    $correo=$_POST['correo'];
    $contraseña=$_POST['contraseña'];
    session_start();
    $_SESSION['correo']=$correo;

    include('../db/db.php');

    $consulta="SELECT*FROM usuario WHERE correo='$correo' and contraseña='$contraseña'";
    $resultado=mysqli_query($conexion,$consulta);

    $filas=mysqli_num_rows($resultado);

    if(mysqli_num_rows($resultado) > 0){
        header("location: ../index.php");
    } else {
        echo "<h1>ERROR: Usuario o contraseña incorrectos</h1>";
        exit();
    }
    
    mysqli_free_result($resultado);
    mysqli_close($conexion);

    
