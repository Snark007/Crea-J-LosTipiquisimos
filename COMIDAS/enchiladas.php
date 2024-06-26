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
    <link rel="stylesheet" href="../Css/translate.css">
    <link rel="stylesheet" href="../Css/menuD.css">
    <script defer src="../Js/menu.js"></script>
    <script defer src="../Js/translate_recetas-enchilada.js"></script>
    <title>Enchiladas</title>
</head>


    <body>
        <!--MENU-->
    <?php
    include "../php/hader.php";
    ?>
    <!--BASE-->
        <section>
            <div class="recetas">
                <img src="../Comida/enchiladas.jpg" alt="">
                <div class="recetas-letras">
                    <h1><span data-enchilada="1">ENCHILADAS<span></h1>
                    <p>
                    <span data-enchilada="2">
                        Las enchiladas salvadoreñas son un plato muy típico de la cocina de El Salvador.

                        Algunos pensarán en las enchiladas mexicanas, que son tortillas
                        rellenas bañadas en salsa. Pero las enchiladas salvadoreñas se parecen
                        más a una tostada. Tradicionalmente, la tortilla se hace con masa de maíz
                        mezclada con achiote, lo que les da el característico color naranja, pero no son
                        picantes ni se usan chiles en la preparación. En esta receta, usamos tortillas de maíz regulares.
                        <span>
                    </p>
                </div>
            </div>
            <div class="linea">
                <hr>
            </div>
            <div class="ingredientes">
                <div class="ingredientes2">
                    <h1><span data-enchilada="3">Ingredientes:<span></h1>
                    <p>
                    <ul type="square">
                        <li><span data-enchilada="4"> 2 tazas de harina de maíz, para la masa.<span></li>
                        <li><span data-enchilada="5"> 1 cucharada de achiote, para la masa.<span></li>
                        <li><span data-enchilada="6"> suficiente de sal, para la masa.<span></li>
                        <li><span data-enchilada="7"> 2 1/2 tazas de consomé de pollo, para la masa.<span></li>
                        <li><span data-enchilada="8"> 1/2 tazas de agua, para la masa.<span></li>
                        <li><span data-enchilada="9"> 2 cucharadas de mantequilla, para el pollo.<span></li>
                        <li><span data-enchilada="10"> 1 cucharada de ajo, finamente picado, para el pollo.<span></li>
                        <li><span data-enchilada="11"> 1 1/2 tazas de jitomate, en cubos pequeños, para el pollo.<span></li>
                        <li><span data-enchilada="12"> 1 1/2 tazas de pimiento verde, en cubos pequeños, para el pollo.<span></li>
                        <li><span data-enchilada="13"> 1 taza de cebolla morada, finamente picada, para el pollo.<span></li>
                        <li><span data-enchilada="14"> 2 tazas de pollo, cocido y desmenuzado.<span></li>
                        <li><span data-enchilada="15"> 2 cucharadas de salsa inglesa, para el pollo.<span></li>
                        <li><span data-enchilada="16"> 1 cucharada de sazonador de pollo, para el pollo.<span></li>
                        <li><span data-enchilada="17"> suficiente de aceite, para freír las enchiladas.<span></li>
                        <li><span data-enchilada="18"> 2 tazas de frijoles refritos.<span></li>
                        <li><span data-enchilada="19"> 2 tazas de lechuga romana, en tiras delgadas.<span></li>
                        <li><span data-enchilada="20"> 2 jitomates, en rebanadas.<span></li>
                        <li><span data-enchilada="21"> 1 pepino, pelado y en rebanadas.<span></li>
                        <li><span data-enchilada="22"> 2 tazas de huevo, cocido y en rebanadas.<span></li>
                        <li><span data-enchilada="23"> 1 taza de queso fresco, rallado.<span></li>
                        <li><span data-enchilada="24"> suficiente de salsa roja.<span></li>

                    </ul>
                    </p>
                </div>
                <div class="ingredientes-pasos">
                    <h1><span data-enchilada="25">Preparación:<span></h1>
                    <ol>
                        <li><span data-enchilada="26">Para la masa: Mezcla la harina, el achiote, la sal y el consomé en un bowl, después vierte el
                            agua poco a poco hasta obtener una masa homogénea, sin grumos y fácil de manejar. Si llegas a sentir que
                            la masa para enchiladas está muy seca, agrega un poco más de caldo de pollo. Reserva.<span></li><br>

                        <li><span data-enchilada="27">Para el relleno: Agrega la mantequilla en un sartén, cuando esté derretida añade la cebolla,
                            el ajo, el jitomate y el pimiento. Cocina por 5 minutos. Agrega el pollo, el curry, la salsa
                            inglesa y el sazonador. Mezcla y cocina por 10 minutos. Reserva.<span></li><br>

                        <li><span data-enchilada="28">En una olla calienta el aceite a fuego medio. Con ayuda de tus manos forma una bolita de masa
                            y aplasta, formando una tortillita no tan delgada, un poco gruesa y de 5 cm de diámetro. Agrega
                            al aceite y fríe por 8 minutos o hasta que estén doradas. Coloca en un plato extendido con papel
                            absorbente y reserva.<span></li><br>

                        <li><span data-enchilada="29">Para el montaje de las enchiladas salvadoreñas: Coloca una enchilada en un plato extendido
                            y cubre con frijoles, posteriormente el pollo, lechuga, jitomate rebanado, pepino, huevo
                            cocido y el queso fresco rallado. Acompaña con agua de sabor y salsa roja.<span></li>
                    </ol>
                </div>
            </div>
        </section>
        <!--::::Pie de Pagina::::::-->
        <footer>
            <div class="contar">
                <h3 class="log">Los Tipiquisimos</h3>
                <p>&copy;<span data-enchilada="30"> Los Tipiquisimos 2022-Derechos reservados<span></p>
            </div>
            <div class="container3">
                <a href="https://www.facebook.com/Los-Tipiquisimos-110215061699961/?ref=page_internal"><img src="../Img/facebook.png" alt="" class="Photographs"></a><br>
                <a href="https://www.instagram.com/los_tipiquisimos.sv/"><img src="../Img/instagram.png" alt="" class="Photographs"></a><br>
                <a href="https://twitter.com/Tipiquisimos503"><img src="../Img/twitter.png" alt="" class="Photographs"></a><br>
            </div>
        </footer>
    </body>

</html>