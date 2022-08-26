<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../Img/cocina.png">
    <link rel="stylesheet" href="../Css/stilo-plantilla.css">
    <link rel="stylesheet" href="../Css/cuadros.css">
    <link rel="icon" href="../Img/cocina.png">
    <link rel="stylesheet" href="../Css/estructura.css">
    <link rel="stylesheet" href="../Css/translate.css">
    <link rel="stylesheet" href="../Css/menuD.css">
    <link rel="stylesheet" href="../Css/bases.css">
    <script defer src="../Js/menu.js"></script>
    <script defer src="../Js/translate_santa.js"></script>
    <title>Semana Santa</title>
</head>

<body>
    <!--MENU-->
    <?php
    include "../Html/hader.php";
    ?>
    <!--BASE-->

    <section class="baja">
        <div class="basic">
            <div class="top">
                <h1 class="start"><span data-santa="1"> Recetas de Semana Santa</span></h1>

                <br>
                <h2 class="start"><span  data-santa="2">Estas son las recetas de semana Santa tipicas disponibles.</span> </h2>
            </div>
        </div>

        <div class="container2">


            <a href="../COMIDAS/torrejas-miel.php">
                <div class="card">
                    <img src="../Comida/torrrejas en mienl.jpg">
                    <h4> <span data-santa="3"> Torrejas en miel </span></h4>
                    <p> <span data-santa="4"> Las torrejas salvadoreñas son un platillo típico que no puede faltar en Semana Santa</span></p>
                    <div class="ver"> <span data-santa="5"> Ver más </span></div>
                </div>
            </a>

            <a href="../COMIDAS/pescado calzado.php">
                <div class="card">
                    <img src="../Comida/pescado calzado.jpg">
                    <h4> <span data-santa="6"> Tortas de pescado</span></h4>
                    <p> <span data-santa="7"> Este platillo muy característico de la época de Semana Santa en el país </span></p><br>
                    <div class="ver"> <span data-santa="8"> Ver más </span></div>
                </div>
            </a>

            <a href="../COMIDAS/jocotes-miel.php">
                <div class="card">
                    <img src="../Comida/jocostes-en-miel.jpg">
                    <h4> <span data-santa="9"> Jocotes en miel </span></h4>
                    <p> <span data-santa="10"> Los jocotes en miel son unas de las comidas dulces más deliciosas de Semana Santa </span></p>
                    <div class="ver"> <span data-santa="11"> Ver más </span></div>
                </div>
            </a>
    </section>
    <!--::::Pie de Pagina::::::-->
    <footer>
        <div class="contar">
            <h3 class="log"> <span data-santa="12"> Los Tipiquisimos </span></h3>
            <p>&copy; <span data-santa="13"> Los Tipiquisimos 2022-Derechos reservados</span></p>
        </div>
        <div class="container3">
            <a href="https://www.facebook.com/Los-Tipiquisimos-110215061699961/?ref=page_internal"><img src="../Img/facebook.png" alt="" class="Photographs"></a><br>
            <a href="https://www.instagram.com/los_tipiquisimos.sv/"><img src="../Img/instagram.png" alt="" class="Photographs"></a><br>
            <a href="https://twitter.com/Tipiquisimos503"><img src="../Img/twitter.png" alt="" class="Photographs"></a><br>
        </div>
    </footer>
</body>

</html>