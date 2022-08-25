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
    <script defer src="../Js/translate_pupusa.js"></script>
    <title>Pupusa</title>
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
                <h1 class="start"> <span data-pupusa="1">  Recetas de Pupusas.</span></h1>
              
                <br>
                <h2 class="start"> <span data-pupusa="2">Estas son las recetas de pupusas disponibles.</span></h2>
            </div>
        </div>

        <div class="container2">

            <a href="../COMIDAS/pupusas-frijolqueso copy.php">
                <div class="card">
                    <img src="../Comida/pupusas de frijol con queso.jpg">
                    <h4><span data-pupusa="3">Pupusas de frijol con queso.</span></h4>
                    <p><span data-pupusa="4">La pupusa de frijol con queso es una de las variedades de pupusa más populares en El Salvador.</span></p>
                    <div class="ver"><span data-pupusa="5"> Ver más</div>
                </div>
            </a>

            <a href="../COMIDAS/pupusas-REVUELTAS.php">
                <div class="card">
                    <img src="../Comida/pupusas revueltas.jpg">
                    <h4><span data-pupusa="6">Pupusas revueltas</span></h4>
                    <p><span data-pupusa="7">Este sabroso plato salvadoreño se sirve a menudo con una ensalada de repollo tradicional llamada curtido.</span></p>
                    <div class="ver"> <span data-pupusa="8">Ver más</span></div>
                </div>
            </a>

            <a href="../COMIDAS/pupusaqueso.php">
                <div class="card">
                    <img src="../Comida/pupusa de quesos.jpeg">
                    <h4><span data-pupusa="9">Pupusas de queso</span></h4>
                    <p><span data-pupusa="10">Las pupusas son la comida típica salvadoreña por excelencia.</span></p><br>
                    <div class="ver"> <span data-pupusa="11">Ver más</span></div>
                </div>
            </a>
    </section>
    <!--::::Pie de Pagina::::::-->
    <footer>
        <div class="contar">
            <h3 class="log"><span data-pupusa="12">Los Tipiquisimos</span></h3>
            <p>&copy; <span data-pupusa="13">Los Tipiquisimos 2022-Derechos reservados</span></p>
        </div>
        <div class="container3">
            <a href="https://www.facebook.com/Los-Tipiquisimos-110215061699961/?ref=page_internal"><img src="../Img/facebook.png" alt="" class="Photographs"></a><br>
            <a href="https://www.instagram.com/los_tipiquisimos.sv/"><img src="../Img/instagram.png" alt="" class="Photographs"></a><br>
            <a href="https://twitter.com/Tipiquisimos503"><img src="../Img/twitter.png" alt="" class="Photographs"></a><br>
        </div>
    </footer>
</body>

</html>