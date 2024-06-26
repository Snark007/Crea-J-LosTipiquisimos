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
    <script defer src="../Js/translate_recetas-piñuela.js"></script>
    <title>Atol de Piñeula</title>
</head>

<body>
     <!--MENU-->
    <?php
    include "../php/hader.php";
    ?>
    <!--BASE-->
    <section>
        <div class="recetas">
            <img src="../Comida/atol_piñuela.png" alt="">
            <div class="recetas-letras">
                <h1><span data-piñuela="1">ATOL DE PIÑUELA<span></h1>
                <p><span data-piñuela="2">
                    El sabroso y tradicional Atol de Piñuela, es otra de las ricas variedades de atoles que tenemos en El Salvador. Y ahora, usted lo puede hacer en casa utilizando esta receta.
                    Fuente: Recetas Salvadoreñas
                    <span>
                </p>
            </div>
        </div>
        <div class="linea">
            <hr>
        </div>
        <div class="ingredientes">
            <div class="ingredientes2">
                <h1><span data-piñuela="3">Ingredientes:<span></h1>
                <p>
                <ul type="square">
                    <li><span data-piñuela="4"> 1 piñuela<span></li>
                    <li><span data-piñuela="5"> 2 dulces de atado<span></li>
                    <li><span data-piñuela="6"> 3 tazas de harina de arroz<span></li>
                    <li><span data-piñuela="7"> Canela en rajas a tu gusto<span> </li>
                    <li><span data-piñuela="8"> 8 granos de pimienta gorda<span></li>
                    <li><span data-piñuela="9"> ½ cucharada de sal<span></li>
                    <li><span data-piñuela="10"> Azúcar al gusto<span></li>

                </ul>
                </p>
            </div>
            <div class="ingredientes-pasos">
                <h1><span data-piñuela="11">Preparación:<span></h1>
                <ol>
                    <li><span data-piñuela="12">Corta todas las piñitas del gajo, quilates la puntita con un cuchillo y luego las pones a hervir en agua por diez minutos. Retirarás del fuego, déjalas enfriar y luego a cada una le
                        extraes el contenido del cual tienes que separar las semillas. El siguiente paso es volver a introducir el contenido en cada una de las piñitas.<span></li><br>

                    <li><span data-piñuela="13">Ahora en una olla con dos tazas de agua derrite el atado con la canela luego integras las piñitas y cocina a fuego lento para que se conserven muy bien. Este proceso lleva 45 minutos aproximadamente.<span></li><br>

                    <li><span data-piñuela="14">Mientras tanto, en otro depósito disuelve la harina de arroz con 10 tazas de agua y cuela en una servilleta de tela.<span></li><br>

                    <li><span data-piñuela="15">Cuando las piñitas estén bien conservadas agrega la preparación anterior. Continua la cocción e incorpora la pimienta gorda, cuidando de remover para que no se pegue. Verifica el sabor de
                        las piñas y si hace falta agrega una porción más de dulce de panela cuando este se derrita. Cuando hierva, retira del fuego.<span></li><br>

                    <li><span data-piñuela="16">Y ya esta listo disfruta de tu sabroso atol<span></li><br>
                </ol>
            </div>
        </div>
    </section>
    <!--::::Pie de Pagina::::::-->
    <footer>
        <div class="contar">
            <h3 class="log">Los Tipiquisimos</h3>
            <p>&copy; <span data-piñuela="17">Los Tipiquisimos 2022-Derechos reservados<span></p>
        </div>
        <div class="container3">
            <a href="https://www.facebook.com/Los-Tipiquisimos-110215061699961/?ref=page_internal"><img src="../Img/facebook.png" alt="" class="Photographs"></a><br>
            <a href="https://www.instagram.com/los_tipiquisimos.sv/"><img src="../Img/instagram.png" alt="" class="Photographs"></a><br>
            <a href="https://twitter.com/Tipiquisimos503"><img src="../Img/twitter.png" alt="" class="Photographs"></a><br>
        </div>
    </footer>
</body>

</html>