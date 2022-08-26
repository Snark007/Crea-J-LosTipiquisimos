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
    <script defer src="../Js/translate_recetas-panpollo.js"></script>
    <title>Panes con pollo</title>
</head>

<body>
      <!--MENU-->
    <?php
    include "../Html/hader.php";
    ?>
    <!--BASE-->
    <section>
        <div class="recetas">
            <img src="../Comida/pan-pollo.jpg" alt="">
            <div class="recetas-letras">
                <h1><span data-panpollo="1">PANES CON POLLO</span></h1>
                <p>
                <span data-panpollo="2">
                    Muy ricos aperitivos de El Salvador que podemos degustar de forma tradicional en fiestas patrióticas o 
                    en las fiestas decembrinas. La alternativa ideal para conocer la gastronomía de la tierra centroamericana, 
                    que envuelve con su deliciosa salsa de pollo, sazón salvadoreña
                    </span>
                </p>
            </div>
        </div>
        <div class="linea">
            <hr>
        </div>
        <div class="ingredientes">
            <div class="ingredientes2">
                <h1><span data-panpollo="3">Ingredientes:</span></h1>
            <p>
                <ul type="square">
                    <li><span data-panpollo="4">30 jocotes</span></li>
                    <li><span data-panpollo="5"> 2 litros de agua</span></li>
                    <li><span data-panpollo="6"> 1 dulce de atado (panela) ó 1 lb de azúcar</span></li>
                    <li><span data-panpollo="7"> Canela al gusto</span></li>
                    <li><span data-panpollo="8"> 2/3 taza de ceniza</span></li>
               
                </ul>
            </p>
            </div>
            <div class="ingredientes-pasos">
                <h1><span data-panpollo="9">Preparación:</span></h1>
                <ol>
                    <li><span data-panpollo="10">Prepare una mezcla de agua para agregar la ceniza. Posteriormente hervirla. Cuando el agua rompa el hervor agregue los jocotes.</span></li><br>
    
                    <li><span data-panpollo="11">Una vez vea que los jocotes se han agrietado sáquelos del agua y quíteles la cáscara con la mano. Cuando los haya pelado corte en cruz sin quitar la semilla y resérvelos para próximo paso.</span></li><br>
        
                    <li><span data-panpollo="12">En otra olla ponga a hervir a fuego lento el agua con el dulce de atado y la canela. Agregue los jocotes ya pelados y déjelos cocinar durante una hora.</span></li><br>
        
                    <li><span data-panpollo="13">Revise si la miel ya está conservada. Sino déjela hasta conservar. La ceniza permite pelar mejor los jocotes, que éstos no pierdan su textura ni su tamaño.</span></li><br>
    
                    <li><span data-panpollo="14">Recomendación: Seleccionar jocotes de tipo ácido (en Semana Santa). También puede hacerse del tipo dulce de invierno (de junio hasta agosto). No se recomienda hacerlo del de corona (de agosto a septiembre).</span></li>
            </ol>        
            </div>
        </div>
    </section>
      <!--::::Pie de Pagina::::::-->
      <footer>
        <div class="contar">
            <h3 class="log">Los Tipiquisimos</h3>
            <p>&copy;<span data-panpollo="15"> Los Tipiquisimos 2022-Derechos reservados</span></p>
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