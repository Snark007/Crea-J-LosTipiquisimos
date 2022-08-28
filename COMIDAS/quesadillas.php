<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/stilo.css">
    <link rel="icon" href="../Img/cocina.png">
    <link rel="stylesheet" href="../Css/estructura.css">
    <link rel="stylesheet" href="../Css/translate.css">
    <link rel="stylesheet" href="../Css/menuD.css">
    <script defer src="../Js/menu.js"></script>
    <script defer src="../Js/translate_recetas-quesadilla.js"></script>
    <title>Quesadillas</title>
</head>

<body>
    <!--MENU-->
    <?php
    include "../Html/hader.php";
    ?>
    <!--BASE-->
    <section>
        <div class="recetas">
            <img src="../Comida/quesadillaas.jpg" alt="">
            <div class="recetas-letras">
                <h1><span data-quesadilla="1">QUESADILLAS<span></h1>
                <p>
                <span data-quesadilla="2">
                    La quesadilla salvadoreña es un pan dulce, similar a un bizcocho, hecho con harina de arroz y queso duro blanco y cubierto con semillas de sésamo, 
                    que es popular en El Salvador. Se suele servir con café como parte del desayuno o como merienda. Se hornea tradicionalmente los domingos por la mañana.
                    <span>
                </p>
            </div>
        </div>
        <div class="linea">
            <hr>
        </div>
        <div class="ingredientes">
            <div class="ingredientes2">
                <h1><span data-quesadilla="3">Ingredientes:<span></h1>
                <p>
                <ul type="square">
                    <li><span data-quesadilla="4"> ¾ taza mantequilla (1 ½ barra de mantequilla) a temperatura ambiente<span></li>
            <li><span data-quesadilla="5">2 tazas azúcar granulada<span></li>
            <li><span data-quesadilla="6"> 4 huevos grandes<span></li>
            <li><span data-quesadilla="7"> ¾ taza leche<span></li>
            <li><span data-quesadilla="8"> ¼ taza Crema Salvadoreña Tropical<span></li>
            <li><span data-quesadilla="9">2 tazas harina todo uso<span></li>
            <li><span data-quesadilla="10">2 cucharaditas levadura en polvo<span></li>
            <li> <span data-quesadilla="11">¼ cucharadita sal<span></li>
            <li><span data-quesadilla="12"> 8oz Queso Fresco Salvadoreño Tropical desmenuzado (2 tazas)<span></li>
            <li> <span data-quesadilla="13">1 cucharada semillas de sésamo<span></li>

                </ul>
                </p>
            </div>
            <div class="ingredientes-pasos">
                <h1><span data-quesadilla="14">Preparación:<span></h1>
                <ol>
                    <li><span data-quesadilla="15">Precalentar el horno a 350°F. En un recipiente grande, con un mezclador eléctrico, une mantequilla y azúcar hasta
                        que la mezcla aparezca ligera y cremosa. Añade los huevos, leche, y la crema Centroamericana Tropical; mezclar bien.<span></li><br>
       
                   <li><span data-quesadilla="16">En un recipiente pequeño mezcla la harina, levadura en polvo, y sal. Añade esta combinación a la anterior de huevo,
                        hasta que estén bien mezclados. Añade el Queso Fresco Tropical y mezclar bien.<span></li><br>
       
                   <li><span data-quesadilla="17">Engrasar dos cacerolas de hornear redondas de 8”. Añade la masa a las cacerolas. Espolvorea cada barra de pan con semillas de sésamo.
                        Hornear por 40 minutos hasta que puedas introducir un palillo al centro del pan y salga limpio.<span></li><br>
       
                   <li><span data-quesadilla="18">Luego sirve y disfruta.<span></li>

                </ol>
            </div>
        </div>
    </section>
    <!--::::Pie de Pagina::::::-->
    <footer>
        <div class="contar">
            <h3 class="log">Los Tipiquisimos</h3>
            <p>&copy;<span data-quesadilla="19"> Los Tipiquisimos 2022-Derechos reservados<span></p>
        </div>
        <div class="container3">
            <a href="https://www.facebook.com/Los-Tipiquisimos-110215061699961/?ref=page_internal"><img src="../Img/facebook.png" alt="" class="Photographs"></a><br>
            <a href="https://www.instagram.com/los_tipiquisimos.sv/"><img src="../Img/instagram.png" alt="" class="Photographs"></a><br>
            <a href="https://twitter.com/Tipiquisimos503"><img src="../Img/twitter.png" alt="" class="Photographs"></a><br>
        </div>
    </footer>
</body>

</html>