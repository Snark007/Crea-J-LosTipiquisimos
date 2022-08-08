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
    <script defer src="../Js/translate_navidad.js"></script>
    <title>Navideña</title>
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
                <h1 class="start"><span data-navideña="1">Recetas Navideñas</span></h1>
              
                <br>
                <h2 class="start"> <span data-navideña="2">Estas son las recetas de comidas tipicos Navideñas disponibles</span></h2>
            </div>
        </div>

        <div class="container2">

            <a href="../COMIDAS/tamales-pollo.php"> <div class="card">
                <img src="../Comida/tamales-de-pollo.jpg">
                <h4><span  data-navideña="3">Tamales de Pollo</span></h4>
                <p><span data-navideña="4">Este delicioso platillo se prepara con masa, recaudo, pollo, papas, aceitunas y sal al gusto.</span></p>
                <div class="ver"><span data-navideña="5">Ver más </span></div>
            </div></a>

            <a href="../COMIDAS/panes-pollo.php"> <div class="card">
                <img src="../Comida/pan-pollo.jpg">
                <h4><span data-navideña="6">Pan con Pollo</span></h4>
                <p> <span data-navideña="7"> Muy ricos aperitivos de El Salvador que podemos degustar de forma tradicional en las fiestas decembrinas.</span></p>
                <div class="ver"><span data-navideña="8"> Ver más </span></div>
            </div></a>

            <a href="../COMIDAS/Pavo-salsa.php"> <div class="card">
                <img src="../Comida/pavo en salsa.jpg">
                <h4><span data-navideña="9"> Pavo en salsa</span></h4>
                <p><span data-navideña="10"> Sabroso pavo al estilo de El Salvador para disfrutar en las fiestas decembrinas.</span></p>
                <div class="ver"><span data-navideña="11">Ver más</span> </div>
            </div></a>
    </section>

    <!--::::Pie de Pagina::::::-->
    <footer>
        <div class="contar">
            <h3 class="log"> <span data-navideña="12"> Los Tipiquisimos</span></h3>
            <p>&copy; <span data-navideña="13"> Los Tipiquisimos 2022-Derechos reservados </span></p>
        </div>
        <div class="container3">
            <a href="https://www.facebook.com/Los-Tipiquisimos-110215061699961/?ref=page_internal"><img src="../Img/facebook.png" alt="" class="Photographs"></a><br>
            <a href="https://www.instagram.com/los_tipiquisimos.sv/"><img src="../Img/instagram.png" alt="" class="Photographs"></a><br>
            <a href="https://twitter.com/Tipiquisimos503"><img src="../Img/twitter.png" alt="" class="Photographs"></a><br>
        </div>
    </footer>
</body>

</html>