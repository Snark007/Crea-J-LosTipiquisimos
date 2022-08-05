<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/stilo-plantilla.css">
    <link rel="stylesheet" href="../Css/cuadros.css">
    <link rel="stylesheet" href="../Css/estructura.css">
    <link rel="stylesheet" href="../Css/translate.css">
    <link rel="stylesheet" href="../Css/menuD.css">
    <link rel="stylesheet" href="../Css/bases.css">
    <script defer src="../Js/menu.js"></script>
    <script defer src="../Js/translate.js"></script>
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
                <h1 class="start">Recetas de comida</h1>
              
                <br>
                <h2 class="start">Estas son las recetas de comidas tipicos disponibles.</h2>
            </div>
        </div>

        <div class="container2">

            <a href="../COMIDAS/yuca frita.php"> <div class="card">
                <img src="../Comida/yuca.jpg">
                <h4>Yuca frita</h4>
                <p>La yuquita frita sin lugar a duda es el aperitivo perfecto para acompañar una rica comida. </p>
                <div class="ver"> Ver más</div>
            </div></a>

            <a href="../COMIDAS/pastelitos.php"><div class="card">
                <img src="../Comida/pastelitos.jpg">
                <h4>Pastelitos</h4>
                <p> son un tipo de empanadas rellenas, fritas, suculentas y crujientes.</p><br>
                <div class="ver"> Ver más</div>
            </div></a>

            <a href="../COMIDAS/enchiladas.php"><div class="card">
                <img src="../Comida/enchiladas.jpg">
                <h4>Enchiladas</h4>
                <p>Las enchiladas salvadoreñas son un plato muy típico de la cocina de El Salvador.</p>
                <div class="ver"> Ver más</div>
            </div></a> 
    </section>

    <!--::::Pie de Pagina::::::-->
    <footer>
        <div class="contar">
            <h3 class="log">Los Tipiquisimos</h3>
            <p>&copy; Los Tipiquisimos 2022-Derechos reservados</p>
        </div>
        <div class="container3">
            <a href="https://www.facebook.com/Los-Tipiquisimos-110215061699961/?ref=page_internal"><img src="../Img/facebook.png" alt="" class="Photographs"></a><br>
            <a href="https://www.instagram.com/los_tipiquisimos.sv/"><img src="../Img/instagram.png" alt="" class="Photographs"></a><br>
            <a href="https://twitter.com/Tipiquisimos503"><img src="../Img/twitter.png" alt="" class="Photographs"></a><br>
        </div>
    </footer>
</body>

</html>