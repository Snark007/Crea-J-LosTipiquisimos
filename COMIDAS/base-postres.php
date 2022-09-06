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
    <link rel="stylesheet" href="../Css/estructura.css">
    <link rel="icon" href="../Img/cocina.png">
    <link rel="stylesheet" href="../Css/translate.css">
    <link rel="stylesheet" href="../Css/menuD.css">
    <link rel="stylesheet" href="../Css/bases.css">
    <script defer src="../Js/menu.js"></script>
    <script defer src="../Js/translate_postre.js"></script>
    <title>Postres</title>
</head>

<body>
    <!--MENU-->
    <?php
    include "../php/hader.php";
    ?>
    <!--BASE-->

    <section class="baja">
        <div class="basic">
            <div class="top">  
                <h1 class="start"> <span data-postre="1">Recetas de Postres</span> </h1>
              
                <br>
                <h2 class="start"><span  data-postre="2">Estas son las recetas de postres tipicos disponibles.</span> </h2>
            </div>
        </div>

        <div class="container2">


<a href="../COMIDAS/arrozconleche.php"> <div class="card">
    <img src="../Comida/arroz-con-leche.jpg">
    <h4><span data-postre="3">Arroz con leche </span> </h4>
    <p><span  data-postre="4">El arroz con leche es un postre típico hecho cociendo lentamente arroz con leche y azúcar.</span>  </p>
    <div class="ver"><span  data-postre="5"> Ver más</span> </div>
</div></a>

<a href="../COMIDAS/quesadillas.php"> <div class="card">
    <img src="../Comida/quesadillaas.jpg">
    <h4><span  data-postre="6">Quesadilla</span> </h4>
    <p><span  data-postre="7">La quesadilla es un platillo mexicano que consiste en una tortilla de maíz, o también de trigo</span> </p>
    <div class="ver"><span  data-postre="8"> Ver más</span> </div>
</div></a>

<a href="../COMIDAS/empanadas-platano.php"> <div class="card">
    <img src="../Comida/empanadas.jpg">
    <h4><span  data-postre="9">Empanadas de plátano</span> </h4>
    <p><span  data-postre="10">Es un dulce económico y fácil de hacer ideal para hacer una merienda rápida. No puedes dejar de probarlo.</span> </p>
    <div class="ver"><span  data-postre="11"> Ver más</span> </div>
</div></a>
</section>
    <!--::::Pie de Pagina::::::-->
    <footer>
        <div class="contar">
            <h3 class="log"><span  data-postre="12">Los Tipiquisimos</span> </h3>
            <p>&copy; <span data-postre="13">Los Tipiquisimos 2022-Derechos reservados</span></p>
        </div>
        <div class="container3">
            <a href="https://www.facebook.com/Los-Tipiquisimos-110215061699961/?ref=page_internal"><img src="../Img/facebook.png" alt="" class="Photographs"></a><br>
            <a href="https://www.instagram.com/los_tipiquisimos.sv/"><img src="../Img/instagram.png" alt="" class="Photographs"></a><br>
            <a href="https://twitter.com/Tipiquisimos503"><img src="../Img/twitter.png" alt="" class="Photographs"></a><br>
        </div>
    </footer>
</body>

</html>