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
    <link rel="stylesheet" href="../Css/estructura.css">
    <link rel="icon" href="../Img/cocina.png">
    <link rel="stylesheet" href="../Css/translate.css">9
    <link rel="stylesheet" href="../Css/menuD.css">
    <script defer src="../Js/menu.js"></script>
    <script defer src="../Js/translate_recetas-yuca.js"></script>
    <title>Yuca frita</title>
</head>

<body>
     <!--MENU-->
    <?php
    include "../Html/hader.php";
    ?>
    <!--BASE-->
    <section>
        <div class="recetas">
            <img src="../Comida/yuca.jpg "">
            <div class="recetas-letras">
                <h1><span data-yuca="1">YUCA FRITA<span></h1>
                <p><span data-yuca="2">
                    En este artículo aprenderás a hacer yuca frita al estilo de una receta salvadoreña. Así que veamos antes un poco acerca de este delicioso alimento que nos cautiva a muchos cuando lo probamos.

                    <span>
                </p>
            </div>
        </div>
        <div class="linea">
            <hr>
        </div>
        <div class="ingredientes">
            <div class="ingredientes2">
                <h1><span data-yuca="3">Ingredientes:<span></h1>
                <p>
                <ul type="square">
                    <li><span data-yuca="4"> ½ lb de yuca<span></li><br>
            <li><span data-yuca="5">Sal al gusto<span></li><br>
            <li><span data-yuca="6">Aceite<span></li><br>
                </ul>
                </p>
            </div>
            <div class="ingredientes-pasos">
                <h1><span data-yuca="7">Preparación:<span></h1>
                <ol>
                    <li><span data-yuca="8">Si deseamos freír nuestras porciones de yuca, una vez que ya estén sancochadas, las colocamos en la sartén con suficiente aceite, asegúrese de cortar la yuca en trozos alargados, se pone a freír y damos un tiempo de 3 a 5 minutos.<span></li><br>
    
                    <li><span data-yuca="9">Por último, servimos nuestro plato caliente junto con chicharrones, curtido o salsa de tomate.<span></li><br>
        
                    <li><span data-yuca="10">Los ingredientes para acompañar este plato quedan a su gusto.<span></li><br>
    
                    <li><span data-yuca="11">Listo. Nos disponemos a degustar.<span></li>
    
                </ol>
            </div>
        </div>
    </section>
    <!--::::Pie de Pagina::::::-->
    <footer>
        <div class="contar">
            <h3 class="log">Los Tipiquisimos</h3>
            <p>&copy; <span data-yuca="12">Los Tipiquisimos 2022-Derechos reservados<span></p>
        </div>
        <div class="container3">
            <a href="https://www.facebook.com/Los-Tipiquisimos-110215061699961/?ref=page_internal"><img src="../Img/facebook.png" alt="" class="Photographs"></a><br>
            <a href="https://www.instagram.com/los_tipiquisimos.sv/"><img src="../Img/instagram.png" alt="" class="Photographs"></a><br>
            <a href="https://twitter.com/Tipiquisimos503"><img src="../Img/twitter.png" alt="" class="Photographs"></a><br>
        </div>
    </footer>
</body>

</html>