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
    <link rel="stylesheet" href="../Css/translate.css">
    <link rel="stylesheet" href="../Css/menuD.css">
    <script defer src="../Js/menu.js"></script>
    <script defer src="../Js/translate_recetas-tostado.js"></script>
    <title>Atol de maiz tostado</title>
</head>

<body>
    <!--MENU-->
    <?php
    include "../Html/hader.php";
    ?>
    <!--BASE-->
    <section>
        <div class="recetas">
            <img src="../Comida/tostado.png" alt="">
            <div class="recetas-letras">
                <h1><span data-tostado="1">ATOL DE MAÍZ TOSTADO<span></h1>
                <p><span data-tostado="2">
                    El Atol de Maíz Tostado es una receta tradicional y folklórica de el salvador, que involucra la 
                    preparación de un manjar o bebida con la cual se alimentaban a los recién nacidos en épocas pre-colombinas, 
                    ya que cuenta con una gran carga de nutrientes y proteínas suficientes que contribuyen a la alimentación de manera específica.
                    <span>
                </p>
            </div>
        </div>
        <div class="linea">
            <hr>
        </div>
        <div class="ingredientes">
            <div class="ingredientes2">
                <h1><span data-tostado="3">Ingredientes:<span></h1>
            <p>
                <ul type="square">
                    <li><span data-tostado="4"> 2 tazas de maíz<span></li>
                    <li><span data-tostado="5"> 2 vasos de leche<span></li>
                    <li><span data-tostado="6"> Canela en raja<span></li>
                    <li><span data-tostado="7"> 8 granos de pimienta gorda<span></li>
                    <li><span data-tostado="8"> ½ cucharadita de sal<span></li>
                    <li><span data-tostado="9"> Azúcar al gusto<span></li>
               
                </ul>
            </p>
            </div>
            <div class="ingredientes-pasos">
                <h1><span data-tostado="10">Preparación:<span></h1>
                <ol>
                   <li><span data-tostado="11">Tuesta el maíz con una parte de la canela en un comal, plancha o cacerola. Después lo llevas al molino.<span></li><br>
    
                <li><span data-tostado="12">Disuelve la harina de maíz en 10 tazas de agua y cuela en una manta de colar.<span></li><br>
    
                <li><span data-tostado="13">Luego lo pones al fuego en una olla, agrega el resto de la canela, la pimienta, sal y azúcar revuelve y deja que hierva, revuelve constantemente.<span></li><br>
    
                <li><span data-tostado="14">Cuando el atol este hirviendo agrega los dos vasos de leche. Espera que suelte hervor y retira del fuego.<span></li><br>

                <li><span data-tostado="15">Cuando este colando el maíz, procura no echar demasiada agua, ya que podría quedar muy líquido.<span></li>
            </ol>        
            </div>
        </div>
    </section>
      <!--::::Pie de Pagina::::::-->
      <footer>
        <div class="contar">
            <h3 class="log">Los Tipiquisimos</h3>
            <p>&copy;<span data-tostado="16"> Los Tipiquisimos 2022-Derechos reservados<span></p>
        </div>
        <div class="container3">
            <a href="https://www.facebook.com/Los-Tipiquisimos-110215061699961/?ref=page_internal"><img
                    src="../Img/facebook.png" alt="" class="Photographs"></a><br>
            <a href="https://www.instagram.com/los_tipiquisimos.sv/"><img src="../Img/instagram.png" alt=""
                    class="Photographs"></a><br>
            <a href="https://twitter.com/Tipiquisimos503"><img src="../Img/twitter.png" alt=""
                    class="Photographs"></a><br>
        </div>
    </footer>
</body>
</html>