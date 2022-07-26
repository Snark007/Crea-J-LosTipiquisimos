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
    <title>Jocotes en miel</title>
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
            <img src="../Comida/jocostes-en-miel.jpg" alt="">
            <div class="recetas-letras">
                <h1>JOCOTES EN MIEL</h1>
                <p>

                    Si de comidas deliciosas y postres típicos de El Salvador se puede 
                    hablar definitivamente se tienen que nombrar los jocotes en miel, plato 
                    exquisito propio de la temporada del verano, de hecho los salvadoreños acostumbran
                     a realizar este dulce en temporada de cuaresma (Semana Santa). La combinación de 
                     sabores al paladar se hace realmente interesante a la hora de degustar este rico postre.
                      Asíque te invitamos a prepararlo en casa con la receta que te presentaremos.

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
                    <li>30 jocotes</li>
                    <li> 2 litros de agua</li>
                    <li> 1 dulce de atado (panela) ó 1 lb de azúcar</li>
                    <li> Canela al gusto</li>
                    <li> 2/3 taza de ceniza</li>
               
                </ul>
            </p>
            </div>
            <div class="ingredientes-pasos">
                <h1>Preparación:</h1>
                <ol>
                    <li>Prepare una mezcla de agua para agregar la ceniza. Posteriormente hervirla. Cuando el agua rompa el hervor agregue los jocotes.</li><br>
    
                    <li>Una vez vea que los jocotes se han agrietado sáquelos del agua y quíteles la cáscara con la mano. Cuando los haya pelado corte en cruz sin quitar la semilla y resérvelos para próximo paso.</li><br>
        
                    <li>En otra olla ponga a hervir a fuego lento el agua con el dulce de atado y la canela. Agregue los jocotes ya pelados y déjelos cocinar durante una hora.</li><br>
        
                    <li>Revise si la miel ya está conservada. Sino déjela hasta conservar. La ceniza permite pelar mejor los jocotes, que éstos no pierdan su textura ni su tamaño.</li><br>
    
                    <li>Recomendación: Seleccionar jocotes de tipo ácido (en Semana Santa). También puede hacerse del tipo dulce de invierno (de junio hasta agosto). No se recomienda hacerlo del de corona (de agosto a septiembre).</li>
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