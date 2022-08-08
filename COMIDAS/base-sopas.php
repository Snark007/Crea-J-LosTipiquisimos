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
    <script defer src="../Js/translate_sopa.js"></script>
    <title>Sopas</title>
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
                <h1 class="start"> <span data-sopa="1"> Recetas de Sopas</span></h1>
              
                <br>
                <h2 class="start"><span data-sopa="2">Estas son las recetas de sopas tipicas disponibles.</span></h2>
            </div>
        </div>

        <div class="container2">

        <a href="../COMIDAS/sopa-res.php"> <div class="container2">
            <div class="card">
                <img src="../Comida/sopa de res.jpg">
                <h4><span data-sopa="3">Sopa de res</span></h4>
                <p><span data-sopa="4">Es muy popular y su elaboración ha pasado de generación en generación convirtiéndose en una tradición.</span></p>
                <div class="ver"> <span data-sopa="5">Ver más</span></div>
            </div></a>

            <a href="../COMIDAS/sopa-frijoles.php"><div class="card">
                <img src="../Comida/sopa-de-frijole.jpg">
                <h4><span data-sopa="6">Sopa de frijoles</span></h4>
                <p> <span data-sopa="7">Este plato contiene elementos principales de las comidas salvadoreñas como el frijol rojo.</span></p>
                <div class="ver"><span data-sopa="8"> Ver más</span></div>
            </div></a>

            <a href="../COMIDAS/sopade pollo.html"> <div class="card">
                <img src="../Comida/gallina.jpg">
                <h4><span data-sopa="9">Sopa de gallina</span></h4>
                <p><span data-sopa="10">El caldo de pollo es una sopa a menudo se sirve con trozos de carne de pollo.</span></p>
                <div class="ver"><span data-sopa="11"> Ver más</span></div>
            </div></a>
    </section>
    <!--::::Pie de Pagina::::::-->
    <footer>
        <div class="contar">
            <h3 class="log"><span data-sopa="12">Los Tipiquisimos</span></h3>
            <p>&copy;<span data-sopa="13"> Los Tipiquisimos 2022-Derechos reservados</span></p>
        </div>
        <div class="container3">
            <a href="https://www.facebook.com/Los-Tipiquisimos-110215061699961/?ref=page_internal"><img src="../Img/facebook.png" alt="" class="Photographs"></a><br>
            <a href="https://www.instagram.com/los_tipiquisimos.sv/"><img src="../Img/instagram.png" alt="" class="Photographs"></a><br>
            <a href="https://twitter.com/Tipiquisimos503"><img src="../Img/twitter.png" alt="" class="Photographs"></a><br>
        </div>
    </footer>
</body>

</html>