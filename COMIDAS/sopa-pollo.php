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
    <script defer src="../Js/translate.js"></script>
    <title>Sopa de gallina</title>
</head>

<body>
     <!--MENU-->
    <?php
    include "../Html/hader.php";
    ?>
    <!--BASE-->
    <section>
        <div class="recetas">
            <img src="../Comida/sopa de gallina.jpg" alt="">
            <div class="recetas-letras">
                <h1>SOPA DE GALLINA</h1>
                <p>
                    El caldo de pollo es una sopa.​ A menudo se sirve con trozos de carne o con granos de arroz o cebada, pasta, zanahoria, papa amarilla, apio, cebolla blanca, etc.​ Se considera también un remedio casero curativo contra los enfriamientos y los catarros y la rinitis.
                </p>
            </div>
        </div>
        <div class="linea">
            <hr>
        </div>
        <div class="ingredientes">
            <div class="ingredientes2">
                <h1>Ingredientes:</h1>
                <p>
                <ul type="square">
                    <li> 2 Gallinas indias </li>
            <li> 2 Cebollas </li>
            <li> 3 Zanahorias </li>
            <li> 2 Güisquiles </li>
            <li> 6 Pipianes </li>
            <li> 2 Tomates  </li>
            <li> 1 Cabeza de ajo </li>
            <li> Media Libra de ejotes</li>
            <li> 10 Hojas de albahaca de gallina </li>
            <li>sal </li>
            <li>Un cuarto  de onza de pimienta blanca </li>
            <li> 1 Taza de arroz</li>

                </ul>
                </p>
            </div>
            <div class="ingredientes-pasos">
                <h1>Preparación:</h1>
                <ol>
                    <li>
                        Cortar la gallina en porciones (las que necesite) y lavarla en agua fría hasta que quede limpia. 
                        </li><br>
        
                    <li>Cocer las porciones en agua con sazonador de pollo junto con las cebollas y el ajo. Cortar las verduras en trozos y agregarlas cuando la carne esté blanda junto con el arroz lavado, es decir, más o menos una hora o hasta que la gallina esté blanda.</li><br>
        
                    <li>Después, para darle olor al caldo con la albahaca de gallina y la hierbabuena, al mismo tiempo sazonarla con sal y pimienta al gusto. 
                        </li><br>
        
                    <li>También se suele sacar las piezas grandes de la gallina y se ponen a asar a las brazas para acompañar la sopita. </li><br>
    
                    <li>La gallina asada se sirve aparte con arroz y ensalada, y por supuesto, tortillas recién hechas o tostadas. Una verdadera delicia</li><br>

                </ol>
            </div>
        </div>
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