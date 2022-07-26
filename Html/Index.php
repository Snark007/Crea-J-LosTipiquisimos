<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipiquisimos</title>
    <link rel="icon" href="../Img/cocina.png">
    <link rel="stylesheet" href="../Css/nosotros.css">
    <link rel="stylesheet" href="../Css/cuadros.css">
    <link rel="stylesheet" href="../Css/estructura.css">
    <link rel="stylesheet" href="../Css/translate.css">
    <link rel="stylesheet" href="../Css/menuD.css">
    <script defer src="../Js/menu.js"></script>
    <script defer src="../Js/translate.js"></script>
</head>

<body>
    <!--MENU-->
    <header>
        <div class="wrapper-menu">
            <div class="btn-translate-hide wrapper-caja ">
                <div class="caja">
                    <b><p class="caja__texto" id="elegir" data-nav="1">Elegir idioma</p></b>
                    <img src="../Img/translateIcons/arrow.svg" alt="" class="caja__arrow ">
                </div>
                <div class="options">
                    <div class="pais" id="idioma-español" onclick="traducir(this)">
                        <img src="../Img/translateIcons/es.webp" alt="">
                        <p data-nav="2">España</p>
                    </div>
                    <div class="pais" id="idioma-ingles" onclick="traducir(this)">
                        <img src="../Img/translateIcons/en.webp" alt="" >
                        <p data-nav="3">Ingles</p>
                    </div>
                </div>
            </div>
            <img src="../Img/menu.svg" alt="" class="menu-hamburguer">
            <a href="../Html/Index.php" class="logo-grid">
                <h3 class="logo ">Los Tipiquisimos</h3>
            </a>
            <nav class="nav-hide">
                <a href="../Html/nosotros.php" data-nav="4" >¡Sobre nosotros!</a>
                <a href="../Html/receta.php">
                    <div class="container-menu-desplegable">
                        
                            <p class="main-text" data-nav="5" >Recetas</p>

                            <div class="more-options-recetas">
                                <p>Navideñas</p>
                                <p>Semana santa</p>
                                <p>pupusas</p>
                                <p>postres</p>
                                <p>Tamales</p>
                                <p>Sopas</p>
                                <p>Recetas tipicas</p>
                                <p>Atoles</p>
                            </div>
                      
             
                    </div>
                </a>
                <a href="../Html/subir.php" data-nav="6">¿Quieres subir tu receta?</a>
                <a href="../COMIDAS/Comunidad.php" data-nav="7">Comunidad</a>
            </nav>

            <a href="../Html/Iniciarsecion.php" class="hide-login"><button class="but" data-nav="8" >Iniciar sesión</button></a>

        </div>
    </header>

    <!--BASE-->

    <div class="container-slider">
        <div class="boton">
            <img src="../icons/chevron-up-arrow.svg" alt="" class="flecha invertido izquierda">
            <img src="../icons/chevron-up-arrow.svg" alt="" class="flecha derecha">
        </div>
        <div class="slider">
            <section id="hero">
                <h1>Recetas Faciles<br>¡Animate a Cocinar!</h1>
            </section>
            <section id="hero">
                <h1>Casate con alguien que cocine rico<br>la belleza se acaba el hambre no</h1>
            </section>
            <section id="hero">
                <h1> Los abdominales son temporales.<br>El chocolate es para siempre</h1>
            </section>
            <section id="hero">
                <h1>Mi mente dice "Cuerpo perfecto" pero mi corazón<br>dice ¡Unas pupusas revueltas!</h1>
            </section>
            <section id="hero">
                <h1>Lo único que me gusta más que hablar<br>de comida es comer</h1>
            </section>
        </div>
        <div class="container-circulo">
            <div class="circulo active-circulo">
            </div>
            <div class="circulo">
            </div>
            <div class="circulo">
            </div>
            <div class="circulo">
            </div>
            <div class="circulo">
            </div>
        </div>
    </div>

    <section class="dis-sto">
        <div class="container-1">
            <div class="res-info">
                <div class="res-img-comida">
                    <img src="../Comida/tamales-pisques.jpg" alt="">
                    <img src="../Comida/riguas.jpg" alt="">
                </div>

                <div class="res-des res-des-history">
                    <div class="global">
                        <h2 class="h2-sub">
                            <span class="disco-titulo">Descubre</span>
                        </h2>
                        <h1 class="disco-titulo2">La Historia</h1>
                        <div class="circle">
                        </div>
                    </div>
                    <p>
                        Los Tipiquisimos somos un Sitio Web que
                        pretende ayudar a las  personas que <br> quieran
                        aprender sobre la gastronomia Salvadoreña
                    </p>
                    <a href="#" class="cta-btn">Nosotros</a>
                </div>

            </div>
        </div>
    </section>

    <section>
        <div class="ahh">
            <div class="letras-ahh">
                <div class="letras-ahh-n">
                    <h2>Lo mejor de la comida</h2>
                    <h1>Salvadoreña</h1>
                </div>     
            </div>
        </div>
    </section>

    <section class="disco">
        <div class="disco-container">
            <div class="disco-informacion">
                <div class="disco-informacion-texto">
                    <h2 class="disco-titulo">Descubre nuestras</h2>
                    <p class="disco-titulo2">Recetas</p>
                </div>
                <div class="disco-descripcion">
                    <p>Podras ver todas nuestras recetas de nuestros pais desde comidas como la pupusas  y panes con <br>pollo hasta bebidas como atoles de elote y atoles chucos</p>
                    <a class="disco-boton" href="">ver recetas</a>
                </div>
            </div>
            <div class="imagen-4">
                <img class="img-4" src="../Comida/chuco.jpg" alt="">
                <img class="img-4" src="../Comida/panes con pollo.jfif" alt="">
                <img class="img-4" src="../Comida/empanadas.jpg" alt="">
                <img class="img-4" src="../Comida/magos-en-miel.png" alt="">
            </div>
        </div>
    </section>
    <!--::::Pie de Pagina::::::-->
    <footer>
        <div class="contar">
            <h3 class="log">Los Tipiquisimos</h3>
            <p>&copy; Los Tipiquisimos 2022-Derechos reservados</p>
        </div>
        <div class="container3">
            <a href="https://www.facebook.com/Los-Tipiquisimos-110215061699961/?ref=page_internal"><img
                    src="../Img/facebook.png" alt="" class="Photographs"></a><br>
            <a href="https://www.instagram.com/los_tipiquisimos.sv/"><img src="../Img/instagram.png" alt=""
                    class="Photographs"></a><br>
            <a href="https://twitter.com/Tipiquisimos503"><img src="../Img/twitter.png" alt=""
                    class="Photographs"></a><br>
        </div>
    </footer>

 <script src="../Js/slider.js"></script>

</body>

</html>