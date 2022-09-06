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
    <script defer src="../Js/translate_recetas-atolelote.js"></script>
    <title>Atol de elote</title>
</head>


<body>
     <!--MENU-->
    <?php
    include "../php/hader.php";
    ?>
    <!--BASE-->
    <section>
        <div class="recetas">
            <img src="../Comida/Atol-de-maiz.jpg" alt="">
            <div class="recetas-letras">
                <h1><span data-elote="1">ATOL DE ELOTE<span></h1>
                <p><span data-elote="2">
                    ¡Esta delicia es todo un orgullo para el país! El famoso atol de elote que se prepara de manera artesanal 
                    en El Salvador ha marcado la historia local. No cabe duda se trata de una de las bebidas más populares de El Salvado gracias a su historia.
                     También es una de las bebidas más representativas de la gastronomía Salvadoreña. Te contamos sobre este esta delicia a continuación.
                     <span>
                </p>
            </div>
        </div>
        <div class="linea">
            <hr>
        </div>
        <div class="ingredientes">
            <div class="ingredientes2">
                <h1><span data-elote="3">Ingredientes:<span></h1>
            <p>
                <ul type="square">
                    <li><span data-elote="4"> 1 ¾ taza de maíz/elote dulce recién desgranado<span></li>
                    <li><span data-elote="5"> ¾ taza de agua<span></li>
                    <li><span data-elote="6"> ½ taza de azúcar blanca<span></li>
                    <li><span data-elote="7"> 2 tazas de Leche Evaporada <span></li>
                    <li><span data-elote="8"> 2 rajas de canela<span></li>
               
                </ul>
            </p>
            </div>
            <div class="ingredientes-pasos">
                <h1><span data-elote="9">Preparación:<span></h1>
                <ol>
                    <li><span data-elote="10">Licuar los granos de maíz/elote con el agua hasta formar una mezcla consistente. Agregar más agua de ser necesario. Pasar la mezcla por un colador fino y reservar el líquido.<span></li><br>
    
                    <li><span data-elote="11">Verter la mezcla colada en una cacerola a fuego bajo. Agregar el azúcar, la Leche Evaporada la canela y cocinar por 10 minutos fuego bajo revolviendo constantemente hasta que espese.<span></li><br>
        
                    <li><span data-elote="12">Retirar las rajas de canela y servir en jarra.<span></li><br>
        
                    <li><span data-elote="13">Servir tibio o refrigerar por 4 horas para disfrutar frio.<span></li>
            </ol>        
            </div>
        </div>
    </section>
      <!--::::Pie de Pagina::::::-->
      <footer>
        <div class="contar">
            <h3 class="log">Los Tipiquisimos</h3>
            <p>&copy; <span data-elote="14">Los Tipiquisimos 2022-Derechos reservados<span></p>
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