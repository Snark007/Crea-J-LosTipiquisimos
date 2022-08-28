<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipiquisimos</title>
    <link rel="icon" href="../Img/cocina.png">
    <link rel="stylesheet" href="../Css/estructura.css">
    <link rel="stylesheet" href="../Css/translate.css">
    <link rel="stylesheet" href="../Css/menuD.css">
    <script defer src="../Js/menu.js"></script>
    <script defer src="../Js/translate_index.js"></script>
</head>

<body>
    <!--MENU-->
    <?php
    include "hader.php";
    ?>
    <!--BASE-->

    <div class="container-slider">
        <div class="boton">
            <img src="../icons/chevron-up-arrow.svg" alt="" class="flecha invertido izquierda">
            <img src="../icons/chevron-up-arrow.svg" alt="" class="flecha derecha">
        </div>
        <div class="slider">
            <section id="hero">
                <h1><span data-index="1">Recetas Fáciles</span><br><span data-index="2">¡Animate a Cocinar!</span></h1>
            </section>
            <section id="hero">
                <h1><span data-index="3">Casate con alguien que cocine rico</span><br><span data-index="4">la belleza se acaba el hambre no</span></h1>
            </section>
            <section id="hero">
                <h1><span data-index="5"> Los abdominales son temporales</span><br> <span data-index="6">El chocolate es para siempre</span></h1>
            </section>
            <section id="hero">
                <h1><span data-index="7">La que cocina no está</span><br><span data-index="8">pero la que está no cocina</span></h1>
            </section>
            <section id="hero">
                <h1><span data-index="9">Lo único que me gusta más que hablar</span><br><span data-index="10">de comida es comer</span></h1>
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
                    <img src="../Comida/pisque.jpg" alt="">
                    <img src="../Comida/riguas.jpg" alt="">
                </div>

                <div class="res-des basicc">
                    <div class="global">
                        <div class="container_aroow">
                        <h2 class="h2-sub">
                            <span class="disco-titulo" data-index="11">Descubre</span>
                        </h2>
                        <h1 class="disco-titulo2"><span data-index="12">La Historia</span></h1>
                        <div class="circle">
                        </div>
                    </div>
                    </div>
                    <div class="container_aroo">
                    <p> <span data-index="13">
                            Los Tipiquisimos es un sitio web que
                            pretende ayudar a las personas que <br> quieran
                            aprender sobre la gastronomia Salvadoreña</span>
                    </p>
                    </div>
                    <a href="../Html/nosotros.php" class="cta-btn"><span data-index="14">Nosotros</span></a>
                </div>

            </div>
        </div>
    </section>

    <section>
        <div class="ahh">
            <div class="letras-ahh">
                <div class="letras-ahh-n">
                    <h2><span data-index="15"> Lo mejor de la comida</span></h2>
                    <h1><span data-index="16">Salvadoreña</span> </h1>
                </div>
            </div>
        </div>
    </section>

    <section class="disco">
        <div class="disco-container">
            <div class="disco-informacion">
                <div class="disco-informacion-texto">
                    <h2 class="disco-titulo"><span data-index="17">Descubre tu talento </span></h2>
                    <p class="disco-titulo2"><span data-index="18">en la cocina </span></p><br>
                </div>
                <div class="disco-descripcion">
                    <p class="bajar"><span data-index="19"> Podras subir tus recetas de comida de el salvador y demostrar
                         tus habilidades en la cocina</span> <br> <span  data-index="20">para que los demas usuarios puedan recrear tus recetas</span> </p><br>
                    <a class="disco-boton" href="../Html/subir.php"><span data-index="21">subir mi receta</span></a>
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
            <h3 class="log"><span data-index="22">Los Tipiquisimos</span> </h3>
            <p>&copy; <span data-index="23">Los Tipiquisimos 2022-Derechos reservados</span></p>
        </div>
        <div class="container3">
            <a href="https://www.facebook.com/Los-Tipiquisimos-110215061699961/?ref=page_internal"><img src="../Img/facebook.png" alt="" class="Photographs"></a><br>
            <a href="https://www.instagram.com/los_tipiquisimos.sv/"><img src="../Img/instagram.png" alt="" class="Photographs"></a><br>
            <a href="https://twitter.com/Tipiquisimos503"><img src="../Img/twitter.png" alt="" class="Photographs"></a><br>
        </div>
    </footer>

    <script src="../Js/slider.js"></script>

</body>

</html>