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
    <script defer src="../Js/translate_atoles.js"></script>
    <title>Atoles</title>
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
                <h1 class="start"> <span data-atoles="1"> Recetas de Atoles.</span></h1>
              
                <br>
                <h2 class="start"><span data-atoles="2">Estas son las recetas de atoles tipicos disponibles.</span></h2>
            </div>
        </div>

        <div class="container2">

 <a href="../COMIDAS/atolpiñuela.php"> <div class="card">
    <img src="../Comida/atol-de-piñuela.jpg">
    <h4><span data-atoles="3">Atol Piñuela.</span></h4>
    <p><span data-atoles="4">El sabroso y tradicional Atol de Piñuela, es otra de las ricas variedades de atoles que tenemos. </span></p>

    <div class="ver"><span data-atoles="5"> Ver más</span></div>
      
</div></a>

<a href="../COMIDAS/atolelote.php"> <div class="card">
    <img src="../Comida/Atol-de-elote.jpg">
    <h4><span data-atoles="6">Atol de Elote.</span></h4>
    <p> <span data-atoles="7">El atol de elote es una deliciosa bebida dulce hecha de maíz.</span></p><br>

    <div class="ver"> <span data-atoles="8">Ver más</span></div>
</div></a>

<a href="../COMIDAS/atol-de-maiz-tostado.php"> <div class="card">
    <img src="../Comida/Atol-de-Maiz-Tostado.jpg">
    <h4><span data-atoles="9">Atol de maíz tostado.</span></h4>
    <p><span data-atoles="10">El atol de maíz tostado es muy rico y es uno de los atoles mas deseados por todos los salvadoreños.</span></p>

    <div class="ver"><span data-atoles="11"> Ver más</span></div>
</div> </a>
</section>
    <!--::::Pie de Pagina::::::-->
    <footer>
        <div class="contar">
            <h3 class="log"> <span data-atoles="12">  Los Tipiquisimos</span></h3>
            <p>&copy; <span data-atoles="13">  Los Tipiquisimos 2022-Derechos reservados</span></p>
        </div>
        <div class="container3">
            <a href="https://www.facebook.com/Los-Tipiquisimos-110215061699961/?ref=page_internal"><img src="../Img/facebook.png" alt="" class="Photographs"></a><br>
            <a href="https://www.instagram.com/los_tipiquisimos.sv/"><img src="../Img/instagram.png" alt="" class="Photographs"></a><br>
            <a href="https://twitter.com/Tipiquisimos503"><img src="../Img/twitter.png" alt="" class="Photographs"></a><br>
        </div>
    </footer>
</body>

</html>