<?php include "../db/db.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="icon" href="/img/icon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"rel="stylesheet">
</head>
<body>
    <div class="fondo">
        <div class="fondo__oscuro">
            <form class="fondo__oscuro__form" action="../drivers/validar_login.php" method="post">
                <h1>Iniciar Sesion</h1>
                <input type="text" placeholder="Correo" name="correo" class="fondo__oscuro__form__Inputlogin">
                <input type="password" placeholder="Contraseña" name="contraseña" class="fondo__oscuro__form__Inputlogin">
                <div class="fondo__oscuro__form__options">
                    <div class="fondo__oscuro__form__options__checkBox">
                        <input type="checkbox"><span>Recordar Siempre</span>
                    </div>
                    <a href="#">¿Olvidaste tu contraseña?</a>
                </div>
                <button>Acceder</button>
                <span class="fondo__oscuro__form__options--span">¿Aun no tienes cuenta? <a href="registro.php">Registrate</a></span>
                <a href="../index.php" class="fondo__oscuro__form__options__salir">Salir</a>
            </form>
        </div>
    </div>
</body>
</html>