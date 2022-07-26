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
    <title>Arroz con leche</title>
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
            <img src="../Comida/arroz-con-leche.jpg" alt="">
            <div class="recetas-letras">
                <h1>ARROZ CON LECHE</h1>
                <p>
                    El arroz con leche es un postre casero y cremoso elaborado 
                    principalmente con arroz y leche, como su nombre indica. 
                    Su receta original es disfrutada en prácticamente cualquier lugar 
                    del mundo, lo que también ha dado lugar a algunas variedades sobre el 
                    postre tradicional. Aunque normalmente se consume de último en el menú y para
                     cerrar la velada , en algunos países europeos se sirve como desayuno, ya que es 
                     muy similar a las gachas de arroz.
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
                    <li> 4 tazas de leche</li>
            <li> 6 tazas de agua</li>
            <li> 1 taza de azúcar</li>
            <li> 1/3 taza de arroz de grano largo</li>
            <li> 4 canela en rama</li>
            <li> 2 cucharadas de mantequilla</li>
            <li> 1 pizca de sal</li>
            <li> 1/8 cucharadita de nuez moscada en polvo</li>
            <li> ¼ taza de pasas</li>
                </ul>
            </p>
            </div>
            <div class="ingredientes-pasos">
                <h1>Preparación:</h1>
                <ol>
                    <li>Preparación previa: Empapa el arroz en una mezcla de 1 taza de leche y 1 de agua y pon el refrigerador por unas horas antes.

                    </li><br>
    
                <li>Esto te ahorrará tiempo de cocción.

                </li><br>
    
                <li>Pon las 4 tazas restantes de agua en un caldero y pon al fuego, agrega la canela y la sal.

                </li><br>
    
                <li>Lleva ebullición y después agrega el arroz (con el líquido en que estaba remojado).

                </li><br>

                <li>Revuelve regularmente para evitar que se adhiera al fondo.

                </li><br>

                <li>Ajusta el agua cuando sea necesario y cuando el arroz esté muy blando agrega la leche y la mitad del azúcar.

                </li><br>

                <li>Cuando empiece a hervir agrega las pasas y el azúcar restante.

                </li><br>

                <li>Cuando tenga una consistencia muy espesa, casi sólida, retira del fuego y vierte inmediatamente en tazones pequeños o copas para helado.

                </li><br>

                <li>Espolvorea con nuez moscada moscada molida y deja refrescar.

                </li><br>

                <li>Pon en el refrigerador por 30 minutos antes de servir.</li>
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