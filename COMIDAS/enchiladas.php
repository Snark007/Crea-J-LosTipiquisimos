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
    <title>Enchiladas</title>
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
            <img src="../Comida/enchiladas.jpg" alt="">
            <div class="recetas-letras">
                <h1>ENCHILADAS</h1>
                <p>

                    Las enchiladas salvadoreñas son un plato muy típico de la cocina de El Salvador.

Algunos pensarán en las enchiladas mexicanas, que son tortillas 
rellenas bañadas en salsa. Pero las enchiladas salvadoreñas se parecen
 más a una tostada. Tradicionalmente, la tortilla se hace con masa de maíz 
 mezclada con achiote, lo que les da el característico color naranja, pero no son 
 picantes ni se usan chiles en la preparación. En esta receta, usamos tortillas de maíz regulares.

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
                    <li> 2 tazas de harina de maíz, para la masa.</li>
                    <li> 1 cucharada de achiote, para la masa.</li>
                    <li> suficiente de sal, para la masa.</li>
                    <li> 2 1/2 tazas de consomé de pollo, para la masa.</li>
                    <li> 1/2 tazas de agua, para la masa.</li>
                    <li> 2 cucharadas de mantequilla, para el pollo.</li>
                    <li> 1 cucharada de ajo, finamente picado, para el pollo.</li>
                    <li> 1 1/2 tazas de jitomate, en cubos pequeños, para el pollo.</li>
                    <li> 1 1/2 tazas de pimiento verde, en cubos pequeños, para el pollo.</li>
                    <li> 1 taza de cebolla morada, finamente picada, para el pollo.</li>
                    <li> 2 tazas de pollo, cocido y desmenuzado.</li>
                    <li> 2 cucharadas de salsa inglesa, para el pollo.</li>
                    <li> 1 cucharada de sazonador de pollo, para el pollo.</li>
                    <li> suficiente de aceite, para freír las enchiladas.</li>
                    <li> 2 tazas de frijoles refritos.</li>
                    <li> 2 tazas de lechuga romana, en tiras delgadas.</li>
                    <li> 2 jitomates, en rebanadas.</li>
                    <li> 1 pepino, pelado y en rebanadas.</li>
                    <li> 2 tazas de huevo, cocido y en rebanadas.</li>
                    <li> 1 taza de queso fresco, rallado.</li>
                    <li> suficiente de salsa roja.</li>
               
                </ul>
            </p>
            </div>
            <div class="ingredientes-pasos">
                <h1>Preparación:</h1>
                <ol>
                    <li>Para la masa: Mezcla la harina, el achiote, la sal y el consomé en un bowl, después vierte el
                        agua poco a poco hasta obtener una masa homogénea, sin grumos y fácil de manejar. Si llegas a sentir que
                        la masa para enchiladas está muy seca, agrega un poco más de caldo de pollo. Reserva.</li><br>
        
                    <li>Para el relleno: Agrega la mantequilla en un sartén, cuando esté derretida añade la cebolla,
                        el ajo, el jitomate y el pimiento. Cocina por 5 minutos. Agrega el pollo, el curry, la salsa
                        inglesa y el sazonador. Mezcla y cocina por 10 minutos. Reserva.</li><br>
        
                    <li>En una olla calienta el aceite a fuego medio. Con ayuda de tus manos forma una bolita de masa
                        y aplasta, formando una tortillita no tan delgada, un poco gruesa y de 5 cm de diámetro. Agrega
                        al aceite y fríe por 8 minutos o hasta que estén doradas. Coloca en un plato extendido con papel
                        absorbente y reserva.</li><br>
        
                    <li>Para el montaje de las enchiladas salvadoreñas: Coloca una enchilada en un plato extendido
                        y cubre con frijoles, posteriormente el pollo, lechuga, jitomate rebanado, pepino, huevo
                        cocido y el queso fresco rallado. Acompaña con agua de sabor y salsa roja.</li>
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