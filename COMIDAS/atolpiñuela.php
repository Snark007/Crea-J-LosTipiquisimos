<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/stilo.css">
    <link rel="stylesheet" href="../Css/estructura.css">
    <link rel="stylesheet" href="../Css/translate.css">
    <link rel="stylesheet" href="../Css/menuD.css">
    <script defer src="../Js/menu.js"></script>
    <script defer src="../Js/translate.js"></script>
    <title>Atol de Piñeula</title>
</head>

<body>
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
                <a href="../COMIDAS/Comunidad.php" data-nav="7">Comunidad</a>
            </nav>

            <a href="../Html/Iniciarsecion.php" class="hide-login"><button class="but" data-nav="8">Iniciar sesión</button></a>

        </div>
    </header>
    <section>
        <div class="recetas">
            <img src="../Comida/atol-de-piñuela.jpg" alt="">
            <div class="recetas-letras">
                <h1>ATOL DE PIÑUELA</h1>
                <p>
                    El sabroso y tradicional Atol de Piñuela, es otra de las ricas variedades de atoles que tenemos en El Salvador. Y ahora, usted lo puede hacer en casa utilizando esta receta.
                    Fuente: Recetas Salvadoreñas

                </p>
            </div>
        </div>
        <div class="linea">
            <hr>
        </div>
        <div class="ingredientes">
            <div class="ingredientes2">
                <h1>Ingredientes:</h1>
                <p>
                <ul type="square">
                    <li> 1 piñuela</li>
                    <li> 2 dulces de atado</li>
                    <li> 3 tazas de harina de arroz</li>
                    <li> Canela en rajas a tu gusto </li>
                    <li> 8 granos de pimienta gorda</li>
                    <li> ½ cucharada de sal</li>
                    <li> Azúcar al gusto</li>

                </ul>
                </p>
            </div>
            <div class="ingredientes-pasos">
                <h1>Preparación:</h1>
                <ol>
                    <li>Corta todas las piñitas del gajo, quilates la puntita con un cuchillo y luego las pones a hervir en agua por diez minutos. Retirarás del fuego, déjalas enfriar y luego a cada una le
                        extraes el contenido del cual tienes que separar las semillas. El siguiente paso es volver a introducir el contenido en cada una de las piñitas.</li><br>

                    <li>Ahora en una olla con dos tazas de agua derrite el atado con la canela luego integras las piñitas y cocina a fuego lento para que se conserven muy bien. Este proceso lleva 45 minutos aproximadamente.</li><br>

                    <li>Mientras tanto, en otro depósito disuelve la harina de arroz con 10 tazas de agua y cuela en una servilleta de tela.</li><br>

                    <li>Cuando las piñitas estén bien conservadas agrega la preparación anterior. Continua la cocción e incorpora la pimienta gorda, cuidando de remover para que no se pegue. Verifica el sabor de
                        las piñas y si hace falta agrega una porción más de dulce de panela cuando este se derrita. Cuando hierva, retira del fuego.</li><br>

                    <li>Y ya esta listo disfruta de tu sabroso atol</li><br>
                </ol>
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
            <a href="https://www.facebook.com/Los-Tipiquisimos-110215061699961/?ref=page_internal"><img src="../Img/facebook.png" alt="" class="Photographs"></a><br>
            <a href="https://www.instagram.com/los_tipiquisimos.sv/"><img src="../Img/instagram.png" alt="" class="Photographs"></a><br>
            <a href="https://twitter.com/Tipiquisimos503"><img src="../Img/twitter.png" alt="" class="Photographs"></a><br>
        </div>
    </footer>
</body>

</html>