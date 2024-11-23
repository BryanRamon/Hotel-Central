<?php include '../db/db.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva - HotelCentral</title>
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="icon" href="../img/icon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>
<body>
    <?php include 'recycle/nav.php'; ?>
    <section class="section">
        <div class="section__conteiner">
            <img src="../img/default.jpg" alt="imgDefault" class="section__conteiner--img">
            <form action="../drivers/procesar_reserva.php" method="POST" class="section__conteiner__form">
                <span class="section__conteiner__form--span mt-2 mb-2">Seleccionar tipo de Habitacion</span>
                <select name="tipo_habitacion" required>
                    <option value="" disabled selected>Selecciona una Habitacion</option>
                    <option value="1">Familiar</option>
                    <option value="2">Matrimonial</option>
                    <option value="3">Suite</option>
                </select>
                <div class="section__conteiner__form__date mt-0.5">
                    <div class="section__conteiner__form__date__check">
                        <span>Llegada</span>
                        <input type="date" name="fecha_llegada" required>
                    </div>
                    <div class="section__conteiner__form__date__check">
                        <span>Salida</span>
                        <input type="date" name="fecha_salida" required>
                    </div>
                </div>
                <div class="section__conteiner__form__number mt-2">
                    <div class="section__conteiner__form__number__option">
                        <input type="number" name="adultos" placeholder="0" required>
                        <label><strong>Adultos</strong></label>
                    </div>
                    <div class="section__conteiner__form__number__option">
                        <input type="number" name="ninos" placeholder="0" required>
                        <label><strong>Niños</strong> + 5 años</label>
                    </div>
                </div>
                <div class="section__conteiner__form__peaple">
                    <span>Datos del Reservante</span>
                    <div class="section__conteiner__form__peaple__date">
                        <input type="text" name="nombre_cliente" placeholder="Nombre" required>
                        <input type="email" name="email_cliente" placeholder="Email" required>
                    </div>
                </div>
                <button type="submit"><p>Reservar</p></button>
            </form>
        </div>
    </section>
    <script src="../js/app.js"></script>
</body>
</html>

