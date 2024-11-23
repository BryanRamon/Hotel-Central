<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Habitaciones - HotelCentral</title>
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="icon" href="img/icon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>

<body id="inicio">
    <?php include 'recycle/nav.php'; ?>
    <header class="video">
        <video src="../img/habvideo.mp4"  autoplay loop></video>
        <div class="video__overlay">
            <div class="video__overlay__content">
                <h1>Las Mejores Habitaciones</h1>
                <p>Descubre la comodidad y el lujo en nuestras habitaciones</p>
            </div>
        </div>
    </header>
    <main class="rooms mt-2">
        <div class="rooms__room">
            <img src="../img/familiar.jpg" alt="familiar" id="familiar">
            <div class="rooms__room__info">
                <h2>Habitacion Familiar</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim voluptate dolore quia doloremque a
                    saepe eaque autem molestiae aperiam quidem beatae accusantium officia perferendis libero, tenetur
                    fugiat repellendus id cumque. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur
                    porro libero ipsam provident. Eligendi fuga, laudantium cupiditate magni nostrum doloremque debitis,
                    magnam labore, nobis perferendis perspiciatis. Reiciendis minus recusandae sunt.</p>
                <div class="rooms__room__info__icons mt-5">
                    <span>3<i class="fa-solid fa-person"></i></span>
                    <span>2<i class="fa-solid fa-bed"></i></span>
                    <span>1<i class="fa-solid fa-toilet"></i></span>
                </div>
                <h3>Acesso Clase 3</h3>
                <div class="rooms__room__info__reservar">
                    <a href="#">Reservar</a>
                </div>
            </div>
        </div>
        <div class="rooms__room mt-3">
            <img src="../img/matrimonial.jpg" alt="matrimonial" id="matrimonial">
            <div class="rooms__room__info">
                <h2>Habitacion Matrimonial</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim voluptate dolore quia doloremque a
                    saepe eaque autem molestiae aperiam quidem beatae accusantium officia perferendis libero, tenetur
                    fugiat repellendus id cumque. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur
                    porro libero ipsam provident. Eligendi fuga, laudantium cupiditate magni nostrum doloremque debitis,
                    magnam labore, nobis perferendis perspiciatis. Reiciendis minus recusandae sunt.</p>
                <div class="rooms__room__info__icons mt-5">
                    <span>2<i class="fa-solid fa-person"></i></span>
                    <span>1<i class="fa-solid fa-bed"></i></span>
                    <span>1<i class="fa-solid fa-toilet"></i></span>
                    <span>2<i class="fa-solid fa-mug-saucer"></i></span>
                </div>
                <h3>Acesso Clase 2</h3>
                <div class="rooms__room__info__reservar">
                    <a href="#">Reservar</a>
                </div>
            </div>
        </div>
        <div class="rooms__room mt-3">
            <img src="../img/suite.jpg" alt="Suite" id="suite">
            <div class="rooms__room__info">
                <h2>Habitacion Suite</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim voluptate dolore quia doloremque a
                    saepe eaque autem molestiae aperiam quidem beatae accusantium officia perferendis libero, tenetur
                    fugiat repellendus id cumque. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur
                    porro libero ipsam provident. Eligendi fuga, laudantium cupiditate magni nostrum doloremque debitis,
                    magnam labore, nobis perferendis perspiciatis. Reiciendis minus recusandae sunt.</p>
                <div class="rooms__room__info__icons mt-5">
                    <span>4<i class="fa-solid fa-person"></i></span>
                    <span>3<i class="fa-solid fa-bed"></i></span>
                    <span>2<i class="fa-solid fa-toilet"></i></span>
                    <span>4<i class="fa-solid fa-mug-saucer"></i></span>
                </div>
                <h3>Acesso Clase 1</h3>
                <div class="rooms__room__info__reservar">
                    <a href="#">Reservar</a>
                </div>
            </div>
        </div>
    </main>
    <?php include 'recycle/footer.php'; ?>
</body>

</html>