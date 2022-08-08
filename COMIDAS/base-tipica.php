<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../Img/cocina.png">
    <link rel="stylesheet" href="../Css/stilo-plantilla.css">
    <link rel="stylesheet" href="../Css/cuadros.css">
    <link rel="stylesheet" href="../Css/estructura.css">
    <link rel="stylesheet" href="../Css/translate.css">
    <link rel="stylesheet" href="../Css/menuD.css">
    <link rel="stylesheet" href="../Css/bases.css">
    <script defer src="../Js/menu.js"></script>
    <script defer src="../Js/translate_tipica.js"></script>
    <title>Comida</title>
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
                <h1 class="start"><span data-tipica="1" >Recetas de comida</span></h1>
              
                <br>
                <h2 class="start"><span data-tipica="2">Estas son las recetas de comidas tipicos disponibles.</span> </h2>
            </div>
        </div>

        <div class="container2">

            <a href="../COMIDAS/yuca frita.php"> <div class="card">
                <img src="../Comida/yuca.jpg">
                <h4><span data-tipica="3">Yuca frita</span></h4>
                <p><span data-tipica="4">La yuquita frita sin lugar a duda es el aperitivo perfecto para acompañar una rica comida.</span> </p>
                <div class="ver"> <span data-tipica="5">Ver más</span></div>
            </div></a>

            <a href="../COMIDAS/pastelitos.php"><div class="card">
                <img src="../Comida/pastelitos.jpg">
                <h4> <span data-tipica="6"> Pastelitos</span></h4>
                <p> <span data-tipica="7">son un tipo de empanadas rellenas, fritas, suculentas y crujientes.</span></p><br>
                <div class="ver"> <span data-tipica="8">Ver más</span></div>
            </div></a>

            <a href="../COMIDAS/enchiladas.php"><div class="card">
                <img src="../Comida/enchiladas.jpg">
                <h4><span data-tipica="9">Enchiladas</span></h4>
                <p><span data-tipica="10">Las enchiladas salvadoreñas son un plato muy típico de la cocina de El Salvador.</span></p>
                <div class="ver"> <span data-tipica="11">Ver más</span></div>
            </div></a> 
    </section>

    <!--::::Pie de Pagina::::::-->
    <footer>
        <div class="contar">
            <h3 class="log"><span data-tipica="12">Los Tipiquisimos</span></h3>
            <p>&copy; <span data-tipica="13">Los Tipiquisimos 2022-Derechos reservados</span></p>
        </div>
        <div class="container3">
            <a href="https://www.facebook.com/Los-Tipiquisimos-110215061699961/?ref=page_internal"><img src="../Img/facebook.png" alt="" class="Photographs"></a><br>
            <a href="https://www.instagram.com/los_tipiquisimos.sv/"><img src="../Img/instagram.png" alt="" class="Photographs"></a><br>
            <a href="https://twitter.com/Tipiquisimos503"><img src="../Img/twitter.png" alt="" class="Photographs"></a><br>
        </div>
    </footer>
</body>

</html>