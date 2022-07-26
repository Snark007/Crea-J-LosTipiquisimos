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
    <title>Empanadas de platano</title>
</head>
<body>
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
            <a href="../Html/Index.html" class="logo-grid">
                <h3 class="logo ">Los Tipiquisimos</h3>
            </a>
            <nav class="nav-hide">
                <a href="../Html/nosotros.html" data-nav="4" >¡Sobre nosotros!</a>
                <a href="../Html/receta.html">
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
                <a href="../Html/subir.html" data-nav="6">¿Quieres subir tu receta?</a>
                <a href="../COMIDAS/Comunidad.html" data-nav="7">Comunidad</a>
            </nav>

            <a href="../Html/Iniciarsecion.html" class="hide-login"><button class="but" data-nav="8" >Iniciar sesión</button></a>

        </div>
    </header>
    <section>
        <div class="recetas">
            <img src="../Comida/empanadas.jpg" alt="">
            <div class="recetas-letras">
                <h1>EMPANADAS DE PLATANO</h1>
                <p>

                    Las empanadas de plátano son una delicia que no puede faltar
                     en la cocina Salvadoreña. Cada familia tiene su manera especial de 
                     prepararlas y sus recetas se pasan de generación en generación. En esta
                      receta convertimos el plátano maduro en un deliciosos puré que se rellena c
                      on Frijoles Rojos Volteados, como resultado unas empanadas dulces y 
                      saladas a la vez, una exquisita comida tradicional.
 

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
                    <li> 10 plátanos maduros</li>
            <li> Media taza de azúcar</li>
            <li> 2 rajitas de canela</li>
            <li> 1 cucharadita de vainilla</li>
            <li> Media taza de leche</li>
            <li> 4 cucharadas de maicena</li>
            <li> 2 cucharaditas de azúcar</li>
            <li> Aceite</li>
               
                </ul>
            </p>
            </div>
            <div class="ingredientes-pasos">
                <h1>Preparación:</h1>
                <ol>
                    <li>Corte cada plátano en cuatro partes. Se vierten cinco tazas de agua en un recipiente hondo junto con el azúcar, la vainilla y la canela.</li><br>
    
                <li>Se deja cocinar a fuego medio por aproximadamente media hora o hasta que los plátanos estén cocidos.</li><br>
    
                <li>Cuando esto suceda se dejan enfriar. Luego en otro recipiente se va agregar la leche y la maicena poco a poco hasta que esté bien diluida. Se le añade un poco de azúcar.</li><br>
    
                <li>Siempre verificando para que no quede muy dulce. Se le añade una cucharadita de vainilla y de canela en polvo. Seguidamente se cocina a fuego medio, siempre revolviendo hasta que espese, empiece a hervir y se deja enfriar.</li><br>

                <li>Se pisan los plátanos con un tenedor hasta que quede una masa. Se toma un poco de la mala y se forman pequeñas tortillitas, a estas tortillitas se le van a poner la leche poleada que esta fría y dura, se cierra la
                     tortillita como un sobre, sellando los bordes para que no se le salga el relleno.</li><br>

                <li>Luego se prosigue a freír cada empanada en aceite caliente hasta que las empanadas estén doraditas.</li><br>

                <li>Listas para disfrutar con un poco de azúcar rociada por encima.</li>
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