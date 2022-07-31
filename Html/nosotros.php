<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipiquisimos</title>
    <link rel="icon" href="../Img/cocina.png">
    <link rel="stylesheet" href="../Css/sobrenosotros.css">
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
                    <b>
                        <p class="caja__texto" id="elegir" data-nav="1">Elegir idioma</p>
                    </b>
                    <img src="../Img/translateIcons/arrow.svg" alt="" class="caja__arrow ">
                </div>
                <div class="options">
                    <div class="pais" id="idioma-español" onclick="traducir(this)">
                        <img src="../Img/translateIcons/es.webp" alt="">
                        <p data-nav="2">España</p>
                    </div>
                    <div class="pais" id="idioma-ingles" onclick="traducir(this)">
                        <img src="../Img/translateIcons/en.webp" alt="">
                        <p data-nav="3">Ingles</p>
                    </div>
                </div>
            </div>
            <img src="../Img/menu.svg" alt="" class="menu-hamburguer">
            <a href="../Html/Index.php" class="logo-grid">
                <h3 class="logo ">Los Tipiquisimos</h3>
            </a>
            <nav class="nav-hide">
                <a href="../Html/nosotros.php" data-nav="4">¡Sobre nosotros!</a>
                <div class="container-menu-desplegable">

                    <p class="main-text" data-nav="5"><a href="">Recetas</a></p>

                    <div class="more-options-recetas">
                        <p><a href="../Html/receta-navideñas.php">Navideñas</a></p>
                        <p><a href="../Html/receta-semana.php">Semana santa</a></p>
                        <p><a href="../Html/receta-pupusas.php">pupusas</a></p>
                        <p><a href="../Html/receta-postres.php">postres</a></p>
                        <p><a href="../Html/receta-tamales.php">Tamales</a></p>
                        <p><a href="../Html/receta-sopas.php">Sopas</a></p>
                        <p><a href="../Html/receta-tipicas.php">Recetas tipicas</a></p>
                        <p><a href="../Html/receta-atoles.php">Atoles</a></p>
                    </div>


                </div>
                </a>
                <a href="../Html/subir.php" data-nav="6">¿Quieres subir tu receta?</a>
                <a href="" data-nav="7">Comunidad</a>
            </nav>

            <a href="../Html/Iniciarsecion.php" class="hide-login"><button class="but" data-nav="8">Iniciar sesión</button></a>

        </div>
    </header>
   <section>
    <div class="abuelo">
        <div class="papi">
            <div class="wawa">
                <img src="../Img/cocineromejorado_1.png" alt="" class="wewe">
            </div>
            <div class="wawa">
                <h1>SOBRE NOSOTROS</h1>
                <p>
                    Nosotros somos Los Tipiquisimos un sitio web, nuestra principal meta es brindar recetas
                    sobre la gastronomía Salvadoreña para que todas las diferentes culturas y países sepan apreciar los
                    sabores de nuestras tierras salvadoreñas. 
                </p>
            </div>
        </div>
        <div class="papi">
            <div class="wawa">
                <h1>MISIÓN</h1>
                <p>
                    Dar a conocer la comida salvadoreña brindando recetas de buena calidad 
                    y excelentes pasos, para llegar a recrearlas con el fin de que  las personas
                    puedan  lograr hacer todo tipo de comida típica salvadoreña.
                </p>
            </div>
            <div class="linea">
                <hr>
            </div>
            <div class="wawa">
                <h1>VISIÓN</h1>
                <p>
                    Ser el mejor website que brinde recetas de comidas tipicas salvadoreñas
                    logrando ser mundialmente conocido y logrando que las personas conozcan la gran variedad 
                    de platillos que se encuentran en nuestro país.
                </p>
            </div>
        </div>
    </section>
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
</body>
</html>