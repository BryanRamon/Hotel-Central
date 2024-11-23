<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bar&Restaurant - HotelCentral</title>
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="icon" href="/img/icon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>

<body class="body" id="inicio">
    <?php include 'recycle/nav.php'; ?>
    <section class="slider">
        <div class="slider__center">
            <ul>
                <li><img src="../img/banner1-res.jpg" alt="img1"></li>
                <li><img src="../img/banner2-res.jpg" alt="img2"></li>
                <li><img src="../img/banner3-res.jpg" alt="img1"></li>
                <li><img src="../img/banner4-res.jpg" alt="img2"></li>
            </ul>
        </div>
        <div class="slider__content">
            <div class="slider__content__text">
                <span><strong>Central Restaurant</strong></span>
                <p>
                    Nos distinguimos por la excelencia y prestigio,
                    Siempre a la altura de los mejores, porque somos los mejores
                </p>
            </div>
        </div>
    </section>
    <article class="info">
        <h2>Conoce mas de Nosotros</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus omnis nulla voluptates veritatis tenetur
            fugit ex, officiis sunt suscipit doloribus provident voluptate nobis autem eveniet accusantium laborum unde
            sit ab.
        </p>
        <div class="info__icons">
            <a href="https://www.facebook.com/" target="_blank">
                <i class="fa-brands fa-facebook"></i>
            </a>
            <a href="https://www.instagram.com/" target="_blank">
                <i class="fa-brands fa-instagram"></i>
            </a>
            <a href="https://twitter.com/?lang=es" target="_blank">
                <i class="fa-brands fa-twitter"></i>
            </a>
        </div>
    </article>
    <section class="carta">
        <div class="carta__info">
            <div class="carta__info__center">
                <span><strong>Carta</strong></span>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe illo, ipsa provident nostrum dolorum
                    optio tempore. Ipsum cum asperiores debitis sapiente perspiciatis ratione harum a, fugit sequi
                    illum,eum incidunt. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione culpa, ad repudiandae 
                    tempore adipisci aliquid voluptas distinctio vitae, odio accusantium unde. Consequatur magnam earum cum nisi
                    expedita velit laudantium quae!
                </p>
                <a href="download/carta.pdf" download="Carta-RestauranteCentral">Descargar Carta <i class="fa-solid fa-download"></i></a>
            </div>
        </div>
        <img src="../img/img-cartas.jpg" alt="imgCarta">
    </section>
    <article class="horarios">
        <div class="horarios__info">
            <span><strong>Horario de Atencion</strong></span>
            <p class="horarios__info--p">Lunes a Domingo: En salón</p>
            <p><strong>Almuerzo:</strong> 11:00am a 2:00pm</p>
            <p><strong>Cena:</strong> 8:00pm a 11:00pm</p>
        </div>
    </article>
    <section class="eventos">
        <img src="../img/img-eventosPriv.jpg" alt=imgEventos"">
        <div class="eventos__info">
            <div class="eventos__info__center">
                <span><strong>Eventos Privados</strong></span>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe illo, ipsa provident nostrum dolorum
                    optio tempore. Ipsum cum asperiores debitis sapiente perspiciatis ratione harum a, fugit sequi
                    illum,eum incidunt. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione culpa, ad repudiandae 
                    tempore adipisci aliquid voluptas distinctio vitae, odio accusantium unde. Consequatur magnam earum cum nisi
                    expedita velit laudantium quae!
                </p>
            </div>
        </div>
    </section>
    <?php include 'recycle/footer.php'; ?>
</body>
</html>