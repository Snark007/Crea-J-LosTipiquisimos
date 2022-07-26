<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipiquisimos</title>
    <link rel="icon" href="../Img/cocina.png">
    <link rel="stylesheet" href="../Css/cuadros.css">
    <link rel="stylesheet" href="../Css/estructura.css">
    <link rel="stylesheet" href="../Css/subir.css">
    <link rel="stylesheet" href="../Css/cuadros.css">

    <link rel="stylesheet" href="../Css/">

    <link rel="stylesheet" href="../Css/translate.css">
    <link rel="stylesheet" href="../Css/menuD.css">
    <script defer src="../Js/menu.js"></script>
    <script defer src="../Js/translate.js"></script>

    <link rel="stylesheet" href="../Css/subirRecetas.css">

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

    <!--BASE-->

    <main class="instructions-container">
        <div class="instructions">
            <h1 class="instructions-title">Quieres subir tus recetas debes realizar los siguientes pasos al pies de la
                letra como te indican.</h1>

            <div class="instructions-pasos">
                <!--Pasos a seguir-->
                <div class="pasos-seguir">
                    <div class="pasos-numero">
                        <div class="num1"><span>1</span></div>
                    </div>
                    <div class="pasos-descripcion">
                        <div class="pasos-titulo">
                            <h3>Llena el formulario que esta en pantalla</h3>
                        </div>
                        <div class="pasos-descripcion">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus possimus eum,
                                exercitationem doloribus quos ratione.</p>
                        </div>
                    </div>
                </div>
                <!--Pasos a seguir-->
                <div class="pasos-seguir">
                    <div class="pasos-numero">
                        <div class="num1"><span>1</span></div>
                    </div>
                    <div class="pasos-descripcion">
                        <div class="pasos-titulo">
                            <h3>Llena el formulario que esta en pantalla</h3>
                        </div>
                        <div class="pasos-descripcion">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus possimus eum,
                                exercitationem doloribus quos ratione.</p>
                        </div>
                    </div>
                </div>
                <!--Pasos a seguir-->
                <div class="pasos-seguir">
                    <div class="pasos-numero">
                        <div class="num1"><span>1</span></div>
                    </div>
                    <div class="pasos-descripcion">
                        <div class="pasos-titulo">
                            <h3>Llena el formulario que esta en pantalla</h3>
                        </div>
                        <div class="pasos-descripcion">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus possimus eum,
                                exercitationem doloribus quos ratione.</p>
                        </div>
                    </div>
                </div>
                <!--Pasos a seguir-->
                <div class="pasos-seguir">
                    <div class="pasos-numero">
                        <div class="num1"><span>1</span></div>
                    </div>
                    <div class="pasos-descripcion">
                        <div class="pasos-titulo">
                            <h3>Llena el formulario que esta en pantalla</h3>
                        </div>
                        <div class="pasos-descripcion">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus possimus eum,
                                exercitationem doloribus quos ratione.</p>
                        </div>
                    </div>
                </div>
                <!--Pasos a seguir-->
                <div class="pasos-seguir">
                    <div class="pasos-numero">
                        <div class="num1"><span>1</span></div>
                    </div>
                    <div class="pasos-descripcion">
                        <div class="pasos-titulo">
                            <h3>Llena el formulario que esta en pantalla</h3>
                        </div>
                        <div class="pasos-descripcion">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus possimus eum,
                                exercitationem doloribus quos ratione.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="form">

            <form action="">
                <div class="wrapper-form">
                    <h2 class="instructions-title">Solicitud de recetas</h2>

                    <div class="form-inputs">
                        
                        <div class="inputs-form">
                            <label for="nombre-receta" class="label-form">Nombre de la receta</label>
                            <input type="text" class="input">
                        </div>
                        <div class="textarea-form">
                            <label for="descripcion-receta" class="label-form">Descripcion</label>
                            <textarea name="" id="" cols="20" rows="5" class="textarea"></textarea>
                        </div>
                        <div class="inputs-form">
                            <label for="nombre-receta" class="label-form">Ingredientes</label>
                            <input type="text" class="input">
                        </div>
                        <div class="textarea-form">
                            <label for="descripcion-receta" class="label-form">Descripcion</label>
                            <textarea name="" id="" cols="20" rows="5" class="textarea"></textarea>
                        </div>
                        <div class="imgs-forms">
                            <label for="img-receta" class="label-form">Imagen</label>
                            <input type="file" class="img-input">
                        </div>
                        
                        <input type="submit" class="submit-form">

                    </div>
                </div>
            </form>

        </div>

    </main>



    <!--PIE DE PAGINA-->
    <footer>
        <div class="contar">
            <img id="final" src="../Img/letras.png" alt="">

        </div>
        <div class="container3">
            <p>&copy; Los Tipiquisimos 2022-Derechos reservados</p>
            <p></p>
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