<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/stilo.css">
    <link rel="stylesheet" href="../Css/translate.css">
    <link rel="stylesheet" href="../Css/menuD.css">
    <script defer src="../Js/menu.js"></script>
    <script defer src="../Js/translate.js"></script>
    <title>Atol de elote</title>
</head>
<body>
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
            <img src="../Comida/Atol-de-elote.jpg" alt="">
            <div class="recetas-letras">
                <h1>ATOL DE ELOTE</h1>
                <p>
                    ¡Esta delicia es todo un orgullo para el país! El famoso atol de elote que se prepara de manera artesanal 
                    en El Salvador ha marcado la historia local. No cabe duda se trata de una de las bebidas más populares de El Salvado gracias a su historia.
                     También es una de las bebidas más representativas de la gastronomía Salvadoreña. Te contamos sobre este esta delicia a continuación.
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
                    <li> 1 ¾ taza de maíz/elote dulce recién desgranado</li>
                    <li> ¾ taza de agua</li>
                    <li> ½ taza de azúcar blanca</li>
                    <li> 2 tazas de Leche Evaporada </li>
                    <li> 2 rajas de canela</li>
               
                </ul>
            </p>
            </div>
            <div class="ingredientes-pasos">
                <h1>Preparación:</h1>
                <ol>
                    <li>Licuar los granos de maíz/elote con el agua hasta formar una mezcla consistente. Agregar más agua de ser necesario. Pasar la mezcla por un colador fino y reservar el líquido.</li><br>
    
                    <li>Verter la mezcla colada en una cacerola a fuego bajo. Agregar el azúcar, la Leche Evaporada la canela y cocinar por 10 minutos fuego bajo revolviendo constantemente hasta que espese.</li><br>
        
                    <li>Retirar las rajas de canela y servir en jarra.</li><br>
        
                    <li>Servir tibio o refrigerar por 4 horas para disfrutar frio.</li>
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