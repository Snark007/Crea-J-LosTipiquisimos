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
    <link rel="stylesheet" href="../Css/sobrenosotros.css">
    <link rel="stylesheet" href="../Css/estructura.css">
    <link rel="stylesheet" href="../Css/translate.css">
    <link rel="stylesheet" href="../Css/menuD.css">
    <script defer src="../Js/menu.js"></script>
    <script defer src="../Js/translate_nosotros.js"></script>
</head>

<body>
    <!--MENU-->
    <?php 
     include "hader.php";
     ?>
   <section>
    <div class="container-basic">
        <div class="container-boxes">
            <div class="container-tex">
                <img src="../Img/cocineromejorado_1.png" alt="" class="container-photos">
            </div>
            <div class="container-tex">
                <h1><span data-nosotros="1" >SOBRE NOSOTROS</span></h1>
                <p> <span data-nosotros="2">
                    Nosotros somos Los Tipiquisimos un sitio web, nuestra principal meta es brindar recetas
                    sobre la gastronomía Salvadoreña para que todas las diferentes culturas y países sepan apreciar los
                    sabores de nuestras tierras salvadoreñas. </span>
                </p>
            </div>
        </div>
        <div class="container-boxes">
            <div class="container-tex">
                <h1> <span data-nosotros="3">MISIÓN</span> </h1>
                <p class="box"> <span data-nosotros="4">
                    Dar a conocer la comida salvadoreña brindando recetas de buena calidad 
                    y excelentes pasos, para llegar a recrearlas con el fin de que  las personas
                    puedan  lograr hacer todo tipo de comida típica salvadoreña.</span>
                </p>
            </div>
            <div class="linea">
                <hr>
            </div>
            <div class="container-tex">
                <h1><span data-nosotros="5">VISIÓN</span></h1>
                <p><span data-nosotros="6"> 
                    Ser el mejor website que brinde recetas de comidas tipicas salvadoreñas
                    logrando ser mundialmente conocido y logrando que las personas conozcan la gran variedad 
                    de platillos que se encuentran en nuestro país.</span>
                </p>
            </div>
        </div>
    </section>
    <footer class="bajar">
        <div class="contar">
            <h3 class="log"> <span data-nosotros="7"> Los Tipiquisimos </span></h3>
            <p>&copy; <span data-nosotros="8"> Los Tipiquisimos 2022-Derechos reservados </span></p>
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