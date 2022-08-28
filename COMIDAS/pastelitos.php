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
    <script defer src="../Js/translate_recetas-pastelitos.js"></script>
    <title>Pastelitos</title>
</head>

<body>
       <!--MENU-->
    <?php
    include "../Html/hader.php";
    ?>
    <!--BASE-->
    <section>
        <div class="recetas">
            <img src="../Comida/pastelitos.jpg" alt="">
            <div class="recetas-letras">
                <h1><span data-pastelitos="1">PASTELITOS<span></h1>
                <p>
                <span data-pastelitos="2">  
Los pastelitos salvadoreños, también llamados empanadas salvadoreñas, son un tipo de empanadas rellenas, fritas, suculentas y crujientes que se han convertido en una de las comidas rápidas más populares y simples del país.
<span>
                </p>
            </div>
        </div>
        <div class="linea">
            <hr>
        </div>
        <div class="ingredientes">
            <div class="ingredientes2">
                <h1><span data-pastelitos="3">Ingredientes:<span></h1>
                <p>
                <ul type="square">
                    <li><span data-pastelitos="4">½ masa de maíz molido<span></li>
                    <li><span data-pastelitos="5">Sal al gusto<span></li>
                    <li><span data-pastelitos="6"> Achiote<span></li>
                    <li><span data-pastelitos="7">Consomé de pollo<span></li>
                    <li><span data-pastelitos="8"> Carne de res<span></li>
                    <li><span data-pastelitos="9"> ½ cucharada de sal<span></li>
                    <li><span data-pastelitos="10"> Azúcar al gusto<span></li>

                </ul>
                </p>
            </div>
            <div class="ingredientes-pasos">
                <h1><span data-pastelitos="11">Preparación:<span></h1>
                <ol>
                    <li><span data-pastelitos="12">Primero se prepara la masa agregando el consomé de pollo, la condimentamos con achiote para darle el color naranja y amasamos bien hasta tener lista la masa.<span></li><br>

                    <li><span data-pastelitos="13">Extiende un poco la masa para darle forma de tortilla, y luego se coloca los ingredientes en el centro, en este caso, los más consumidos son: la carne molida.<span></li><br>

                    <li><span data-pastelitos="14">Elija a su gusto. Al colocar el relleno a la masa, la cubrimos con la otra parte de la masa, hasta darle una forma de media luna.<span></li><br>

                    <li><span data-pastelitos="15">Preparamos la sartén con abundante aceite y echamos uno a uno los pastelitos que hemos preparado. Se debe estar atento para evitar se quemen.<span></li><br>

                    <li><span data-pastelitos="16">Basta con dejarlos entre 3 a 5 minutos. Transcurrido ese tiempo, y ver que están doraditos, sacamos para que escurran.<span></li><br>
                    <li><span data-pastelitos="17">Listo. Nos disponemos a degustar.<span></li><br>
                </ol>
            </div>
        </div>
    </section>
    <!--::::Pie de Pagina::::::-->
    <footer>
        <div class="contar">
            <h3 class="log">Los Tipiquisimos</h3>
            <p>&copy;<span data-pastelitos="20"> Los Tipiquisimos 2022-Derechos reservados<span></p>
        </div>
        <div class="container3">
            <a href="https://www.facebook.com/Los-Tipiquisimos-110215061699961/?ref=page_internal"><img src="../Img/facebook.png" alt="" class="Photographs"></a><br>
            <a href="https://www.instagram.com/los_tipiquisimos.sv/"><img src="../Img/instagram.png" alt="" class="Photographs"></a><br>
            <a href="https://twitter.com/Tipiquisimos503"><img src="../Img/twitter.png" alt="" class="Photographs"></a><br>
        </div>
    </footer>
</body>

</html>