<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Central</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="icon" href="img/icon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"rel="stylesheet">
</head>
<body>
    <header class="header" id="inicio">
        <nav class="header__nav">
            <img class="header__nav--logo" src="img/LogoHotelCentral-pngWhite.png" alt="logoWhite">
            <div class="header__nav__enlaces">
                <a href="view/habitaciones.php" class="header__nav__enlaces--link">Habitaciones</a>
                <a href="view/servicios.php" class="header__nav__enlaces--link">Servicios</a>
                <a href="view/restaurante.php" class="header__nav__enlaces--link">Bar & Restaurante</a>
                <a href="view/nosotros.php" class="header__nav__enlaces--link">Nosotros</a>
                <a href="#contactos" class="header__nav__enlaces--link">Contactos</a>
                <a href="view/login.php" class="header__nav__enlaces--cuenta"><i class="fa-solid fa-user"></i>Cuenta</a>
            </div>
        </nav>
        <section class="header__section">
            <div class="header__section__text">
                <h1 class="header__section__text--h1">Hotel Central</h1>
                <span class="header__section__text--span">Vive una experiencia inolvidable junto a los mejores</span>
                <a href="view/reserva.php" class="header__section__text--a">Reservar</a>
            </div>
        </section>
    </header>
    <main class="main mb-5">
        <article class="main__article1">
            <div class="main__article1__info">
                <i class="fa-solid fa-lock"></i>
                <div>
                    <span>Seguridad</span>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum debitis voluptates reiciendis vero
                    nesciunt cupiditate ex facere voluptatibus eos vitae nam, atque eius ducimus. Consequatur omnis
                    quasi earum veritatis quam.</p>
            </div>
            <div class="main__article1__info">
                <i class="fa-solid fa-handshake"></i>
                <div>
                    <span>Responsabilidad</span>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum debitis voluptates reiciendis vero
                    nesciunt cupiditate ex facere voluptatibus eos vitae nam, atque eius ducimus. Consequatur omnis
                    quasi earum veritatis quam.</p>
            </div>
            <div class="main__article1__info">
                <i class="fa-solid fa-hand-holding-heart"></i>
                <div>
                    <span>Bienestar</span>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum debitis voluptates reiciendis vero
                    nesciunt cupiditate ex facere voluptatibus eos vitae nam, atque eius ducimus. Consequatur omnis
                    quasi earum veritatis quam.</p>
            </div>
        </article>
        <section class="main__section1" id="habitaciones">
            <div class="main__section1__title">
                <h2>Habitaciones</h2>
            </div>
            <div class="main__section1__rooms">
                <div class="main__section1__rooms__info">
                    <div class="main__section1__rooms__info__img">
                        <img src="img/familiar.jpg" alt="img">
                    </div>
                    <p class="main__section1__rooms__info--title">Familiar</p>
                    <p>Habitacion comoda y rustica con acceso a los servicios del hotel y vista a la playa</p>
                    <h4>Precio: $149.9</h4>
                    <div class="main__section1__rooms__info__icons">
                        <span>3<i class="fa-solid fa-person"></i></span>
                        <span>2<i class="fa-solid fa-bed"></i></span>
                        <span>1<i class="fa-solid fa-toilet"></i></span>
                    </div>
                    <a href="habitaciones.html#familiar" class="main__section1__rooms__info--verMas">Ver Mas</a>
                </div>
                <div class="main__section1__rooms__info">
                    <div class="main__section1__rooms__info__img">
                        <img src="img/matrimonial.jpg" alt="img">
                    </div>
                    <p class="main__section1__rooms__info--title">Matrimonial</p>
                    <p>Habitacion comoda y rustica con acceso a los servicios del hotel y vista a la playa</p>
                    <h4>Precio: $349.9</h4>
                    <div class="main__section1__rooms__info__icons">
                        <span>2<i class="fa-solid fa-person"></i></span>
                        <span>1<i class="fa-solid fa-bed"></i></span>
                        <span>1<i class="fa-solid fa-toilet"></i></span>
                        <span>2<i class="fa-solid fa-mug-saucer"></i></span>
                    </div>
                    <a href="habitaciones.html#matrimonial" class="main__section1__rooms__info--verMas">Ver Mas</a>
                </div>
                <div class="main__section1__rooms__info">
                    <div class="main__section1__rooms__info__img">
                        <img src="img/suite.jpg" alt="img">
                    </div>
                    <p class="main__section1__rooms__info--title">Suite</p>
                    <p>Habitacion comoda y rustica con acceso a los servicios del hotel y vista a la playa</p>
                    <h4>Precio: $449.9</h4>
                    <div class="main__section1__rooms__info__icons">
                        <span>4<i class="fa-solid fa-person"></i></span>
                        <span>3<i class="fa-solid fa-bed"></i></span>
                        <span>2<i class="fa-solid fa-toilet"></i></span>
                        <span>4<i class="fa-solid fa-mug-saucer"></i></span>
                    </div>
                    <a href="habitaciones.html#suite" class="main__section1__rooms__info--verMas">Ver Mas</a>
                </div>
            </div>
        </section>
        <article class="main__article2">
            <div class="main__article2__contactos">
                <h3>¿Quienes somos?</h3>
                <p>Somos la empresa hotelera mas exitosa y elegante de ultimo siglo</p>
                <a href="view/nosotros.php">Ver Mas</a>
            </div>
        </article>
        <section class="main__section2" id="servicios">
            <div class="main__section2__title">
                <span>Servicios del Hotel</span>
            </div>
            <div class="main__section2__servicios">
                <div class="main__section2__servicios__info">
                    <span><i class="fa-solid fa-wifi"></i>Wifi Gratuito</span>
                    <span><i class="fa-solid fa-person-swimming"></i>Piscina Grande</span>
                    <span><i class="fa-solid fa-elevator"></i>Elevador</span>
                    <span><i class="fa-solid fa-utensils"></i>Restaurante</span>
                    <span><i class="fa-solid fa-dumbbell"></i>Gym</span>
                    <span><i class="fa-solid fa-temperature-low"></i>Aire Acondicionado</span>
                    <span><i class="fa-solid fa-bell-concierge"></i>Atencion a Cuarto</span>
                </div>
                <div class="main__section2__servicios__info">
                    <span><i class="fa-solid fa-martini-glass-citrus"></i>Bar / Lounger</span>
                    <span><i class="fa-solid fa-music"></i>Musica en Vivo</span>
                    <span><i class="fa-solid fa-cake-candles"></i>Sala de Fiesta</span>
                    <span><i class="fa-solid fa-gamepad"></i>Sala de Juegos</span>
                    <span><i class="fa-solid fa-vault"></i>Caja Fuerte</span>
                    <span><i class="fa-solid fa-table-tennis-paddle-ball"></i>Zona de Deporte</span>
                    <span><i class="fa-solid fa-user-nurse"></i>Topico</span>
                </div>
                <div class="main__section2__servicios__info">
                    <span><i class="fa-solid fa-dolly"></i>Carga de Equipaje</span>
                    <span><i class="fa-solid fa-person-military-pointing"></i>Seguridad 24/7</span>
                    <span><i class="fa-solid fa-store"></i>Tiendas</span>
                    <span><i class="fa-solid fa-headset"></i>Atencion al Cliente</span>
                    <span><i class="fa-solid fa-wheelchair"></i>Rampas y Accesos</span>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer" id="contactos">
        <div class="footer__fondo">
            <div class="footer__fondo__center">
                <div class="footer__fondo__center__col">
                    <img src="img/LogoHotelCentral-pngWhite.png" alt="logowhite" class="logoCentral">
                    <span><i class="fa-solid fa-phone"></i> +51 945 998 298</span>
                    <span><i class="fa-solid fa-envelope"></i> HotelCentral@gmail.com</span>
                    <span><i class="fa-solid fa-location-dot"></i>Urb Confraternidad, Barranco 15063</span>
                    <div class="footer__fondo__center__col__icons">
                        <a href="https://www.facebook.com/">
                            <i class="fa-brands fa-facebook"></i>
                        </a>
                        <a href="https://www.instagram.com/">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="https://twitter.com/?lang=es">
                            <i class="fa-brands fa-twitter"></i>
                        </a>

                    </div>
                    <div class="footer__fondo__center__col__tarjetas">
                        <img src="img/tarjetasBanco.png" alt="tarjetasBanco" class="ImgTarjetas">
                    </div>
                </div>
                <div class="footer__fondo__center__col">
                    <span class="footer__fondo__center__col--title">Hotel Central</span>
                    <a href="#inicio" class="footer__fondo__center__col--a">Inicio</a>
                    <a href="view/habitaciones.php" class="footer__fondo__center__col--a">Habitaciones</a>
                    <a href="view/servicios.php" class="footer__fondo__center__col--a">Servicios</a>
                    <a href="view/nosotros.php" class="footer__fondo__center__col--a"">Nosotros</a>
                    <a href="view/restaurante.php" class="footer__fondo__center__col--a">Bar&Restaurante</a>
                    <a href="view/libroReclamaciones.php" class="footer__fondo__center__col--a">Libro de Reclamaciones</a>
                    <p class="footer__fondo__center__col--span mt-3 ml-6">&#169; 2024 Derechos Reservados</p>
                </div>
                <div class="footer__fondo__center__col">
                    <form class="footer__fondo__center__col__form">
                        <span>Informes:</span>
                        <input type="text" placeholder="Nombre">
                        <input type="text" placeholder="Correo">
                        <input type="text" placeholder="Telefono">
                        <button>Enviar</button>
                    </form>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d23685.637077334508!2d-77.02657780137216!3d-12.144770540484267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2spe!4v1713017019271!5m2!1ses-419!2spe"
                        width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        <div class="footer__wsp">
            <a href="https://wa.link/sp7n4q">
                <i class="fa-brands fa-whatsapp"></i>
            </a>
        </div>
    </footer>
</body>
</html>