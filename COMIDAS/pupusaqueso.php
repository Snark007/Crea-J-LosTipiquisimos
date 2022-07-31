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
            <img src="../Comida/pupusa.jpg" alt="">
            <div class="recetas-letras">
                <h1>PUPUSA DE QUESO</h1>
                <p>
                    Las pupusas son el plato típico de El Salvador y muy popular en Honduras. Esta delicia muestra la versatilidad del maíz
                    como producto básico en la cocina de los países mesoamericanos. Se pueden comparar con las gorditas de maíz mexicanas o 
                    las arepas rellenas, pero los rellenos y la cocción son diferentes. La principal diferencia es que las pupusas se rellenan 
                    antes de cocerse y las gorditas y arepas se rellenan después de cocidas. Esto da a las pupusas una rica combinación del sabor del 
                    maíz con el relleno con el que se cocina, comúnmente queso, frijoles o chicharrones.
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
                    <li> Medio kilo de harina de maíz o de arroz</li>
                    <li> Agua tibia</li>
                    <li> Quesillo</li>
                    <li> Sal</li>
                    <li> Aceite</li>
                </ul>
            </p>
            </div>
            <div class="ingredientes-pasos">
                <h1>Preparación:</h1>
                <ol>
                   <li> El primer paso a realizar, es la elaboración de la masa, para lo que necesitaremos una taza, donde servirás  
                    Medio kilo de harina de maíz o arroz  ( o la cantidad que gustes, al final nunca es mucha) y agrega agua tibia. 
                    Para unir ambos ingredientes, debes usar tus manos, amasando constantemente para que no queden grumos.
                </li><br>
                <li>Si al amasar notamos que la masa está algo dura, agregaremos un poco más de agua junto con algo de sal para dar sabor. 
                    Finalmente, nuestra masa no debe quedar ni tan aguada ni tan dura, de modo que puedas hacer una pelotita con ella y no se 
                    desmorone.
                </li><br>
                   <li>
                   tener un envase con agua y aceite, el cual te ayudará a dar forma a las pupusas, de manera que la masa no se pegue a tus manos. 
                    Ahora, con las manos humedecidas, debes tomar una pelotita de masa y con ambas manos la vas aplanando hasta que quede como una 
                    tortilla.
                </li><br>
                <li>
                    Mientras das forma a la masa, debes ir humedeciendo tus manos en el agua. Si se te hace complicado, puedes utilizar tus dedos 
                    para hacer en el centro una pequeña hendidura, donde colocarás el relleno. Tomando un poco de quesillo.
                </li><br>
                <li>
                    Una vez que has colocado el relleno, se procede a envolver, dando forma de esférica. Finalmente, vuelves a aplanar y se coloca 
                    la pupusa en un comal o plancha bien caliente.  Después de un rato, debes voltear con una espátula, de forma que no se pasen de 
                    cocción. Eso sí, cada vez que des vuelta a las pupusas debes mojar la espátula en el agua con aceite, así será más fácil. 
                    Con esto, ya estás listo para degustar unas ricas pupusas totalmente salvadoreñas.   
                </li><br>
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